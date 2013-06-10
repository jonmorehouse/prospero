<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Management_forms{	

	var $property_id;
	var $admin_rights;
	
	/********* PUBLIC FUNCTIONS ********/
	
	/**** CONSTRUCTOR / DESTRUCTORS *****/
	public function Management_forms($parameters) {
		
		$this->CI =& get_instance();
		$this->admin_rights = $parameters['admin_rights'];
		$this->username = $parameters['username'];

		$library = array('utilities/format');
		$models = array('general', "management/management_data");
		
		$this->CI->load->model($models);
		$this->CI->load->library($library);
	}

	/****** PUBLIC FUNCTIONS ******/
	public function radio($property_id, $category) {
		// this function will an entire list for the category -- will return a string
		// make sure it takes care of the default!
		$options = $this->CI->general->get_default_options($category); // get all options

		$radio_form = "\n\t<h3>{$this->CI->format->word_format($category)}</h3>\n";
		// $radio_form .= $this->get_comment($category);

		foreach ($options as $option) {
			
			$radio_form .= "\n\t<input type='radio' name='{$category}' value='{$option}'";
			
			$db_type = $this->CI->general->get_category($property_id, $category);

			if($this->CI->format->comparison_format($db_type) === $this->CI->format->comparison_format($option))//check to see if the value stored in the database is the same as the one that is being used for this option
				$radio_form .= "checked='checked'";
			
			$radio_form .= " />\n\t{$this->CI->format->word_format($option)}<br />";//this is the final ending of this basic radio form

		}
		
		return $radio_form;
	}
	
	public function checkbox($property_id, $category) {//not needed for prospero website
		

	}
	
	public function textarea($property_id, $category, $rows = 5) {
			
			
		$value = $this->get_value($category, $property_id);//this returns the value for this category -- including the default problemsa
		$textarea_form = "\n\t<h3>{$this->CI->format->word_format($category)}</h3>\n";
		// $textarea_form .= $this->get_comment($category);
		
		$textarea_form .= "\n\t<textarea rows='{$rows}' name='{$category}'>{$value}</textarea>"; 
		
		return $textarea_form;
				
	}
	
	public function text($property_id, $category) {
			
		$value = $this->get_value($category, $property_id);//get the correct value for this item

		$text_form = "\n\t<h3>{$this->CI->format->word_format($category)}</h3>\n";

		$text_form .= "\n\t<input type='text' name='{$category}' value='{$value}' />\n\t";

		return $text_form;
	}

	public function hidden($property_id, $category) {
		
		$hidden_form = "\n\t<input type='hidden' value='{$this->get_value($category, $property_id)}' name='{$category}' />\n\t";

		return $hidden_form;
		
	}

	public function dropdown($property_id, $options, $name) {//takes an array and generates a dropdown box
		
		$dropdown = "\n<select name='{$name}'>";
		
		foreach($options as $option)
			$dropdown .= "\n\t<option value='{$option}'>{$this->CI->format->word_format($option)}</option>\n\t";

		$dropdown .= "\n</select>";
		
		return $dropdown;
	}

	public function status_form($property_id, $category) {//generates a live/not live for each category sent to it 

		// for each category will give an option of live or not
		// in the input, just cast the function as boolean
		// uses radio forms where the options are not database driven
		
		// grab the value, can't use the general->get_category because that is for front-end and you don't necessarily want to see some of these values!
		$value = $this->get_value($property_id, $category);		

		
		$form = "\n\t<input type='radio' name='${category}' value='false' data-property_id='${property_id}' ";
			if(!$value)
				$form .= "checked='checked'";
		$form .= "/>Inactive";
		
		$form .= "\n\t<input type='radio' name='${category}' value='true' data-property_id='{$property_id}' ";
			if($value)
				$form .= "checked='checked'";
		$form .= "/>Active";
				
		return $form;
	}

	public function media_status_form($category, $media_id) {// special form for the media status page
		
		$value = $this->CI->media->get_media_status($category, $media_id);
		
		$form = "\n\t<input type='radio' name='{$media_id}' value='false'";//initialization of the form

			if(!$value)//check to see if the media is live at this point
				$form .= "checked='checked'";//if it is, we need to add a checked field
		$form .= "/>Inactive";
		
		$form .= "\n\t<input type='radio' name='{$media_id}' value='true'";
			if($value)
				$form .= "checked='checked'";
		$form .= "/>Active";
		
		return $form;
	}


	/********* PRIVATE FUNCTIONS ********/

	protected function get_value($category, $property_id) {

		if ($category === "property_id") return $property_id;

		return $this->CI->general->get_unformatted_category($property_id, $category);
	}

	/********** PROTECTED FUNCTIONS *******/
	protected function get_category_types($property_id) {

		if ($property_id === 1) return $this->CI->general->get_category_types($property_id);

		return array(

			"general",
			$this->get_value($property_id, "type"),//rent or buy or lease
			$this->get_value($property_id, "type_category"),//retail / office / industrial etc etc			
			"other",//not usually needed
		);
	}

	protected function get_individual_categories($category) {

		// initialize the query from our table_schema table
		$query = $this->CI->db->where(array('type' => $category))->select('category')->get('table_schema');

		// initialize a categories holder
		$categories = array();

		// push all of the results into the categories etc
		foreach ($query->result() as $row)
			array_push($categories, $row->category);

		return $categories;
	}	

};
