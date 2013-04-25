<?php

class Tool_Controller extends CI_Controller{
	
	function __construct() {

		// call our parent CI_Controller etc
		parent::__construct();

		// load our proper pages etc
		$this->load->model(array("pages/elements", "pages/navigation"));

		// now initialize the header libraries etc by using our declared page_id etc 
		$this->load->library(array('utilities/header', 'utilities/dynamic_header', 'utilities/require_header', 'property/base_filter', 'property/map_api'), array("page_id" => $this->id));

		// load the top_bumpboxes		
		$this->load->library(array('general/top_bumpboxes', "homepage/homepage_bumpboxes"));

	}

	// initialize basic html structure here
	protected function base() {

		// $this->output->cache(1440);

		// generic global data
		$this->header = $this->require_header->get_header();//gets the dynamic header - not the tables that define the resources included
		$this->javascript_modules = $this->dynamic_header->get_javascript_modules();//get the javascript modules for this homepage
		$this->background_images = $this->elements->get_background_images("homepage_background");
		$this->logo = $this->navigation->get_logo($this->id);
	}	

}