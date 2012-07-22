<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

// WHATS THE REASON FOR THIS CLASS?? TO SEPERATE CONTENT FROM MODELS--THIS IS EASY TO USE IN THE VIEWS--IN ALL VIEWS!
// TO HELP KEEP STUFF LIKE DOLLAR SIGNS/ETC FROM MY VIEWS--NORMALIZATION OF DATA!!!!!!!

class Management_forms{	
	// THIS JUST ECHOS EVERYTHING TO SAVE HTML PHP STUFF!
	// PLEASE NOTE THAT ALL DEFAULTS ARE STORED IN THE DATABASE WITH THE P_ID = 'new_listing';
	
	// WE NEED A SOLUTION THAT WILL HANDLE THE SLASHES!
	var $CI;
	
	function Property_get(){
		
		$this->CI =& get_instance();
		$this->CI->load->model('property/information');
		$this->CI->load->library('utilities/format');
	}
	
/*THIS METHOD NEEDS TO CONTINUE BEING IMPLEMENTED AROUND THE APPLICATION*/

	public function general_raw($property_id, $category){
		
		$value = $this->CI->information->get_information($category, $property_id);
		
		return $value;
	}
	
	public function general_clean($property_id, $category){
		
		$value = $this->CI->information->get_information($category, $property_id);
		$value = $this->CI->format->word_format($value);
		
		return $value;
	}
	
	// Can Be Obsolete
	public function name($property_id){
		// THIS IS THE GENERIC FORM POPULATION FOR A NEW FORM!
		$value = $this->CI->information->get_information('name', $property_id);
		$value = $this->CI->format->word_format($value);

		return $value;
	}
	
	public function radio($property_id, $property_type, $field){
		//POPULATES THE FORM BASED ON WHETHER OR NOT THE TYPE (which is the html form value ) is equal to the db_type related to that p_ID
		//OTHERWISE, WE NEED TO SEE IF THE TYPE--which is the value of the radio--IS THE SAME AS THE DB_TYPE
		
		$db_type = $this->CI->information->get_information($field, $property_id);
		if($db_type == $property_type)		
			return "checked='checked'";

	}
	
	public function meta_description($property_id){
		
		$value = $this->CI->information->get_information('meta_description', $property_id);
		$value = ucfirst($value);
		
		// THIS NEXT SECTION IS IN CASE THE TYPE WAS SPECIFIED AS A RETURN INSTEAD OF THE DEFAULT ECHO!
		
		return $value;
	}
	
	public function meta_keywords($property_id){
		
		$value = $this->CI->information->get_information('meta_keywords', $property_id);
		$return_value = $this->CI->format->keywords($value);

		return $return_value;
	}
	
	public function manager_email($property_id){
		
		$value = $this->CI->information->get_information('manager_email', $property_id);
		$value = $this->CI->format->word_format($value);
		
		return $value;	
	}
	
	public function manager_phone($property_id){
		
		$value = $this->CI->information->get_information('manager_phone', $property_id);
		$value = $this->CI->format->word_format($value);
		
		return $value;	
	}

	public function manager_phone_clean($property_id){
		// THIS IS STILL IN NEED OF SOME WORK!
		$value = $this->CI->information->get_information('manager_phone', $property_id);
		$value = $this->CI->format->word_format($value);
		// WILL NEED TO SPLIT THIS AND ADD DASHES IN THE FUTURE!--CREATE A CLASS?
	
		// THIS NEXT SECTION IS IN CASE THE TYPE WAS SPECIFIED AS A RETURN INSTEAD OF THE DEFAULT ECHO!
		return $value;	
	}

	public function manager_first_name($property_id){
		
		$value = $this->CI->information->get_information('manager_first_name', $property_id);
		$value = $this->CI->format->word_format($value);
		
		// THIS NEXT SECTION IS IN CASE THE TYPE WAS SPECIFIED AS A RETURN INSTEAD OF THE DEFAULT ECHO!
		
		return $value;	
	}

	public function manager_last_name($property_id){

		$value = $this->CI->information->get_information('manager_last_name', $property_id);
		$value = $this->CI->format->word_format($value);
		
		// THIS NEXT SECTION IS IN CASE THE TYPE WAS SPECIFIED AS A RETURN INSTEAD OF THE DEFAULT ECHO!
		return $value;
	}
	
	public function property_content($property_id){

		$value = $this->CI->information->get_information('property_content', $property_id);
		$value = $this->CI->format->word_format($value);
		
		// THIS NEXT SECTION IS IN CASE THE TYPE WAS SPECIFIED AS A RETURN INSTEAD OF THE DEFAULT ECHO!
		
		return $value;
	}
	
	public function address($property_id){
		
		$value = $this->CI->information->get_information('address', $property_id);
		$value = $this->CI->format->word_format($value);
		
		// THIS NEXT SECTION IS IN CASE THE TYPE WAS SPECIFIED AS A RETURN INSTEAD OF THE DEFAULT ECHO!
		
		return $value;
	}
	
	public function location($property_id){
		
		$value = $this->CI->information->get_information('location', $property_id);
		$value = $this->CI->format->word_format($value);
		
		// THIS NEXT SECTION IS IN CASE THE TYPE WAS SPECIFIED AS A RETURN INSTEAD OF THE DEFAULT ECHO!
		
		return $value;
	
	}

	public function postal_code($property_id){
		
		$value = $this->CI->information->get_information('postal_code', $property_id);
		$value = $this->CI->format->word_format($value);
		
		// THIS NEXT SECTION IS IN CASE THE TYPE WAS SPECIFIED AS A RETURN INSTEAD OF THE DEFAULT ECHO!
		
		return $value;
	}
	
	public function thumbnail_blurb($property_id){
		
		$value = $this->CI->information->get_information('thumbnail_blurb', $property_id);
		$value = $this->CI->format->word_format($value);
		
		// THIS NEXT SECTION IS IN CASE THE TYPE WAS SPECIFIED AS A RETURN INSTEAD OF THE DEFAULT ECHO!
		
		return $value;
	}
	
	public function buy_price($property_id){

		$value = $this->CI->information->get_information('buy_price', $property_id);
		$value = $this->CI->format->word_format($value);
		
		// THIS NEXT SECTION IS IN CASE THE TYPE WAS SPECIFIED AS A RETURN INSTEAD OF THE DEFAULT ECHO!
		
		return $value;
	}
	
	public function buy_list_date($property_id){

		$value = $this->CI->information->get_information('buy_list_date', $property_id);
		$value = $this->CI->format->word_format($value);
		
		// THIS NEXT SECTION IS IN CASE THE TYPE WAS SPECIFIED AS A RETURN INSTEAD OF THE DEFAULT ECHO!
		
		return $value;
	}
	
	public function rent_price($property_id){

		$value = $this->CI->information->get_information('rent_price', $property_id);
		$value = $this->CI->format->word_format($value);
		
		// THIS NEXT SECTION IS TO SEE WHAT TYPE OF RETURN THIS FUNCTION SHOULD HAVE!
		return $value;	
	}
	
	public function rent_units_available($property_id, $type="return"){

		$value = $this->CI->information->get_information('rent_units_available', $property_id);
		$value = $this->CI->format->word_format($value);
		
		// THIS NEXT SECTION IS TO SEE WHAT TYPE OF RETURN THIS FUNCTION SHOULD HAVE!
		
		return $value;
		
	}
	
	// ACTUAL HTML TAG!
	public function thumbnail_image($property_id){
		
		// FILE ANALYSIS LIBRARY
		$this->CI->load->library('utilities/file_analysis');

		// DIRECTORY TO GET IMAGE FROM!
		$directory = "property_images/{$property_id}/thumbnail/";

		// IMAGE TAG--REMEMBER WE JUST WANT THE FIRST ONE!
		$image_name = $this->CI->file_analysis->file_list($directory, 'image');
		if(count($image_name) > 0)
			$image_src = base_url($directory . $image_name[0]);
		else
			$image_src = base_url('resources/images/defaults/thumbnail.png');
		
		//RETURN IMAGE TAG--WITH OUR COMBINE URL!
		$image_tag = "<img src='{$image_src}' alt='{$this->name($property_id, 'return')}' />";
				
		// THIS NEXT SECTION IS TO SEE WHAT TYPE OF RETURN THIS FUNCTION SHOULD HAVE!
		
		return $image_tag;
	}
	
	public function slideshow_image($property_id){
		
		// IMAGES FOR THE SLIDESHOW GALLERY
		//THIS CAN BE FOR THUMBNAIL IMAGES OR SLIDESHOW IMAGES!
		// CAN ALSO RETURN IMAGE_TAGS VS FILE NAMES
		
		// LOAD FILE ANALYSIS LIBRARY
		$this->CI->load->library('utilities/file_analysis');
		
		// DIRECTORY OF THE SLIDESHOW IMAGES
		$directory = 'property_images/' . $property_id . '/slideshow/';
		$image_list = $this->CI->file_analysis->file_list($directory);
		
		$slideshow_images = array();
		
		foreach($image_list as $value){
			// THE URL OF THE SLIDESHOW GALLERY
			$image_src = base_url($directory . $value);
			$image_tag = "<img src='{$image_src}' alt='{$this->name($property_id, 'return')}' />";
			
			// ADD THE IMAGE TAG TO THE ARRAY
			array_push($slideshow_images, $image_tag);
		}
		
		return $slideshow_images;
	}

	public function thumbnail_image_name($property_id){
		
		// LOAD LIBRARY WITH FILE_LISTS!
		$this->CI->load->library('utilities/file_analysis');
		
		// SEND DIRECTORY TO FILE COUNT METHOD IN FILE_ANALYSIS
		// THIS IS RELATIVE
		$directory = "property_images/{$property_id}/thumbnail/";
		$file_list = $this->CI->file_analysis->file_list($directory, 'image');
		
		// SINGLE FILE_NAME--remember it will always be thumbnail but not always .png
		
		$file_path = base_url($directory . $file_list[0]);
		
		// RETURN THE THUMBNAIL_IMAGE_NAME
		
		return $file_path;

	}
		
	public function slideshow_image_name($property_id){
		
		// LOAD LIBRARY WITH FILE_LISTS!
		$this->CI->load->library('utilities/file_analysis');
		
		// SEND DIRECTORY TO FILE COUNT METHOD IN FILE_ANALYSIS
		// THIS IS RELATIVE
		$directory = "property_images/{$property_id}/slideshow/";
		$file_list = $this->CI->file_analysis->file_list($directory, 'image');
		
		// SINGLE FILE_NAME--remember it will always be thumbnail but not always .png
		$slideshow_images = array();
		
		foreach($file_list as $image_name){
			$file_path = base_url($directory . $image_name);
			array_push($slideshow_images, $file_path);
		}
		
		// RETURN THE THUMBNAIL_IMAGE_NAME
		return $slideshow_images;
	}

	public function listing_url($property_id){
		
		$url = site_url('listing/' . $property_id);
		return $url;
		
	}

	public function type($property_id){
		
		$value = $this->CI->information->get_information('type', $property_id);
		$value = $this->CI->format->word_format($value);
		
		return $value;
	}
	
	public function type_category($property_id){
		
		$value = $this->CI->information->get_information('type_category', $property_id);
		$value = $this->CI->format->word_format($value);
		
		return $value;
	}
	

};
