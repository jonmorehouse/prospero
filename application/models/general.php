<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class General extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->library('utilities/developer_contact');
	}
	
	public function page_meta_information($page_type, $column) {
		
		$query = $this->db->where('page_type', $page_type)->get('header_meta_information');
		
		if($query->num_rows()==1)
			return $query->row()->$column;
		else
			return "";
	}

/****** GENERAL DATABASE ABSTRACTION ********/

	public function get($table, $data) {
		
		$query = $this->db->where($data)->get($table);
		if(0 == $query->num_rows())
			return false;
		else
			return $query;//this is a generic return-will handle the query in our class
	}

	public function update($table, $where, $update) {
		
		$this->db->where($where)->update($table, $update);
	}

	public function insert($table, $data) {

		$this->db->insert($table, $data);
		
	}

/******** PROSPERO SPECIFIC FUNCTIONS *******/

	public function category_tables() {
		
		$query = $this->db->distinct()->get('table_schema');
		$all_tables = array();
		
		foreach($query->result() as $row) {
			$table = $row->location;
			if(!in_array($table, $all_tables) && ""!=$table)
				array_push($all_tables, $row->location);
		}
			
		return $all_tables;
	}

	public function get_category_table($category) {
		
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

	public function get_category_datatype($category) {
		
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
	
	public function get_datatype($category) {

		$query = $this->get("table_schema", array('category' => $category));
		
		if(!$query || !$query->row()->data) {
			
			$this->load->library('utilities/developer_contact');
			$this->developer_contact->general_error("General Model datatype nonexistent", "Couldn't find {$category}");
			return false;
		}
			
		else
			return $query->row()->data;//return datatype
	}
	
	public function get_category($property_id, $category) {//database abstraction to get the individual category at any time
		
		$table = $this->get_category_table($category);
		$query = $this->get($table, array($category => $property_id));
		
		if(!$query || !$query->row()->$category)
			return false;
		else
			return $query->row()->$category;
	}


}

