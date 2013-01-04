<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Nearby_properties extends Base_filter {


	function __construct() {

		parent::__construct();

		// declare dependencies
		$models = array("property/geographical_information", "property/filter", "general");
		$libraries = array("utilities/data_helper");

		// load dependencies	
		$this->CI->load->model($models);
		$this->CI->load->library($libraries);

		$this->range = $this->CI->general->config("max_nearby_properties");
	}

	public function get_content($property_id) {

		$properties = $this->nearby_properties($property_id);
		$counter = 0;
		$content = array();

		foreach ($properties as $_property_id => $distance) {

			if ($counter === $this->range) break;//stop the element---had some problems using the range function

			$_content = array(

				"distance" => $distance,
				"coordinates" => $this->CI->geographical_information->get_coordinates($_property_id),
				"thumbnail" => $this->CI->thumbnail->general_thumbnail($_property_id),
			);

			$counter++;
			array_push($content, $_content);
		}

		return $content;
	}

	// returns the number of elements the array!
	public function nearby_properties($property_id) {

		$property_point = $this->CI->geographical_information->get_coordinates($property_id);
		$properties = $this->CI->filter->get_live_properties($property_id);

		$sorted_properties = $this->sort_by_distance($properties, $property_point);

		if (count($sorted_properties) < $this->range) return $sorted_properties;

		return array_slice($sorted_properties, 0, $this->range, true);
	}

	// get an average delta
	public function sort_by_distance($properties, $point) {

		$distance = array();//will be an array of property_ids etc

		// create an average distance and sort the properties based on that
		foreach ($properties as $property_id) {

			$coordinates = $this->CI->geographical_information->get_coordinates($property_id);
			if (!$coordinates) continue;

			$delta_lat = $point['latitude'] - $coordinates['latitude'];
			$delta_lon = $point['longitude'] - $coordinates['longitude'];

			$distance[$property_id] = abs($delta_lat) + abs($delta_lon);
		}

		asort($distance);

		return $distance;
	}


}