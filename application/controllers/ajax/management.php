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
	
	function save(){//THIS IS THE SAME AS FOR THE UPDATE LISTING AND CREATE LISTING
		
		// SPECIFIC LIBRARY LOADER
		// $this->load->library('property/property_set');
		
		// GET POST DATA
		$post_data = $this->input->post();
		
		print_r($post_data);

		
		
	}
	
	function media_status() {
		
		print_r($this->input->post());
		
	}
	
	function listing_status() {
		
		print_r($this->input->post());
		
		
	}
}