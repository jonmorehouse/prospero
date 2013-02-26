<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Vacancy extends CI_Model {

	function __construct() {

		parent::__construct();
		$this->load->model("general");
		$this->load->library("property/media");

	}


	// create a vacancy, will throw an error if the proper elements don't exist
	public function add_vacancy($data) {

		// will ensure that each of the vacancies are valid etc
		$insert = (

			"property_id" => $data['property_id'],//property id for the element
			"date_available" => $data["date_available"],//date available should be a string formatted date or a message similar to "Now available"
			"description" => $data["description"],//should be a string, provided by the element
		);

		$this->db->insert("vacancies", $insert);//insert the data into the data
	}

	// delete an individual vacancy from our database
	public function delete_vacancy($vacancy_id) {

		// this will see if the row exists and will then delete the vacancy etc 
		$this->db->where(array('vacancy_id' => $vacancy_id))->delete("vacancies");//delete the vacancy from the database

	}

	// grab an individual vacancy from the database
	public function get_vacancy($vacancy_id) {

		// grab an actual vacancy object from the database
		$this->db->where();	

		// 			
	}

	// get a list of vacancy ids from our database
	public function get_vacancies($category) {

		// need to do a join of vacancies table on the 
		
		

	}
}
	
