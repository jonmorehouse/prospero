<?php

class Vacancies extends MY_Controller {

	function __construct() {

		// initialize our global page id for this particular page
		$this->id = "vacancies";

		// construct our base controller
		parent::__construct();

	}

	public function index() {

		// load our base controller function so that we can initialize a bunch of variables and data for the page view
		$this->base();

		// load in vacancies logic etc here
		// $


		// load our initial vacancies page
		$this->load->view('vacancies/vacancies_base');
	}

}