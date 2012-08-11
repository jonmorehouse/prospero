<?php

class Table_development extends CI_Controller{
	
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
	
	public function clear_general_tables(){
		
		$this->load->model('general');
		$tables = $this->general->category_tables();
		
		foreach($tables as $value){

			$this->db->truncate($value, 'prospero');
			echo "<br />Successfully Cleared table: " . $value; 		
		}
	}
	
	public function category_type_categories() {//updates the schema by checking the type/category of each and then verifying in table_schema and category_type_categories tables in mysql
	
		// include the proper file
		$root = $_SERVER['DOCUMENT_ROOT'];
		$url = "{$root}prospero/helper_scripts/category_type_categories.php";//note that this file is dynamically generated
		
		include($url); // get all_categories from this
		
		// update category_type_categories and table_schema!
		foreach($all_categories as $category_type => $array) {
			
			foreach($array as $category => $datatype) {
				
				$exists = $this->table_schema($category, $category_type, $datatype);//will update if it needs to 
				$this->category_type_category($category_type, $category);//update category_type_categories
				
				if($category_type != 'general')
						$this->non_general_category($category_type, $category, $datatype);
			}
		}
		
	}
	
	
	private function table_schema($category, $category_type, $datatype) {//looks for the proper table_schema category
		
		$where = array('category' => $category);
		$this->db->where($where);
		$query = $this->db->get('table_schema');
		
		if(0 == $query->num_rows()) {//new insertion!
			$data = array(
				'category' => $category,
				'location' => $category_type,
				'type' => $category_type,
				'data' => $datatype,
				'input_type' => 'string',
				'default_value' => "default_{$category}",
				'description' => "default_{$category}",
		);
		
			$this->db->insert('table_schema', $data);//insert new category into table_schema!
			
			return false;
		}
		
		else if ($query->row()->data != $datatype) {//datatype changed!
				
			$update_data = array(
				'data' => $datatype,
			);
			$this->db->where($where)->update('table_schema', $update_data);
			
			return false;
		}
		
		else//the file was in the table_schema already!
			return true;
	}
	
	private function category_type_category($category_type, $category) {//will search db for the particular category and will add if not found
		
		$data = array('category_type' => $category_type, 'category' => $category);
		$query = $this->db->where($data)->get('category_type_categories');
		
		if(0 == $query->num_rows())//not found add it!
			$this->db->insert('category_type_categories', $data);
	}
	
	private function non_general_category($category_type, $category, $datatype) {
		
		$this->load->dbforge();

		$default = false;
		
		if('bool' == $datatype) {
			$type = "tinyint(1)";
			$default = '0';
		}
		
		else if ('int' == $datatype)
			$type = "int(11)";
		
		else
			$type = "varchar(255)";
		
		$field = array($category => array(
			'type' => $type,
			'null' => true,
			));
		
		if($default) {
			$field['null'] = false;
			$field['default'] = $default;
		}
		
		if(!$this->column_exists($category_type, $category)) {
			$this->dbforge->add_field($field);
			$this->dbforge->add_column($category_type, $field);//add column -- will throw error but works anyway
		}
	}
	
	private function column_exists($table, $category) {
		
		$table = $this->db->escape_str($table);
		$sql = "DESCRIBE `$table`";
		$query = $this->db->query($sql);
		
		$flag = false; // it doesn't exist

		foreach($query->result() as $row) {

			if($row->Field === $category)
				$flag = true;
		}
		
		return $flag;
	}
	

/************************************************************************************************************/
}