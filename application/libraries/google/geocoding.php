<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/* 

	THIS CLASS IS USEFUL FOR INTERACTING WITH THE GOOGLE GEOCODING API TO GET THE CORRECT INFORMATION FOR LAT / LONG
	
	SIMPLY SEND THIS OBJECT AN ADDRESS AS A STRING AND THEN USE THE GET FUNCTIONS PROVIDED

*/

class Geocoding {

	private $google_response;//this is the json encoded version

	public function __construct($parameters) {

		$address = $parameters['address'];
		$this->make_request($address);

	}

	public function get_latitude() {//this will return the latitude or horizontal line == y position

		if (!$this->google_response) return false;

		else return $this->google_response['results'][0]['geometry']['location']['lat'];
	}

	public function get_longitude() {//this will return the longitude or vertical line == x position

		if (!$this->google_response) return false;

		else return $this->google_response['results'][0]['geometry']['location']['lng'];
	}

/******* PRIVATE FUNCTIONS *******/

	private function make_request($address) {

		//example geolocation request link
		//http://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&sensor=true_or_false
		$address = urlencode($address);
		$link = "http://maps.googleapis.com/maps/api/geocode/json?address={$address}&sensor=true";


		$raw_google_response = json_decode(file_get_contents($link), true);//google response--this is raw data

		if ($raw_google_response['status'] === "ZERO_RESULTS")
			$this->google_response = false;

		else
			$this->google_response = $raw_google_response;//--json decoded into an object!
	}
}