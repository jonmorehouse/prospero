<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*THIS PROPERTY INFORMATION CLASS IS TO BE LOADED SO THAT EACH AND EVERY DATA MEMBER CAN BE CALLED FROM A MEMBER IN THIS CLASS*/
class Property_search extends Base_filter {
	
	function __construct() {

		parent::__construct();//initialize parent!

	}
		
	// this is for the listing page to verify that you are attempting to grab a correct listing when you type in a number! or page!
	public function listing_verification($input){
	
		return true;// for now


	}

	public function search($input) {
				
		$properties = $this->CI->search->general_properties($input);

		// generate sort elements
		// now sort and return the values
	}	




		
}