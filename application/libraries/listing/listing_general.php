<?php

class Listing_general extends Library{
	
	public function __construct($parameters) {
		
		parent::__construct($parameters);
		
	}
	
	public function test() {
		
		
		echo $this->property_id;
	}
	
	
};