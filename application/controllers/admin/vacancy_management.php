<?php

class Vacancy_management extends CI_Controller{
	
	function __construct() {

		parent::__construct();
		$this->id = 'vacancy_management';
		
		$this->load->library(array('utilities/header', 'utilities/dynamic_header', 'property/base_filter', 'property/map_api'), array("page_id" => "vacancy_management"));
		$this->load->library(array('general/top_bumpboxes', "homepage/homepage_bumpboxes"));

		$this->load->model(array("pages/elements", "pages/navigation"));


	}
	
	public function _remap($uri) {
		
		$this->category = ($this->uri->segment(2)) ? ($this->uri->segment(2)) : ("retail_office_industrial");//

		$this->index();
	}
	
	function index() {
		
		
		// load the base vacancy view
		$this->load->view('vacancy_management/vacancy_management_base');
	}

	// json api vacancy creation
	public function create() {

		// create a new vacancy!

	}

	// update a vacancy 
	public function update() {

		// update a single vacancy etc...

	}

	// remove a vacancy
	public function destroy() {

		// destroy an entire vacancy here

	}

	// grab a vacancy
	public function show() {

		// show an individual vacancy here

	}

}