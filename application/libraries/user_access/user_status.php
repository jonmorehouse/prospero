<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class User_status{
	
	
	var $CI;
	
	function User_status(){
		
		$this->CI =& get_instance();
		$this->CI->load->library('session');

	}
	
	public function login($username, $password){
		
		if($this->validate($username, $password)){//user is validated
			
			$admin_rights = $this->CI->admin->admin_rights($username);

			$data = array('username' => $username, 'password' => $password, 'admin_rights' => $admin_rights);
			
			$this->CI->session->set_userdata($data);
			return true;
		}
		else
			return false;
	}
	
	public function current_status(){
		
		// GETTING INFORMATION FROM THE SESSION
		$username = $this->CI->session->userdata('username');
		$password = $this->CI->session->userdata('password');//THIS WILL BE MD5 already because that is how we stored it there
		
		if($username && $password)
			return $this->validate($username, $password);
		else
			return false;
	}
	
	public function logout(){
		
		$this->CI->session->sess_destroy();
	}
	
	private function validate($username, $password){

		$this->CI->load->model('user_information');

		$db_password = $this->CI->user_information->get_user_information('username', $username, 'password');
		
		if($db_password){//USERNAME EXISTS--WE NEED TO CHECK IF THE PASSWORD EXISTS!
			if($db_password == $password)
				return true;
			else
				return false;
		}
		
		else //USERNAME DOES NOT EXIST
			return false;
			
	}
};