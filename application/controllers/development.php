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

	public function date() {
		
		$this->load->library('utilities/date');
		
		$year_ago = $this->date->year_ago();

		$increments = $this->date->db_date_increments($year_ago, 'week');

	}
	
	public function test() {

		$address = "527 Crossbow Dr. Maineville Oh. 45039";

		$this->load->library('google/geocoding', array('address' => $address));

		$longitude = $this->geocoding->get_longitude();
		$latitude = $this->geocoding->get_latitude();

		echo "longitude = $longitude and latitude = $latitude\n\n";

		$this->load->library('walkscore/walkscore', array('address'=> $address, 'longitude'=>$longitude, 'latitude'=>$latitude));

	}

}