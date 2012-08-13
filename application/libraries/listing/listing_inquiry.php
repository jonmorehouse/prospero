<?php

class Listing_content extends Listing{
	
/***** CONSTRUCTOR/DESTRUCTOR METHODS ******/
	
	private $message;
	private $subject;
	private $sender;
	private $weekend_manager;
	
	public function __construct($parameters) {
		
		parent::__construct($parameters);
		$this->CI->load->library('utilities/date');
		$this->weekend_manager = $this->get('weekend_manager');//boolean to be used throughout this library
		$this->CI->config->load('site_status');
		$this->sender = $this->CI->config->item('webmaster_email');
	}
	
	
/****** PUBLIC FUNCTIONS ******/	

	public function database_update() {
		
		$db_date = $this->CI->date->db_date();
		
		$this->CI->general->insert('listing_views', array('property_id' => $this->property_id, 'visit' => $db_date));
		
	}

	public function property_inquiry($message, $subject, $sender) {

		$this->sender = $sender;
		$this->subject = "Inquiry for {$this->get('name')}";
		$message = wordwrap($text, 60, "<br />\r\n");
		
		// COMPILE MESSAGE
		$this->message = "<h2>{$this->get('name')} Inquiry</h2>";
		$this->message .= "<p>Inquiry made on {$this->CI->date->word_date()}</p>";
		$this->message .= "<p>Topic: {$subject}</p>";
		$this->message .= "<p>Sender: {$sender}</p>";
		$this->message .= "<p>{$message}</p>";
	}
	

/****** PRIVATE FUNCTION ********/

	private function email() {//will be used to send messages to listing managers based on which properties they are connected too
		
		// will send an html email complete with headers in this section
		$headers  = 'MIME-Version: 1.0' . "\r\n";//html5 headers
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";//html 5 headers

		// CREATE HEADERS for these emails
		$headers .= "To: {$this->get('manager_first_name')} {$this->get('manager_last_name')} <{$this->CI->general->get_category('manager_email')}>";
		
		// ONLY ADD A SECOND USER IF THE WEEKEND MANAGER EXISTS
		if($this->get('weekend_manager')) 
			$headers .= ", {$this->get('weekend_manager_first_name')} {$this->get('weekend_manager_last_name')} <{$this->CI->general->get('weekend_manager_email')}>";//
		
		$headers .= "\r\n";//end of headers for users/destinations
		$headers .= "From: Listing Inquiry <{$this->sender}>\r\n";//to be used for the reply
		
		mail($this->category(''), $this->subject, $this->message, $headers);
	}
};
