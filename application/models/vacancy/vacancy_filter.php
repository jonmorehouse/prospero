<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Vacancy_filter extends MY_Model {

	function __construct() {

		// call basic custom model 
		parent::__construct();

		// now load our generic vacancy model etc...
		$this->load->model("vacancy/vacancy");
	}

	// create a basic vacancies function etc
	public function get_vacancies($filter = "all") {

		// grab the order of vacancies etc that we want to grab here!
		// do some sort of query here to determin the type of vacancies we need

		// lets grab the various vacancy_ids etc for this particular element
		$vacancy_ids = $this->get_vacancy_ids($filter);

		// now initialize an array to hold of the vacancies that we have as objects ...
		$vacancies = array();

		// grab the vacancies that we need and then we can store them as a master list of objects
		foreach ($vacancy_ids as $vacancy_id)
			// grab all of the vacancies and push them into our array of objects
			array_push($vacancies, $this->vacancy->get_vacancy($vacancy_id));

		// now return the list of vacancies that we have ...
		return $vacancies;
	}

	private function get_vacancy_ids($filter) {

		// initialize an array to store all current vacancies
		$vacancy_ids = array();

		// if filter is for all elements then grab all of the vacancies currently available
		if ($filter === "all")
			$query = $this->db->select("vacancy_id")->get("vacancies");

		// otherwise lets do a join against the property_type element to grab the residential properties
		else if ($filter === "residential")
			// join the elements based on 
			$query = $this->db->select("vacancy_id")->where(array("type_category" => "residential"))->join("property_type", "vacancies.property_id = property_type.property_id")->get("vacancies");	

		// otherwise grab the retail_office_industrial filters by joining on the type_category
		else if ($filter === "retail_office_industrial")
			// join agains the office industrial etc
			$query = $this->db->select("vacancy_id")->where(array("type_category" => "retail"))->or_where(array("type_category" => "office_industrial"))->join("property_type", "vacancies.property_id = property_type.property_id")->get("vacancies");	

		// grab the variable dump element
		foreach ($query->result() as $row)		
			// push each of the vacancy ids into the vacancy id element etc
			array_push($vacancy_ids, $row->vacancy_id);

		// now return the vacancy array that we have created etc
		return $vacancy_ids;
	}
}		
