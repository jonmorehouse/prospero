<?php

class Json_Controller extends CI_Controller {

	function __construct() {

		// construct our base CI_Controller
		parent::__construct();

		// load our proper pages etc
		$this->load->model(array("pages/elements", "pages/navigation"));

	}

	// valid_admin will return true / false if the 
	protected function invalid_admin() {

		// create a basic json api backend etc...
		$message = array("status" => False, "message" => "Admin does not have proper rights");		

		// destroy codeigniter session throughout
		$this->session->sess_destroy();

		// return our message as our api call
		echo json_encode($message);
	}	


}