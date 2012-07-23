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
	}
	
	function update_property($property_id) {
		
		$this->set_property_id($property_id);//set in the parent!
		$form = $this->form_generation('Update');
	}
	
	function form_generation($type) {
		
		$form = "<div id='{$type}'>"
		$form .= "<h1>{$this->CI->format->word_format($type)} Property</h1><br /><hr /><br />";
		$form_categories = array();
		$this->get_category_types($form_categories);
		$form .= $this->generate_categories($form_categories);
		$form .= "</div>";
		
	}
	
	function generate_categories($category_types) {
		
		// each form 
		
		$form = "";
		
		foreach ($category_types as $category_type) {//create a segment for the final form

			$categories = $this->get_individual_categories($category_type);

			$form .= "<form class='{$category_type}'>";//start a form -- used to hide the inactive ones in create!
			$form .= "<h1>{$this->CI->format->word_format($category_type)}</h1><hr /><br />";//category header
			
			$counter = 0;
			
			foreach($categories as $category) {
				
				if($counter == 0)
					$form .= "<div>\n";
				
				$input_type = $this->get_category_input_type($category);
				$this->{$input_type}($category);
				$form .= $this->$input_type($category);
				
				if($counter == 2) {
					$form .= "\n</div>\n<hr />\n";
					$counter = 0;
				}
				
				else
					$counter++;
			}//end foreach for categories
			
			$form .= "</form>";//close the category_type form

		}//end foreach for category_types
		
		return $form;
	}
};
