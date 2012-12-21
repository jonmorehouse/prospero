<?php

class General extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	
	function search(){

		// Load libraries for this function
		$this->load->library('property/property_search');

		// input form data
		$input = $this->input->post('search');

		// get thumbnails
		$this->thumbnail_list = $this->property_search->user_search($input);
		
		if($this->thumbnail_list)
			foreach((array)$this->thumbnail_list as $thumbnail['property_id'])
				$this->load->view('browse/resources/thumbnail', $thumbnail);
		else
			$this->load->view('browse/resources/message');
	}
}
