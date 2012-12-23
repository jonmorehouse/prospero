<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*
	The purpose of this library is to serve as the base class for all property filters
	
	This will include category_type specifier etc

	Filter Normalizer is primarily used for breaking down the kind of properties we are looking for!

	Property Filter is not a sorter algorithm. It is useful for breaking down categories by filters

*/

class Base_filter {

	$CI;//codeigniter parent

	function __construct() {

		$this->CI =& get_instance();//get the current codeigniter instance

		// INITIALIZE MODELS
		$models = array('general');
		$this->CI->load->model($models);

		// INITIALIZE LIBRARIES
		$libraries = array('utilities/format');
		$this->CI->load->library($libraries);

		$this->category_types = $this->options("category_type");
		$this->types = $this->options("type");

	}

	// get all category options for this
	private function options($input_type) {

		$options_table = "default_options";//will give all other optoins
		$input_types = array();

		foreach($this->CI->db->distinct()->select('category_value')->where(array('category' => $input_type))->get($table)->result() as $row)
			array_push($input_types, $row->$input_type);

		return $input_types;
	}


}


