<?php
/*CLASS INFORMATION IS PRIMARILY FOR GATHERING INFORMATION...*/
// THIS IS PRIMARILY CALLED FROM THE PROPERTY_GET CLASS WHICH IS CALLED FROM THE DATABASE CLASSES!
// ALL INFORMATION CLEANSING IS IN 

class Information extends CI_Model{
		
	function __construct(){
		parent::__construct();	
	}


	function get_information($category, $property_id){
		
		if('new_listing' == $property_id)
			$property_id = 1; //SO WE CAN GET THE DEFAULT VALUES!
		
		// NEED TO FIND WHERE THE CATEGORY IS LOCATED!
		$table = $this->db->where('category', $category)->get('table_schema')->row()->location;

		// NOW WE WANT TO GET THE INFORMATION AND RETURN IT TO THE PROPERTY_GET CLASS
		$query = $this->db->where('property_id', $property_id)->get($table);

		if($query->num_rows == 0 || !$query){
						
			// THERE WAS AN ERROR
			$this->load->library('utilities/developer_contact');
			$message = "There was a property not found at " . time() . " This error occurred in the information model while retrieving " . $category . " for " . $property_id; 
			$this->developer_contact->general_error('Property Not Found in Information Model', $message);
			$value = "Error, admin was contacted";
		} //END OF ERROR MESSAGE!*/
		
		else
			$value = $query->row()->$category;
		return $value;
	}

	function header_information($category, $filter){
		
		// GET THE HEADER_INFORMATION FOR THE CATEGORY and FILTER
		$query = $this->db->where('category', $category)->where('criteria', $filter)->get('header_information');
		
		// Make sure a header exists-not each type will have a header listing
		if($query->num_rows() == 0)
			return false;
		else
			return $query->row()->header;
	}
}