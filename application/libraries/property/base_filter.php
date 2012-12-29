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

		$thumbnails = array();

		foreach ($properties as $property_id) {

			$thumbnail = array(

				"status" => $this->CI->thumbnail->get_status($property_id),
				"url" => $this->CI->thumbnail->get_url($property_id),
				"image" => $this->CI->thumbnail->get_image($property_id),
				"blurb" => $this->CI->thumbnail->get_blurb($property_id),
				"name" => $this->CI->thumbnail->get_name($property_id),
			);

			if ($thumbnail['status'])
				array_push($thumbnails, $thumbnail);
		}

		return $thumbnails;
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