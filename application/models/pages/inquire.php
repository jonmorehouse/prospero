<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Inquire extends CI_Model {

	function __construct() {

		parent::__construct();//ensure that the parent is called

		$this->load->model(array("general", "pages/messages"));
	}

	public function inquire_data($property_id) {

		return array(

			"server_data" => array(
				"recipients" => $this->recipients($property_id),
				"property_id" => $this->recipients($property_id)
			),
			"name" => $this->general->get_category($property_id, "name"),
			"body" => $this->default_body(),
			"link" => base_url($this->general->config("inquire_url")),
		);
	} 


	// who gets this email!
	private function recipients($property_id) {

		$recipients = array(

			$this->general->config("general_email"),
			$this->general->get_category($property_id, "manager_email"),
		);

		$weekend_manager_email = $this->general->get_category($property_id, "weekend_manager_email");

		if ($weekend_manager_email) array_push($recipients, $weekend_manager_email);

		return $recipients;
	}

	// these are the managers on this email
	private function managers($property_id) {

		$managers = array();

		$weekend_manager = $this->general->get_category($property_id, "weekend_manager");

		if ($this->weekend_manager)
			array_push($managers, array("first" => $this->general->get_category($property_id, "weekend_manager_first_name"), "last" => $this->general->get_category($property_id, "weekend_manager_last_name")));

		array_push($managers, array("first" => $this->general->get_category($property_id, "manager_first_name"), "last" => $this->general->get_category($property_id, "manager_last_name")));


		return $managers;
	}

	private function default_body() {//this is what the managers will see in the inquire message

		return $this->messages->email_message("default_inquire_body");

	}

	private function recipient_body() {

		// rest of data is put in view
		return $this->messages->email_message("manager_inquiry_body");//returns a template that can have variables replaced
	}

	private function subject($property_id) {

		return $this->messages->email_message("manager_inquiry_subject");//returns a template that can have content replaced 

	}



}