<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

// WHATS THE REASON FOR THIS CLASS?? TO SEPERATE CONTENT FROM MODELS--THIS IS EASY TO USE IN THE VIEWS--IN ALL VIEWS!
// TO HELP KEEP STUFF LIKE DOLLAR SIGNS/ETC FROM MY VIEWS--NORMALIZATION OF DATA!!!!!!!

class Management_create_update extends Management_forms {	

	function __construct($parameters){
		
		parent::__construct($parameters);
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
		
		$this->header = "<h1>{$this->CI->format->word_format($type)} Property</h1><br /><hr /><br />\n";
		$form_categories = array();
		$this->get_category_types($form_categories);//passed by reference
		
		$form = $this->generate_categories($form_categories);

		return $form;
		
	}
	
	function generate_categories($category_types) {
		
		$destination = site_url('ajax/management/save');
		
		$form = "\n<div id='form' data-destination='{$destination}'  data-form_type='save'>";
		$form .= $this->header;
		
		foreach ($category_types as $category_type) {//create a segment for the final form

			$categories = $this->get_individual_categories($category_type);

			$form .= "\n\t<form class='{$category_type}'>\n";//start a form -- used to hide the inactive ones in create!
			$form .= "\n\t<h1>{$this->CI->format->word_format($category_type)}</h1>\n\t<br />";

			if($category_type != $category_types[0])
				$form .= "<hr />";
			$form .= "\n\t<br />\n";//category header
			
			foreach($categories as $category) {
				
				if($this->get_category_input_type($category) != 'hidden')//don't put hidden in the columns -- columns floated left
					$form .="\n\t<div>";

				$input_type = $this->get_category_input_type($category);
				$this->{$input_type}($category);
				$form .= $this->$input_type($category);
				
				// last already taken care of so div closed...just move on

				if($this->get_category_input_type($category) != 'hidden')
					$form .= "\n\t</div>";//only close the divs that were created -- not for hiddens

			}//end foreach for categories
			
			$form .= "\n\t</form>\n\t<br />";//close the category_type form


		}//end foreach for category_types
		
		$form .= "\n</div>";//end main form with form_type='save'
		
		return $form;
	}

};
