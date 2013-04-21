<?php

class Login extends Json_Controller {

	function __construct() {

		// initialize our page id etc -- this can be used later on for validating with the session base with our proper adming rights etc
		$this->id = "login";

		// call our parent construct
		parent::__construct();

	}

	public function index() {

		echo "HELLO WORLD";

	}				

	public function delete() {

		// remove the user status session
		$this->user_status->logout();

		// redirect to the homepage
		redirect();
	}
}