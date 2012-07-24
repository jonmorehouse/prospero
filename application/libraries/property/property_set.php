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

		$this->CI->load->config('site_status');

		$libraries = array('utilities/file_analysis', 'utilities/file_management');
		$this->CI->load->library($libraries);

	}
	
/*************** PUBLIC FUNCTIONS ************/

	public function save($data) {//this function is used to save all data that is input through post. 
			// used to save all categories by calling general->set
		if(!isset($data['property_id']) || 'new_listing' == $data['property_id']) {
			
			$property_id = $this->create_listing();		

			if(isset($data['property_id']))
				unset($data['property_id']);
		}

		else if(isset($data['new_listing']) && 'new_listing' != $data['property_id']) {
			
			$property_id = $data['property_id'];
			unset($data['property_id']);
		
		}
		
		echo $property_id;
		/*
		foreach($data as $category => $value)
			$this->save_item($property_id, $category, $value);
			
		return $property_id;// always return this so it can be used to regenerate the form for creation or updating
		
		*/
	}
	
	public function media_upload($property_id, $type){//type comes from html form

		// DOWNLOADING THE FILE FROM BROWSER AND STORING IT LOCALLY--THIS IS AN ARRAY SO YOU CAN PRINT_R IT
		$media = $_FILES[$type];
		
		// TEMPORARY_FILE IS WHERE THE SERVER STORES THE FILE LOCALLY
		$temporary_file = $media['tmp_name'];
		
		// $media['type'] is sent by the browser. It looks something like image/jpeg or image/png--we need to make sure we include the case where 4 characters are there
		$extension = end(explode('/', $media['type']));

		// THIS IS THE FINAL FILE_NAME
		$media_id = $this->create_media_id($property_id, $type);//generates a new media piece 
		$file_name = $this->create_relative_url($property_id, $type, $media_id, $extension);//create the url to be saved
		
		$this->update_media($property_id, $media_id, $type, $url);//update the database
		
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

	public function media_status($property_id, $input_data) {//method to change the status for any piece of media
		
		
		
	}
	
	
/**************** PRIVATE FUNCTIONS *****************/

	private function save_item($property_id, $category, $value) {//general save with validation
		
		$table = $this->CI->general->get_category_table($category);//get table to help with general update or insert
		$check = $this->CI->general->get_category($property_id, $category);//see if this row exists
		$data = array($category => $value);
		
		
		if(!$check)//this row does not exist -- need to insert data
			$this->CI->general->insert($table, $data);
		else
			$this->CI->general->update($table, $data);
	}
	
	private function create_listing(){//new listing
		
		$table = $this->CI->general->get_category_table('name');

		$temp_data = array('name' => md5(time()));//creates a temporary name so we can easily get the property_id

		$this->CI->general->insert($table, $temp_data);//create the id with the database abstraction class
		
		// This is the only time you should have to find the property_id other than in the search which uses different methods
		$query = $this->CI->general->get($table, $temp_data);
		
		if(!$query || !$query->row()->property_id) {
			$this->CI->load->library('utilities/developer_contact');
			$this->CI->developer_contact->general_error("New property Error", "{$name}");//message me so I can fix manually -- shouldn't happen but in case there are bigger problems

			$property_id = $temp_data['name'];
		}
		
		else
			$property_id = $query->row()->property_id;	
		
		$this->CI->file_management->directory_creation($property_id);//create the directories for the new property
		
		
		$media_id = $this->create_media_id($property_id, "thumbnail_image");//generate the new media
		$url = $this->CI->config->item('default_thumbnail_image_url');//generate the file name--this is relative so don't send to the db
		$this->update_media($property_id, $media_id, 'thumbnail_image', $url);//actually update and enable the media
		
		return $property_id;//return our newly created id to be used every where else. If there was an error this will be a md5(time()) and we will be contacted
	}

	// MEDIA SPECIFIC UTILITIES

	private function update_media($property_id, $media_id, $type, $url = false, $status = true) {//used when creating listing
		
		$this->CI->load->config('site_status');
		$category = "{$type}_id";
		$table = $this->CI->general->get_category_table($category);
		
		$data = array(
			'status' => $status,//default is true -- the only time we would need to change this is when updating status
			'property_id' => $property_id,
		);
		
		if($url)//only update the url if it is specified
			$data['url'] = $url;
		
		$query = $this->CI->general->get($table, $data);

		$this->CI->general->update($table, array($category => $media_id), $data);//update the new media into the database

		if(!$query || $query->row()->$category) {
			$this->CI->load->library('utilities/developer_contact');
			$this->CI->developer_contact->general_error("new media property_set method problem", "Could not update where property_id = {$property_id} and url = {$url} for category {$category}");
		}
		
	}
	
	private function create_media_id($property_id, $type) {//create new media and return unique media id
		
		$category = "{$type}_id";
		$table = $this->CI->general->get_category_table($category);

		$data = array('url' => 'temp', 'property_id' => $property_id);

		$this->CI->general->insert($table, $data);
		
		// can't use the get_category because it will only return one -- create own search with database abstraction layer get in general
		$query = $this->CI->general->get($table, $data);
		if(!$query || !isset($query->row()->$category)) {
			$this->CI->load->library('utilities/developer_contact');
			$this->developer_contact->general_error("Media id could not be found after creating", "{$category}, {$property_id}");
			
			return false;
		}
		
		else
			return $query->row()->$category;
	}

	private function create_relative_url($property_id, $type, $media_id, $extension) {//creates a media name--public because we may need to reference it from thumbnail_slideshow image creation--
		$url = "";
		
		if('video' == $type)
			$url = "/property_videos/{$property_id}/{$media_id}.{$extension}";

		else if('pdf' == $type)
			$url = "/property_pdfs/{$property_id}/{$media_id}.{$extension}";

		else if('thumbnail_image' == $type)
			$url = "/property_images/{$property_id}/thumbnail/{$media_id}.{$extension}";

		else if('slideshow_image' == $type)
			$url = "/property_images/{$property_id}/slideshow/{$media_id}.{$extension}";

		else if('slideshow_thumbnail_image' == $type)
			$url = "/property_images/{$property_id}/slideshow_thumbnail/{$media_id}.{$extension}";
	
		return $url;
	}


};