<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Test extends CI_Controller {

	function __construct() {

		parent::__construct();
		$libraries = array("property/base_filter");
		$this->load->library($libraries);

		$this->load->model('general');
	}

	public function index() {

		$this->load->library(array("listing/listing_base", "listing/listing_media"), array("property_id" => 5));

		print_r($this->listing_media->slideshow_images());
		print_r($this->listing_media->listing_thumbnail());
		print_r($this->listing_media->slideshow_images());

	}


}
