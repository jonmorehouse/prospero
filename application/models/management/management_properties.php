<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


class Management_properties extends CI_Model {


	function __construct() {


		$this->load->model("general");
	}

	public function categorized_properties($property_list) {

		$categorized_properties = array();

		foreach ($property_list as $property_id) {

			$value = $this->general->get_category($property_id, "type");

			if (!$value) continue;

			if (array_key_exists($value, $categorized_properties))
				array_push($categorized_properties[$value], $property_id);

			else 
				$categorized_properties[$value] = array($property_id);			
		}

		return $categorized_properties;
	}
}