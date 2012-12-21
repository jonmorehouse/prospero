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

		$this->CI->load->config('site_status');

		$libraries = array('utilities/file_analysis', 'utilities/file_management', 'utilities/data_helper');
		$this->CI->load->library($libraries);

	}
	
/*************** PUBLIC FUNCTIONS ************/

	public function save($data) {//this function is used to save all data that is input through post. 
		
		$property_id = $data['property_id'];

		foreach($data as $category => $value) {

			if ($category !== "property_id")
				$this->save_item($property_id, $category, $value);

		}

		return $property_id;// always return this so it can be used to regenerate the form for creation or updating*/

	}
	
	public function media_upload($property_id, $type){//type comes from html form

		// DOWNLOADING THE FILE FROM BROWSER AND STORING IT LOCALLY--THIS IS AN ARRAY SO YOU CAN PRINT_R IT

		$media = $_FILES["media"];//media is the name of the form as created in managmeent_forms
		
		// TEMPORARY_FILE IS WHERE THE SERVER STORES THE FILE LOCALLY
		$temporary_file = $media['tmp_name'];
		
		// $media['type'] is sent by the browser. It looks something like image/jpeg or image/png--we need to make sure we include the case where 4 characters are there
		$extension = end(explode('/', $media['type']));

		// THIS IS THE FINAL FILE_NAME
		
		$media_id = $this->create_media_id($property_id, $type);//generates a new media piece 
		$file_name = $this->create_relative_url($property_id, $type, $media_id, $extension);//create the url to be saved
		

		$this->update_media($property_id, $media_id, $type, $file_name);//update the database
		
		// If there is no error, we will add the file. Thumbnail images will be overwritten because we can only have one thumbnail

		if(!$media['error']){//WE WILL JUST HAVE THE IMAGES OVERWRITE IF THERE IS A PROBLEM
			move_uploaded_file($temporary_file, $file_name);
			
			if('slideshow_image' == $type) {
				
				$thumbnail_file_name = $this->create_relative_url($property_id, 'slideshow_thumbnail_image', $media_id, $extension);
				$this->CI->load->library('utilities/image_management');
				$this->CI->image_management->create_slideshow_thumbnail_image($file_name, $thumbnail_file_name);
			}
			
			else if('thumbnail_image' === $type)
				$this->current_thumbnail($property_id, $media_id);//set current as the new thumbnail/deactivate old ones
			
			return true;
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

	/***

	


	****/ 

	public function property_status($property_id, $input_status) {//responsible for activating/deactivating properties etc
		
		$category = 'property_status';
		
		if($input_status === 'true')
			$status = true;
		else
			$status = false;

		$table = $this->CI->general->get_category_table($category);
		
		$query = $this->CI->general->get($table, array('property_id' => $property_id));

		if(!$query)
			$this->CI->general->insert($table, array('property_id' => $property_id, $category => $status));

		else
			$this->CI->general->update($table, array('property_id' => $property_id), array($category => $status));
	}
	
	public function media_status($media_id, $category, $input_status, $property_id) {

		if('false' === $input_status)
			$status = false;
		else
			$status = true;
		
		$table = $this->CI->general->get_category_table($category);
		
		if('thumbnail_image_id' === $category) {//note that the last thumbnail inserted will be the current one
			
			$this->current_thumbnail($property_id, $media_id);
		}
		
		else
			$this->CI->general->update($table, array($category => $media_id));
	}
	
	/*****
		NOT CURRENTLY WORKING
	*****/

	public function destroy_property($property_id) {
		
		$tables = $this->CI->general->category_tables();

		array_push($tables, 'property_management');

		foreach ($tables as $table) {

			$query = $this->CI->general->get($table, array('property_id' => $property_id));

			if ($query)
				$this->CI->general->delete($table, array('property_id' => $property_id));
		}
	}

	public function add_admin($property_id) {//calls the function admin and sets the property as attached to this user
		
		$this->CI->load->library('user_access/admin');
		$this->CI->admin->add_admin($property_id);
		
	}

	





/**************** PRIVATE FUNCTIONS *****************/
	
	private function save_item($property_id, $category, $value) {//general save with validation
			
		$table = $this->CI->general->get_category_table($category);//get table to help with general update or insert
		
		$check = $this->CI->general->get($table, array('property_id' => $property_id));//see if this row exists for the property
		
		$datatype = $this->CI->general->get_category_datatype($category);

		// convert the values to the proper types to save in the proper format for our database
		if('bool' == $datatype || 'boolean' == $datatype)
			$value = $this->CI->data_helper->input_to_boolean($value);
		
		else if('int' == $datatype || 'integer' == $datatype)
			$value = $this->CI->data_helper->input_to_integer($value);
		
		else
			$value = $this->CI->data_helper->input_to_safe_string($value);
		
		$data = array($category => $value);//data to be uploaded
		
		
		if(!$check)//this row does not exist -- need to insert the property id as well
			$this->CI->general->insert($table, array('property_id' => $property_id, $category => $value));//insert prop id and categ + value
		else
			$this->CI->general->update($table, array('property_id' => $property_id), $data);
	}
	
	private function update_media($property_id, $media_id, $type, $url = false, $status = true) {//used when creating listing
		
		$this->CI->load->config('site_status');
		$category = "{$type}_id";
		$table = $this->CI->general->get_category_table($category);
		
		$where = array(
			$category => $media_id,
			'property_id' => $property_id,
		);
		
		$update = array('status' => $status);//update data
		
		if($url)//only update the url if it is specified
			$update['url'] = $url;
		
		$query = $this->CI->general->get($table, $where);

		$this->CI->general->update($table, $where, $update);//update the new media into the database
		
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
			$url = "property_videos/{$property_id}/{$media_id}.{$extension}";

		else if('pdf' == $type)
			$url = "property_pdfs/{$property_id}/{$media_id}.{$extension}";

		else if('thumbnail_image' == $type)
			$url = "property_images/{$property_id}/thumbnail/{$media_id}.{$extension}";

		else if('slideshow_image' == $type)
			$url = "property_images/{$property_id}/slideshow/{$media_id}.{$extension}";

		else if('slideshow_thumbnail_image' == $type)//not database driven called when the slideshow images is updateby an if statement
			$url = "property_images/{$property_id}/thumbnail_slideshow/{$media_id}.{$extension}";
	
		return $url;
	}
	
	public function current_thumbnail($property_id, $media_id) {//will take in the new thumbnail and deactivate all others
		
		$category = 'thumbnail_image_id';
		$table = $this->CI->general->get_category_table($category);
		$query = $this->CI->general->get($table, array('property_id' => $property_id));
		
		if($query)
			foreach($query->result() as $row) {
				$all_media_id = $row->$category;
				$update_data = array('status' => false);
				$this->CI->general->update($table, array($category => $all_media_id), $update_data);
			}

		$this->CI->general->update($table, array($category=>$media_id), array('status' => true));

	}


};