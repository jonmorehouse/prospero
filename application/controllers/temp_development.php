<?php

class Temp_development extends CI_Controller {

	function __construct() {

		parent::__construct();//call parent constructor
		$this->load->model('general');
		$this->load->library(array("utilities/format", "general/page_management"));
	}	

	public function update_geo() {


		$this->load->library("property/property_automated", array("property_id" => 5));

		for ($i = 0, $z = 60; $i < $z; $i++)
			$this->property_automated->update_property($i);
	}

	public function compile() {

		$property_id = $this->uri->segment(3);
		$this->page_management->compile($property_id);

	}

	public function compile_all() {

		$this->page_management->compile_all();
	}

	public function insert_message() {

		$message = file_get_contents("temp");
		$data = array("message_id" => "no_listings", "message"=>$message);
		$this->db->insert("general_messages", $data);

	}

	public function browse_test() {

		$libraries = array("property/base_filter", "property/property_filter");
		$this->load->library($libraries, array("category" => "type_category", "filter" => "office_industrial"));

		$this->property_filter->get_thumbnails("all");				

	}

	/****** CSS DB UPDATING *********/
	public function css() {

		$resources = array(

			"resources/css/local/management.less",
		);

		foreach ($resources as $resource) {

			$data = array("url" => $resource, "file_type" => "stylesheet/less", "status" => false, "page_id" => "management");
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

			$insert = array("url" => $resource, "status" => false, "page_id" => "management");
			$this->db->insert("javascript_resources", $insert);
		}	
	}

	public function javascript_module() {

		$module = array(

			"url" => "resources/javascript/modules/modules/map_controller.js",
			"type" => "modules",
			"page_id" => "listing",
			"status" => false
		);

		$this->db->insert("javascript_modules", $module);


	}

	public function javascript_modules() {

		$modules = array(
			array("type" => "site_wide", "url" => "resources/javascript/modules/site_wide/site_wide.js"),
			array("type" => "pages", "url" => "resources/javascript/modules/pages/site_wide.js"),
			array("type" => "modules", "url" => "resources/javascript/modules/modules/background_gallery.js"),
			array("type" => "modules", "url" => "resources/javascript/modules/modules/form_animation.js"),
			array("type" => "modules", "url" => "resources/javascript/modules/pages/management.js"),

		);

		foreach ($modules as $module) {

			$module['status'] = false;
			$module['page_id'] = "management";

			$this->db->insert("javascript_modules", $module);

		}

	}


}