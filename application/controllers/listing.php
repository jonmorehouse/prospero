<?php

class Listing extends CI_Controller { 
	
	function __construct() {
		parent::__construct();

		$this->load->model('general');

		// LIBRARY LOADING -- these are universal 
		$libraries = array('property/property_search', 'property/browse', 'session');
		$this->load->library($libraries);

	}
	
	public function _remap($uri) { //uri is the number or title etc
		
		// MEANS THEY JUST WENT TO LISTING/
		if(!$uri || $uri === 'index')
			$this->redirect();
		
		// verify the listing uri with property_search--allows for searching by name
		$this->property_id = $this->property_search->listing_verification($uri);

		// if the property id exists, we need to show it!
		if($this->property_id) $this->listing();

		else
			$this->redirect();
	}
		
	public function redirect() {
		// THIS IS TO REDIRECT TO ANOTHER SITE--THIS IS SO IT CAN BE CHANGED EASILY!
		redirect('property/industrial_retail');
	}
	
/******** LISTING CONTROLLER ***********/
	
	public function listing() {

		if (!$this->general->get_category('property_status'))
			redirect();

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

		// this is the file name of the localized static pages!
		$file_name = "property_static_pages/{$this->property_id}";

		// check if this file exists
		if (file_exists($file_name)) return file_get_contents($file_name);//clean up later-- check safe for production
			
		// if not return false and the dynamic page will be loaded
		else return false;	
	}

	// dynamic listing is the last step -- should not happen for any live pages
	private function dynamic_listing() {

		// CLASS DEPENDENCIES
		$header_libraries = array('utilities/header', 'utilities/dynamic_header');//header only
		$listing_libraries = array('listing/listing_base', 'listing/listing_inquiry', 'listing/listing_content', 'listing/listing_media', 'listing/listing_drawers');//various listing pieces

		// load the actual libraries
		$this->load->library($listing_libraries, array('property_id' => $this->property_id));
		$this->load->library($header_libraries, array('property_id' => $this->property_id));

		// load additional needed libraries
		$this->load->model('general');

		/***** GENERATE CONTENT FOR THE LISTING_BASE VIEW *******/
		// header / meta information
		$this->header = $this->dynamic_header->get_header();
		$this->javascript_modules = $this->dynamic_header->get_javascript_modules();

		// LISTING INFORMATION
		$this->slideshow_images = $this->listing_media->slideshow_images();//get the slideshow image urls
		$this->slideshow_thumbnail_images = $this->listing_media->slideshow_thumbnails();//get the small thumbnails for the individual slideshow for this property		

		// VIEW OUTPUT
		$this->load->view('listing/listing_base');
	} 
}