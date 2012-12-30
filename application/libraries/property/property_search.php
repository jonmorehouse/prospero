<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

// this property search class is an api for the property/search model
// general search expects any kind of input and will return the proper results
//listing verification expects you to find only one result otherwise returns false -- it can take a property id or an 
class Property_search extends Base_filter {
	
	function __construct() {

		parent::__construct();//initialize parent!
		$this->CI->load->library("utilities/data_helper");
	}
		
	// this is for the listing page to verify that you are attempting to grab a correct listing when you type in a number! or page!
	public function listing_verification($input){
			
		// check if input is int already ... probably not but makes our life easier...
		if (gettype($input) === "integer") {
			if ($this->CI->general->live($input))
				return $input;

		}

		// check that the string is a pure number
		if ($this->CI->data_helper->pure_number($input)) {

			// if so do the conversion and check live
			$int = $this->CI->data_helper->input_to_integer($input);
			if ($this->CI->general->live($int))
				return $int;
		}

		// return matches!
		$matches = $this->CI->search->listing_verification($input);

		if (count($matches) === 1) return $matches[0];//return the first match!

		return false;
	}

	// return a sorted results array of property ids based upon input query
	public function general_search($input) {
			

		// returns a list of sorted thumbnails
		$properties = $this->CI->search->general_properties($input);

		// generate sort elements
		// now sort and return the values
		return parent::sort(parent::sort_prepare($properties));//return the parent prop

	}	



		
}