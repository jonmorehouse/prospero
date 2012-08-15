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
	
	public function date() {
		
		$this->load->library('utilities/date');
		
		$year_ago = $this->date->year_ago();

		$increments = $this->date->db_date_increments($year_ago, 'week');
		

		
		echo "\n\n";
	}
	
	public function tester() {
		
		$this->load->library('utilities/date');
		echo $this->date->db_date();
	}
	
	
}