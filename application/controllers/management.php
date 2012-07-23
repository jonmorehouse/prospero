<?php
class Management extends CI_Controller{
	
/*MANAGEMENT CONSTRUCT*/

/* Note the management_forms, management_create_update and management_general class
	
	managmeent forms is for general form creation -- to be used for dynamic generation for the update/create listings -- everything is database driven
	 
	management general creates thumbnails for search because it has to account for differing urls etc -- makes it easier to make modifications

	
*/

	function __construct(){
		parent::__construct();
		
		// PAGE META INFORMATION
		$page_title = 'Prospero Real Estate Content Management System';
		$this->page_type = 'management';//this is used for headers
		$this->id = 'management'; //this is used for the navigation bars--not always page_type in other controllers
		$this->content = "";

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
		$this->content = $this->load->view('management/resources/failed_login', '', true);
		
		// IF USER_STATUS VALIDATES, The session will be set and it will auto-login
		if($status)
			redirect('management/homepage');
		else
			$this->login($username, $message);
	}
	
	private function homepage(){
		
		$this->page = 'home';
		$this->content = "Please select an option above. If you have reached this page in error, please contact an admin";
		$this->load->view('management/management_base');
		
	}
	
	public function create_listing() {
		
		$this->content = $this->management_create_update->create_property();//1 is our default property -- to load the defaults in! 
		$this->load->view('management/management_base');		
	}
	
	public function update_listing() {

		$this->property_id = $this->uri->segment(3);

		if(!$this->property_id || strlen($this->property_id < 1))
			$this->content = $this->management_general->search('update_listing');
		
		else {
			$this->content = $this->load->view('management/resources/general_dashboard', '', true);
			$this->content .= $this->management_create_update->update_property($this->property_id);
		}

		$this->load->view('management/management_base');		
	}

	public function remove_listing() {//

		if(!$this->uri->segment(3))
			$this->content = $this->management_general->search('remove_listing');
		else
			$this->content = $this->management_general->remove_listing($this->uri->segment(3));
			
		$this->load->view('management/management_base');
	}
	
	public function media_status() {//remove a form
		
		if(!$this->uri->segment(3))
			$this->management_general->search('media_status');
		
		else{
			echo $this->management_general->media_status($this->uri->segment(3));
			
		}
		
		
	}
	
	public function upload_media() {
		
		if(!$this->uri->segment(3))//no listing set -- listing will be 3rd segment -- we need to give our users search parameters
			$this->content = $this->management_general->search("upload_media");//the search will send the 

		else //listing selected -- load the generic upload form
			$this->content = $this->management_general->upload_media($this->uri->segment(3));
		
		$this->load->view('management/management_base');
	}
	
	public function process() {//only 
		
		$this->type = $this->uri->segment(3);
		$this->property = $this->uri->segment(4);
	}

	public function test() {
		
		$this->management_general->upload_media(1);
	
		
	}
}