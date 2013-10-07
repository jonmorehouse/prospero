<?php

class Browse_listings extends MY_Controller {
	
	function __construct() {

		// declare our homepage element here
		$this->id = 'property';
		
		// call the construct to initialize our models, libraries etc
		parent::__construct();
		
		// call our basic page setup here!
		$this->base();

		// mega hackk!!
		$this->id="browse_listings";

		// now load in the models we need for this piece
		$this->load->model("property/property_listing");

	}
	
	public function index() {
					
		// now initialize base
		// get the thumbnails needed here for each element
		$this->thumbnails = $this->property_listing->get_thumbnails();

		//load and compile the view
		$this->load->view('browse/browse_listings_base');//main view for this page
	}
}
