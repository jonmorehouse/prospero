<?php

class MY_Controller extends CI_Controller{
	
	function __construct() {

		// call our parent CI_Controller etc
		parent::__construct();

		// load our proper pages etc
		$this->load->model(array("pages/elements", "pages/navigation"));

		// now initialize the header libraries etc by using our declared page_id etc 
		$this->load->library(array('utilities/header', 'utilities/cache', 'utilities/dynamic_header', 'property/base_filter', 'property/map_api'), array("page_id" => $this->id, "page_filter" => "office_industrial"));

		// load the top_bumpboxes		
		$this->load->library(array('general/top_bumpboxes', "homepage/homepage_bumpboxes"));

	}

	// initialize basic html structure here
	protected function base() {

		// turn on caching for page speed here etc...
		//$this->output->cache(1440);

		// generic global data
		$this->header = $this->dynamic_header->get_header();//gets the dynamic header - not the tables that define the resources included
		$this->javascript_modules = $this->dynamic_header->get_javascript_modules();//get the javascript modules for this homepage
		$this->background_images = $this->elements->get_background_images();
		$this->logo = $this->navigation->get_logo($this->id);

		// generate the elements for the left side bumpboxs
		// left side bumpboxes
		$this->team_bumpbox = $this->homepage_bumpboxes->get_team();//this is the team 
		$this->services_bumpbox = $this->homepage_bumpboxes->get_services();//get the services for the navigation_left elements!
		$this->about_bumpbox = $this->homepage_bumpboxes->get_about();//get about page


		// map bumpbox -- data for the top bumpbox on the page
		$this->map_bumpbox = $this->top_bumpboxes->get_maps();//returns the map data etc

		// data that should be printed out for front-end use
		$this->data = array();

		// now cehck to see if the general_maps are cached
		$cache = $this->cache->get("general_maps");

		// 
		if ($cache) $this->data["general_maps"] = $cache;

		// if not then lets get the maps and then move forward
		else {
			
			// load this data
			$this->data["general_maps"] = $this->map_api->general_maps_data($this->map_bumpbox);

			// now cache the results
			$this->cache->set("general_maps", $this->data["general_maps"]);

		}	
	}	
}

// now require our basic controllers that serve as the bases for the rest of the webpage etc
// now require all of our other php files here?
require_once("application/core/tool_controller.php");

// require json_controller for all of our tools etc
require_once("application/core/json_controller.php");

// require our basic page controller
require_once("application/core/page_controller.php");
