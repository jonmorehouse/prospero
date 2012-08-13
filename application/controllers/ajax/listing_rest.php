<?php

class Listing_rest extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->property_id = $this->input->post('property_id');
		$this->property_id = 50;
		
		$libraries = array('listing/listing', 'listing/listing_media');
		$this->load->library($libraries, array('property_id' => $this->property_id));
	}
	
	public function video() {
		
		// $browser_type = $this->input->post('browser_type');
		$browser_type = "firefox";
		$video = $this->listing_media->video($browser_type);
		
		if(!$video)	
			echo $this->return_false();
		else
			echo $video;
		
	}
	
	public function slideshow_image() {//will be responsible for getting an image_tag
		
		$media_id = $this->input->post('media_id');
		$image = $this->listing_media->slideshow_image($media_id);
		
		if(!$image)
			echo $this->return_false();
		else
			echo $image;
	}
	
	public function email() {
		
		$sender = $this->input->post('sender');
		$email = $this->input->post('destination');// should be an array
		$message = $this->input->post('message');
		$subject = $this->input->post('subject');

		
		// SUBMIT EMAIL
		$this->email->from($sender, "{$this->property->get($this->property_id)} Customer Inquiry");
		$this->email->to(); 
		
		$this->email->subject($subject);
		$this->email->message($message);	

		$this->email->send();		
		
		
	}

	private function return_false() {
		
		$tag = "<script type='text/javascript'>";
		$tag .= "\n\tmsg={};";
		$tag .= "\n\tmsg.status=false;";
		$tag .= "</script>";
		
		return $tag;
	}

}