<?php
/*
	PARENT CLASS FOR ALL LISTING PAGES
		-RESPONSIBLE FOR ALL LIBRARY LOADING ETC
	
	REPLACES PROPERTY_GET TO MAKE THINGS A LITTLE EASIER
*/

class Listing_base {
	
/******** VARIABLES **********/

	protected $property_id;
	protected $CI;
	
/********* CONSTRUCT/DESTRUCTORS **********/

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
		



};