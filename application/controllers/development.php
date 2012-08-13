<?php
/*
	** this class is for temporary tools to be used with the 
	** any permanent tools go into the tools class
*/
class Development extends CI_Controller{
	
	/*** CONSTRUCTS ***/
	
	public function __construct() {
		
		parent::__construct();
		
		
	}
	
	/***** PUBLIC FUNCTIONS *****/
	
	public function test() {
		
		$this->load->model('general');
		echo $this->general->get_category_table('weekend_manager_status');

		// $this->load->library('listing/listing');
		// $this->load->library('listing/listing_media', array('property_id' => 2));
		
		
		
		
	}
	

	
	
}