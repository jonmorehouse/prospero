<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Listing_bumpbox extends Listing_base {

	function __construct($parameters) {

		parent::__construct($parameters);//call the parent element and initialize

		// declare dependencies for both libraries and models. Everything will be loaded up here to help with future development
		$libraries = array(

			"property/similar_properties",//very small and subclassed but useful for show 
			"property/media",//media
			"property/nearby_properties"//
		);

		// declare model dependencies - direct db access through these libraries
		$models = array(

			"general",//general settings
			"bumpbox/bumpbox_thumbnails",//bumpbox thumbnails for different elements
			"pages/inquire", //general inquire information
			"bumpbox/walkscore"
		);

		$this->CI->load->library($libraries);
		$this->CI->load->model($models);
	}

	// responsible for returning an array of the proper html. We don't want to have to mess with this in the controller since there is more complex logic going on here
	public function content($bumpboxes) {

		$html = array();//an array of all the bumpboxes' data

		// check if function exists etc
		foreach ($bumpboxes as $key => $bumpbox) {

			$method = "get_{$bumpbox}";

			if (!method_exists($this, $method)) {

				unset($bumpboxes[$key]);
				$bumpboxes = array_values($bumpbox);
			}

			$html[$bumpbox] = $this->{$method}();			
		}

		return $html;
	}	

	private function get_similar_properties() {

		// gather the relevant properties
		$property_ids = $this->CI->similar_properties->similar_properties($this->property_id);//
	
		$thumbnails = array();

		foreach ($property_ids as $property_id)
			array_push($thumbnails, $this->CI->bumpbox_thumbnails->similar_property($property_id));		


		return $this->CI->load->view("bumpboxes/listing_similar_properties", array("thumbnails" => $thumbnails), true);//return the raw html to the element
	
	}

	private function get_listing_inquire() {

		$data = $this->CI->inquire->inquire_data($this->property_id);
		$html = $this->CI->load->view("bumpboxes/listing_inquire", array("data" => $data), true);

		return $html;

	}

	private function get_listing_pdf() {

		$pdf_status = $this->CI->media->get_media($this->property_id, "pdf");

		$data = array(

			"thumbnail" => $this->CI->thumbnail->general_thumbnail($this->property_id),
			"name" => $this->CI->general->get_category($this->property_id, "name"),
			"status" => $pdf_status,
		);

		if (!$pdf_status) $data['message'] = $this->CI->messages->general_message("no_pdf");

		else 
			$data['link'] = $this->CI->media->get_pdf($this->property_id);


		$html = $this->CI->load->view("bumpboxes/listing_pdf", array("data" => $data), true);

		return $html;

	}

	private function get_listing_map() {//should be offloaded to another library for eas

		// 1.) Nearby properties -- based off of the walking triangle?
		// 2.) Directions -- will be through the google directions api
		// 3.) NearBy places -- put the walkscore information there as well
		// most of this content is hard coded in the view because its so specialized

		$data = array(

			"nearby_properties" => $this->CI->nearby_properties->get_content($this->property_id, $this->CI->general->config("max_nearby_properties")),

			"walkscore" => $this->CI->walkscore->walkscore($this->property_id),

			"directions" => array(
				"center" => $this->CI->geographical_information->get_coordinates($this->property_id),
				"thumbnail" => $this->CI->thumbnail->general_thumbnail($this->property_id),
			),
		);

		$html = $this->CI->load->view("bumpboxes/listing_map",$data,true);//return the parsed html

		return $html;
	}

}