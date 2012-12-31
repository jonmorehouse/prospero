<?php

class Listing_inquiry extends Listing_base {
	
/***** CONSTRUCTOR/DESTRUCTOR METHODS ******/
	
	private $message;
	private $subject;
	private $sender;
	private $weekend_manager;
	
	public function __construct($parameters) {
			
		parent::__construct($parameters);
		$this->CI->load->library("utilities/date");



	}
	
	
/****** PUBLIC FUNCTIONS ******/	

	public function database_update() {
		
		$db_date = $this->CI->date->db_date();
		
		$this->CI->general->insert('listing_views', array('property_id' => $this->property_id, 'visit' => $db_date));
	}

};
