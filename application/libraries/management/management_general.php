<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

// WHATS THE REASON FOR THIS CLASS?? TO SEPERATE CONTENT FROM MODELS--THIS IS EASY TO USE IN THE VIEWS--IN ALL VIEWS!
// TO HELP KEEP STUFF LIKE DOLLAR SIGNS/ETC FROM MY VIEWS--NORMALIZATION OF DATA!!!!!!!

/********** NOTE THAT FOR THE UPDATE TOOL, IT IS AJAX DRIVEN SO THE URL DOES NOT MATTER. STILL REROUTE IT TO THE PROPER AJAX *********/

class Management_general extends Management_forms {	

	function __construct($parameters){
		
		parent::__construct($parameters);
		$this->CI->load->library('user_access/admin');
		
		$this->url = site_url('management');
		$this->property_list = $this->CI->admin->property_list($this->username);
		
		$this->CI->load->config('site_status');
	}
	
	/********** PUBLIC FUNCTIONS ************/
	
	public function search($tool) {

		$this->set_configuration($tool);
		$this->CI->load->library('property/browse');
		$this->set_header();
		
		$categorized_properties = $this->CI->browse->categorized_properties($this->property_list);
		
		// SEARCH FORM CLASSES
		$search_form = "\n<div id='search_form'>";
		
		foreach($categorized_properties as $category => $property_ids) {//key is the header, value is the list of property ids in that category!
			
			$search_form .= "\n\n<br /><h2>{$category}</h2><hr /><br /><br /><div>\n";
			
			foreach($property_ids as $property_id) {
				
				$search_form .= $this->thumbnail($property_id);
				
			}//end property_id list for single category
			
			$search_form .= "</div>";
		}//end categorized list loop
		
		$search_form .= "\n</div>\n";
		return $search_form;
	}	
	
	public function remove_listing($property_id) {
		
		$this->set_configuration('remove_listing');
		
		$form = "\n";
		$form .= "\n<h1>Remove {$this->CI->property_get->name($property_id)}</h1>";
		$form .= "\n<form action='{$this->process_url}/{$property_id}' method='post'>";
		$form .= "\n\t<button type='submit'>Remove</button>";
		$form .= "\n</form>";
		$form .= "\n<form action='{$this->url}'>";
		$form .= "\n\t<button type='submit'>Not Now</button>";
		
		return $form;
	}
	
	public function upload_media($property_id) {
		
		// This function is used to dynamically generate all of the categories for the radio dropdown to be used in the upload_media form
		$media_categories = $this->get_individual_categories('media');//get the dropdown options for the media form
		$destination = site_url('management/process/' . $property_id);
		
		// Form creation
		$form = "\n<h1>Upload Media for {$this->CI->property_get->name($property_id)}</h1>";
		$form .= "\n<form action='{$destination}' method='post' enctype='multipart/form-data'>";
		$form .= "\n<span>Media Type:</span>";
		$form .= $this->dropdown($media_categories, 'type');
		$form .= "\n<input type='file' name='media' />";
		$form .= "\n<span>Maximum File Size: {$this->CI->format->max_file($this->CI->config->item('max_file'))}</span>";
		$form .= "\n<input type='submit' name='submit' />";
		$form .= "\n</form>"; 
		$form .= "\n<div id='preview'></div>";//please note controllers/ajax/management for the thumbnail preview!
		
		return $form;
		
	}
	/******* PRIVATE FUNCTIONS *********/
	
	private function set_configuration($tool) {
		
		$this->action = $tool;
		$this->header = $this->CI->format->word_format($tool);
		$this->thumbnail_message = $this->CI->format->word_format($tool);
		$this->process_url = "{$this->url}/process/{$this->action}";
		$this->tool_url = "{$this->url}/{$this->action}";
	}
	
	private function set_header() {
		
		// This will be used to set the 'name' in the thumbnail for the action
		if($this->action == 'video_upload')
			$this->header = "Upload Video";

		else if('thumbnail_upload' == $this->action)
			$this->header = "Upload Thumbnail";

		else if('slideshow_upload' == $this->action)
			$this->header = "Upload Slideshow Images";
	}
	
	private function thumbnail($property_id) {
		
		$thumbnail = "\n<div class='thumbnail'>";
		$thumbnail .= "\n\t<span>{$this->CI->property_get->thumbnail_image($property_id)}</span>";
		$thumbnail .= "\n\t<span>{$this->CI->property_get->name($property_id)}</span>";
		$thumbnail .= "\n\t<span><a href='{$this->tool_url}/{$property_id}'>{$this->header} Property</a></span>";
		$thumbnail .= "\n</div>";
		
		return $thumbnail;
	}

	
};
