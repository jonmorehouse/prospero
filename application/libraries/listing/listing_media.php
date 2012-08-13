<?php

class Listing_media extends Listing{
	
	public function __construct() {
		
		parent::__construct($parameters);
	
	}
	
	public function test() {
		
		echo $this->property_id;
		
	}
	
	
	
	
	
	
};