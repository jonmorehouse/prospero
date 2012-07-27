<?php
class Management extends CI_Controller{
/*THIS CONTROLLER CLASS IS TO HANDLE ALL OF THE CONTENT MANAGEMENT SYSTEM AJAX REQUESTS*/
	
	function __construct(){
		parent::__construct();

		// LOAD LIBRARIES
		$libraries = array('user_access/user_status', 'utilities/format', 'utilities/header', 'property/property_set', 'property/property_get');
		$this->load->library($libraries);
		
		// Load Configuration Files
		$this->load->config('database_configuration');
		
		// If the user_status is validated, we will then load session data to be used around the controller
		if($this->user_status->current_status()){
			$username = $this->session->userdata('username');
			$admin_rights = $this->session->userdata('admin_rights');
			$this->load->library(array('management/management_forms', 'management/management_general', 'management/management_create_update'), array('admin_rights' => $admin_rights, 'username' => $username));
			
		}
		
	}
		
	// THIS IS TO GRAB THE INFORMATION FROM THE CMS GUI
	
	function save(){//THIS IS THE SAME AS FOR THE UPDATE LISTING AND CREATE LISTING


		// $this->load->view('management/resources/general_dashboard');
		$post_data = $this->input->post();
		$property_id = $this->property_set->save($post_data);
		
		echo $this->management_create_update->update_property($property_id);
	}
	
	function media_status() {
		
		$post_data = $this->input->post();

		$property_id = $post_data['property_id'];
		$media_categories = $this->general->get_categories_by_type('media');

		foreach($media_categories as $media_category) {
			$media_category = "{$media_category}_id";

			if(isset($post_data[$media_category])) {
				$media_ids = $post_data[$media_category];
				
				foreach($media_ids as $media_id => $status) 
					$this->property_set->media_status($media_id, $media_category, $status, $property_id);
			}
		}
	}
	
	function listing_status() {
		
		$post_data = $this->input->post();

		foreach($post_data as $key => $value) {
			
			$property_id = $key;
			$status = $value['property_status'];
			$this->property_set->property_status($property_id, $status);
			
		}
	}
}