<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Base_filter {

	var $CI;

	function __construct() {

		$this->CI =& get_instance();//get the codeigniter instance

		// load proper models for this element
		$models = array('general', 'property/filter', 'property/geographical_information', 'property/search', 'property/thumbnail');
		$this->CI->load->model($models);


	}

	public function get_thumbnails($properties) {

		// initialize an array to hold all of our thumbnail objects etc
		$thumbnails = array();

		// sort properties
		$properties = $this->abc_sort($properties);

		// loop through all of the properties and return an arry for them if they are currently live
		foreach ($properties as $property_id) {

			// grab the current thumbnail
			$thumbnail = $this->CI->thumbnail->general_thumbnail($property_id);

			// now check the status and add thumbnail object in if applicable
			if ($thumbnail['status'])
				array_push($thumbnails, $thumbnail);
		}

		// return all thumbnail objects to caller
		return $thumbnails;
	}

	// prepare a basic bubble sort so that we can ensure that each element is sorted properly based on name
	public function abc_sort($properties) {

		// initialize a generic boolean search variable etc
		$finished = false;

		// since the closure is an object itself, cannot use this etc in the function
		$_this = $this;


		// map each element to a proper name / title array!
		$get_name = function($property_id) use ($_this) {

			return array(
				"name" => $_this->CI->general->get_category($property_id, "name"),
				"property_id" => $property_id,
			);
		};

		// now grab the property_id from the element
		$get_id = function($property) {
			return $property['property_id'];
		};

		// map the array to names etc
		$names = array_map($get_name, $properties);  

		// cache the length of the array for speed
		$length = count($names);

		// loop through each element and ensure that all names etc are proper before sorting etc
		do {
			// reset the loop etc
			$finished = true;

			for ($i = 0; $i < $length - 1; $i++) {

				if ($names[$i]['name'] > $names[$i+1]['name']) {

					// cache the current element
					$temp = $names[$i];

					// move the right name left once
					$names[$i] = $names[$i+1];

					// now reset the right name to the original left one
					$names[$i+1] = $temp;

					// reset the loop -- we're not finished yet ...
					$finished = false;
				}//end if statement
			}//end foreach loop  
		} while (!$finished);

		// now we want to remap the elements etc to where we want them
		return array_map($get_id, $names);
	}
	

	// this will filter properties based on categories etc that are based upon default values that are specified in our 
	protected function property_filter($filter) {

		if ($filter === "all") return $this->CI->filter->get_all();//returns all properties

		if ($filter === "new") return $this->CI->filter->get_new();
		
		// need to figure out category based on value!
		$category = $this->CI->general->get_category_by_default_option($filter);
		
		// returns all the elements -- ie: will get the rent only properties from a segment!
		if ($category) 
			$properties = $this->CI->filter->get_category($category, $filter);

		if ($category && $properties) return $properties;

		return $this->CI->filter->get_all();
	}

	// this function breaks down a raw list with multiple versions of the same number to a map of the correct elements
	protected function sort_prepare($raw_list) {

		$elements = array();

		foreach ($raw_list as $id) {

			if (array_key_exists($id, $elements)) $elements[$id] += 1;

			else $elements[$id] = 1;
		}

		return $elements;
	}

	// modularized the sort like this to make it easier to upgrade in the future if I don't want to use the asort method
	protected function sort($list) {

		arsort($list);

		$properties = array();

		foreach ($list as $key => $value)
			array_push($properties, $key);//push the key into the properties


		return $properties;
	}



}