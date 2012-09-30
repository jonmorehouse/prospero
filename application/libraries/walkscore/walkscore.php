<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*
	Dependencies -- Codeigniter -- for api key from config file
	json_decode in php -- Dependency

	This class is responsible for interacting with the walkscore api -- to get the vanilla walk -score and the triangle of walking distance

*/

class Walkscore {

	private $CI; //this is the codeigniter install -- useful for loading in the configuration file for walkscore
	private $walk_score;//this is the walk score number -- an integer
	private $walking_distance = array();//this is an array of walking distance around the area

	public function __construct($parameters) {

		$this->CI =& get_instance();//initialize the codeigniter instance to be used in this class
		$this->address = urlencode($parameters['address']);//get the address and initialize throughout the class
		$this->latitude = $parameters['latitude'];//horizontal line / y position
		$this->longitude = $parameters['longitude'];//this is the vertical line / x position on the map

		$this->set_walkscore();//this is the set walk score method
		$this->set_walking_distance();//this will set the triangle of points around the area that are considered within walking distance
	}

	public function get_walking_distance() {





	}

	public function get_walkscore() {





	}

	private function set_walkscore() {

		$url = "http://api.walkscore.com/score?format=json&address={$this->address}&lat={$this->lat}&lon={$this->lon}&wsapikey={$this->api_key}";

		$raw_response = file_get_contents($url);//get the raw response from walkscore

		print_r(json_decode($raw_response));

	}

	private function set_walking_distance() {

		$url = "http://api.walkscore.com/walk_shed?lat={$this->latitude}&lon={$this->longitude}&wsapikey={$this->api_key}";

		$raw_response = file_get_contents($url);

		$points = $raw_response['walk_shed']['geometry']['coordinates'];//this is the coordinates array

	}

}