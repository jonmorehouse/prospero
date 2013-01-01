<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Nearby_properties extends Base_filter {


	function __construct() {

		parent::__construct();

		// declare dependencies
		$models = array("property/geographical_information");
		$libraries = array("utilities/data_helper");

		// load dependencies	
		$this->CI->load->model($models);
		$this->CI->load->library($libraries);
	}

	public function nearby_properties($property_id) {

		$point = $this->CI->geographical_information->get_coordinates($property_id);

		// initialize the delta point
		$delta = array(

			"latitude" => (float) $this->CI->general->config("delta_latitude"),
			"longitude" => (float) $this->CI->general->config("delta_longitude")
		);

		// initialize the selection range
		$range = array(
			"latitude" => array(
				"min" => $point['latitude'] - $delta['latitude'],
				"max" => $point['latitude'] + $delta['latitude'],
			),

			"longitude" => array(
				"min" => $point['longitude'] - $delta['longitude'],
				"max" => $point['longitude'] + $delta['longitude']
			)
		);//end of range declaration!

		// return array of elements
		return array(

			"center" => $point,
			"property_ids" => $this->CI->geographical_information->nearby_properties($range['latitude'], $range['longitude'])
		);

	}
}