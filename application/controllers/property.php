<?php

class Property extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->page_type = 'property';
		$this->id = '';
		
		// VALID IDS--Corresponds to the type_category which is retail/residential/office/industrial etc
		$this->valid_ids = array('retail', 'residential', 'office_industrial');
	}
	
	// FUNCTION REMAP IS TO MAKE SURE THAT WE NEVER LAND ON A 404!
	public function _remap($id, $uri){
		
		$post = $this->input->post();

		// validate for the rest api segment of this
		if ($post && array_key_exists("data", $post)) {

			echo "REST API FUNCTIONALITY NOT COMPLETED YET";
		}

		// validate for a search page
		else if ($id === "search" && $post && array_key_exists("search", $post)) {

			$this->id = "search";
			$this->output();
		}
		
		// just a user browsing!
		else {
		// First need to make sure that a valid id is chosen
			if(!in_array($id, $this->valid_ids))
				$this->redirect();
		
			// 	Basic parameters
			$this->id = $id;//id corresponds to type_category
			$this->category = 'all';//category corresponds to the second uri, such as rent_price/location_category/type etc
			$this->category_filter = 'all';//category_filter corresponds to how we want to category_filter properties ie: a certain location_category, a price range etc
		
			// Determine if category/category_filter is passed
			if(isset($uri[0]) && strlen($uri[0]) > 0)
				$this->category = $uri[0];
			if(isset($uri[1]) && strlen($uri[1]) > 0)
				$this->category_filter = $uri[1];

			// Output/Redirection
			$this->output();
		}
	}
	
	private function redirect(){
		// Redirect to the property/office_industrial in case of an error. 
		redirect('property/office_industrial');//default re-route
	}
	
	private function output(){
				
		// load general libraries
		$libraries = array("utilities/header","utilities/dynamic_header", "general/top_bumpboxes");
		$this->load->library($libraries, array('page_id' => $this->page_type, "page_filter" => $this->id));

		// load models
		$this->load->model(array("pages/elements", "pages/headers", "pages/messages", "pages/navigation"));


		// get the basic header
		$this->header = $this->dynamic_header->get_header();//get the current header element
		// now get the basic modules
		$this->javascript_modules = $this->dynamic_header->get_javascript_modules();//get the current javascript modules for this page
		// get the background image information
		$this->background_images = $this->elements->get_background_images();
		$this->logo = $this->navigation->get_logo($this->id);

		// map bumpbox
		$this->map_bumpbox = $this->top_bumpboxes->get_maps();//returns the map data etc

		$this->thumbnails = $this->get_thumbnails();//seperate the logic out into another method for grabbing the proper thumbnail!

		// this is the box in the middle of the screen the user sees
		$this->thumbnail_label = ($this->id === "search") ? ($this->headers->search_header()) : ($this->headers->browse_header($this->id, $this->category));

		// FINAL OUTPUT
		$this->load->view('browse/browse_base');//THIS HANDLES EVERYTHING BASED ON THE $This->ID
	}

	private function rest_search() {

		// validate rest and then return thumbnails etc
		// return json elements here

	}

	private function get_thumbnails() {

		$this->load->library("property/base_filter");//initialize the base filter

		if ($this->id == "search") {

			$this->load->library("property/property_search");

			$properties = $this->property_search->general_search($this->input->post("search"));
		}

		else {

			// load property search classes
			$libraries = array("property/base_filter", "property/property_filter");
			$this->load->library($libraries, array("category" => "type_category", "filter" => $this->id));//initialize the category_filter library for the type of page this is

			$properties = $this->property_filter->filter_properties($this->category, $this->category_filter);
		}

		if (!count($properties))
			return $this->messages->no_listings();

		return $this->base_filter->get_thumbnails($properties);
	}

}