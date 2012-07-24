<?php

class Listing_management extends CI_Model{
	
	// INDEX IS TO CREATE A NEW ADDITION--JUST ADDS A NEW PRIMARY KEY WHICH IS THE PROPERTY ID
	
	function __construct(){
		parent::__construct();
		$this->load->model('general');
		$libraries = array('utilities/developer_contact', 'utilities/file_management');
		$this->load->library($libraries);
	}
	
	function index(){
		//THIS IS NOT BEING USED FOR NOW
		
		
	}
	
	function new_listing(){
	

		
		

		// WE ARE RETURNING THIS TO THE CLASS--JUST A VARIABLE NOT AN ARRAY!
		return $property_id;
	}
	
	// THIS IS CALLED FROM THE PROPERTY_SET CLASS--DEPENDING UPON TYPE!
	
	function general_insert($category, $value, $property_id){
		// THIS FUNCTION IS REFERENCED IN THE PROPERTY SET CLASS--TO DYNAMICALLY SAVE TABLE DATA FOR A PROPERTY!
		
		// GET TABLE LOCATION FROM THE TABLE_SCHEMA TABLE!
		$query = $this->general->get_category_table($category);
		$datatype = $this->general->get_category_datatype($category);
		
		// WE NEED TO DETERMINE THE DATA TYPE TO ENSURE THAT INTEGERS ARE PROPERLY_CONVERTED!
		if('int' == $datatype) {
			if('integer' != gettype($value))
				$value = intval($value);
		}

		else if('bool' == $datatype)
			$value = (boolean)$value;
		
		else //this is a string type
			$value = htmlentities($value, ENT_QUOTES);
		
		$this->general->update($table, array('property_id' => $property_id), array($category => $value));
		
	// END METHOD GENERAL_INSERT
	}

}