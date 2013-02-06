<?php
class Listing extends CI_Controller { 
	
	function __construct() {
		parent::__construct();

		$this->load->model("general");//load this for status check -- interesting note if this doesn't exist, using it inside an if statement will just return false, not throw an error

		// LIBRARY LOADING -- these are universal 
		$libraries = array('property/base_filter', 'property/property_search', 'session', "general/page_management");
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

		// attempt to get the static content
		$static = $this->page_management->get($this->property_id);

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

	// dynamic listing is the last step -- should not happen for any live pages
	private function dynamic_listing() {

		// 
		// $this->output->cache(1440);

		// initialize library dependencies
		$libraries = array(
			"utilities/header", 
			"utilities/dynamic_header",
			"general/top_bumpboxes",
			"listing/listing_base",
			"listing/listing_bumpbox",
			"listing/listing_content",
			"listing/listing_media",
			"property/base_filter",
			'property/map_api'//used to get general map data
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
		$this->logo = $this->navigation->get_logo("listing");
		$this->background_images = $this->elements->get_background_images();
		$this->navigation_top = $this->navigation->get_navigation("global_top", $this->general->get_category($this->property_id, "type_category"));

		// generate the top elements!
		$this->navigation_left = $this->navigation->get_listing($this->property_id);

		// global bumpbox content
		$this->map_bumpbox = $this->top_bumpboxes->get_maps();

		// get the bumpbox list
		$this->left_bumpboxes = $this->navigation->get_listing_bumpboxes($this->property_id);//get the listing specific bumpboxes for this particular element 
		$this->bumpbox_content = $this->listing_bumpbox->content($this->left_bumpboxes);

		// initialize main page elements
		$this->listing_thumbnail = $this->thumbnail->general_thumbnail($this->property_id);//returns the basic thumbnail image 
		$this->content = $this->listing_content->content();//returns the description, header etc
		$this->elements = $this->listing_content->elements();//returns the name of the element

		//images
		$this->slideshow_images = $this->listing_media->slideshow_images();
		$this->thumbnail_images = $this->listing_media->slideshow_image_thumbnails();

		$this->data = array(

			"general_maps" => $this->map_api->general_map_data($this->map_bumpbox),
			"property_id" => $this->property_id,
			"slideshow_images" => $this->slideshow_images,
			"slideshow_thumbnail_images" => $this->thumbnail_images,
			"listing_bumpboxes" => $this->left_bumpboxes,
		);

		// load the views
		$this->load->view("listing/listing_base");
	}


}