<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Thumbnail extends CI_Model {

	function __construct() {

		parent::__construct();
		$this->load->model("general");

		$this->load->library('property/media');

	}

	public function get_status($property_id) {

		return $this->general->live($property_id);

	} 

	public function get_url($property_id) {

		$relative = "listing/${property_id}";//we can map this to other features in the future -- to make prettier urls
		return site_url($relative);
	}

	public function get_image($property_id) {

		$image_id = $this->media->get_thumbnail($property_id);

	}

	public function get_blurb($property_id) {

		return $this->general->get_category($property_id, "thumbnail_blurb");

	}

	public function get_name($property_id) {

		return $this->general->get_category($property_id, "name");
	}
}