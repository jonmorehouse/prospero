<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Listing extends MY_Model {

	function __construct() {

		// load and call the parents etc
		parent::__construct();

		// load any external models that are required for this application
		$this->load->model(array("property/thumbnail"));

		// now load in library
		$this->load->library(array("property/media"));

	}

	public function get_listings() {

		$listings = $this->filter();
		
		// initialize a place to store all of the thumbnails
		$thumbnails = array();

		// grab the thumbnail for each property id returned as a part of this filter 
		foreach ($listings as $property_id) 
			array_push($thumbnails, $this->get_thumbnail($property_id));

		// return the thumbnails
		return $thumbnails;
	}	


	public function get_thumbnail($property_id) {

		// grab the thumbnail from the general thumbnail with all other relevant content
		$thumbnail = $this->thumbnail->general_thumbnail($property_id);

		// get the pdf for this element
		$thumbnail["pdf_status"] = $this->media->get_media($property_id, "pdf");

		// now lets initialize the link if we have the pdf status
		if ($thumbnail["pdf_status"]) 
			$thumbnail["pdf_link"] = $this->media->get_pdf($property_id);

		return $thumbnail;
	}

	public function filter() {
	
		// filter logic for the listings page etc
		$all_properties = $this->general->get_live_properties();
		$filtered_properties = array();

		// now lets loop through the 
		foreach ($all_properties as $property_id) {
			
			// filter the properties correctly
			if ($this->general->get_unformatted_category($property_id, "type") == "buy")
				array_push($filtered_properties, $property_id);
		}
		
		// now return the filtered properties array
		return $filtered_properties;
	}


}
