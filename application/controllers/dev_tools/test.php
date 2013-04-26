<?php

// initialize our basic page controller etc
class Test extends MY_Controller {

	function __construct() {

		$this->id = "test";
		parent::__construct();

	}
	public function vacancies() {


		$this->load->model('vacancy/vacancy_filter');

	}

	public function add_vacancy() {

		// initialize our vacancies element etc
		$this->load->model("vacancy/vacancy");

		// grab the initialized data element
		$data = array(

			"date_available" => "Immediate",
			"property_id" => 5,
			"description" => "Immediately available!",
		);

		$this->vacancy->add_vacancy($data);
	}

}

