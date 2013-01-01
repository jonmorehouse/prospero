<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


class Similar_properties extends Base_filter {

	function __construct() {

		parent::__construct();

		$this->max = $this->CI->general->config("max_similar_properties");
	}

	public function similar_properties($property_id) {

		// get raw properties from search model
		// run the sort
		//return the valid elements by checking against the max
		$raw_properties = $this->CI->search->similar_properties($property_id);

		$similar_properties = parent::sort(parent::sort_prepare($raw_properties));

		if (count($similar_properties) < $this->max) return $similar_properties;

		else return array_slice($similar_properties, 0, $this->max);//assumes that element zero is the most common on the list		

	}

}
