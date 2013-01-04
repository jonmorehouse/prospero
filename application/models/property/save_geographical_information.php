<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Save_geographical_information extends CI_Model {

	function __construct() {

		parent::__construct();

	}


	public function save_walkscore($property_id, $value) {

		$table = $this->general->get_category_table("walkscore");//should return location unless there is a change

		$this->db->where(array("property_id" => $property_id))->update($table, array("walkscore" => $value));

	}

	public function save_walkscore_description($property_id, $value) {

		$table = $this->general->get_category_table("walkscore_description");

		$this->db->where(array("property_id" => $property_id))->update($table, array("walkscore_description" => $value));

	}

	public function save_walkscore_triangle($property_id, $values) {


		$request = $this->CI->walking_distance_request($property_id);

		print_r($request);		

	}

	public function save_geocoded_address($property_id, $values) {

		$table = $this->general->get_category_table("latitude");

		$this->db->where(array("property_id" => $property_id))->update($table, array("latitude" => $values['latitude'], "longitude" => $values['longitude']));

	}

	public function save_formatted_address($property_id, $value) {

		$table = $this->general->get_category_table("formatted_address");

		$this->db->where(array("property_id" => $property_id))->update($table, array("formatted_address" => $value));

	}


}