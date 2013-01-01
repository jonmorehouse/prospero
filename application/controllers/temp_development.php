<?php
	
class Temp_development extends CI_Controller {

	function __construct() {

		parent::__construct();//call parent constructor
		$this->load->model('general');
		$this->load->library(array("utilities/format", "general/page_management"));

	}	

	public function compile() {

		$property_id = $this->uri->segment(3);
		$this->page_management->compile($property_id);


	}

	public function compile_all() {

		$this->page_management->compile_all();
	}

	public function config_settings() {

		$config(

		);

		foreach ($config as $key => $value)
			$this->db->insert("config_settings", array("element_id" => $key, "value" => $value));		

	}

	public function global_categories() {


		$global = array("property_content", "meta_description", "meta_keywords", "thumbnail_blurb");

		foreach ($global as $category) 
			$this->db->where(array("category" => $category))->update("category_type_categories", array("global_content" => false));

	}

	public function allow_defaults() {

		$allowed = array("type", "type_category", "no_vacancies", "new_property", "meta_keywords", "meta_description");

		foreach ($allowed as $category) 
			$this->db->where(array("category" => $category))->update("category_type_categories", array("default_allowed" => true));
		
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

			"resources/css/local/bumpbox.less",

			"resources/css/local/listing.less",

		);

		foreach ($resources as $resource) {

			$data = array("url" => $resource, "file_type" => "stylesheet/less", "status" => false, "page_id" => "listing");
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

			$insert = array("url" => $resource, "status" => false, "page_id" => "listing");
			$this->db->insert("javascript_resources", $insert);
		}	
	}

	public function javascript_module() {

		$module = array(

			"url" => "resources/javascript/modules/modules/inquire_controller.js",
			"type" => "modules",
			"page_id" => "listing",
			"status" => false
		);

		$this->db->insert("javascript_modules", $module);


	}

	public function javascript_modules() {

		$modules = array(
			array("type" => "modules", "url" => "resources/javascript/modules/modules/bumpbox.js"),
			array("type" => "site_wide", "url" => "resources/javascript/modules/site_wide/site_wide.js"),
			array("type" => "pages", "url" => "resources/javascript/modules/pages/site_wide.js"),
			array("type" => "pages", "url" => "resources/javascript/modules/pages/listing.js"),
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
			$module['page_id'] = "listing";

			$this->db->insert("javascript_modules", $module);

		}

	}

	public function google_api() {

		$insert_data = array(

			'url' => "http://maps.googleapis.com/maps/api/js?key=AIzaSyBgNXY0_P4HuxH3N1ClOSerzSdH7dF7wfs&sensor=false",
			'page_id' => "listing",
			'status' => false,	
		);

		$this->db->insert("javascript_resources", $insert_data);
		
	}
}