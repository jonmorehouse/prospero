<?php

class Listing{
	
	protected var $property_id;
	
	public function __construct($parameters) {
		
		echo "in the listing section";
		print_r($parameters);
		
		echo $this->property_id;
	}
	
	
};