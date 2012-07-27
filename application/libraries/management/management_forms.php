<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Management_forms{	

	var $property_id;
	var $admin_rights;
	
	/********* PUBLIC FUNCTIONS ********/
	
	
	public function Management_forms($parameters) {
		
		$this->CI =& get_instance();
		$this->property_id = 1;
		$this->admin_rights = $parameters['admin_rights'];
		$this->username = $parameters['username'];

		$library = array('utilities/format', 'property/property_get');
		$models = array('general');
		
		$this->CI->load->model($models);
		$this->CI->load->library($library);
		$this->CI->config->load('database_configuration');
		
	}

	public function category_location($category) {
		
		$query = $this->CI->general->get('table_schema', array('category' => $category));

		if($query)
			return $query->row()->location;
	
	}	
	
	/********* PROTECTED FUNCTIONS *******/
	
	protected function set_property_id($property_id) {
		
		$this->property_id = $property_id;
		
	}
	
	protected function get_category_types(&$categories) {/*for the form categories such as rent/buy/general etc*/
		
		/* this method is to generate the category types that can be changed with user input in the update_create forms
		
			we have a media type that is not used in the update_create forms
		*/
		
		array_push($categories, 'general');
		
		if (1 == $this->property_id) {
			
			foreach($this->CI->config->item('top_level_categories') as $category)//push all top levels into array(ie industrial,retail)
				array_push($categories, $category);
				
			foreach($this->CI->config->item('second_level_categories') as $category)//push all second levels into array (ie rent/buy)
				array_push($categories, $category);
		}
	
		else {//need to find out which categories are linked to this property so that we can add only the ones needed
			
			$type_category = $this->CI->property_get->type_category($this->property_id);

			$type = $this->CI->property_get->type($this->property_id);
			
			array_push($categories, $type, $type_category);
		}
		
		return $categories;
	}
	
	protected function get_individual_categories($category_type) {
		
		
		$query = $this->CI->general->get('table_schema', array('type' => $category_type));
		$categories = array();

		if($query) {
			foreach ($query->result() as $row)
				array_push($categories, $row->category);
		}
		
		return $categories;
	}
	
	protected function get_category_input_type($category) {
	
		$query = $this->CI->general->get('table_schema', array('category' => $category));
		
		if($query && $query->row()->input_type)
			return $query->row()->input_type;
		else
			return "input";//throw an error here
	
	}
	
	protected function get_comment($category) {
		
		$query = $this->CI->general->get('table_schema', array('category' => $category));


		if($query && $query->row()->description && strlen($query->row()->description > 0))
			return "\n\t<span>{$query->row()->comment}</span>";
		else
			return "";
		
	}
	
	public function get_options($category) {
		
		$options = array();
		$query = $this->CI->general->get('default_options', array('category' => $category));

		if($query) {
			foreach($query->result() as $row)
				array_push($options, $row->category_value);
		}
		
		return $options;
	}
	
	/*********** FORM PIECES ***********/ 

	public function radio($category) {
		// this function will an entire list for the category -- will return a string
		// make sure it takes care of the default!

		$options = $this->get_options($category); // get all options

		$radio_form = "\n\t<h3>{$this->CI->format->word_format($category)}</h3>\n";
		$radio_form .= $this->get_comment($category);

		foreach ($options as $option) {
			
			$radio_form .= "\n\t<input type='radio' name='{$category}' value='{$option}'";
			
			$db_type = $this->CI->information->get_information($category, $this->property_id);
			
			if($db_type == $option)
				$radio_form .= "checked='checked'";
			
			$radio_form .= " />\n\t{$this->CI->format->word_format($option)}<br />";
		
		}
		
		return $radio_form;
	}
	
	public function checkbox($category) {//not needed for prospero website
		
		
	}
	
	public function textarea($category, $rows = 5) {
		
		$textarea_form = "\n\t<h3>{$this->CI->format->word_format($category)}</h3>\n";
		$textarea_form .= $this->get_comment($category);
		
		$textarea_form .= "\n\t<textarea rows='{$rows}' name='{$category}' value='{$this->CI->property_get->general_clean($this->property_id, $category)}\n\t"; 
		
		return $textarea_form;
		
		
	}
	
	public function text($category) {
		
		$text_form = "\n\t<h3>{$this->CI->format->word_format($category)}</h3>\n";
		$text_form .= $this->get_comment($category);
		
		$text_form .= "\n\t<input type='text' name='{$category}' value='{$this->CI->property_get->general_clean($this->property_id, $category)}' />\n\t";
		
		return $text_form;
	}

	public function hidden($category) {
		
		$hidden_form = "\n\t<input type='hidden' value='{$this->CI->property_get->general_clean($this->property_id, $category)}' name='{$category}' />\n\t";
		return $hidden_form;
		
	}

	public function dropdown($options, $name) {//takes an array and generates a dropdown box
		
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
		
		// create inactive form
		$value = $this->CI->general->get_category($property_id, $category);//should return false/true
		
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
		
		$form = "\n\t<input type='radio' name='{$media_id}' value='false'";
			if(!$value)
				$form .= "checked='checked'";
		$form .= "/>Inactive";
		
		$form .= "\n\t<input type='radio' name='{$media_id}' value='true'";
			if($value)
				$form .= "checked='checked'";
		$form .= "/>Active";
		
		return $form;
	}


};
