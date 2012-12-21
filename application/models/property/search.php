<?php

class Search extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->library('property/property_get');
		$this->load->config('database_configuration');
	}
	
	// SINCE TYPE = RENT/BUY IS THE WAY WE SPLIT THE SITE, THAT IS THE WAY THAT WE CATEGORIZE THE SEARCH BY JOINING THE CATEGORY TO PROPERTY_TYPE
	function retrieve($type = 'industrial', $category = 'all'){
		
		$top_level_table = $this->config->item('top_level_table');
		$top_level_category = $this->config->item('top_level_category');
		
		
		// TABLE TO BE JOINED WITH $top_level_table
		$query = $this->db->where('category', $category)->get('table_schema');//GETS THE TABLE LOCATION OF THE COLUMN

		if($query->num_rows()==0){//THIS IS IF THE CATEGORY IS NOT FOUND--BY DEFAULT SEND BACK ALL RESULTS!
			$table = 'property_type';
			$category = 'property_id';
		}

		else
			$table = $query->row()->location;
			
		//type corresponds to the value of the top_level_table . top_level_category as specified in config
		$type = explode('_', $type);//in the case of a combination like industrial_retail.
		//tested and type is an array even if there is only one word!

		$this->db->where($top_level_category, $type[0]);
		$counter = count($type);
		if($counter > 1)
			for($i=0; $i<$counter; $i++)
				$this->db->or_where($top_level_category, $type[$i]);


		// IF $CATEGORY !='all' then we are going to join. 
		//If category === 'all' we want to grab every property_type!
		if($table != $top_level_table)//Again this is hardcoded as the general selection. Note The previous where clause
			$this->db->join($top_level_table, $top_level_table.'property_id = ' . $table . '.property_id');
		
		// GET RAW RESULTS AND PREPARE THEM FOR SORTING
		$results = $this->db->get($table);
		
		// UNSORTED_RESULTS WILL GIVE THE PROPERTY_ID SORTING
		$unsorted_results = array();
		
		// NEED TO PREVENT THE DEFAULT PROPERTY FROM DISPLAYING
		foreach($results->result_object() as $row)
			if($row->property_id > 1)
				array_push($unsorted_results, $row);//PUSH THE ROW INTO THE ARRAY
				//we return the row because we know the filter is going to occur in one the tables we joined.
				//however, it is not guaranteed that the order category is going to be one of those categories...
		
		// RETURNS A RAW UNSORTED LIST. TO SORT THE LIST, WE NEED TO CALL THE SORT FUNCTION BELOW FROM OUR LIBRARY
		return $unsorted_results;
	}
	
	function sort($unsorted_results, $category, $order){
		//SECOND PARAMETER MUST CORRESPOND TO A CERTAIN CATEGORY THAT IS RETURNED IN THE LIST
		
		$counter = count($unsorted_results) - 1; //THIS IS BECAUSE OF THE SEARCH ALGORITHM-NOT BELOW
		$sorted_results = $unsorted_results;
		$flag = false;

		while(!$flag){
			$flag = true;
			for($n=0; $n < $counter; $n++){
				$y = $n + 1;
			
				// GET THE TWO VALUES FOR THE PARAMETERS TO COMPARE
				$category_n_value = $this->property_get->general_raw($sorted_results[$n]->property_id, $category);
				$category_y_value = $this->property_get->general_raw($sorted_results[$y]->property_id, $category);

				
				// DETERMINING THE ORDER
				if($order == 'high_to_low') 
					$condition = $category_n_value < $category_y_value;
					
				else if($order == 'alphabetical')
					$condition = strtolower($category_n_value) > strtolower($category_y_value);
				
				else//DEFAULT IS LOW_TO_HIGH!
					$condition = $category_n_value > $category_y_value;
					
				if($condition){
					$flag = false;
					$temp = $sorted_results[$n];
					$sorted_results[$n] = $sorted_results[$y];
					$sorted_results[$y] = $temp;
				}//END OF IF LOOP--THAT MEANS THE SORTING WAS NOT COMPLETED YET
			}//END OF FOR LOOP--this goes through the array when !flag;
		}//END OF WHILE LOOP
	
		$sorted_list = array();

		// NOW WE NEED TO JUST RETURN THE PROPERTY IDS!
		foreach($sorted_results as $property)
			array_push($sorted_list, $property->property_id);
	
		// COMPLETELY FINISHED ARRAY
		return $sorted_list;
	}

	function property_id_exists($property_id){
		
		// THIS WILL TAKE A SINGLE PROPERTY ID AND SEE IF IT EXISTS!
		$query = $this->db->where('property_id', (int)$property_id)->get('property_name')->num_rows();
		if($query === 1)
			return true;
		else
			return false;
	}

	function property_search($categories, $input){
		// RESULTS WILL BE AN ARRAY OF PROPERTY_IDS
		$results = array();
		
		/*Essentially, for each category, we want to find its table. Then we want to go through each input(from array) and see the matches. For the query that returns, we go through each one and push it into the array which is results()*/
		
		foreach($categories as $category) {//GOES THROUGH EACH CATEGORY AND RUNS THE QUERY!
			$table = $this->db->select('location')->where('category', $category)->get('table_schema');
			if($table->num_rows() > 0){
				$table = $table->row()->location;
				
				foreach($input as $substring){//WE NEED TO SEARCH
					$table_results = $this->db->like($category, strtolower($substring))->get($table);
					
					if($table_results->num_rows() > 0){
						foreach($table_results->result() as $row){
							if($row->property_id > 1)
								array_push($results, $row->property_id);
						}
					}
				}//END of foreach $input loop
			}//end of table if loop
		}//END OF Category FOR EACH LOOP

		if(count($results) > 0)
			return $results;
		else
			return false;
	}
}

