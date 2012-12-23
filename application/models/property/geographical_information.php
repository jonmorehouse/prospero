<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Geographical_information extends CI_Model {

	function __construct() {

		parent::__construct();
		$models = array('general');
		$this->load->model($models);

	}

	function get_coordinates($property_id) {

		$longitude = $this->general->get_category($property_id, "longitude");

		$latitude = $this->general->get_category($property_id, "latitude");

		if (!$latitude || !$longitude) return False;

		return array("longitude" => $longitude, "latitude" => $latitude);
	}

	function get_triangle($property_id) {

		$table = "property_triangle_coordinates";

		$query = $this->db->select("longitude")->select("latitude")->where(array("property_id" => $property_id))->get($table);

		if ($query->num_rows() === 0) return False;

		$coordinates = array();

		foreach ($query->result() as $row)
			array_push($coordinates, array('longitude'=> $row->longitude, 'latitude'=>$row->latitude));
		
		return $coordinates;
	}

}