<?php

class Vacancy_test extends CI_Controller {

	function __construct() {

		parent::__construct();

		$this->load->model(array('general', 'vacancy/vacancy'));

	}

	public function create() {

		$this->vacancy->create_vacancy(44);

	}

	public function save() {

		$vacancy_id = $this->vacancy->create_vacancy(55);
		$data = array(

			'vacancy_id' => $vacancy_id,
			'description'=> "TEMP DESCRIPTION!",
			'date_available' => "HELLO WORLD?",
			'property_id' => 55,
		);

		$this->vacancy->save_vacancy($data);
	}

}