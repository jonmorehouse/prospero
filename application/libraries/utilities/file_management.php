<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class File_management{
	
	var $CI;
	
	function File_management(){
		
			$this->CI =& get_instance();
	}
	
	function directory_creation($property_id){
		
		// TESTING IF THE DIRECTORY IS CREATED ALREADY--IF IT IS WE DON'T WANT TO RECREATE IT!
			
		if(!file_exists('property_images/' . $property_id)){
			mkdir('property_images/' . $property_id);
			mkdir('property_images/' . $property_id . '/thumbnail');
			mkdir('property_images/' . $property_id . '/slideshow');
		}	
		
		if(!file_exists('property_videos/' . $property_id)){
			mkdir('property_videos/' . $property_id);
		}
		
		else{
			// LOAD THE DEVELOPER CONTACT LIBRARY AND SEND A MESSAGE DOCUMENTING THIS PROBLEM!
			$this->CI->load->library('utilities/developer_contact');
			$message = "A duplicate entry was attempted. This is from the directory_creation method of the file management_class. Please inspect property_id {$property_id}";
			// CONTACT THE DEVELOPER, THIS SHOULD NOT HAPPEN
			$this->CI->developer_contact->general_error('Duplicate Folder Directory', $message); 
		}
	}

}