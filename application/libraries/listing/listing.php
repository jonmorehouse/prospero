<?php
/*
	PARENT CLASS FOR ALL LISTING PAGES
		-RESPONSIBLE FOR ALL LIBRARY LOADING ETC
	
	REPLACES PROPERTY_GET TO MAKE THINGS A LITTLE EASIER
	
	
*/

class Listing{
	
	protected $property_id;
	protected $CI;
	
	public function __construct($parameters) {
		
		// VARIABLES
		$this->CI =& get_instance();
		$this->property_id = $parameters['property_id'];//will throw an error if property_id not given 
		
		// MODEL LOADING
		$models = array('general');
		$this->CI->load->model($models);
		
		// LIBRARY LOADING 
		
		$libraries = array('property/media', 'utilities/format');
		$this->CI->load->library($libraries);
		
			
	}
	
	protected function get($category) {
		
		$category_value = $this->CI->general->get_category($this->property_id, $category);
		
		$datatype = gettype($category_value);
		
		if($datatype === 'boolean' || $datatype === 'integer')
			return $category_value;
			
		else
			return $this->CI->format->word_format($category_value);
		
		return $category_value;
	}
};