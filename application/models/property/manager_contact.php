<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Manager_contact extends CI_Model {

	function __construct() {

		parent::__construct();
		$models = array("general");
		$this->load->model($models);

	}

	public function get_manager($property_id) {

		return array(

			"first_name" => $this->general->get_category($property_id, "manager_first_name"),
			"last_name" => $this->general->get_category($property_id, "manager_last_name"),
			"email" => $this->general->get_category($property_id, "email"),
			"phone" => $this->general->get_category($property_id, "manager_phone"),
		);
		// name
		// email
		// phone
		// pic

	}

	public function get_weekend_manager($property_id) {

		// check if exists!
		// name
		// email
		// phone


	}

	
	
	

}