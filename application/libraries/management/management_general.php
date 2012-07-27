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
		$search_form = "\n<h1>{$this->CI->format->word_format($tool)}</h1>";
		$search_form .= "\n<div id='search_form'>";
		
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
		$form .= "\n<div id='preview'>Please visit media status page to activate/deactivate media</div>";//please note controllers/ajax/management for the thumbnail preview!
		
		return $form;
		
	}
	
	public function media_status($property_id) {
		
		// get the categories such as thumbnail, pdf, slideshow images and video
		$media_types = $this->get_individual_categories('media');//used to change whether or not certain images are live or not
	
		$destination = site_url('ajax/management/media_status');

		$form = "\n<div id='form' data-destination='{$destination}' data-property_id='{$property_id}' data-form_type='media_status'>";//parent form
		
		foreach($media_types as $media_type) {//need to generate the list for each one and then generate a radio from there
			

			$media_id_list = $this->CI->media->get_media_list($property_id, $media_type);//will return an array of all properties available
			
			$exists = (boolean)count($media_id_list);//count the media_list and use a boolean
			$category = "{$media_type}_id";
			
			if($exists) {
				
				$form .= "\n<h1>{$this->CI->format->word_format($media_type)}</h1>";
				$form .= "\n<form data-category='{$category}' data-property_id='{$property_id}'>";//category 
			}
			
			foreach($media_id_list as $media_id) {
				
				$form .= "\n<div>";
				$form .= "\n\t<span>{$this->CI->property_get->get_media_thumbnail($media_type, $media_id)}</span>";//create thumbnail
				// special form with data values for form submission
				//javascript creates an object with key of category and then has members inside with media_id and true or false
				$form .= "\n\t<span>{$this->media_status_form($category, $media_id)}</span>";//actual form section
				$form .= "\n</div>";
			}
			
			$form .= "</form>";//end of individual media_category form
		}
		
		$form .= "\n</div>";
		
		
		return $form;
	}
	
	public function property_status() {//generate a list of properties available to the manager to remove and then it will be saved with ajax/management calling the property_set class
		$destination = site_url('ajax/management/listing_status');
		$form = "\n<h1>Activate/Deactivate Properties</h1>";
		$form .= "\n<div id='form' data-form_type='property_status' data-destination='{$destination}'>";//parent form

		foreach($this->property_list as $property_id) {
			
			$form .= "\n\t<form data-property_id='{$property_id}' data-category='property_status'>";
			$form .= "\n\t\t<span>{$this->CI->property_get->thumbnail_image($property_id)}</span>";
			$form .="\n\t\t<span>";
			$form .= $this->status_form($property_id, 'property_status');//generates a live/not live form for each
			$form .= "\n\t\t</span>";
			$form .= "\n\t</form>";//individual form is used to create the same form input several times but with different values so there is not interference with the different radios
		}
		
		$form .= "\n</div>";
		
		return $form;
	}//end property status method
	
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

	private function media_thumbnail($property_id, $type, $media_id = 1) {//just returns the basic image tag for a media url

		if('thumbnail_image' == $type)
			return $this->CI->property_get->get_media_thumbnail($type, $media_id);

		else if ('slideshow_image' == $type)
			return $this->CI->format->image_tag($this->CI->config->item('default_slideshow_image_url'), "", $type);

		else if('pdf' == $type)//don't want the url generated in media because only need the thumbnail here. Don't want it other places
			return $this->CI->format->image_tag($this->CI->config->item('default_pdf_url'), "", $type);

		else if('video' == $type)
			return $this->CI->format->image_tag($this->CI->config->item('default_video_thumbnail_url'), "", $type);
		
	}

};
