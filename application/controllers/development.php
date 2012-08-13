<?php
/*
	** this class is for temporary tools to be used with the 
	** any permanent tools go into the tools class
*/
class Development extends CI_Controller {
	
	/*** CONSTRUCTS ***/
	
	public function __construct() {
		
		parent::__construct();
		
		
	}
	
	/***** PUBLIC FUNCTIONS *****/
	
	public function test() {
		
		$parameters = array('property_id' => 50);
		$libraries = array('listing/listing', 'listing/listing_media', 'listing/listing_content', 'listing/listing_drawers');
		$this->load->library($libraries, $parameters);	
		
		$this->listing_drawers->drawer_content();
		echo "\n\n";
		
		
	}
	

	
	
}