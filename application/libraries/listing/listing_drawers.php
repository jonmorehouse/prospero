<?php
/*
	this class is for the drawers in the listing page.
	to add a new draw tab, please look into available_drawers() and edit the arrays there!
*/

class Listing_drawers extends Listing_base{

/******** CLASS WIDE VARIABLES *********/
	
	private $available_drawers = array();
	private $universal_drawers = array('contact', 'map', 'walk_score', 'other_properties');
	private $media_drawers = array('video', 'pdf');
	private $category_drawers = array();//functionality is here, to add a new category just change the array and create proper function below

/********* CLASS CONSTRUCTORS *********/	
	
	public function __construct($parameters) {
		
		parent::__construct($parameters);
		$this->CI->load->library('listing/listing_media');//used to check the status of drawers
		$this->available_drawers();
		
	}

/******** PUBLIC FUNCTIONS ******/	
	
	public function drawers() {//will return the correct drawers with the proper data-types for the actual tags
		
		$html = "\n\t<ul>";

		foreach ($available_drawers as $drawer)
			$html .= "\n\t<li data-drawer_id='{$drawer}'>{$this->header($drawer)}</li>";
		
		$html .= "\n\t</ul>";
		
		
	}

	public function drawer_content() {//automatically creates a div for each available drawer to be used
		
		$html = "";
		
		foreach ($this->available_drawers as $drawer) {//add the proper drawer content 
			$html .= "\n\t<div data-drawer_id='{$drawer}'>";
			$html .= $this->$drawer();
			$html .= "\n\t</div>";
		}
		
		echo $html;
		
		return $html;
	}

/****** PRIVATE FUNCTIONS *******/
	
	private function available_drawers() {//creates all of the available drawers to be used in this class
		
		$this->available_drawers = $this->universal_drawers;
		
		foreach ($this->media_drawers as $media_category) {//pdf/video and other media types like those in the future
			
			$status = $this->CI->listing_media->media_status($media_category);//check to make sure the category is accessible

			if($status)
				array_push($this->available_drawers, $media_category);
		}
		
		foreach ($this->category_drawers as $category) {//will check the categories to see if this should be included -- ex. weekend_manager
			
			$status = $this->get($category);
			
			if($status)
				array_push($this->available_drawers, $category);
		}

	}
	
	// word format -- this is useful for the drawer names etc
	private function header($header) {/* Responsible for changing any headers to account for extra characters throughout this class */
		
		return $this->CI->format->word_format($header);
		
	}
	
// 	specific drawer contents

	private function pdf() {//will only be called if the pdf actually exists from the available_drawers classes from before
	
		$media_id = $this->get('pdf_id');
		$url = $this->CI->media->get_url('pdf', $media_id);//if for some reason media_id returns false this will take care of it by adding the default
		
		$html = "<a href='{$url}' target='new'>Download PDF</a>";
		
		return $html;
	}
	
	private function video() {//this is the video loader -- obsolete as of right now
		// WILL USE JAVASCRIPT TO LOAD IN THE VIDEO UPON LOADING
		
		$media_id = $this->get('video_id');

		$html = "<video>";
		$html .= "</video>";
		
		return $html;
	}
	
	private function contact() {//contact html -- this will be what sends the email for when users inquire
		
		$name = $this->CI->format->word_format("{$this->get('manager_first_name')} {$this->get('manager_last_name')}");
		$html = "<div data-manager_email='{$this->get('manager_email')}'";
		$html .= "\n\t<span>{$this->get('manager_first_name')}";
		
		
	}
	
	private function map() {
	
		return "";//this will be implemented in later -- this will 
		
	}
	
	private function walk_score() {
		
		return "";
		
	}


};