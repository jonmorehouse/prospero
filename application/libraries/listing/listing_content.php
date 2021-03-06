<?php
/*
	This class is responsible for generating all of the content to be displayed for the property pages 
	This class generates the content, header etc for each object
*/
class Listing_content extends Listing_base{

	// get categories from category_type, type, and general!
	function __construct($parameters) {

		parent::__construct($parameters);
		
		// load our filter model to help with various elements / data etc
		$this->CI->load->model("property/filter");

		// grab the banned categories etc
		$this->banned_categories = $this->CI->general->non_global_categories();//return the non-global categories that should not be in the main list

		$this->init();//initialize the list!
	}

	// public content
	public function elements() {

		$replacements = array(
		
			"weekend_manager_first_name" => false,
			"weekend_manager_last_name" => false,
			"manager_first_name" => false,
			"manager_last_name" => false,
		);
		
		// loop through and remove the elements etc
		foreach ($this->elements[0]["elements"] as $key => $value) {

			// grab the array index from the elements
			$index = $this->CI->format->comparison_format($value["title"]);

			// check if this index needs replacement
			if (array_key_exists($index, $replacements)) {

				$replacements[$index] = array(
					
					"index" => $key,
					"value" => $value["value"],
				);
			}
		}

		// now remove the indexes that are not needed
		foreach($replacements as $index => $value) {

			// pass if this is element is false
			if ($value == false) 
				continue;


			// now remove the actual index in the previous element
			unset($this->elements[0]["elements"][$value["index"]]);
		}

		// now lets try to generate the weekend managers / managers
		foreach (array("manager", "weekend_manager") as $key) {

			$name = "";

			// switch to see if these elements exist
			if ($replacements["{$key}_first_name"] !== false  && $replacements["{$key}_last_name"] !== false)

				$name = $replacements["{$key}_first_name"]["value"] . " " . $replacements["{$key}_last_name"]["value"];

			// switch to see if these elements exist
			else if ($replacements["{$key}_first_name"] !== false) {

				$name = $replacements["{$key}_first_name"]["value"]; 
			}

			else if ($replacements["{$key}_last_name"] !== false) {

				$name = $replacements["{$key}_last_name"]["value"];

			}

			else 
				continue;
			
			// now lets append this element
			$append_array = array(
				
				"title" => $this->CI->format->word_format($key), 
				"value" => $name,
			);

			// now append the array that was created
			array_push($this->elements[0]["elements"], $append_array);
		}

		return $this->elements;
	}	

	// grab surrounding links etc
	// if an array of ids is passed in, then we should just use those
	public function surrounding_links($results = false) {

		// grab the ids from our api etc
		$ids = $this->CI->filter->get_surrounding($this->property_id, $results);

		// initialize each of the links we need
		$links = array();

		// loop through both ids and then properly determine the thumbnail information for each
		foreach ($ids as $key => $property_id) {

			$links[$key] = array(

				"label" => $this->CI->format->word_format($key),
				"title" => $this->CI->general->get_category($property_id, "name"),
				"link" => $this->CI->general->listing_link($property_id)
			);
		}

		// now return the links that we want etc
		return $links;
	}


	public function content() {

		$content = array(

				"name" => $this->CI->general->get_category($this->property_id, "name"),
				"header" => $this->CI->general->get_category_title("property_content"),
				"content" => $this->CI->general->get_unformatted_category($this->property_id, "property_content"),
			);

		return $content;
	}

	public function header() {

		return $this->CI->general->get_category($this->property_id, "name");
	}

	// initialize the entire element
	private function init() {

		$type_category = $this->CI->general->get_category($this->property_id, "type_category");
		$type = $this->CI->general->get_category($this->property_id, "type");

		$this->elements = array();//holds all elements and types!

		foreach (array("general", $type, $type_category, "other") as $category_type) {

			// grab the category type content and then add the elemnets to the list if there are more than one element
			$_category_type = $this->get_category_type($category_type);
			if (count($_category_type['elements']) > 0)
				array_push($this->elements, $this->get_category_type($category_type));//
		}		
	}

	// return an entire category_type
	private function get_category_type($category_type) {//used for individually setting the general, tyep and category_type array of header and then element => value mappings

		$categories = $this->CI->general->get_category_type_categories($category_type);
		$header = $this->CI->general->get_category_type_header($category_type);

		$elements = $this->helper($categories, $category_type);
		return array("header" => $header, "elements" => $elements);
		
	}

	// generate the list of elements. Pass category type to help clean up in case we need to grab a title
	private function helper($category_list, $category_type) {

		$content = array();

		foreach ($category_list as $category) {

			if (in_array($category, $this->banned_categories)) continue;//check if the elements should be in the list of master elements

			$value = $this->CI->general->get_category($this->property_id, $category);//generate the value
			$title = $this->CI->general->get_category_title($category, $category_type);//maps the category title to clean it up

			if (!$value) continue;//only add in legitimate values

			array_push($content, array("title" => $title, "value" => $value));
		}

		return $content;
	}
};

