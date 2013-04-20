<?php

class Login extends MY_Controller {

	function __construct() {

		// initialize page id
		$this->id = "admin";

		// call the parent construct function
		parent::__construct();
	}

	function index() {

		// show the actual login page here!
		$this->base();

		// now load our basic view for this page
		$this->load->view('admin/login');
	}

	// json api -- this is useful for logging in to make sure that the user is validated etc!
	function create() {

		// this should try to create a session for a user etc

	}
	





}
