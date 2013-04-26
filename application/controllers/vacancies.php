<?php

class Vacancies extends Page_Controller {

	function __construct() {

		// initialize our global page id for this particular page
		$this->id = "vacancies";

		// construct our base controller
		parent::__construct();

		// initialize our further models for this page!
		$this->load->model(array("vacancy/vacancy_filter"));
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
		// grab all of the vacancies with this particular filter exif_tagname(index)c
		$this->vacancies = $this->vacancy_filter->get_vacancies($filter);
		$this->label = $this->elements->label("vacancy_$filter"); 

		// load our initial vacancies page
		// $this->load->view('vacancies/vacancies_base');
	}

}