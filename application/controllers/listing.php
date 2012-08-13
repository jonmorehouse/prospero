<?php

class Listing extends CI_Controller { 
	
	function __construct() {
		parent::__construct();
		
		$this->page_type = 'listing';

		// LIBRARY LOADING
		$libraries = array('property/property_search', 'property/browse', 'utilities/header', 'session');
		$this->load->library($libraries);
		

	}
	
	public function _remap($uri) { //uri is the number or title etc
		
		// NEED A PROPERTY EXISTS MAPPING
		// WILL DETERMINE IF IT IS 0-9

		// MEANS THEY JUST WENT TO LISTING/
		if(!$uri || $uri === 'index')
			$this->redirect();
		
		// verify the listing uri with property_search--allows for searching by name
		$this->property_id = $this->property_search->listing_verification($uri);

		if($this->property_id) {
			$this->listing_view();//used to update the database
			$this->listing();//the actual listing view

		}
		else
			$this->redirect();
			
	}
		
	public function redirect() {
		// THIS IS TO REDIRECT TO ANOTHER SITE--THIS IS SO IT CAN BE CHANGED EASILY!
		redirect('property/industrial_retail');
	}
	
// 	LISTING OUTPUT
	
	public function listing() {
		
		// PAGE META DATA
		$this->page_type = 'listing';
		$page_title = $this->property_get->name($this->property_id);
		
		// THIS IS THE 
		$this->id = $this->property_get->general_raw($this->property_id, 'type');
		
		// Can pass extra css sheets or js files. Header class will check for validity so its okay to pass for local only and compile later
		$this->header = $this->header->header_creation($this->page_type, $page_title, $this->property_id, array(), array());
		
		// LOAD LISTING CLASSES -- 
		$libraries = array('listing/listing', 'listing/listing_content', 'listing/listing_media', 'listing/listing_drawers');
		$this->load->library($libraries, array('property_id' => $this->property_id));
		
		$this->listing_content->test();
		
		// VIEW OUTPUT
		// $this->load->view('listing/listing_base');
	}

	private function listing_view() {
		
		$properties_visited = $this->input->post('properties_visited');//array of all the visited properties for this user stored in the session
		
		if(!in_array($this->property_id, $properties_visited)) {
		
			$this->load->library('listing/listing_inquiry', array('property_id' => $property_id));//load the library
			$this->listing_inquiry->database_update();
			array_push($properties_visited, $this->property_id);//push property_id into the array
			$this->session->set_userdata(array('properties_visited' => $properties_visited));//update the session with visited properties
		} //end of array
		
	}

}