<?php

class Listing_media extends Listing{
	
	public function __construct($parameters) {
		
		parent::__construct($parameters);
	
	}
	
	public function slideshow() {
		
		echo $this->property_id;
		
	}
	
	
	
	
	
	
};