<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*
	Class Responsibilities

	1.) Get the geocoded coordinates for this property 
	2.) Get the walk score -- Save the walk score to property_location
	3.) Get the triangle and save to table property_table_coordinates
	4.) Save the page cache again -- call the property_static section
*/

class Property_automated {

	private $CI;

	public function __construct($parameters) {

		// CODEIGNITER INITIATION
		$this->CI =& get_instance();
		$this->CI->load->model('general');

		// initialize dependencies
		$this->CI->load->library(array("general/page_management", "google/geocoding", "walkscore/walkscore"));
		$this->CI->load->model(array("general", "property/save_geographical_information"));

		//Variable INITIATION
		$this->property_id = $parameters['property_id'];
	}

/****** PUBLIC FUNCTIONS *******/

	public function update_property($property_id) {
			

		// save teh lat / lon elements for this particular property
		// $this->save_geocoded_address($property_id);

		// save walkscore api data!
		// $this->save_walkscore($property_id);
		$this->save_walking_distance($property_id);

		// save a static cache
		// $this->save_static($property_id);
	}

	public function save_static() {

		$this->CI->page_management->compile($this->property_id);
		

	}

/***** PRIVATE FUNCTIONS *******/

	private function get_address($property_id) {

		$address = $this->CI->general->get_category($property_id, "address");
		$city = $this->CI->general->get_category($property_id, "city");
		$postal_code = $this->CI->general->get_category($property_id, "postal_code");

		$full_address = "${address} ${city} ${postal_code}";

		return $full_address;

	}

	private function save_geocoded_address($property_id) {

		$address = $this->get_address($property_id);
		$geocoded_address = $this->CI->geocoding->get_geocoded_address($address);

		if (!$geocoded_address) return false;

		$this->CI->save_geographical_information->save_geocoded_address($property_id, $geocoded_address);

	}

	private function save_walkscore($property_id) {

		$walkscore = $this->CI->walkscore->get_walkscore($property_id);

		$this->CI->save_geographical_information->save_walkscore($property_id, $walkscore["walkscore"]);
		$this->CI->save_geographical_information->save_walkscore_description($property_id, $walkscore["description"]);

	}

	// for now, all the properties are returning a status of 2 == not available yet -- fml
	private function save_walking_distance($property_id) {

		$request = $this->CI->walkscore->get_walking_distance($property_id);

		echo "Need to implement functionality later when walkscore has proper responses for properties";

		// if ($request) 
			// $this->CI->save_geographical_information->save_walking_distance()

	}
}