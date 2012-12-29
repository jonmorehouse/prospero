<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Base_filter {

	var $CI;

	function __construct() {

		$this->CI =& get_instance();//get the codeigniter instance

		// load proper models for this element
		$models = array('general', 'property/filter', 'property/geographical_information', 'property/search');
		$this->CI->load->model($models);
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

		// sample = array (

		// 	0 => array ("id" => 0, "occurrences" => 5);			
		// );

		$elements = array();

		foreach ($raw_list as $id) {

			$found = false;

			foreach ($list as $element) {

				if ($element['id'] === $id) {

					$element['occurrences'] += 1;
					$found = true;//was found
					break;//end the for loop
				}
			}

			if (!$found)
				array_push($elements, array("id" => $id, "occurrences" => 1));
		} 

	}

	protected function sort($list) {



		return true;

	}



}