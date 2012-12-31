<?php

class Listing extends CI_Controller { 
	
	function __construct() {
		parent::__construct();

		$this->load->model("general");//load this for status check -- interesting note if this doesn't exist, using it inside an if statement will just return false, not throw an error

		// LIBRARY LOADING -- these are universal 
		$libraries = array('property/base_filter', 'property/property_search', 'session');
		$this->load->library($libraries);
	}
	
	public function _remap($uri) { //uri is the number or title etc
		
		//check than an initial listing url was handled
		if(!$uri || $uri === 'index') return $this->redirect();

		// verify the listing uri with property_search--allows for searching by name
		$this->property_id = $this->property_search->listing_verification($uri);

		// if not a valid property id then redirect
		if (!$this->property_id) return $this->redirect();

		// ensure that we are working with a live property for this site
		if (!$this->general->live($this->property_id)) return $this->redirect();

		// return the listing elements
		$this->listing();//run the actual listing page because this is a valid request
	}

		
	public function redirect() {
		// THIS IS TO REDIRECT TO ANOTHER SITE--THIS IS SO IT CAN BE CHANGED EASILY!
		redirect('property/industrial_retail');
	}
	
/******** LISTING CONTROLLER ***********/
	
	public function listing() {

		$this->listing_view();

		$static = $this->static_listing();

		if (!$static) $this->dynamic_listing();

		else echo $static;
	}

/*********** IMPLEMENTATION OF THE LISTING *************/
//listing view is responsible for setting whether or not a listing was viewed by a user
	private function listing_view() { 

		// LOAD LIBRARIES FOR THIS ELEMENT
		$this->load->library('session');
			
		// LOGIC FOR THE LISTING VIEW 
		if(!array_key_exists('properties_visited', $this->session->all_userdata()))//check to make sure that the properties visited actually exist in the session data
			$this->session->set_userdata(array('properties_visited' => array()));//if they don't, you need to add an empty array

		// all properties that were visited by the user thus far
		$properties_visited = $this->session->userdata('properties_visited');
		
		// required libraries for this functionality
		$required_libraries = array('listing/listing_base', 'listing/listing_inquiry');

		// only initiate the libraries and add the view if it was unique for this user
		if(!in_array($this->property_id, $properties_visited)) {//need to record this as a unique view for the elements
		
			$this->load->library($required_libraries, array('property_id' => $this->property_id));

			$this->listing_inquiry->database_update();//update the datbase with this information

			// now update the cookie
			array_push($properties_visited, $this->property_id);//push property_id into the array
			$this->session->set_userdata(array('properties_visited' => $properties_visited));//update the session with visited properties
		
		} //end of array
	}

	// static listing will generate the static page status and will return the contents if it exists
	private function static_listing() {//this will return the listing content if the static page exists, otherwise will return false

		return false;//this functionality can come later
		// this is the file name of the localized static pages!
		$file_name = "property_static_pages/{$this->property_id}";

		// check if this file exists
		if (file_exists($file_name)) return file_get_contents($file_name);//clean up later-- check safe for production
			
		// if not return false and the dynamic page will be loaded
		else return false;	
	}

	// dynamic listing is the last step -- should not happen for any live pages
	private function dynamic_listing() {

		// initialize library dependencies
		$libraries = array(
			"utilities/header", 
			"utilities/dynamic_header",
			"listing/listing_base",
			"listing/listing_bumpbox",
			"listing/listing_content",
			"listing/listing_media",
		);

		$this->load->library($libraries, array("page_id" => "listing", "property_id" => $this->property_id));

		$models = array(
			"pages/navigation",
			"pages/elements",
			"property/thumbnail",
		);

		$this->load->model($models);

		// initilialize basic elements
		$this->header = $this->dynamic_header->get_header();
		$this->javascript_modules = $this->dynamic_header->get_javascript_modules();
		$this->logo = $this->navigation->get_logo();
		$this->background_images = $this->elements->get_background_images();
		$this->navigation_top = $this->navigation->get_navigation("global_top");
		$this->navigation_left = $this->navigation->get_listing($this->property_id);

		// get the bumpbox list
		$this->left_bumpboxes = $this->navigation->get_listing_bumpboxes($this->property_id);//get the listing specific bumpboxes for this particular element 
		$this->top_bumpboxes = $this->navigation->get_bumpboxes();//gets a list of the navigation_top bumpboxes

		// initialize a library that will output the proper bumpboxes based on what bumpboxes that the navigation elements return
		//bumpboxes are responsible for passing their own data		
		$this->top_bumpbox_content = $this->navigation->get_bumpboxes();//get the top bumpboxes
		$this->left_bumpbox_content = $this->listing_bumpbox->content($this->left_bumpboxes);//generates the bumpoxes for the view ... will be an array of pure content

		// initialize main page elements
		$this->thumbnail = $this->thumbnail->general_thumbnail($this->property_id);//returns the basic thumbnail image 
		$this->content = $this->listing_content->content();//returns the description, header etc
		$this->elements = $this->listing_content->elements();//returns the name of the element

		//images
		$this->slideshow_images = $this->listing_media->slideshow_images();
		$this->thumbnail_images = $this->listing_media->slideshow_image_thumbnails();

		$this->data = array(
			"property_id" => $this->property_id,
			"slideshow_images" => $this->slideshow_images,
			"slideshow_thumbnail_images" => $this->thumbnail_images,
			"listing_bumpboxes" => $this->left_bumpbox_content,
		);

		// load the views
		$this->load->view("listing/listing_base");
	}


}