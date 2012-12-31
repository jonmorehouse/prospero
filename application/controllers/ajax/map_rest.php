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

		$points = $this->map_api->general_map($filter);

		if (!$points) $map_data = array('status' => false);

		else {

			$map_data['status'] = true;			
			$map_data['center'] = $this->map_api->get_center($points);
			$map_data['points'] = $points;
		}

		echo json_encode($map_data);//this is the return data
	}

	
}
