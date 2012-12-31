<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Listing_bumpbox extends Listing_base {

	function __construct($parameters) {

		parent::__construct($parameters);//call the parent element and initialize

	}

	public function content($bumpboxes) {

		foreach ($bumpboxes as $value) {

			echo $value;
		}
	}	

	private function generate_html() {

		// load in the proper views etc

	}

	private function set_similar_properties() {

		// 
		


	}

	private function set_inquire() {



	}

	private function set_pdf() {


	}

	private function set_listing_map() {


	}

}