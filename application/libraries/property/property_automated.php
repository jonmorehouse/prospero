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

	private $property_id,
		$address,
		$geocoded_address;

	public function __construct($parameters) {

		// CODEIGNITER INITIATION
		$this->CI =& get_instance();
		$this->CI->load->model('general');
		$this->CI->load->library("general/static");

		//Variable INITIATION
		$this->property_id = $parameters['property_id'];
		$this->address = $this->get_address();
		$this->geocoded_address = $this->get_geocoded_address();//geocode our address

		//Class - Wide library initiation -- we only instantiate if the geocoding went through properly
		if ($this->geocoded_address['latitude'] && $this->geocoded_address['longitude'])
			$this->CI->load->library('walkscore/walkscore', array('address' => $this->address, 'latitude' => $this->geocoded_address['latitude'], 'longitude' => $this->geocoded_address['longitude']));
	}

/****** PUBLIC FUNCTIONS *******/

	public function update_property() {

		if ($this->geocoded_address['latitude'] && $this->geocoded_address['longitude']) {

			$this->update_geocoded_address();
			$this->update_walkscore();
			$this->update_walking_distance();
		}

		return $this;
	}

	public function update_static() {

		$this->CI->static->compile($this->property_id);
	}

/***** PRIVATE FUNCTIONS *******/

	private function get_address() {

		$address = $this->CI->general->get_category($this->property_id, "address");
		$city = $this->CI->general->get_category($this->property_id, "city");
		$postal_code = $this->CI->general->get_category($this->property_id, "postal_code");

		$full_address = "${address} ${city} ${postal_code}";

		return $full_address;

	}

	private function get_geocoded_address() {

		$this->CI->load->library('google/geocoding', array('address' => $this->address));

		$geocoded_address = array();
		$geocoded_address['latitude'] = $this->CI->geocoding->get_latitude();
		$geocoded_address['longitude'] = $this->CI->geocoding->get_longitude();

		return $geocoded_address;
	}

	private function update_geocoded_address() {

		$table = $this->CI->general->get_category_table("latitude");

		$update_data = array('latitude' => $this->geocoded_address['latitude'], 'longitude' => $this->geocoded_address['longitude']);

		$this->CI->general->update($table, array('property_id' => $this->property_id), $update_data);
	}

	private function update_walkscore() {

		$table = $this->CI->general->get_category_table("walkscore");

		$walkscore = $this->CI->walkscore->get_walkscore();

		$update_data = array('walkscore' => $walkscore);

		$this->CI->general->update($table, array('property_id' => $this->property_id), $update_data);

	}

	private function update_walking_distance() {

		// this is going to loop through an array of values and will insert each one into this!~
		$table = "property_triangle_coordinates";

		// get the coordinate triangle
		$coordinates = $this->CI->walkscore->get_walking_distance();

		//check coordinates to see if they exist for this element
		if ($coordinates) {
			// remove all coordiantes that exist
			$this->CI->general->delete($table, array('property_id' => $this->property_id));

			// add all new coordinates
			foreach ($coordinates as $coordinate) {

				$insert_data = array('property_id' => $this->property_id, 'latitude' => $coordinate[0], 'longitude' => $coordinate[1]);
				$this->CI->general->insert($table, $insert_data);
			}//end foreach loop
		}
	}//end method
}