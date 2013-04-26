<?php

class Vacancies extends MY_Controller {

	function __construct() {

		// initialize our global page id for this particular page
		$this->id = "vacancies";

		// construct our base controller
		parent::__construct();

	}

	// force all calls to the vacancies page to go through the index element
	function _remap() {

		$this->index();
	}

	public function index() {

		// load our base controller function so that we can initialize a bunch of variables and data for the page view
		$this->base();

		// initialize a filter variable for 
		$filter = ($this->uri->segment(2)) ? ($this->uri->segment(2)) : ("all");

		// load in vacancies logic etc here
		$this->vacancies = $this->

		// load our initial vacancies page
		// $this->load->view('vacancies/vacancies_base');
	}

}