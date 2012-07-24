<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Image_management extends File_management{
	
	function __construct() {
		
		parent::__construct();
		
	}
	
	public function create_slideshow_thumbnail_image($source, $destination) {
		
		$this->copy_image($source, $destination);
		$this->image_resize($destination);
	}
	
	private function copy_image($source, $destination) {//duplicate the images
		
		$copy_file = copy($source, $destination);
		
		if(!$copy_file) {
			$this->CI->load->library('utilities/developer_contact');
			$this->CI->developer_contact->general_error("Slideshow thumbnail contact", "Was unable to copy {$source} to {$destination}");
		}
		
	}
	
	private function image_resize($file) {//this file is responsible for resizing the image
		
		/*
			1.) bash_script for sips -- called with a curl function and get here
			2.) use imagemagick -- php module plugin
			
		*/
	}
};

