<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*
	This
	
*/
class Map_api extends Base_filter {

	public function __construct() {

		parent::__construct();

		$libraries = array('property/media');
		$this->CI->load->library($libraries);
	}

	public function general_map($filter) {

		$properties = $this->property_filter($filter);

		$map_data = array();

		foreach ($properties as $property_id) {

			$data = array("property_id" => $property_id,

				"coordinates" => $this->CI->geographical_information->get_coordinates($property_id), 
				"title" => $this->CI->general->get_category($property_id, "name"),
				"thumbnail" => $this->CI->media->get_thumbnail($property_id),
			);

			array_push($map_data, $data);//push the current array into the master elements
		}

		return $map_data;
	}

	
}