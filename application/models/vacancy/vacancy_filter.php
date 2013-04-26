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

}		