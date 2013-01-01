<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Test extends CI_Controller {

	function __construct() {

		parent::__construct();
		$libraries = array("property/base_filter");
		$this->load->library($libraries);

		$this->load->model('general');
	}

	public function index() {

		$this->load->library(array("listing/listing_base", "listing/listing_media", "listing/listing_content", "listing/listing_bumpbox"), array("property_id" => 5));
			
		print_r($this->listing_bumpbox->content(array("listing_map")));

	}



}
