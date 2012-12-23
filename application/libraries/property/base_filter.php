<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Base_filter {

	var $CI;

	public function __construct() {

		$this->CI =& get_instance();//get the codeigniter instance

		// load proper models for this element
		$models = array('general', 'property/filter', 'property/geographical_information');
		$this->CI->load->model($models);
	}

	// this will filter properties based on categories etc that are based upon default values that are specified in our 
	protected function property_filter($filter) {

		if ($filter === "all") return $this->CI->filter->get_all();//returns all properties

		if ($filter === "new") return $this->CI->filter->get_new();
		
		// need to figure out category based on value!
		$category = $this->CI->general->get_category_by_default_option($filter);
		
		if ($category) 
			$properties = $this->CI->filter->get_category($category, $filter);

		if ($category && $properties) return $properties;

		return $this->CI->filter->get_all();
	}
}