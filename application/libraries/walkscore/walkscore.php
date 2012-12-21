<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*
	Dependencies -- Codeigniter -- for api key from config file
	json_decode in php -- Dependency

	This class is responsible for interacting with the walkscore api -- to get the vanilla walk -score and the triangle of walking distance
*/

class Walkscore {

	// VARIABLE DECLARATIONS
	private $CI; //this is the codeigniter install -- useful for loading in the configuration file for walkscore

	// class variables
	private $address, 
		$latitude,//y position on map
		$longitude,//x position on map
		$api_key,//walk score api key as set in site_status
		$walkscore_response,//base walkscore response from api
		$walking_distance_response;//walking distance response from api

/****** CONSTRUCTORS / DESTRUCTORS *******/

	public function __construct($parameters) {

		//initiate the codeigniter instance
		$this->CI =& get_instance();//initialize the codeigniter instance to be used in this class
		$this->CI->config->load('site_status');//this contains various api keys etc

		//generate class wide variables
		$this->address = urlencode($parameters['address']);//get the address and initialize throughout the class
		$this->latitude = $parameters['latitude'];//horizontal line / y position
		$this->longitude = $parameters['longitude'];//this is the vertical line / x position on the map
		$this->api_key = $this->CI->config->item('walkscore_api_key');//get the walkscore api key into this element

		// run the walkscore apis
		$this->walkscore_response = $this->set_walkscore();//this is the set walk score method
		$this->walking_distance_response = $this->set_walking_distance();//this will set the triangle of points around the area that are considered within walking distance

	}

/****** PUBLIC ACCESS FUNCTIONS ******/

	public function get_walkscore() {

		if ($this->walkscore_response['status'] === 2) return false;

		else return $this->walkscore_response['walkscore'];

	}

	public function get_walking_distance() {

		if ($this->walking_distance_response['status'] === 2) return false;

		else return $this->walking_distance_response['walk_shed']['geometry']['coordinates'][0];//this returns an array of all the coordiantes

	}

/***** PRIVATE FUNCTIONS *******/

	private function set_walkscore() {

		$url = "http://api.walkscore.com/score?format=json&address={$this->address}&lat={$this->latitude}&lon={$this->longitude}&wsapikey={$this->api_key}";

		$raw_response = file_get_contents($url);//get the raw response from walkscore

		$raw_response = json_decode($raw_response, true);

		return $raw_response;

	}

	// FOLLOWING GETS THE WALKING TRIANGEL FROM THE WALKSCORE API
	private function set_walking_distance() {

		// this is the base url -- note walkscore api for information regarding this--we request this as json
		// $url = "http://api.walkscore.com/walk_shed?lat={$this->latitude}&lon={$this->longitude}&wsapikey={$this->api_key}";
		$url = "http://api.walkscore.com/walk_shed?lat=47.5815&lon=-122.335&wsapikey={$this->api_key}";
		// get the results of the element
		$raw_response = file_get_contents($url);


		$raw_response = json_decode($raw_response, true);

		return $raw_response;
	}

}