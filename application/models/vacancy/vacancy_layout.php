<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Vacancy_layout extends MY_Model {

	function __construct() {

		// initialize all of our parent layouts etc
		parent::__construct();

		// models
		$models = array("vacancy/vacancy");

		// load the models we have declared as dependencies
		// $this->load->model($models);

	}

	// rework this mini api tomorrow!
	public function add_layout($data) {

		// make sure that the vacancy_id exists
		$vacancy_id = $this->vacancy->get_vacancy_id($data['property_id']);

		// if the vacancy does not currently exist, then create it with the data given
		if (!$vacancy_id) {

			// create the vacancy
			$this->vacancy->add_vacancy($data);
			// now lets get our proper vacancy element
			$vacancy_id = $this->vacancy->get_vacancy_id($data['property_id']);
		}

		// insert the actual vacancy data into our database
		$insert_data = array(

			// used as a primary_key in vacancies for matching etc
			"vacancy_id" => $vacancy_id,
			// now add the layout that we have chosen
			"layout" => $data['layout'],
			// 
			"quantity" => array_key_exists("layout",$data) ? ($data['layout']) : (1),
		);

		// 
	}


}