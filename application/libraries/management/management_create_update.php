<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

// WHATS THE REASON FOR THIS CLASS?? TO SEPERATE CONTENT FROM MODELS--THIS IS EASY TO USE IN THE VIEWS--IN ALL VIEWS!
// TO HELP KEEP STUFF LIKE DOLLAR SIGNS/ETC FROM MY VIEWS--NORMALIZATION OF DATA!!!!!!!

class Management_create_update extends Management_forms {	

	function __construct($parameters){
		
		parent::__construct($parameters);
	}
	
	function create_property() {
			
		$form = $this->form_generation(1, 'Create');
		
		return $form;
	}
		
	function update_property($property_id) {
			

		$form = $this->form_generation($property_id, 'Update');

		return $form;

	}
	
	function form_generation($property_id, $type) {
		
		$this->header = "<h1>{$this->CI->format->word_format($type)} Property</h1><br /><hr /><br />\n";

		$form_categories = $this->get_category_types($property_id);//passed by reference
		
		$form = $this->generate_categories($property_id, $form_categories);

		return $form;
		
	}
	
	function generate_categories($property_id, $category_types) {
					
		// form destination url
		$destination = site_url('ajax/management/save');
		
		// 
		$form = "\n<div id='form' data-destination='{$destination}'  data-form_type='save'>";
		$form .= $this->header;
		
		foreach ($category_types as $category_type) {//create a segment for the final form

			$category_type = str_replace("/", "_", $category_type);
			$categories = $this->CI->general->get_category_type_categories($category_type);//get categories for each category type ie: rent, lease, general etc etc

			array_push($categories, 'property_id');

			$form .= "\n\t<form class='{$category_type}'>\n";//start a form -- used to hide the inactive ones in create!
			$form .= "\n\t<h1>{$this->CI->format->word_format($category_type)}</h1>\n\t<br />";

			if ($category_type != $category_types[0])
				$form .= "<hr />";
			$form .= "\n\t<br />\n";//category header
			
			foreach($categories as $category) {
				
				$input_type = $this->CI->general->get_category_input_type($category);//generate which type of category this is

				if ($input_type != "hidden") $form .="\n\t<div>";
				
				$form .= $this->$input_type($property_id, $category);//add the form for this category type to our current form

				// last already taken care of so div closed...just move on
				if ($input_type != 'hidden') $form .= "\n\t</div>";//only close the divs that were created -- not for hiddens

			}//end foreach for categories

			$form .= "\n\t</form>\n\t<br />";//close the category_type form
		}//end foreach for category_types
		
		$form .= "\n</div>";//end main form with form_type='save'
		
		return $form;//return the generated form to the management controller to be echoed in the view
	}

};
