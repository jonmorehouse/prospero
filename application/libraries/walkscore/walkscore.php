<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*
	Dependencies -- Codeigniter -- for api key from config file
	json_decode in php -- Dependency

	This class is responsible for interacting with the walkscore api -- to get the vanilla walk -score and the triangle of walking distance
*/

class Walkscore {

	// VARIABLE DECLARATIONS
	private $CI; //this is the codeigniter install -- useful for loading in the configuration file for walkscore

	public function __construct() {

		//initiate the codeigniter instance
		$this->CI =& get_instance();//initialize the codeigniter instance to be used in this class

		// iniitalize dependencies
		$models = array("general", "property/geographical_information");
		$this->CI->load->model($models);		

		$this->api_key = $this->CI->general->config('walkscore_api_key');//get the walkscore api key into this element

	}

/****** PUBLIC ACCESS FUNCTIONS ******/

	public function get_walkscore($property_id) {

		$request = $this->walkscore_request($property_id);

		if ($request['status'] == 2) return false;

		return $request;

	}

	public function get_walking_distance($property_id) {

		$request = $this->walking_distance_request($property_id);

		print_r($request);

		if ($request['status'] === 2) return false;

		// else return $this->walking_distance_response['walk_shed']['geometry']['coordinates'][0];//this returns an array of all the coordiantes
		return $request;

	}

/***** PRIVATE FUNCTIONS *******/

	private function walkscore_request($property_id) {

 		$address = urlencode($this->CI->general->get_category($property_id, "address"));
 		$geocoded_address = $this->CI->geographical_information->get_coordinates($property_id);

 		if (!$address || !$geocoded_address) return false;

		$url = "http://api.walkscore.com/score?format=json&address={$address}&lat={$geocoded_address['latitude']}&lon={$geocoded_address['longitude']}&wsapikey={$this->api_key}";

		$response = file_get_contents($url);//get the raw response from walkscore

		$response = json_decode($response, true);

		return $response;
	}

	// FOLLOWING GETS THE WALKING TRIANGEL FROM THE WALKSCORE API
	private function walking_distance_request($property_id) {

 		$geocoded_address = $this->CI->geographical_information->get_coordinates($property_id);

 		if (!$geocoded_address) return false;

 		// request url
		$url = "http://api.walkscore.com/walk_shed?lat={$geocoded_address['latitude']}&lon={$geocoded_address['longitude']}&wsapikey={$this->api_key}";

		// 
		$response = file_get_contents($url);

		return json_decode($response, true);
	}

}