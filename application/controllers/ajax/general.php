<?php

class General extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function background_gallery(){
		// THIS FUNCTION WILL LOAD THE SLIDESHOW INTO THE DOM UNDER ELEMENT #background
 		$files = $this->file_analysis->file_list('resources/images/background', 'image');
		for($i=1; $i<count($files); $i++)//skip the first one because the background is already loaded
			echo "\n<img src='" . base_url('resources/images/background/' . $files[$i]) . "' />\n"; 

		// NO MORE BUTTONS AS WE HAVE GONE TO AN AUTOMATED GALLERY!
		// $this->load->view('homepage/buttons');
		
	}	
	
	function testing(){
		
		$this->load->library('utilities/uri_counter');
		$this->uri_counter->last_element();
		$uri = $this->uri->segment(3);
		$var = ($uri ? $uri: 'tsting');
		echo $var;
	
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
