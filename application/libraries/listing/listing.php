<?php

class Listing{
	
	protected $property_id;
	
	public function __construct($parameters) {
		
		
		
	}
	
	protected function get($category) {
		
		$category_value = $this->CI->general->get_category($this->property_id, $category);
		$category_value = $this->CI->format->word_format($category);
		
		return $category_value;
	}
};