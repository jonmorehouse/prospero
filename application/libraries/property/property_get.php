<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

// WHATS THE REASON FOR THIS CLASS?? TO SEPERATE CONTENT FROM MODELS--THIS IS EASY TO USE IN THE VIEWS--IN ALL VIEWS!
// TO HELP KEEP STUFF LIKE DOLLAR SIGNS/ETC FROM MY VIEWS--NORMALIZATION OF DATA!!!!!!!

class Property_get{	
	// THIS JUST ECHOS EVERYTHING TO SAVE HTML PHP STUFF!
	// PLEASE NOTE THAT ALL DEFAULTS ARE STORED IN THE DATABASE WITH THE P_ID = 'new_listing';
	
	// WE NEED A SOLUTION THAT WILL HANDLE THE SLASHES!
	var $CI;
	
	function Property_get(){
		
		$this->CI =& get_instance();
		$this->CI->load->model('property/information');
		$this->CI->load->library('utilities/format', 'property/media');

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
		
		$thumbnail_id = $this->CI->media->get_media($property_id);

		if($thumbnail_id)
			$url = $this->CI->media->get_url($thumbnail_id);//not the default in this case
		
		else
		 	$url = $this->CI->media->get_url('thumbnail_image');//will get default media url
		
		//RETURN IMAGE TAG--WITH OUR COMBINE URL!
		$image_tag = "<img src='{$url}' alt='{$this->name($property_id, 'return')}' />";
				
		// THIS NEXT SECTION IS TO SEE WHAT TYPE OF RETURN THIS FUNCTION SHOULD HAVE!
		
		return $image_tag;
	}
	
	public function slideshow_image_list($property_id){//this is to be used by the property_get class for thumbnail_images and listings -- not necessarily cms
		
		$list = $this->CI->media->get_slideshow_images($property_id);
		$image_id_list = array();

		if(!$list)
			array_push($image_id_list, 'default');//no images found that were live so they are default
		
		else {
			foreach($list as $image_id)
				array_push($image_id_list, $image_id);
		}
		
		return $image_id_list;
	}
	
	public function slideshow_images($property_id) {//generates the actual tags for the slideshow and puts them into an array to return
		
		$id_list = $this->slideshow_image_list($property_id);
		$tag_list = array();
		
		$name = $this->name($property_id);
		
		foreach($id_list as $id) {
			$tag = "<img src='{$this->CI->media->get_url('slideshow_image', $id)}' alt='{$name}' />";
			array_push($tag_list, $tag);
		}
		
		return $tag_list;//will return all the slideshow images
	}
	
	public function slideshow_thumbnail_images($property_id) {
		
		$id_list = $this->slideshow_image_list($property_id);
		
		
		
	}

	public function listing_url($property_id){
		
		$url = site_url('listing/' . $property_id);
		return $url;
		
	}

	public function type($property_id){//second level type -- ie rent/buy
		
		$value = $this->CI->information->get_information('type', $property_id);
		$value = $this->CI->format->word_format($value);
		
		return $value;
	}
	
	public function type_category($property_id){//top level category ie industrial/residential etc
		
		$value = $this->CI->information->get_information('type_category', $property_id);
		$value = $this->CI->format->word_format($value);
		
		return $value;
	}
	
	public function status($property_id) {//property status -- live or not
		
		$value = $this->CI->information->get_information('property_status', $property_id);
		if($value)
			return true;
		else
			return false;
	}
};
