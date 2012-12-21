<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Browse{
	
	var $CI;
	
	function Browse() {
		$this->CI =& get_instance();
		
		$models = array('property/search', 'property/information');
		$this->CI->load->model($models);

		// USE METHOD->$this->search->retrieve('type'=rent/buy, 'category'=column/all, 'order'=high_to_low, low_to_high, alphabetical)
	}

	public function browse_thumbnail($type, $category, $filter) {
		
		// 	THIS IS TO QUERY THE DATABASE FOR PROPERTIES--THIS WILL GRAB ALL OF THE 'RAW' PROPERTIES FOR EACH TYPE
		// GET RAW RESULTS--CRITERIA RESPONDS TO A CATEGORY WHICH IS A LOCATION THAT GETS JOINED TO PROPERTY_TYPE
		$unfiltered_list = $this->CI->search->retrieve($type, $category);
		
		$filtered_list = $this->filter($unfiltered_list, $category, $filter);
		
		$sort_category = $this->sort_category($category);//--SEE NOTES BELOW
		
		$sort_order = $this->sort_order($sort_category);
		
		// WE NEED SOME SORT OF SORTING MECHANISM?--TO DECIDE IF WE SHOULD 
		$sorted_list = $this->CI->search->sort($filtered_list, $sort_category, 'low_to_high');//--SEE NOTES BELOW
		
		return $sorted_list;
	}
	
	public function management_thumbnail($type) {

		// THIS IS FOR THE SELECTION OF PROPERTIES IN THE MANAGEMENT APPLICATION!
	
		$unsorted_list = $this->CI->search->retrieve($type, 'all');//THIS RETURNS THE ROW_ARRAYS
		
		return $this->CI->search->sort($unsorted_list, 'name', 'alphabetical');//THIS RETURNS MIDDLE PARAMETER ONLY

	}
	
	public function page_header($id) { 
		
		if($id === 'office_industrial')
			$header = 'Office and Industrial Properties';

		else if($id === 'retail')
			$header = 'Retail Properties';
		
		else if ($id === 'residential')
			$header = 'Residential Properties';
		
		return $header;
	}

	public function browse_header($id, $category = false, $filter = false) {
		
		// ID refers to the top_level_category!--ie: industrial/retail, residential etc
			
		$header = $this->page_header($id);

		if ($filter != "all" && $filter) {

			echo $this->CI->format->word_format($category);
			echo $this->CI->format->word_format($filter);

		}

		// RETURN HEADER
		return $header;

	}



	/*
	Categorized properties -- get properties based on categories
	
	*/
	public function categorized_properties($property_list) {
		
		$categorized_properties = array();

		foreach($property_list as $property_id) {

			// this is the type category such as retail, residential
			$type_category = $this->CI->general->get_category($property_id, "type_category");

			// check if this is an array key == we are sending back an array of arrays
			if (!isset($categorized_properties[$this->CI->format->comparison_format($type_category)])) 
				$categorized_properties[$this->CI->format->comparison_format($type_category)] = array();

			// push the property_id into the proper categorized_properties array
			array_push($categorized_properties[$this->CI->format->comparison_format($type_category)], $property_id);
		}
		
		return $categorized_properties;
	}
	
/***********************************************************************************************************************************/
	
	private function filter($unfiltered_list, $category, $filter){//THIS WILL BE A LARGE FUNCTION. RESPONSIBLE FOR 
		// THIS NEEDS TO BE UPDATED FOR THE RENT_PROPERTY FILTERS
		// THIS IS ONLY CALLED FOR THE BROWSE PIECE WHICH IS IN THE BROWSE_THUMBNAIL AND ONLY IF A FILTER IS SENT SUCH AS UNDER_1000 or LOCATION = 'west_van'--NOTE THE RENT_PRICE, BUY_PRICE, PROPERTY_CATEGORY IN Navigation_rent, navigation_buy and general(form for managmeent);
		
		// BUILDING EMPTY ARRAY--ONLY VALUES THE MEET OUR CRITERIA WILL BE PUSHED INTO IT
		$filtered_list = array();
		
		// NORMALIZATION OF DATA
		$category = strtolower($category);
		$filter = strtolower($filter);
		
		foreach($unfiltered_list as $current){

			if($category == 'location_category' || $category == 'type'){
				//THIS IS JUST FOR MATCHING CATEGORIEIS
				//THIS CORRESPONDS TO SOMETHING LIKE ->type_category == industrial etc etc

				if($current->$category == $filter)
					array_push($filtered_list, $current);
			}//END OF IF LOOP
				
			else if($category == 'rent_price' && $filter == 'under_1000'){
				// CHECK IF CURRENT VALUE MATCHES FILTER
				if($current->$category < 1000)
					array_push($filtered_list, $current);
			}
			
			else if($category == 'rent_price' && $filter == 'over_1000'){
				// THIS IS FOR THE RENT PROPERTY--note navigation_rent.php view
				if($current->$category > 1000)
					array_push($filtered_list, $current);
			}
			
			else if($category == 'new' && $filter == 'new'){
				// THIS IS ONLY TO GRAB PROPERTIES MARKED NEW!
				if($current->$category == 1)
					array_push($filtered_list, $current);
			}
			
			else if($category == 'new' && $filter == 'all')//THIS IS FOR RETURNING...ALL! PROPERTIES
				array_push($filtered_list, $current);
		
			else
				array_push($filtered_list, $current);
		}//END OF FOREACH LOOP

		return $filtered_list;
		
	}

	private function sort_category($category){
		// THIS IS THE CATEGORY THAT WILL BE RESPONSIBLE FOR THE SORTING
		// Sometimes when you select location you would search by price or something...
		if($category == 'rent_price' || $category == 'buy_price')
			return $category;
		
		else if($category == 'location_category' || $category == 'type_category')
			return 'name';
		
		else if($category == 'all')
			return 'name';
			
		else if($category == 'new')
			return 'name';
		
		else
			return 'name';
	}
	
	private function sort_order($sort_category){
	
		if($sort_category == 'rent_price' || $sort_category == 'buy_price')
			return 'low_to_high';
		else
			return 'alphabetical';
	}
}