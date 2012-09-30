<?php

/*
	responsible for creating all html for media for the listing page
	responsible for the pdf/video
	responsible for slideshow html as well
	
*/

class Listing_media extends Listing_base{

/******* CONSTRUCTS / DESTRUCTS ********/

	public function __construct($parameters) {
		
		parent::__construct($parameters);
		$this->CI->load->library('utilities/file_analysis');
		$this->CI->load->library('property/media');

		//generate a list of the slideshow images to be used by both the thumbnails 
		$this->images = $this->CI->media->get_media_list($this->property_id, 'slideshow_image');//this should be an array of image ids! -- set this globally so that the thumbnails can be used

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
	
	public function image_tag($url) {// will create the url for an individual slideshow image
		
		$html = "<img src='{$url}' alt='{$this->get('name')}' />"; 
		
		return $html;
	}
	
	public function slideshow_thumbnails() {//this will return the slideshow image urls

		// grab all of the images, and then retrieve their thumbnails using the media class
		// for each of the slideshow image ids, we need to generate a thumbnail url to show in the slideshow -- these are auto-generated and should all be working
		//need to have some sort of validation system to ensure that all images work properly

		$thumbnails = array();

		//generate each of the thumbnail_urls
		foreach($this->images as $image_id)
			array_push($thumbnails, $this->CI->media->get_slideshow_thumbnail_url($image_id));

		return $thumbnails;
	}

	public function slideshow_images() {//will return the slideshow for the content page
	
		//note that the construct creates a list of media ids for all of the images to be used by this property
		// we need to convert those into urls to be used for the slideshow
		$urls = array();

		foreach ($this->images as $image_id) 
			array_push($urls, $this->CI->media->get_url('slideshow_image', $image_id));

		return $urls;
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