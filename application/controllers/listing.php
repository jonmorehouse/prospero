<?php

class Listing extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		
		$this->page_type = 'listing';

		// LIBRARY LOADING
		$libraries = array('property/property_search', 'property/browse', 'utilities/header');
		$this->load->library($libraries);
		
	}
	
	public function _remap($uri){ //uri is the number or title etc
		
		// NEED A PROPERTY EXISTS MAPPING
		// WILL DETERMINE IF IT IS 0-9

		// MEANS THEY JUST WENT TO LISTING/
		if(!$uri || $uri === 'index')
			$this->redirect();
		
		// verify the listing uri with property_search--allows for searching by name
		$this->property_id = $this->property_search->listing_verification($uri);

		if($this->property_id)
			$this->listing();
		else
			$this->redirect();
			
	}
		
	function redirect(){
		// THIS IS TO REDIRECT TO ANOTHER SITE--THIS IS SO IT CAN BE CHANGED EASILY!
		redirect('property/industrial_retail');
	}
	
// 	LISTING OUTPUT
	
	function listing(){
		
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



}