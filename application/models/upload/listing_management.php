<?php

class Listing_management extends CI_Model{
	
	// INDEX IS TO CREATE A NEW ADDITION--JUST ADDS A NEW PRIMARY KEY WHICH IS THE PROPERTY ID
	
	function __construct(){
		parent::__construct();
		$this->load->model('general');
	}
	
	function index(){
		//THIS IS NOT BEING USED FOR NOW
		
		
	}
	
	function new_listing(){
	
		// LOAD LIBRARIES
		$this->load->library('utilities/file_management');
		
		// CREATING A UNIQUE, TEMPORARY ID FOR THIS PROPERTY
		$new_listing = md5(time());
		$data = array('name' => $new_listing);
		
		// INSERTING THAT INTO THIS PROPERTY NAME TABLE TO GENERATE THE AUTO INCREMENT--THE PROPERTY_ID
		$this->db->insert('property_name', $data);
		
		// THIS GETS THE AUTO_INCREMENT VALUE WHICH IS THE PRIMARY KEY FOR THE WEBSITE!
		$property_id = $this->db->where($data)->get('property_name')->row()->property_id;//NOTE THAT SINCE THIS IS AN OBJECT NO PARENTHESES
		
		// NEXT SECTION IS TO UPDATE ALL OF THE OTHER (GENERAL TABLES WITH THIS PROPERTY_ID WHICH IS THE PRIMARY KEY)
		
		$all_tables = $this->general->category_tables();
		$insert_data = array('property_id' => $property_id);
		
		// INSERTING INTO EACH TABLE THAT NEEDS IT!
		foreach($all_tables as $table)
			$this->db->insert($table, $insert_data);
		
		//CREATE DIRECTORIES FOR THE IMAGES
		$this->file_management->directory_creation($property_id);

		// WE ARE RETURNING THIS TO THE CLASS--JUST A VARIABLE NOT AN ARRAY!
		return $property_id;
	}
	
	// THIS IS CALLED FROM THE PROPERTY_SET CLASS--DEPENDING UPON TYPE!
	
	function general_insert($column, $value, $property_id){
		// THIS FUNCTION IS REFERENCED IN THE PROPERTY SET CLASS--TO DYNAMICALLY SAVE TABLE DATA FOR A PROPERTY!
		$this->load->library('utilities/developer_contact');
		
		// GET TABLE LOCATION FROM THE TABLE_SCHEMA TABLE!
		$query = $this->db->where('category', $column)->get('table_schema');
		$table = $query->row()->location;
		$data = $query->row()->data;
		
		if($query->num_rows()==0){
			 $message = "An invalid column was searched for in create_listing_model. Column={$column}, Value={$value}, Table={$table}, Property_id={$property_id}"; 
			$this->developer_contact->general_error('Invalid table', $message);
		}
		
		// WE LOOK AT THE DATA TYPE IN PROSPERO.TABLE_SCHEMA
		// WE NEED TO DETERMINE THE DATA TYPE TO ENSURE THAT INTEGERS ARE PROPERLY_CONVERTED!
		if($data=='int'){
			if(gettype($value)!='integer')
				$value = intval($value);
			$this->db->where('property_id', $property_id)->update($table, array($column=>intval($value)));
		}
		
		else{
			$value = htmlentities($value, ENT_QUOTES);
			$this->db->where('property_id', $property_id)->update($table, array($column =>$value));			
			
		}
	
	// END METHOD GENERAL_INSERT
	}


	// MAKE THIS FUNCTION OBSOLETE! -- NEED TO MAKE SURE THAT WE 
	function remove_listing($property_id){ //change this in the future so that it has a delete column in property_status==not necessary for now but in the future
		// DELETES FROM ALL TABLES LISTED IN THE CONFIG TABLES.php
		$all_tables = $this->config->item('all_tables');
		
		foreach($all_tables as $value)
			$this->db->where('property_id', $property_id)->delete($value);
	}


}