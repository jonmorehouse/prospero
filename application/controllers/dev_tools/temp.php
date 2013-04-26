<?php

class Temp extends MY_Controller {

	function __construct() {

		$this->id = "Temp";
		parent::__construct();
	}

	public function index() {

		$data = array(

			"label_id" => "retail_office_industrial_vacancies", 
			"label" => "Retail/Office/Industrial Vacancies"
		);

		$this->db->insert("labels", $data);
	}
}