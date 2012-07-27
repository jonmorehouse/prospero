<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class General extends CI_Model{

/*
	-this class is for database abstraction
	-as much as possible, use the functions in here, several functions that are used alot are here to make queries quicker
	-in theory, this would be the only place we would have to implement memcached in 

*/

	function __construct(){
		parent::__construct();
		$this->load->library('utilities/developer_contact');
	}
/****** GENERAL DATABASE ABSTRACTION ********/

	public function delete($table, $data) {//delete from database
		
		$this->db->where($data)->delete($table);
		
	}

	public function get($table, $data) {//get a query
		
		$query = $this->db->where($data)->get($table);
		if(0 == $query->num_rows())
			return false;
		else
			return $query;//this is a generic return-will handle the query in our class
	}

	public function update($table, $where, $update) {//update database
		
		$this->db->where($where)->update($table, $update);
	}

	public function insert($table, $data) {//insert into database

		$this->db->insert($table, $data);
		
	}

	public function get_properties($table, $where) {//get all properties for certain table
		
		$properties = array();
		
		if(!$where)
			$query = $this->db->get($table);
		else
			$query = $this->db->where($where)->get($table);
			
		foreach($query->result() as $row) {
			
			$property_id = $row->property_id;
			if($property_id > 1)
				array_push($properties, $property_id);
		}
		
		return $properties;
	}
	
	public function get_column($table, $where, $category, $array = false) {//returns an array or single value -- if 
		
		
		
	}

/******** PROSPERO SPECIFIC FUNCTIONS *******/

	/****  CATEGORY TYPE ****/
	public function get_category_types() {
		
		$category_types = array();
		$query = $this->db->get('category_types');
		foreach($query->result() as $row)
			array_push($category_types, $row->category_type);
		
		return $category_types;
	}
	
	public function category_tables() {//returns all tables for the site -- used to clear stuff!
		
		$query = $this->db->distinct()->get('table_schema');
		$all_tables = array();
		
		foreach($query->result() as $row) {
			$table = $row->location;
			if(!in_array($table, $all_tables) && ""!=$table)
				array_push($all_tables, $row->location);
		}
			
		return $all_tables;
	}
	
	public function get_categories_by_type($category_type) {//returns all the tables for a specific category_type
		
		$query = $this->db->where(array('type' => $category_type))->get('table_schema');
		$categories = array();
		if(!$query || $query->num_rows() === 0) {
			
			$this->developer_contact("Searched by bad category type", "{$category_type}");
			return false;
		}
		
		else {
			
			foreach($query->result() as $row)
				array_push($categories, $row->category);
			
			return $categories;
		}
	}
	
	
	/**** INDIVIDUAL CATEGORY ****/
	
	// get category_location
	public function get_category_table($category) {//get table for individul category
		
		// this function will search table schema for the correct table and return the string location
		$query = $this->db->where(array('category' => $category))->get('table_schema');
		
		if($query->num_rows()!=1) {
			$this->load->library('utilities/developer_contact');
			$this->developer_contact->general_error('table_schema problem', "Please check out {$category}");
			return false;
		}
		
		else
			return $query->row()->location;
	}

	public function get_category_datatype($category) {//get individual category data-type such as boolean, integer etc
		
		$query = $this->db->where(array('category' => $category))->get('table_schema');
		if($query->num_rows() != 0) {

			$this->developer_contact->general_error("General get category datatype returned bad", "{$category} not found in table_schema");
			return false;
		}
		
		else{
	
			$datatype = $query->row()->datatype;
			return $datatype;
		}
	}
	
	public function get_category($property_id, $category) {//database abstraction to get the individual category at any time
		
		$table = $this->get_category_table($category);

		$query = $this->get($table, array('property_id' => $property_id));
		
		if(!$query || !$query->row()->$category)
			return false;
		else
			return $query->row()->$category;
	}
	
		
	
}

