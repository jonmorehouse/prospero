<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*THIS PROPERTY INFORMATION CLASS IS TO BE LOADED SO THAT EACH AND EVERY DATA MEMBER CAN BE CALLED FROM A MEMBER IN THIS CLASS*/
// THIS PROPERTY SET CLASS IS A DATABASE ABSTRACTION LAYER TO BE EASILY CALLED FROM MANY CONTROLLERS
// JUST LIKE PROPERTY GET CLASS BUT THE GET CLASS IS CALLED FROM ALL OF THE VIEWS--KEEP CONTROLLERS CLEAN

class Property_set{
	
	var $CI;
	
	function Property_set(){
		$this->CI = $this->CI =& get_instance();
		$this->CI->load->model('upload/listing_management');
		$this->CI->load->library('utilities/file_analysis');

	}

	// THIS IS CALLED FROM THE AJAX CONTROLLER MANAGEMENT FOR ALL THE UPDATES--
	public function save($data){
		
		if($data['property_id'] == 'new_listing')//CALL A FUNCTION TO CREATE THE FUNCTION
			$data['property_id'] = $this->create_id($data);//DOES NOT DEPEND UPON THE TYPE BECAUSE EACH PROPERTY HAS A UNIQUE ID!
		// IF THE PROPERTY_ID EXISTS ALREADY THEN WE JUST SAVE EVERYTHING
		
		// EITHER WAY YOU WANT TO SAVE THE WHOLE ARRAY
		$this->save_items($data);

		// WE ALWAYS WANT TO RETURN THE PROPERTY ID FOR THIS SO WE CAN PASS IT TO A VIEW TO REPOPULATE THE FORM!
		return $data['property_id'];
	}
	
	// THIS IS NOT NECESSARY NOW BUT COULD BE HELPFUL IN THE FUTURE
	public function create_id($data){
		
		$property_id = $this->CI->listing_management->new_listing();
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
	
	public function media_upload($type, $property_id){
		// TYPE should be video, thumbnail or slideshow--THIS COMES FROM THE HTML FORM NAME!

		// DOWNLOADING THE FILE FROM BROWSER AND STORING IT LOCALLY--THIS IS AN ARRAY SO YOU CAN PRINT_R IT
		$media = $_FILES[$type];
		
		// TEMPORARY_FILE IS WHERE THE SERVER STORES THE FILE LOCALLY
		$temporary_file = $media['tmp_name'];
		
		// $media['type'] is sent by the browser. It looks something like image/jpeg or image/png--we need to make sure we include the case where 4 characters are there
		$format = end(explode('/', $media['type']));

		// THIS IS THE FINAL FILE_NAME
		$file_name = $this->file_name($type, $property_id, $format);//THIS WILL RETURN THE SLIDESHOW IMAGE, THUMBNAIL IMAGE OR VIDEO URL
		
		// If there is no error, we will add the file. Thumbnail images will be overwritten because we can only have one thumbnail
		if(!$media['error']){//WE WILL JUST HAVE THE IMAGES OVERWRITE IF THERE IS A PROBLEM
			move_uploaded_file($temporary_file, $file_name);
			}
			
		// IF THE FILE IS UNSUCCESSFULLY UPLOADED WE NEED TO MAKE SURE THAT WE CONTACT SOMEONE
		else{
			// ERROR-->NEED TO CONTACT THE DEVELOPER!
			$this->CI->load->library('utilities/developer_contact');
			$message = "A {$type} was unsuccessfully uploaded to the server. Property_id = {$property_id}.";
			// EMAIL SUBMIT
			$this->CI->developer_contact->general_error("Unsuccessful {$type} upload", $message);
			// RETURN FALSE TO THE CONTROLLER
			return false;
		}
	
		if($type=='video')
			$this->CI->listing_management->general_insert('status', true, $property_id);
		
		// IF EVERYTHING GOES THROUGH THEN THE FILE WAS SUCCESSFULLY UPLOADED!
		return $file_name;
	}
	
	// WE ARE USING FILE_NAME TO RECORD THE IMAGES THAT WE WANT TO HAVE
	public function file_name($type, $property_id, $format = ".png"){
		
		if($type == 'video'){
			return "property_videos/{$property_id}/preview.{$format}";// THIS IS GOING TO BE FOR THE VIDEOS--SO YOU CAN UPLOAD DIFFERENT TYPES
		}
		
		else if ($type == 'thumbnail'){
			echo $format;
			return "property_images/{$property_id}/thumbnail/thumbnail.{$format}";//THIS IS FOR THE PROPERTY
		}
		
		else if($type == 'image'){
			// IF THE FILE IS A SLIDESHOW, WE WANT TO COUNT THE CURRENT SLIDESHOW IMAGES AND THEN WILL ADD +1 to it!
			
			$directory = "property_images/{$property_id}/slideshow/";
			
			//LOAD FILE_ANALYSIS LIBRARY TO HELP YOU COUNT THE FILES
			$this->CI->load->library('utilities/file_analysis');
			$file = intval($this->CI->file_analysis->file_count($directory)) + 1;
			// RETURN FILE AS A PNG WITH PROPER NUMBER!

			return "{$directory}{$file}.{$format}";
		}
	// END OF MEDIA UPLOAD FORM
	}
	
	public function remove($property_id){
		
		// THIS WILL RECIEVE THE FILE AND PROPERTY ID TO REMOVE
		// THIS WILL CALL THE FILE_MANAGEMENT CLASS!
		// REMOVE PROPERTY
		$this->CI->listing_management->remove_listing($property_id);
	}
	
	public function remove_video($property_id){
		
		// ALL PROPERTIES WILL HAVE TO HAVE IMAGES BY DEFAULT
		// HOWEVER, WE CAN REMOVE THE VIDEO FROM THE PROPERTY WITH A GENERAL INSERT
		$this->CI->listing_management->general_insert('status', false, $property_id);
		
		// GET FILE LIST
		$directory = "property_videos/{$property_id}/";
		$video_list = $this->CI->file_analysis->file_list($directory);
		
		// DELETE FILES FROM SERVER!
		foreach($video_list as $value)
			unlink($directory . $value);
	}
	
	public function file_remove($file_name){
		// THIS WILL TAKE A FILE NAME AND WILL REMOVE IT...MUST BE AN ABSOLUTE SUCH AS:
		unlink($file_name);
	}
}