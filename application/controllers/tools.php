<?php

class Tools extends CI_Controller{
	
/*

	THIS CLASS IS JUST FOR DEVELOPMENT -- ITS TO HELP THE DEVELOPERS AS THEY MOVE FORWARD
	THIS SHOULD BE REMOVED ON LIVE SITE

*/
	function __construct() {
		parent::__construct();
		
		$this->load->model('general');
		
	}

	public function index(){
		
		redirect();
		
	}
	
	public function create_default() {
		
		$this->load->library('property/property_set');
		$property_id = $this->property_set->save(array('property_id' => 'new_listing', 'name' => 'default name'));
		print_r($this->general->get_category_types());

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

	public function delete_property() {
			
		$this->load->library('property/property_set');
		$property_id = $this->uri->segment(3);
		for($i = 0; $i<20; $i++)
			$this->property_set->destroy_property($i);
	}

	public function get_all_categories() {
		
		$this->load->model('general');
		$tables = $this->general->category_tables();

		$categories = array();
		
		$all_categories = array();
		
		foreach ($tables as $table) {
			
			$all_categories[$table] = array();
			$table_name = $this->db->escape_str($table);
			$sql = "DESCRIBE `$table_name`";
			$description = $this->db->query($sql);
			foreach($description->result() as $describe_row) {
				foreach($describe_row as $key => $value)
					if('Field' == $key)
						array_push($all_categories[$table], $value);
			}
		}
		
		foreach($all_categories as $category_type)
			foreach($category_type as $category)//category_type level
				echo "{$category} <br />"; //category level
		
	}
	
	public function get_category_types() {
		
		print_r($this->general->get_category_types());
		
	}
	
	
	
	

	
/************************************************************************************************************/
}