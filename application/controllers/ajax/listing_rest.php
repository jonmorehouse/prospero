<?php

class Listing_rest extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->property_id = $this->input->post('property_id');
		$this->property_id = 50;
		
		$libraries = array('listing/listing', 'listing/listing_media');
		$this->load->library($libraries, array('property_id' => $this->property_id));
	}
	
	public function email() {
		
		$sender = $this->input->post('sender');
		$message = $this->input->post('message');
		$subject = $this->input->post('subject');
		
		$this->load->library('listing/listing_inquiry', array('property_id' => $this->property_id));
		$this->listing_inquiry->property_inquiry($message, $subject, $sender);
		
		echo "Message sent successfully.";

	}
}