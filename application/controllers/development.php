<?php

class Development extends CI_Controller{
	
/*

	THIS CLASS IS JUST FOR DEVELOPMENT -- ITS TO HELP THE DEVELOPERS AS THEY MOVE FORWARD
	THIS SHOULD BE REMOVED ON LIVE SITE

*/
	
	public function index(){
		
		redirect();
		
	}
	
	public function create_default() {

		$defaults = array();
		$query = $this->db->get('table_schema');
		
		foreach($query->result() as $row) {
			
			$category = $row->category;
			$value = $row->default_value;
			$location = $row->location;
			
			$bad_categories = array('thumbnail_image_id', 'slideshow_image_id', 'pdf_id', 'video_id', 'pdf', 'thumbnail_image', 'slideshow_image', 'video', 'thumbnail_image_url', 'slideshow_image_url', 'pdf_url', 'video_url');//categories in 

			if(!in_array($category, $bad_categories))
				$defaults[$category] = $value;
		}
		
		$this->load->library('property/property_set');
		$this->property_set->save($defaults);
	}
	
	public function clear_general_tables(){
		
		$this->load->model('general');
		$tables = $this->general->category_tables();
		
		foreach($tables as $value){

			$this->db->truncate($value, 'prospero');
			echo "<br />Successfully Cleared table: " . $value; 		
		}
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
		
		$category = 'residential_test';
		$table = 'residential';
		$type = 'residential';//ie general, media location etc
		$input_type = 'text';//form input
		$default_value = 'default residential';//
		$description = 'asdf';//to show in the cms for cms driven categories
		
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

	public function delete() {
			
		$this->load->library('property/property_set');
		$property_id = $this->uri->segment(3);
		for($i = 0; $i<20; $i++)
			$this->property_set->destroy_property($i);
	}

	public function test() {
		
		$this->load->model('general');
		echo $this->general->get_category_table('thumbnail_image_id');
		
	}
	

/************************************************************************************************************/
}