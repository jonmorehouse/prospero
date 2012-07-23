<?php
class Management extends CI_Controller{
/*THIS CONTROLLER CLASS IS TO HANDLE ALL OF THE CONTENT MANAGEMENT SYSTEM AJAX REQUESTS*/
	
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('property/property_get');
		$this->load->library('utilities/format');
	}
		
	// THIS IS TO GRAB THE INFORMATION FROM THE CMS GUI
	
	function save_listing(){//THIS IS THE SAME AS FOR THE UPDATE LISTING AND CREATE LISTING
		
		// SPECIFIC LIBRARY LOADER
		$this->load->library('property/property_set');
		
		// GET POST DATA
		$post_data = $this->input->post();
		
		// SAVE DATA--SEND TO THE PROPERTY_SET LIBRARY WHICH WILL TAKE CARE OF EVERYTHING
		$this->property_id = $this->property_set->save($post_data);
		
		// OUTPUT THE SAME LISTING FORM FOR THIS
		$this->load->view('management/forms/general');
		$this->load->view('management/forms/rent');
		$this->load->view('management/forms/buy');

	}
	
	function upload_media_preview() {
		
		
		
	}
}