<?php
	
class Temp_development extends CI_Controller {

	function __construct() {

		parent::__construct();//call parent constructor
		$this->load->model('general');
		$this->load->library('utilities/format');

	}

	public function temp() {

		$libraries = array("property/base_filter", "property/property_filter");
		$this->load->library($libraries, array("category" => "type", "filter" => "rent"));

		$this->property_filter->get_thumbnails("new");				

	}

	/****** CSS DB UPDATING *********/
	public function css() {

		$resources = array(
			"resources/css/local/property.less",
			"resources/css/local/bumpbox.less",

		);

		foreach ($resources as $resource) {

			$data = array("url" => $resource, "file_type" => "stylesheet/less", "status" => false, "page_id" => "property");
			$this->db->insert("stylesheets", $data);

		}

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
			array("type" => "modules", "url" => "resources/javascript/modules/modules/bumpbox.js"),
			array("type" => "site_wide", "url" => "resources/javascript/modules/site_wide/site_wide.js"),
			array("type" => "pages", "url" => "resources/javascript/modules/pages/site_wide.js"),
			array("type" => "pages", "url" => "resources/javascript/modules/pages/homepage.js"),
			array("type" => "modules", "url" => "resources/javascript/modules/modules/background_gallery.js"),
			array("type" => "modules", "url" => "resources/javascript/modules/modules/thumbnail_controller.js"),
			array("type" => "modules", "url" => "resources/javascript/modules/modules/contact.js"),
			array("type" => "modules", "url" => "resources/javascript/modules/modules/form_animation.js"),
			array("type" => "pages", "url" => "resources/javascript/modules/pages/homepage_maps.js"),
			array("type" => "modules", "url" => "resources/javascript/modules/modules/bumpbox_map_controller.js"),
			array("type" => "modules", "url" => "resources/javascript/modules/modules/general_map.js"),
		);

		foreach ($modules as $module) {

			$module['status'] = false;
			$module['page_id'] = "property";

			$this->db->insert("javascript_modules", $module);

		}

	}

	public function google_api() {

		$insert_data = array(

			'url' => "http://maps.googleapis.com/maps/api/js?key=AIzaSyBgNXY0_P4HuxH3N1ClOSerzSdH7dF7wfs&sensor=false",
			'page_id' => "property",
			'status' => false,	
		);

		$this->db->insert("javascript_resources", $insert_data);
		
	}
}