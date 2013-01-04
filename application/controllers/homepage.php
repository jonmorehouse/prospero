<?php

class Homepage extends CI_Controller{
	
	function __construct() {
		parent::__construct();
		$this->id = 'homepage';
		
		$this->load->library(array('utilities/header', 'utilities/dynamic_header', 'property/base_filter', 'property/map_api'), array("page_id" => "homepage"));
		$this->load->library(array('general/top_bumpboxes', "homepage/homepage_bumpboxes"));

		$this->load->model(array("pages/elements", "pages/navigation"));
	}
	
	public function _remap($uri) {
	
		$this->index();
	}
	
	function index() {
					
		$this->output->cache(1440);

		// data
		$this->header = $this->dynamic_header->get_header();//gets the dynamic header - not the tables that define the resources included
		$this->javascript_modules = $this->dynamic_header->get_javascript_modules();//get the javascript modules for this homepage
		$this->homepage_blurbs = $this->general->get_column("homepage_blurbs", array(), "blurb", true);//generates all blurbs for the page
		$this->background_images = $this->elements->get_background_images();
		$this->logo = $this->navigation->get_logo();


		// left side bumpboxes
		$this->team_bumpbox = $this->homepage_bumpboxes->get_team();//this is the team 
		$this->services_bumpbox = $this->homepage_bumpboxes->get_services();//get the services for the navigation_left elements!
		$this->about_bumpbox = $this->homepage_bumpboxes->get_about();//get about page

		// map bumpbox
		$this->map_bumpbox = $this->top_bumpboxes->get_maps();//returns the map data etc

		// generate map data
		$this->data = array(
			"general_maps" => $this->map_api->general_map_data($this->map_bumpbox),//get the map data for all of the filters included!
		);
		
		//load and compile the view
		$this->load->view('homepage/homepage_base');//main view for this page
	}
}