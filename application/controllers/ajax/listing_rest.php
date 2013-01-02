<?php

class Listing_rest extends CI_Controller{
	
	public function __construct(){
		parent::__construct();

	}
	
	public function inquire() {

		echo json_encode(array("status" => true, "message" => "Thanks for submitting your message.", "final_message" => "Sorry, you have already inquired on this property."));

	}
}