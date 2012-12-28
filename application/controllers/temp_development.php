<?php
	
class Temp_development extends CI_Controller {

	function __construct() {

		parent::__construct();//call parent constructor
		$this->load->model('general');
		$this->load->library('utilities/format');

	}

	public function temp() {

		$data = array("page_id" => "homepage", "title" => "Prospero Real Estate");

		$this->db->insert("page_titles", $data);


	}



	/****** JAVASCRIPT DB UPDATING *******/

	public function javascript_resources() {

		$resources = array("resources/javascript/resources/jquery-1.7.1.min.js",
			"resources/javascript/resources/jquery-ui-1.8.18.custom.min.js",
			"resources/javascript/resources/less-1.3.0.min.js",
			"resources/javascript/resources/modernizr.js");

		foreach ($resources as $resource) {

			$insert = array("url" => $resource, "status" => false, "page_id" => "property");
			$this->db->insert("javascript_resources", $insert);

		}	
	}

	public function javascript_modules() {

		$modules = array(

			"resources/javascript/modules/modules/bumpbox.js",
			"resources/javascript/modules/site_wide/site_wide.js",
			"resources/javascript/modules/pages/site_wide.js",
			"resources/javascript/modules/modules/background_gallery.js",
			"resources/javascript/modules/modules/thumbnail_controller.js",
			"resources/javascript/modules/modules/contact.js",
			"resources/javascript/modules/modules/form_animation.js",
			"resources/javascript/modules/pages/homepage_maps.js",
			"resources/javascript/modules/modules/bumpbox_map_controller.js",
			"resources/javascript/modules/modules/general_map.js",

		);

		foreach ($modules as $module) {

			$insert = array("page_id" => "property", "status"=> false, "url" => $module);
			$this->db->insert("javascript_modules", $insert);
		}

	}

	public function google_api() {

		$insert_data = array(

			'url' => "http://maps.googleapis.com/maps/api/js?key=AIzaSyBgNXY0_P4HuxH3N1ClOSerzSdH7dF7wfs&sensor=false",
			'page_id' => "browse",
			'status' => false,	
			// 'type' => 'site_wide',		
		);

		$this->db->insert("javascript_resources", $insert_data);
		
	}
}