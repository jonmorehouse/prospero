<?php

// initialize our basic page controller etc
class Test extends MY_Controller {

	function __construct() {

		$this->id = "test";
		parent::__construct();

		// initialize our basic vacnacies based on our filter class etc
		$this->load->model('vacancy/vacancy_filter');

		// initialize our vacancies element etc
		$this->load->model("vacancy/vacancy");
	}

	// basic vacancies test etc
	public function vacancies() {

		// vacancy elements etc
		$vacancies = $this->vacancy_filter->get_vacancies();
	}

	// initialize our basic vacancies page
	public function get_vacancy() {

		// grab our most basic vacancy from the vacancy class etc
		$vacancy = $this->vacancy->get_vacancy(1);

		// dump a basic vacancy etc
		var_dump($vacancy);
	}

	// initialize our add_vacancy test
	public function add_vacancy() {


		// grab the initialized data element
		$data = array(

			"date_available" => "Immediate",
			"property_id" => 5,
			"description" => "Immediately available!",
		);

		$this->vacancy->add_vacancy($data);
	}

	// test the before / after property filters etc
	public function navigation() {

		// load the property filter
		$this->load->model("property/filter");

		// now grab the previous / next	
		$links = $this->filter->get_surrounding(4);

		print_r($links);
	}

	public function navigation_links() {

		$libraries = array("listing/listing_base", "listing/listing_content");
		// load the property_content etc
		$this->load->library($libraries, array("property_id" => 4));

		// grab the surrounding links and then print them properly
		$surrounding_links = $this->listing_content->surrounding_links();

		// print both surrounding links
		print_r($surrounding_links);

	}

}

