<?php

class Property extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->page_type = 'property';
		$this->id = '';
		
		// LIBRARY LOADING
		$libraries = array('property/browse', 'property/property_get', 'utilities/header');
		$this->load->library($libraries);
		
		// VALID IDS--Corresponds to the type_category which is retail/residential/office/industrial etc
		$this->valid_ids = array('retail', 'residential', 'office_industrial');
	}
	
	// FUNCTION REMAP IS TO MAKE SURE THAT WE NEVER LAND ON A 404!
	public function _remap($id, $uri){
		
		if('search' == $id)
			$this->search();
		
		else{
		// First need to make sure that a valid id is chosen
			if(!in_array($id, $this->valid_ids))
				$this->redirect();
		
			// 	Basic parameters
			$this->id = $id;//id corresponds to type_category
			$this->category = 'all';//category corresponds to the second uri, such as rent_price/location_category/type etc
			$this->filter = 'all';//filter corresponds to how we want to filter properties ie: a certain location_category, a price range etc
		
			// Determine if category/filter is passed
			if(isset($uri[0]))
				$this->category = $uri[0];
			if(isset($uri[1]))
				$this->filter = $uri[1];
		
			// Output/Redirection
			$this->browse();
		}
	}
	
	private function redirect(){
		// Redirect to the property/office_industrial in case of an error. 
		redirect('property/office_industrial');
	}
	
	private function browse(){
			
		$page_title = $this->browse->page_header($this->id);

		//List of thumbnails that should be displayed for this id, this category and this filter
		$this->thumbnail_list = $this->browse->browse_thumbnail($this->id, $this->category, $this->filter);

		$this->header = $this->header->header_creation($this->page_type, $page_title, $this->thumbnail_list, array(), array('property_search'));//pass css as array or js as array if desired
	
		// FINAL OUTPUT
		$this->load->view('browse/browse_base');//THIS HANDLES EVERYTHING BASED ON THE $This->ID
	}

	private function search(){

		// Load method specific library -- don't load it in the construct because it is only used here
		$this->load->library('property/property_search');
		
		// this function will recieve search parameters-will be accessed from the homepage/listing page
		$this->header = $this->header->header_creation($this->page_type, 'Search Results', false, array('search.less'), array('property_search'));
		$this->search_value = $this->input->post('search');

		$this->thumbnail_list = $this->property_search->user_search($this->search_value);

		$this->load->view('browse/search_base');
	}
}