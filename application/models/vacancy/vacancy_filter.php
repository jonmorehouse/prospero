<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Vacancy_filter extends MY_Model {

	function __construct() {

		parent::__construct();

	}

	// create a basic vacancies function etc
	public function get_vacancies($filter = "all") {

		// grab the order of vacancies etc that we want to grab here!
		// do some sort of query here to determin the type of vacancies we need

		// will return an array of vacancies etc from calling the get_vacancy page



	}

	private function get_vacancy_ids($filter) {

		// if filter is for all elements then grab all of the vacancies currently available
		if ($filter === "all")
			$query = $this->db->select("vacancy_id")->get("vacancies");

		// otherwise lets do a join against the property_type element to grab the residential properties
		else if ($filter === "residential")
			// join the elements based on 
			$query = $this->db->select("vacancy_id")->where(array("type_category" => "residential"))->join("property_type")->get("vacancies");	

		// otherwise grab the retail_office_industrial filters by joining on the type_category
		else if ($filter === "retail_office_industrial")
			// join agains the office industrial etc
			$query = $this->db->select("vacancy_id")->where(array("type_category" => "retail"))->or_where(array("type_category" => "office_industrial"))->join("property_type")->get("vacancies");	

		// grab the variable dump element
		var_dump($query);


		// now lets return some sort of array with all of the vacancy_ids	

	}
}		