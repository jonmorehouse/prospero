<?php
class Management extends CI_Controller{
	
/*MANAGEMENT CONSTRUCT*/

	function __construct(){
		parent::__construct();
		
		// PAGE META INFORMATION
		$page_title = 'Prospero Real Estate Content Management System';
		$this->page_type = 'management';//this is used for headers
		$this->id = 'management'; //this is used for the navigation bars--not always page_type in other controllers

		// LOAD LIBRARIES
		$libraries = array('user_access/user_status', 'utilities/format', 'utilities/header');
		$this->load->library($libraries);
		
		// Load Configuration Files
		$this->load->config('database_configuration');
		
		// If the user_status is validated, we will then load session data to be used around the controller
		if($this->user_status->current_status()){
			$username = $this->session->userdata('username');
			$admin_rights = $this->session->userdata('admin_rights');
			$this->load->library(array('management/management_forms', 'management/management_general', 'management/management_create_update'), array('admin_rights' => $admin_rights, 'username' => $username));
			
		}

		// load header information-this will be passed into management_base and echoed from there
		$this->header = $this->header->header_creation($this->page_type, $page_title);//pass css as array or js as array if desired
	}
	
	public function _remap($method, $parameters){
		
		if($method == 'login_validation')
			$this->login_validation();

		else if(!$this->user_status->current_status())
			$this->login();
		
		else if($method == 'index')
			$this->homepage();

		else
			$this->$method();

	}
		
/*LOGIN CONSTRUCT*/

	function login($username = false, $message = false){//loads the login page
		
		// Check if the user is already trying
		$this->username = $username;
		$this->message = $message;
		
		// page is to load the proper form inside the management window
		$this->page = 'login';
		
		// Final output
		$this->load->view('management/management_base');
		
	}
	
	function logout(){
		// CALL USER_STATUS LOGOUT--THIS CONTROLS THE LOGIN/LOGOUT SECTIONS
		$this->user_status->logout();
		
		// REDIRECT BACK TO THE MANAGEMENT LOGIN
		redirect('management');
	}
	
	function login_validation(){
		
		// GETTING INFORMATION FOR THE LOGIN
		$username = strtolower($this->input->post('username'));
		$password = md5($this->input->post('password'));
		
		// VALIDATE THE LOGIN WITH USER_STATUS CLASS
		$status = $this->user_status->login($username, $password);
		
		//Failed login message
		
		$message = $this->load->view('management/resources/failed_login', '', true);
		
		// IF USER_STATUS VALIDATES, The session will be set and it will auto-login
		if($status)
			redirect('management/tools');
		else
			$this->login($username, $message);
	}

/*TOOL PAGE CONSTRUCT--DETERMINES WILL LOAD SEARCH OR CREATE LISTING FORM*/

	public function tools(){//this catches from the navigation bar at the top!
		
		// tool_id allocation
		$this->tool_id = $this->uri->segment(3);

		
		if(!$this->tool_id)
			$this->homepage();

		else if(in_array($this->tool_id, $search_tools))
			$this->property_search();

		else//if we don't need to search...this applies to logout, create_listing, remove_listing
			$this->all_admin_rights();
	}
	
	private function homepage(){
		
		$this->page = 'home';
		$this->content = "Please select an option above. If you have reached this page in error, please contact an admin";
		$this->load->view('management/management_base');
		
	}

	private function property_search(){
		
		// grab tool id in this form and then use the class to generate the proper form
		
		
	
	}
	
	public function create_listing() {
		
		$this->content = $this->management_create_update->create_property();//1 is our default property -- to load the defaults in! 
		$this->load->view('management/management_base');		
	}
	
	public function update_listing() {

		$this->property_id = $this->uri->segment(3);

		if(!$this->property_id || strlen($this->property_id < 1))
			$this->content = $this->management_general->search('update_listing');
		else
			$this->content = $this->management_create_update->update_property($this->property_id);

		$this->load->view('management/management_base');		
	}

	
	
	public function remove_listing() {//

		if(!$this->uri->segment(3))
			$this->content = $this->management_general->search('remove_listing');
		else
			$this->content = $this->management_general->remove_listing($this->uri->segment(3));
			
		$this->load->view('management/management_base');
	}
	
	public function remove_media() {//remove a form
		
		
		
	}
	
	public function video_upload() {
		
		
	}
	
	public function thumbnail_upload() {//change the thumbnail
		
		
		
	}
	
	public function slideshow_upload() {//load a single image into the page
		
		
		
		
	}

	public function process() {
		
		$this->type = $this->uri->segment(3);
		$this->property = $this->uri->segment(4);
	
	}

}