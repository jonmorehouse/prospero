<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*
	
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

			if ($data['coordinates']['longitude'] && $data['coordinates']['latitude'])
				array_push($map_data, $data);//push the current array into the master elements
		}

		return $map_data;
	}

	public function get_center($points) {

		$lat = array('max' => $points[0]['coordinates']['latitude'], 'min' => $points[0]['coordinates']['latitude']);
		$lon = array('max' => $points[0]['coordinates']['longitude'], 'min' => $points[0]['coordinates']['longitude']);
			
		// generate max/min for each element
		foreach ($points as $point) {

			$_lat = $point['coordinates']['latitude'];
			$_lon = $point['coordinates']['longitude'];

			if ($_lat < $lat['min']) $lat['min'] = $_lat;

			if ($_lat > $lat['max']) $lat['max'] = $_lat;

			if ($_lon < $lat['min']) $lon['min'] = $_lon;

			if ($_lon > $lat['max']) $lon['max'] = $lon;

		}

		$center['latitude'] = $lat['min'] + 0.5*($lat['max'] - $lat['min']);
		$center['longitude'] = $lon['min'] + 0.5*($lon['max'] - $lon['min']);

		return $center;
		
	}
	
}