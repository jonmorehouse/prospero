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

		// insert the actual vacancy data into our database
		$insert_data = array(

			// used as a primary_key in vacancies for matching etc
			"vacancy_id" => $data['vacancy_id'],
			// now add the layout that we have chosen
			"layout" => $data['layout'],
			// 
			"quantity" => array_key_exists("layout",$data) ? ($data['layout']) : (1),
		);

		// now actually insert the proper data into our database
		$this->db->insert("vacancy_layouts", $insert_data);
	}

	// now create a function to return all relevant layouts for a particular element
	public function get_layouts($vacancy_id) {

		// cache this for closure use
		$_this = $this;

		// initialize a layout element
		$layouts = array();

		// create a simple layout mapper for use with the mapper
		$layout_mapper = function($row) use ($_this) {

			// create an object
			return array(

				// initialize quantity
				'quantity' => $row[ 'quantity' ],

				// initialize name
				'layout' => $row[ 'layout' ],
			);
		};

		// initialize our query for all layouts for a particular vacancy
		$query = $this->db->where(array('vacancy_id' => $vacancy_id))->get("vacancy_layouts");

		// return an array of the layouts that exist
		return array_map($layout_mapper, $query->result_array());
	}

}