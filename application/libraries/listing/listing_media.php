<?php

/*
	responsible for creating all html for media for the listing page
	responsible for the pdf/video
	responsible for slideshow html as well
	
*/

class Listing_media extends Listing {
	
	public function __construct($parameters) {
		
		parent::__construct($parameters);
	
	}
	
	public function test() {
		
		echo $this->property_id;
		
	}
	
	public function media_status($category) { /** THIS function is only to show the status for pdfs/videos and other media types like those in the future*/
		
		$category = "{$category}_id";
		$table = $this->CI->general->get_category_table($category);
		
		$query = $this->CI->general->get($table, array('property_id' => $this->property_id));
		
		if($query)
			$status = $query->row()->status;
		else //the query was false
			$status = $query;
			
		return $status;
		
	}
	
	public function slideshow() {//will return the slideshow for the content page
		
		
		
	}




};