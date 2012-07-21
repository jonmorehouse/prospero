<?php

class Admin{
	
	var $CI;
	
	function Admin(){
		
		$this->CI =& get_instance();
		$this->CI->load->model('user_information');
		$this->CI->load->library('utilities/format');
	}
	
	// THIS WILL BE Called from the create_property_listing
	public function add_admin($property_id, $manager_last_name){
		
		$last_name = $this->CI->format->comparison_format($manager_last_name);
		
		$user_id = $this->CI->user_information->get_user_information('last_name', $last_name, 'user_id');

		$data = array('property_id' => $property_id, 'user_id' => $user_id);
		
		$create = $this->CI->user_information->create_user_information($data, 'property_admin_access');
		
		if(!$create){
			$this->CI->load->library('utilities/developer_contact');
			$message = 'An update failed, manager last name was unable to be updated. Property_id = {$property_id}, Last Name = {$manager_last_name}';
			$this->CI->general_error('Admin Access Error', $message);
		}
	}

	public function property_list($username){
		
		// This method will return all of the available properties for this particular user
		$user_id = $this->CI->user_information->get_user_information('username', $username, 'user_id');
		$admin_rights = $this->CI->user_information->get_user_information('user_id', $user_id, 'admin_rights');
		
		// Get Properties available to this admin
		return $this->CI->user_information->get_admin_properties($user_id, $admin_rights);
	}

	public function admin_rights($username){
		
		return $this->CI->user_information->get_user_information('username', $username, 'admin_rights');
	}
};