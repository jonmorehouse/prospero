<?php

// Will come back to this class later to see how to best organize the images.
// Not sure of the server software, so for now lets just use the slideshow images for the thumbnails and the actual slideshow images. Just resize them!



class Listing_media extends Listing_base{

/******* CONSTRUCTS / DESTRUCTS ********/

	public function __construct($parameters) {
		
		parent::__construct($parameters);
		$this->CI->load->library('utilities/file_analysis');
		$this->CI->load->library('property/media');

		$this->init();
	}

	public function listing_thumbnail() {

		return $this->CI->media->get_thumbnail($this->property_id);
	}

	// return an array of the slideshow images
	public function slideshow_images() {

		return $this->slideshow_images;
	}

	// return an array of the slideshow images
	public function thumbnail_images() {

		// return an array of alts / src / media_id for each elements
		// will add in functionality for image updating etc later on
		return $this->thumbnail_images;
	}

	private function init() {

		//generate a list of the slideshow images to be used by both the thumbnails 
		$image_ids = $this->CI->media->get_media_list($this->property_id, 'slideshow_image');//this should be an array of image ids! -- set this globally so that the thumbnails can be used
		$this->thumbnail_images = array();
		$this->slideshow_images = array();

		$alt = $this->CI->general->get_category($this->property_id, "name");//get the name id

		foreach ($image_ids as $image_id) {

			$url = $this->CI->media->get_url("slideshow_image", $image_id);

			$image = array (

				"alt" => $alt,
				"url" => $url,
			);

			array_push($this->thumbnail_images, $image);
			array_push($this->slideshow_images, $image);
		}
	}



};