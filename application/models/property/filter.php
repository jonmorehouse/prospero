<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


/*

	This class is responsible for returning all the properties based on a different filter

	Based on different categories such as type, type_category, new, all etc


	Use table_schema for location lookup because not all categories are in the category_type_categories

*/

class Filter extends CI_Model {


	function __construct() {

		parent::__construct();//

		// initialize models
		$models = array('general');//this is responsible for all location lookup etc
		$this->load->model($models);

		// table for low-level lookups
		$this->base_table = "table_schema";
	}

	public function get_all() {

		$table = $this->db->where(array('category' => 'property_status'))->select('location')->get($this->base_table)->row()->location;
			
		$properties = $this->db->select('property_id')->where(array('property_status' => true))->get($table);
			
		$property_ids = array();

		foreach ($properties->result() as $row)
			array_push($property_ids, $row->property_id);

		return $property_ids;
	}

	public function get_new() {

		/*
			This function returns all new properties as flagged across the site
			These properties can be flagged through the content management system
		*/

		$table = $this->db->where(array('category' => 'new_property'))->select('location')->get($this->base_table)->row()->location;

		$properties = $this->db->select('property_id')->where(array('new_property' => true))->get($table);

		$property_ids = array();

		foreach ($properties->result() as $row)
			array_push($property_ids, $row->property_id);

		return $property_ids;
	}	

	public function get_category($category, $filter) {
		/*
			this function is useful for returning all the properties that have a definitive option as the category
			we use the general mapping because these are always guaranteed to be property categories that would show up on the listing pages
		*/
		$table = $this->general->get_category_table($category);

		if (!$table) return false;

		$properties = $this->db->where(array($category => $filter))->select('property_id')->get($table);

		if ($properties->num_rows() <= 0) return false;
	
		$property_ids = array();

		foreach ($properties->result() as $row)
			array_push($property_ids, $row->property_id);

		return $property_ids;
	}

}