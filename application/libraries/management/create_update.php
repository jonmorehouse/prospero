<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

// WHATS THE REASON FOR THIS CLASS?? TO SEPERATE CONTENT FROM MODELS--THIS IS EASY TO USE IN THE VIEWS--IN ALL VIEWS!
// TO HELP KEEP STUFF LIKE DOLLAR SIGNS/ETC FROM MY VIEWS--NORMALIZATION OF DATA!!!!!!!

class Create_update extends Management_forms {	

	function __construct(){
		
		parent::__construct();
		

	}
	
	function create_property() {
		
		$this->set_property_id(1);//set in the parent!
		$form = $this->form_generation('Create');
		
		return $form;
	}
	
	function update_property($property_id) {
		
		$this->set_property_id($property_id);//set in the parent!
		$form = $this->form_generation('Update');
		return $form;
	}
	
	function form_generation($type) {
		
		$form = "<div id='{$type}'>\n";
		$form .= "<h1>{$this->CI->format->word_format($type)} Property</h1><br /><hr /><br />\n";
		$form_categories = array();
		$this->get_category_types($form_categories);
		$form .= $this->generate_categories($form_categories);
		$form .= "\n</div>";
		
		return $form;
		
	}
	
	function generate_categories($category_types) {
		
		// each form 
		
		$form = "";
		
		foreach ($category_types as $category_type) {//create a segment for the final form

			$categories = $this->get_individual_categories($category_type);

			$form .= "<form class='{$category_type}'>\n";//start a form -- used to hide the inactive ones in create!
			$form .= "\n<h1>{$this->CI->format->word_format($category_type)}</h1><br /><hr /><br />\n";//category header
			
			$column_counter = 1;
			$category_counter = 0;
			
			foreach($categories as $category) {
				
				$last_category = count($categories) - 1;//last element--stop everything
				
				if($column_counter == 0)
					$form .= "<br /><div>\n";
				
				$input_type = $this->get_category_input_type($category);
				$this->{$input_type}($category);
				$form .= $this->$input_type($category);
				
				if($category_counter == $last_category ) {
					$form .= "\n</div>\n\n";
				}
					
				// last already taken care of so div closed...just move on
				else if('hidden' == $this->get_category_input_type($category)) {//do nothing--don't want to mess up the column counting!
					
					// $column_counter does not change!--don't want to mess up the columns
					$category_counter++;

				}
				
				else if($column_counter == 2) {//check if column_Counter needs to be reset
					$form .= "\n</div>";
					$column_counter = 0;
					$category_counter++;
				}
				
				else {//no special circumstances
					$category_counter++;
					$column_counter++;
				}
				
			}//end foreach for categories
			
			$form .= "</form><br />";//close the category_type form


		}//end foreach for category_types
		
		return $form;
	}
};
