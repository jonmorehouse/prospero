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
		$libraries = array('user_access/user_status', 'utilities/format', 'utilities/header', 'property/property_get', 'property/property_set', 'property/browse', 'user_access/admin');
		$this->load->library($libraries);
		
		// Load Configuration Files
		$this->load->config('database_configuration');
		
		// If the user_status is validated, we will then load session data to be used around the controller
		if($this->user_status->current_status()){
			$this->username = $this->session->userdata('username');
			$this->admin_rights = $this->session->userdata('admin_rights');
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
			$this->tools();

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
		$search_tools = array('update_listing', 'image_upload', 'video_upload', 'thumbnail_upload', 'remove_media');
		
		if(!$this->tool_id)
			$this->homepage();

		else if(in_array($this->tool_id, $search_tools))
			$this->property_search();

		else//if we don't need to search...this applies to logout, create_listing, remove_listing
			$this->all_admin_rights();
	}
	
	private function homepage(){
		
		$this->page = 'home';
		$this->load->view('management/management_base');
		
	}

	private function property_search(){
		
		$this->page = 'search_form';//this is the page that will be ouputted from management_base
		
		$this->property_list = $this->admin->property_list($this->username);//get all of the property_ids this admin has access to

		$this->categories = $this->config->item('top_level_categories');//all the categories available

		foreach($this->categories as $value){//for each category
			$this->$value = array();//create an array with this category name

			$unfiltered_list = $this->browse->management_thumbnail($value);//get a list of all connected property_ids with this

			foreach($unfiltered_list as $property_id)//we now need to verify that the property_id is in the property list which is aall of the allowed properties for this admin
				if(in_array($property_id, $this->property_list))
					array_push($this->$value, $property_id);
			
			if(count($this->$value) < 1){//want to remove the category from $this->category if it has no potential properties
				$key = array_search($value, $this->categories);
				unset($this->categories[$key]);//the category is no longer in the $this->categories array
			}
		}
		
		$this->load->view('management/management_base');
	}
	
	private function all_admin_rights(){
		
		// This section is for management_tools that require all admin_rights
		if($this->admin_rights != 'all')
			$this->page = 'admin_access_message';
		
		else if($this->tool_id == 'remove_listing'){
			$this->property_id_list = $this->admin->property_list($this->username);
			$this->page = 'remove_listing';
		}

		else //user has sufficient rights
			$this->page = $this->tool_id;
		
		$this->load->view('management/management_base');
	}
	
// UPDATE FORMS--STEP 2 AFTER SEARCHING
	public function update_listing_form(){
		
		$type = $this->property_get->type($this->property_id);//rent/buy

		$type_category = $this->property_get->type_category($this->property_id);
		
		$this->type = $this->format->comparison_format($type);

		$this->type_category = $this->format->comparison_format($type_category);
		
		$this->views = array('general', $this->type, $this->type_category);
		
	}
	
	public function update_tools(){//property id is already passed-this is for actually updating an existing listing
	
		$this->page = $this->uri->segment(3);
		$this->property_id = $this->uri->segment(4);
		
		if($this->page == 'update_listing')
			$this->update_listing_form();

		// FINAL OUTPUT
		$this->load->view('management/management_base');
	}
	
	public function media_upload(){

		// PROPERTY_ID AND MEDIA_TYPE!
		$this->property_id = $this->uri->segment(4);
		$this->page = $this->uri->segment(3);
		$media_type = explode('_', $this->page);//THE FIRST PART IS JUST THE TYPE--URI is like TYPE_UPLOAD/$property_id
		
		// FILE_NAME WILL BE FALSE IF THE FILE FAILS TO UPLOAD
		$file_upload = $this->property_set->media_upload($media_type[0], $this->property_id);
		
		if($file_upload)//THIS IS RETURNED FROM THE LIBRARY BECAUSE THE FILE WAS SUCCESSFULLY UPLOADED
			$this->message = "File was successfully uploaded.<br />File name: {$file_name}.<br />Property id: {$this->property_id}.";
		else
			$this->message = "File was unsuccessfully uploaded. Administrator was contacted already.";
		
		// OUTPUT
		$this->load->view('management/message', $this->data);//END OF MESSAGE FLOW
	}
	
	public function listing_remove_prompt(){
		
		$this->property_id = $this->uri->segment(3);
		
		
	}

	public function remove_listing(){
		
		// THIS IS TO COMPLETELY REMOVE A LISTING
		// DATA
		$this->property_id = $this->uri->segment(3);
		$this->message = "Property deleted";
		
		// CALL PROPERTY_SET CLASS--DATABASE ABSTRACTION HERE
		$this->property_set->remove($this->property_id);
		
		// FINAL OUTPUT--THE MESSAGE IS FOR THE LAST STEP. IT RETURNS TO THE MANAGEMENT BASE!
		$this->load->view('management/message', $this->data);
	}
	
	public function media_remove(){
		
		// INPUT FORM DATAs
		$this->property_id = $this->uri->segment(4);
		$data = $this->input->post();
		$type = $this->uri->segment(3);
		
		// MESSAGE TO RETURN
		$this->message = "Property successfully updated";
		
		// REMOVE MEDIA WITH PROPERTY_SET 
		if($type == 'slideshow_remove')
			$this->property_set->remove_image($data['file_name']);//VALUES HARD CODED IN VIEW-MANAGEMENT/FORMS/REMOVE_MEDIA
		else if($type == 'video')
			$this->property_set->remove_video($this->property_id);
		
		// OUTPUT
		$this->load->view('management/message', $this->data);
	}
	
}