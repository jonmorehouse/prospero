<?php

class Listing_management extends CI_Model{
	
	// INDEX IS TO CREATE A NEW ADDITION--JUST ADDS A NEW PRIMARY KEY WHICH IS THE PROPERTY ID
	
	function __construct(){
		parent::__construct();
		$this->load->model('general');
		$libraries = array('utilities/developer_contact', 'utilities/file_management');
		$this->load->library($libraries);
	}
	

	// THIS IS CALLED FROM THE PROPERTY_SET CLASS--DEPENDING UPON TYPE!
	
	

}