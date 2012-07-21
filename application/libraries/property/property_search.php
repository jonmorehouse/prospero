<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*THIS PROPERTY INFORMATION CLASS IS TO BE LOADED SO THAT EACH AND EVERY DATA MEMBER CAN BE CALLED FROM A MEMBER IN THIS CLASS*/

class Property_search{
	
	var $CI;
	var $numbers;
	
	public function Property_search(){
		
		// HELPER VARIABLES
		$this->CI =& get_instance();
		$this->numbers = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
		$this->search_categories = array('name', 'location_category', 'type_category', 'meta_keywords', 'address', 'meta_description', 'property_content');//Categories to be searched
	
		// LOAD LIBRARIES/MODELS
		$this->CI->load->model('property/search');

	}
	
	// this is for the listing page to verify that you are attempting to grab a correct listing when you type in a number! or page!
	public function listing_verification($input){
	
		// TEST IF IT IS A VALID INTEGER...
		$type = $this->property_id_search($input);//Check to see if the input is of integer type

		if($type)
			return $type;
		else
			$unsorted_list = $this->general_search($input);
		
		if($unsorted_list){
			$sorted_results = $this->unique_array_sorter($unsorted_list);
			return end($sorted_results);
		}

		else
			return false;
	}
	
	public function user_search($input){//we are going to use this function to search for properties when users type in credentials
		
		$unsorted_list = $this->general_search($input);//returns a list of property_ids

		if(!$unsorted_list)
			return false;
		
		$sorted_list = $this->unique_array_sorter($unsorted_list);//sort the properties by how many relevant
		
		return $sorted_list;
	}

	// PRIVATE FUNCTIONS!

	private function property_id_search($input){
		
		// FOLLOWING IS TO DETERMINE IF THE 
		$input_fragment = str_split($input, 1);

		$flag = false;//THIS IS THE FLAG USED TO DETERMINE IF THE PROPERTY ID TESTS VALIDATE OUT!
		if(count($input_fragment) < 5){//make sure integer is an appropriate length (if it is an integer)
			$flag = true;
			foreach($input_fragment as $value){//test each value in the array to make sure that it is an integer

				// Check if the value is an integer in the numbers array!
				if(!in_array($value, $this->numbers))
					$flag = false;
			}//End of foreach loop for the input_fragment value			
		}

		if($flag){ //if the input is an integer, we want to make sure it is an actual property_id
			$search_category = 'property_id';
			if($this->CI->search->property_id_exists($input))//THis is the search model validation. Note models/property/search
				$flag = $input;
		}
		
		return $flag;//this will return false if the above tests return false
	}
	
	private function general_search($input){
		
		// delimit by % for uris!
		$input_fragments = explode('%', $input);//split the input into words that are single_words

		// Submit the input and potential search_categories to the model to return an array of property_ids
		$results = $this->CI->search->property_search($this->search_categories, $input_fragments);
		
		if(!$results)
			return false;
		
		else
			return $results;
	}
	
	private function unique_array_sorter($values){
		
		// this should count how many times each property occurs and return a sorted list of properties by their number of occurences
		$list = array();
		$flag = false;
		$counter = array_count_values($values);//counts how many times each property_id occurs in the array
			// returns an array where the key is the value and the value is the number of times occurring
		

		foreach(array_keys($counter) as $value){
				// $value = number of times of occurence
				// $value_key = 
			$input = array('property_id' => $value, 'occurrences' => $counter[$value]); // array with p_id and then # as the second element
			array_push($list, $input); // we are creating this array so need to un-create it before sending it back
		}
		
		$flag = false;


		// search algorithm
		while(!$flag){
			
			$loop_counter = count($list) - 1;//what if you are on the last element...it would fail with out the -1
			$n = 0;

			for($n=0; $n<$loop_counter; $n++){
				
				$flag = true;
				$z = $n+1;
				
				if($list[$n]['occurrences'] < $list[$z]['occurrences']){
						$flag = false; // we will want to make sure that we run the loop again.
						$original = $list[$n]; // save the left value for a temp swap
						$list[$n] = $list[$z]; // swap the left value and the right value
						$list[$z] = $original; // place the right value as the original left
					}
			}//end of for loop
		}//end while loop
		
		$sorted_list = array();
		
		foreach($list as $list_item)
			array_push($sorted_list, $list_item['property_id']);//need to create an array of property ids
		
		return $sorted_list;//return an array of property ids
	}
		
}