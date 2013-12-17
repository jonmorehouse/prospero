<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class User_information extends CI_Model{
	
	function __construct(){
		parent::__construct();
		
		
	}

	// GET INFORMATION IS FOR THE USER_ACCESS
	public function get_user_information($column, $value, $get){

		$query = $this->db->where($column, $value)->get('user_information');
		if($query->num_rows()==0)	
			return false;
		else
			return $query->row()->$get;
	}

	public function create_user_information($data, $table){
		
		$query = $this->db->where($data)->get($table);

		if($query->num_rows()!=0)//we don't want duplicates in the db...
			return false;

		$update = $this->db->insert($table, $data);

		if($update)
			return true;
		else
			return false;
	}
	
	public function get_admin_properties($user_id, $admin_rights){
		
		// this is the return value for the property_list
		$property_list = array();
		
		//this method returns the properties available to a particular user with a certain admin_rights
		if($admin_rights == 'all')
			$query = $this->db->select('property_id')->get('property_type');
		
		else 
			$query = $this->db->select('property_id')->where('user_id', $user_id)->get('property_admin_access');
		
		if($query->num_rows()==0)
			return false;
		
		// If there are properties for this particular user, we need to return an array of 
		foreach($query->result() as $row){
			$property_id = $row->property_id;
			
			if($property_id > 1)
				array_push($property_list, $property_id);
		}

		print_r($property_list);
		return $property_list;
	}


}

