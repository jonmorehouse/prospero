<?php

class Homepage extends CI_Controller{
	
	function __construct() {
		parent::__construct();
		$this->id = 'homepage';
		
		$this->load->library(array('utilities/header', 'utilities/dynamic_header'), array("page_id" => "homepage"));
		$this->load->library('homepage/bumpbox_content');

		$this->load->model("utilities/background_images");
	}
	
	public function _remap($uri) {
	
		$this->index();
	}
	
	function index() {
				
		// data
		$this->header = $this->dynamic_header->get_header();//gets the dynamic header - not the tables that define the resources included
		$this->javascript_modules = $this->dynamic_header->get_javascript_modules();//get the javascript modules for this homepage
		$this->homepage_blurbs = $this->general->get_column("homepage_blurbs", array(), "blurb", true);//generates all blurbs for the page
		$this->background_images = $this->background_images->get_images();

		// left side bumpboxes
		$this->team_bumpbox = $this->bumpbox_content->get_team();//this is the team 
		$this->services_bumpbox = $this->bumpbox_content->get_services();//get the services for the navigation_left elements!
		$this->about_bumpbox = $this->bumpbox_content->get_about();//get about page

		// map bumpbox
		$this->map_bumpbox = $this->bumpbox_content->get_maps();//returns the map data etc

		//load and compile the view
		$this->load->view('homepage/homepage_base');//main view for this page
	}
}