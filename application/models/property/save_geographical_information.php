<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Save_geographical_information extends CI_Model {

	function __construct() {

		parent::__construct();

	}


	public function save_walkscore($property_id, $value) {

		$table = $this->general->get_category_table("walkscore");//should return location unless there is a change
		$query_data = array("property_id" => $property_id);
		$data =	array("property_id" => $property_id, "walkscore" => $value);

		# now lets make sure that there is a row for this property in the table
		$query = $this->db->where($query_data)->get($table);

		if ($query->num_rows() == 0) 
			$this->db->insert($table, $data);

		else
			$this->db->where($query_data)->update($table, $data);



	}

	public function save_walkscore_description($property_id, $value) {

		$table = $this->general->get_category_table("walkscore_description");
		$query_data = array("property_id" => $property_id);
		$data =	array("property_id" => $property_id, "walkscore_description" => $value);

		# now lets make sure that there is a row for this property in the table
		$query = $this->db->where($query_data)->get($table);

		if ($query->num_rows() == 0) 
			$this->db->insert($table, $data);

		else
			$this->db->where($query_data)->update($table, $data);


	}

	public function save_walkscore_triangle($property_id, $values) {


		$request = $this->CI->walking_distance_request($property_id);
	}

	public function save_geocoded_address($property_id, $values) {

		$table = $this->general->get_category_table("latitude");
		$query_data = array("property_id" => $property_id);
		$data =	array("property_id" => $property_id, "latitude" => $values['latitude'], "longitude" => $values['longitude']);

		# now lets make sure that there is a row for this property in the table
		$query = $this->db->where($query_data)->get($table);

		if ($query->num_rows() == 0) 
			$this->db->insert($table, $data);

		else
			$this->db->where($query_data)->update($table, $data);
	}

	public function save_formatted_address($property_id, $value) {

		$table = $this->general->get_category_table("formatted_address");
		$query_data = array("property_id" => $property_id);
		$data =	array("property_id" => $property_id, "formatted_address" => $value);

		# now lets make sure that there is a row for this property in the table
		$query = $this->db->where($query_data)->get($table);

		if ($query->num_rows() == 0) 
			$this->db->insert($table, $data);

		else
			$this->db->where($query_data)->update($table, $data);

	}

}
