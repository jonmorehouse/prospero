<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/* 

	THIS CLASS IS USEFUL FOR INTERACTING WITH THE GOOGLE GEOCODING API TO GET THE CORRECT INFORMATION FOR LAT / LONG
	
	SIMPLY SEND THIS OBJECT AN ADDRESS AS A STRING AND THEN USE THE GET FUNCTIONS PROVIDED

*/

class Geocoding {


	public function __construct() {


	}

	public function get_geocoded_address($address) {

		//example geolocation request link
		//http://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&sensor=true_or_false
		$address = urlencode($address);
		$link = "http://maps.googleapis.com/maps/api/geocode/json?address={$address}&sensor=true";

		$response = json_decode(file_get_contents($link), true);//google response--this is raw data

		if ($response['status'] === "ZERO_RESULTS") return false;

		return array(
			"formatted_address" => $response['results'][0]['formatted_address'],
			"latitude" => $response['results'][0]['geometry']['location']['lat'],
			"longitude" => $response['results'][0]['geometry']['location']['lng']
		);
	}




}