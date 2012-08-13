<?php

class Listing_content extends Listing{
	
/***** CONSTRUCTOR/DESTRUCTOR METHODS ******/
	
	public function __construct($parameters) {
		
		parent::__construct($parameters);
		
	}
	
	
/****** PUBLIC FUNCTIONS ******/	

	public function test() {
		
		
		echo $this->property_id;
	}

/********* PRIVATE FUNCTIONS *******/	
	
};
