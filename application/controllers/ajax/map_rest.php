<?php

/*

	This application is useful for returning the result of any map query etc

*/
class Map_rest extends CI_Controller{
	
	function __construct(){
		parent::__construct();

		$libraries = array('property/base_filter', 'property/map_api');
		$this->load->library($libraries);
	}
		
	// expects for a category to be input
	function general_map_points() {

		$filter = $this->input->post("filter");

		$map_data = $this->map_api->general_map($filter);

		if (!$map_data) echo json_encode(array("status" => false));

		else
			echo json_encode(array("status" => true, "points" => $map_data));
	}



}
