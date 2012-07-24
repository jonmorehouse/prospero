<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*THIS PROPERTY INFORMATION CLASS IS TO BE LOADED SO THAT EACH AND EVERY DATA MEMBER CAN BE CALLED FROM A MEMBER IN THIS CLASS*/
/***** PROPERTY SET CLASS
	
	responsible for updating the database with properties
	calls file_management class for uploads after it updates them and generates the proper names etc
	
**********/


class Property_set{
	
/********** CLASS CONSTRUCTION *************/

	var $CI;
	
	function Property_set(){
		$this->CI = $this->CI =& get_instance();
		$this->CI->load->model('upload/listing_management');
		
		$libraries = array('utilities/file_analysis', 'utilities/file_management');
		$this->CI->load->library($libraries);

	}
	
/*************** PUBLIC FUNCTIONS ************/

	// THIS IS CALLED FROM THE AJAX CONTROLLER MANAGEMENT FOR ALL THE UPDATES--
	public function save($data){
		
		if($data['property_id'] == 'new_listing')//CALL A FUNCTION TO CREATE THE FUNCTION
			$data['property_id'] = $this->create_id($data);//DOES NOT DEPEND UPON THE TYPE BECAUSE EACH PROPERTY HAS A UNIQUE ID!
		// IF THE PROPERTY_ID EXISTS ALREADY THEN WE JUST SAVE EVERYTHING
		
		// EITHER WAY YOU WANT TO SAVE THE WHOLE ARRAY
		$this->save_items($data);

		return $data['property_id'];//return property_id for form recreation
	}
	

	public function create_id($data){//new listing
		
		
		$property_id = $this->CI->listing_management->new_listing();
		$this->CI->file_management->directory_creation($property_id);
		
		return $property_id;//THIS RETURNS TO THE INDEX FUNCTION IF THIS WAS A COMPLETELY NEW LISTING
	}
	
	public function save_items($data){
		
		// FOR THE SAVE LISTING FOR UPDATE/GENERAL, EACH ARRAY_KEY CORRESPONDS TO A FORM NAME
		// WE NEED TO GET PROPERTY_ID AND THEN FOREACH THE DATA
		$property_id = $data['property_id'];
		unset($data['property_id']);
		
		// SO FOR EACH VALUE APART FROM PROPERTY ID, WE WANT TO CALL THE SAVE ITEMS MODEL!		
		//REMEMBER THAT ALL FORMS HAVE TO MATCH UP WITH THE CATEGORIES AS SET IN TABLE_SCHEMA!
		foreach(array_keys($data) as $column)
			$this->CI->listing_management->general_insert($column, $data[$column], $property_id);
	}
	
	public function media_upload($property_id, $type){//type comes from html form

		// DOWNLOADING THE FILE FROM BROWSER AND STORING IT LOCALLY--THIS IS AN ARRAY SO YOU CAN PRINT_R IT
		$media = $_FILES[$type];
		
		// TEMPORARY_FILE IS WHERE THE SERVER STORES THE FILE LOCALLY
		$temporary_file = $media['tmp_name'];
		
		// $media['type'] is sent by the browser. It looks something like image/jpeg or image/png--we need to make sure we include the case where 4 characters are there
		$extension = end(explode('/', $media['type']));

		// THIS IS THE FINAL FILE_NAME
		$media_id = $this->get_new_media_id($property_id, $type);//generates a new media piece 
		$file_name = $this->get_new_media_name($property_id, $type, $media_id, $extension);
		
		$this->set_new_media_name($property_id, $media_id, $file_name);
		
		$file_name = $this->file_name($type, $property_id, $format);//THIS WILL RETURN THE SLIDESHOW IMAGE, THUMBNAIL IMAGE OR VIDEO URL
		
		// If there is no error, we will add the file. Thumbnail images will be overwritten because we can only have one thumbnail

		if(!$media['error']){//WE WILL JUST HAVE THE IMAGES OVERWRITE IF THERE IS A PROBLEM
			move_uploaded_file($temporary_file, $file_name);
			
			if('slideshow_image' == $type) {
				$thumbnail_file_name = $this->create_new_media_name($property_id, 'slideshow_thumbnail_image', $media_id, $extension);
				$this->CI->load->library('utilities/image_management');
				$this->CI->image_management->create_slideshow_thumbnail_image($file_name, $thumbnail_file_name);
			}
		}
			
		else{
			// ERROR-->NEED TO CONTACT THE DEVELOPER!
			$this->CI->load->library('utilities/developer_contact');
			$message = "A {$type} was unsuccessfully uploaded to the server. Property_id = {$property_id}.";
			// EMAIL SUBMIT
			$this->CI->developer_contact->general_error("Unsuccessful {$type} upload", $message);
			// RETURN FALSE TO THE CONTROLLER
			return false;
		}
	
	}

	
/**************** PRIVATE FUNCTIONS *****************/


	private function get_new_media_id($property_id, $type) {//creates a new media and returns its unique id
			
		$category = "{$type}_id";//we need to generate a new id -- this is the primay key for the media tables ie: videos, thumbnail_images etc
		$table = $this->CI->general->get_category_table($category);//get table to update for this media
			
		$data = array('property_id' => $property_id, 'url' => 'temp');//this is used to cretae the new row and then grab its' media id

		$this->CI->general->insert($table, $data);//insert the new media into its proper table
			
		$media_id = $this->CI->general->get($table, $data)->row()->$category;//return the id name
		
		return $media_id;
	}
	
	public function create_new_media_name($property_id, $type, $media_id, $extension) {//creates a media name--public because we may need to reference it from thumbnail_slideshow image creation--
		
		if('video' == $type)
			$name = "/property_videos/{$property_id}/{$media_id}.{$extension}";

		else if('pdf' == $type)
			$name = "/property_pdfs/{$property_id}/{$media_id}.{$extension}";

		else if('thumbnail_image' == $type)
			$name = "/property_images/{$property_id}/thumbnail/{$media_id}.{$extension}";

		else if('slideshow_image' == $type)
			$name = "/property_images/{$property_id}/slideshow/{$media_id}.{$extension}";

		else if('slideshow_thumbnail_image' == $type)
			$name = "/property_images/{$property_id}/slideshow_thumbnail/{$media_id}.{$extension}";
	}
	
	private function set_new_media_name($property_id, $media_id, $file_name) {//sets the new media name
		
		$where = array('property_id' => $property_id, 'media_id' => $media_id);
		$update = array('url' => $file_name);//set url as the file name -- property_get calls media class to create url
		
		$this->CI->general->update('table_schema', $where, $update);
	}
};