<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Thumbnail extends CI_Model {

	function __construct() {

		parent::__construct();
		$this->load->model("general");
		$this->load->library('property/media');
	}

	/***** COMPILED THUMBNAILS *****/
	public function general_thumbnail($property_id) {

		return array(

			"property_url" => $this->general->listing_link($property_id),
			"image" => $this->get_image($property_id),
			"header" => $this->get_name($property_id),
			"name" => $this->get_name($property_id),
			"blurb" => $this->get_blurb($property_id)
		);
	}


	/******* THUMBNAIL ELEMENTS *******/
	public function get_status($property_id) {

		return $this->general->live($property_id);

	} 

	public function get_url($property_id) {

		$relative = "listing/${property_id}";//we can map this to other features in the future -- to make prettier urls
		return site_url($relative);
	}

	public function get_image($property_id) {

		return $this->media->get_thumbnail($property_id);

	}

	public function get_blurb($property_id) {

		return $this->general->get_category($property_id, "thumbnail_blurb");

	}

	public function get_name($property_id) {

		return $this->general->get_category($property_id, "name");
	}
}