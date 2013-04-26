<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Assets extends CI_Controller {

	function __construct() {

		parent::__construct();//call parent constructor
		$this->load->model('general');
		$this->load->library(array("utilities/format", "general/page_management"));
	}	


	public function javascript_resources() {

		// general resources element for all pages throughout
		$resources = array(
			// "resources/javascript/resources/modernizr.js",
			// "resources/javascript/resources/jquery-1.7.1.min.js",
			// "resources/javascript/resources/jquery-ui-1.8.18.custom.min.js",
			// "resources/javascript/resources/less-1.3.0.min.js",
			// "resources/javascript/resources/angular.min.js",
			// "resources/javascript/resources/require.js"
			// "http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBgNXY0_P4HuxH3N1ClOSerzSdH7dF7wfs&sensor=false",
			// "resources/javascript/resources/infobox.js",
			
		);

		// loop through all of resources and add them to the current page!
		foreach ($resources as $resource) {

			$insert = array("url" => $resource, "status" => false, "page_id" => "vacancies");
			$this->db->insert("javascript_resources", $insert);
		}	
	}

	public function javascript_module() {

		$urls = array(

			// "resources/javascript/modules/site_wide/site_wide.js",
			// "resources/javascript/modules/modules/bumpbox.js",
			// "resources/javascript/modules/pages/site_wide.js",
			// "resources/javascript/modules/modules/background_gallery.js",
			// "resources/javascript/modules/modules/thumbnail_controller.js",
			// "resources/javascript/modules/modules/contact.js",
			// "resources/javascript/modules/modules/form_animation.js",
			// "resources/javascript/modules/modules/general_maps.js",
			// "resources/javascript/modules/modules/general_map.js",
			// "resources/javascript/modules/pages/bumpbox.js",
			"resources/javascript/modules/pages/vacancies.js"
		);

		// cache this for closure use
		$_this = $this;

		// insert closure element here
		$insert = function($url) use ($_this) {

			$data = array(

				"url" => $url,
				"type" => "pages",
				"page_id" => "vacancies",	
				"status" => false
			);

			// 
			$_this->db->insert("javascript_modules", $data);

		};

		// insert each url into the database
		foreach ($urls as $url)
			$insert($url);

	}

	// initialize basic modules for new pages etc...
	public function javascript_modules() {

		$query = $this->db->where(array("page_id" => "homepage"))->where("url !=", "resources/javascript/modules/pages/homepage.js")->get("javascript_modules");

		foreach ($query->result() as $row) {

			$data = array(

				"page_id" => "vacancies",
				"url" => $row->url,
				"type" => $row->type,
			);

			$this->db->insert("javascript_modules", $data);
		}

	}

	public function add_require_module() {

		$data = array(
			
			"page_id" => "admin",	
			"status" => false,
			"url" => "resources/javascript/admin/app.js"
		);

		// actually insert our array of data into the database to start automated loading of the require modules
		$this->db->insert("require_modules", $data);
	}


	// create a quick function to add a new stylesheet to the database!
	private function add_stylesheet($page_id, $url, $live = false) {

		// create our data object for the individual stylesheet
		$data = array(
			"url" => $url,
			"status" => $live,
			"page_id" => $page_id,
			"file_type" => ($live) ? ("text/css") : ("stylesheet/less"),
		);		

		// actually insert the stylesheet into our database
		$this->db->insert("stylesheets", $data);
	}

	// public accessor function for the stylesheets 
	public function stylesheets() {

		// set the page_id variable for the stylesheets element
		$page_id = "vacancies";
		$urls = array("resources/css/local/admin.less");

		// now loop through each of the urls and add the asset
		foreach ($urls as $url)
			$this->add_stylesheet($page_id, $url);

	}


}
