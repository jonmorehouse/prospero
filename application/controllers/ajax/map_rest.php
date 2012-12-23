<?php

/*

	This application is useful for returning the result of any map query etc

*/
class Map_rest extends CI_Controller{
	
	function __construct(){
		parent::__construct();

		$libraries = array('property/property_filter');
		$this->load->library($libraries);
	}
		
	// expects for a category to be input
	function general_map_points() {

		$filter = $this->input->post("filter");

		



	}



}
