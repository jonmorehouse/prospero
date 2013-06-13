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
		$this->load->library('property/base_filter');

		// table for low-level lookups
		$this->base_table = "table_schema";
	}

	// get the live properties, can include a property to exclude
	public function get_live_properties($property_id = false) {

		$where = (!$property_id) ? (array()) : (array("property_id !=" => $property_id));

		$query = $this->db->where($where)->select("property_id")->get("property_name");

		$properties = array();

		foreach ($query->result() as $row)
			array_push($properties, $row->property_id);

		return $properties;
	}

	// get all properties!
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

	// get all of the properties with a particular category_type filter
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

	public function get_surrounding($property_id) {

		// goal -- we need to find the next and previous elements
		$category_type = $this->general->get_unformatted_category($property_id, "type_category");

		// now grab all property_ids with this particular filter 
		$all_properties = $this->get_category("type_category", $category_type);
		$unsorted_properties = array();

		// now make sure we only grab the proper ones 
		foreach ($all_properties as $property_id)
			if ($this->general->live($property_id)) array_push($unsorted_properties, $property_id);

		// now we need to sort these elements alphabetically
		$properties = $this->base_filter->abc_sort($unsorted_properties);

		// grab the current array key etc
		$key = array_search($property_id, $properties);

		// if the element is not found in the current array of properties (ie it was a boolean) then return false
		// if (gettype($key) === "boolean") return array();

		// return an array of the surrounding properties
		return array(

			"previous" => $properties[($key - 1 >= 0) ? ($key - 1) : (count($properties) - 1)],//otherwise use the - 1 or loop to the back
			"next" => $properties[($key + 1 < count($properties)) ? ($key + 1) : (0)],//if the key+1 is less than the counter then use that otherwise loop to the front
		);
	}	

}