<?php

class Homepage extends MY_Controller{
	
	function __construct() {

		// declare our homepage element here
		$this->id = 'homepage';
		// call the construct to initialize our models, libraries etc
		parent::__construct();
	}
	
	public function _remap($uri) {
	
		// ensure all routes reroute to the index
		$this->index();
	}
	
	public function index() {
					
		// call our basic page setup here!
		$this->base();

		// grab our homepage blurbs here!
		$this->homepage_blurbs = $this->general->get_column("homepage_blurbs", array(), "blurb", true);//generates all blurbs for the page
		$this->background_images = $this->elements->get_background_images("homepage_background");

		//load and compile the view
		$this->load->view('homepage/homepage_base');//main view for this page
	}
}