<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Listing_bumpbox extends Listing_base {

	parent __construct($parameters) {

		parent::__construct($parameters);//call the parent element and initialize

	}

	public function bumpbox_content($bumpboxes) {

		return $bumpboxes;//
	}

	// create a function for all of our different bumpboxes down here!

	//will then load views from the listing/ view category etc -- will return them as html to the controller calling

	// this is used to offset app logic for this from the calling controller


}