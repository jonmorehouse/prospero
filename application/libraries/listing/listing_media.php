<?php

/*
	responsible for creating all html for media for the listing page
	responsible for the pdf/video
	responsible for slideshow html as well
	
*/

class Listing_media extends Listing {

/******* CONSTRUCTS / DESTRUCTS ********/

	public function __construct($parameters) {
		
		parent::__construct($parameters);
		$this->CI->load->library('utilities/file_analysis');
	}
	
/********** PUBLIC FUNCTIONS ***********/
	
	public function media_status($category) { /** THIS function is only to show the status for pdfs/videos and other media types like those in the future*/
		
		$category = "{$category}_id";
		$table = $this->CI->general->get_category_table($category);
		
		$query = $this->CI->general->get($table, array('property_id' => $this->property_id));
		
		if($query)
			$status = $query->row()->status;
		else //the query was false
			$status = $query;
			
		return $status;
		
	}
	
	public function slideshow_image($url) {// will create the url for an individual slideshow image
		
		$html = "<img src='{$url}' alt='{$this->get('name')}' />"; 
		
		return $html;
		
	}
	
	public function slideshow() {//will return the slideshow for the content page
		
		
		
	}

	public function video($browser_type) {//will return the proper video_url for the video player
		
		// default extension
		$extension = "mp4";

		if($browser_type == 'firefox')	
			$extension = 'ogg';
		
		// get proper media_id for the video
		$media_id = $this->CI->media->get_media($this->property_id, 'video');
		
		if(!$media_id) // return false if no url
			return false;
		
		// get url
		$url = $this->CI->media->get_url('video', $media_id);
		
		// get clean url
		$url = $this->CI->file_analysis->extension_switch($url, $extension);
		
		// create html tag for the source 
		$html = "<source src='{$url}' type='video/{$extension}' />";
		
		return $html;
	}

};