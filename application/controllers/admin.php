<?php

// create a base login element etc
class Admin extends Tool_Controller {

	// 
	function __construct() {

		// initialize page id
		$this->id = "admin";

		// call the parent construct function
		parent::__construct();
	}

	//   
	function index() {

		// show the actual login page here!
		$this->base();

		// now load our basic view for this page
		$this->load->view('admin/login');
	}

}
