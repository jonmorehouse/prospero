<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Management extends My_Controller{

/******************* MANAGEMENT CONSTRUCT *************************/
/* Note the management_forms, management_create_update and management_general class
	
	managmeent forms is for general form creation -- to be used for dynamic generation for the update/create listings -- everything is database driven
	 
	management general creates thumbnails for search because it has to account for differing urls etc -- makes it easier to make modifications

*/
/************** CONTROLLER CONSTRUCTORS AND MAPPING ***************/
	public function __construct(){

		$this->id = 'management'; //this is used for the navigation bars--not always page_type in other controllers
		parent::__construct();
		
		$this->content = "";

		// LOAD LIBRARIES
		$libraries = array('user_access/user_status', 'utilities/format', 'utilities/header', "utilities/dynamic_header");
		$this->load->library($libraries, array("page_id" => "management"));

		$models = array("pages/navigation", "pages/elements");
		$this->load->model($models);

		// If the user_status is validated, we will then load session data to be used around the controller
		if($this->user_status->current_status()){
			$username = $this->session->userdata('username');
			$admin_rights = $this->session->userdata('admin_rights');
			$this->load->library(array('management/management_forms', 'management/management_general', 'management/management_create_update'), array('admin_rights' => $admin_rights, 'username' => $username));
		}

		// initialize a few things!
		$this->base();

		// management variables
		$this->dashboard = false;
		$this->property_status_dashboard = false;
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

/**************** USER ACCESS FUNCTIONALITY **********************/

	function login($username = false, $message = false){//loads the login page
		
		// Check if the user is already trying
		$this->username = $username;
		$this->message = $message;
		
		// page is to load the proper form inside the management window
		$this->page = 'login';
		
		// Final output
		$this->load->view('admin/management/management_base');
		
	}
	
	function logout() {
		// CALL USER_STATUS LOGOUT--THIS CONTROLS THE LOGIN/LOGOUT SECTIONS
		$this->user_status->logout();
		
		// REDIRECT BACK TO THE MANAGEMENT LOGIN
		redirect('admin/management');
	}
	
	function login_validation() {
		
		// GETTING INFORMATION FOR THE LOGIN
		$username = strtolower($this->input->post('username'));
		$password = md5($this->input->post('password'));
		
		// VALIDATE THE LOGIN WITH USER_STATUS CLASS
		$status = $this->user_status->login($username, $password);
		
		//Failed login message
		$this->content = $this->load->view('admin/management/resources/failed_login', '', true);
		
		// IF USER_STATUS VALIDATES, The session will be set and it will auto-login
		if($status)
			redirect('admin/management/homepage');
		else
			$this->login($username, $message);
	}

	private function homepage() {
		
		$this->page = 'home';
		$this->content = "Please select an option above. If you have reached this page in error, please contact an admin";
		$this->load->view('admin/management/management_base');
		
	}

/**************** TOOL GENERATION *********************************/
	
	public function create_listing() {//create listing -- ajax saving in ajax/management
		
		$this->dashboard = true;
		$this->content .= $this->management_create_update->create_property();//1 is our default property -- to load the defaults in! 

		$this->load->view('admin/management/management_base');		
	}
	
	public function update_listing() {//update listing -- ajax saving in ajax/management

		$this->dashboard = true;
		$this->property_id = $this->uri->segment(4);

		if(!$this->property_id || strlen($this->property_id < 1))
			$this->content = $this->management_general->search('update_listing');
		
		else {
			$this->content = $this->load->view('admin/management/resources/general_dashboard', '', true);
			$this->content .= $this->management_create_update->update_property($this->property_id);
		}

		$this->load->view('admin/management/management_base');		
	}

	public function remove_listing() { //make status not-live -- ajax saving in ajax/management

		// generates a list of properties to be set as live or not live
		$this->content = $this->management_general->property_status();
		$this->dashboard = true;
		// $this->property_status_dashboard = true;
		$this->load->view('admin/management/management_base');
	
	}
	
	public function media_status() { //save with ajax to ajax/management
		
		if(!$this->uri->segment(3))
			$this->content = $this->management_general->search('media_status');
		
		else{
			$property_id = $this->uri->segment(3);
			$this->content = $this->management_general->media_status($property_id);
			$this->dashboard = true;//load the dashboard for ajax controls in the view
		}
		
		$this->load->view('admin/management/management_base');
	}

	public function upload_media() {//will be process with $this->process()
		
		if(!$this->uri->segment(3))//no listing set -- listing will be 3rd segment -- we need to give our users search parameters
			$this->content = $this->management_general->search("upload_media");//the search will send the 

		else //listing selected -- load the generic upload form
			$this->content = $this->management_general->upload_media($this->uri->segment(3));
		
		$this->load->view('admin/management/management_base');
	}

/****************** PROCESS UPLOADS -- NOTE THAT ajax/controller is the process for the other properties *******/

	public function process() {//process all media uploads
		
		$this->property_id = $this->uri->segment(3);//property_id
		$this->type = $this->input->post('type');//this is pdf/video/slideshow_image or thumbnail_image
		
		if(!$this->type || !$this->property_id)
			redirect('admin/management/upload_media');//redirect back to the main page to restart the process
		else
			$this->load->library('property/property_set');//property_set loading
			$this->status = $this->property_set->media_upload($this->property_id, $this->type);//submit the informatino
			$this->content = $this->load->view('admin/management/message', '', true);//return the proper message to be passed to the rendered view
		
		$this->load->view('admin/management/management_base');
	}
}