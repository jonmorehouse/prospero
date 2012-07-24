<?php

class Development extends CI_Controller{
	
/*THIS CLASS IS JUST FOR DEVELOPMENT--ITS TO HELP THE DEVELOPERS AS THEY MOVE FORWARD
	THIS SHOULD BE REMOVED ON LIVE SITE
*/
	
	public function index(){
		
		redirect();
		
	}
	
	public function defaults(){
		//THIS IS GOING TO CALL THE PROPERTY_SET CLASS TO SET ALL OF THE INFORMATION WITH NEW_LISTING!
		
		$defaults = array(
			'property_id' => 'new_listing',
			
			// BUY_PROPERTY
			'buy_price' => 999,
			'buy_list_date' => 'default_list_date',
			
			// PROPERTY_CONTACT
			'manager_email' => 'default_manager_email',
			'manager_phone' => 9999999999,
			'manager_first_name' => 'default_manager_first_name',
			'manager_last_name' => 'default_manager_last_name',
			
			// PROPERTY_CONTENT
			'slideshow_directory' => 'default_slideshow_directory',
			'property_content' => 'default_property_content',
			
			// PROPERTY_LOCATION
			'address' => 'default_address',
			'location' => 'default_location',
			'postal_code' => 999,
			'location_category' => 'none',
			
			// PROPERTY_META
			'meta_description' => 'default_meta_description',
			'meta_keywords' => 'default_meta_keywords',
			
			// PROPERTY_NAME
			'name' => 'default_property_name',
			
			// PROPERTY_THUMBNAIL
			'thumbnail_blurb' => 'default_thumbnail_blurb',
			
			// PROPERTY_TYPE
			'type' => 'rent',
			'type_category' => 'residential',
			'new' => false,
			
			//RENT_PROPERTY
			'rent_price' => 999,
			'rent_units_available' => 999,
			
		);
		
		foreach($defaults as $key=>$value) {
			
			$update_data = array('default_value' => $value); 
			$where = array('category' => $key);
			$this->db->where($where)->update('table_schema', $update_data);
			
		}
		
		
		// $this->load->library('property/property_set');
		// $property_id = $this->property_set->save($defaults);
		
		// echo "Default properties were set for the prospero development database";
	}
	
	public function create_default() {
		
		$query = $this->db->get('table_schema');
		$values['property_id'] = 'new_listing';
		
		foreach($query->result() as $row) {
			
			$category = $row->category;
			$default_value = $row->default_value;
			$location = $row->location;
			$datatype = $row->data;
			$data = array($category => $default_value);

			
			if(strlen($location) > 0 && $category != 'property_id' && $category != 'property_name') 
				$values[$category] = $default_value;
		
		}//end foreach loop
		
		// print_r($values);
		$this->load->library('property/property_set');
		$this->property_set->save(array('property_id' => 'new_listing'));
	}
	
	public function clear_general_tables(){
		
		$this->load->model('general');
		$tables = $this->general->category_tables();

		foreach($tables as $value){
			$this->db->truncate($value);
			echo "<br />Successfully Cleared table: " . $value; 		
		}
		
		$this->db->truncate('property_name');
		echo "<br />Successfully Cleared table: Property Name";
	}
	
	public function create_user(){
		$this->load->library('utilities/format');
		
		if(!$this->input->get())
			$this->load->view('development/user_form');
		else{
			
			$code = $this->input->get('pass_code');
			$username = $this->format->comparison_format($this->input->get('user_name'));
			$password = md5($this->input->get('password'));
			$last_name = $this->format->comparison_format($this->input->get('last_name'));
			$admin_rights = $this->format->comparison_format($this->input->get('admin_rights'));
			
			$query = $this->db->where('username', $username)->get('user_information');
			if($query->num_rows()!=0)
				redirect('development/create_user');
			else
				$data = array('username' => $username, 'password' => $password, 'admin_rights'=>$admin_rights, 'last_name'=>$last_name);
				if($code == 'Moeller12')
					$this->db->insert('user_information', $data);
				echo "user added";
		}
	}

	public function table_schema_insert() {
		
		$category = 'thumbnail_image_id';
		$table = 'thumbnail_images';
		$type = 'media_id';//ie general, media location etc
		$input_type = 'radio';//form input
		$default_value = '';//
		$description = '';//to show in the cms for cms driven categories
		
		$query = $this->db->where(array('category' => $category))->get('table_schema');
		
		if($query->num_rows > 0) {
			
			$this->db->where(array('category' => $category))->delete('table_schema');
			echo "deleted old insertion for {$category} in table schema...please note this";
		}
		

		$data = array(
			'category' => $category, //property_category
			'location' => $table, //location or table
			'type' => $type, //general, media etc
			'input_type'=> $input_type, //for cms forms -- leave blank for status
			'default_value'=> $default_value, //for cms mainly, set to false etc
			'description'=> $description, //for the cms span tag to describe this
		);
		
		$this->db->insert('table_schema', $data);
		
	}
	// THIS IS FOR THE EMAIL WHICH ISN'T WORKING AS OF NOW?

/************************************************************************************************************/

	public function test() {
		
		$this->load->library('property/media');
		$this->media->get_url('thumbnail_image');
		
	}

}