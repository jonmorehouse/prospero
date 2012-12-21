<?php

/*
	** this class is for temporary tools to be used with the 
	** any permanent tools go into the tools class
*/

class Development extends CI_Controller {
	
	/*** CONSTRUCTS ***/
	
	public function __construct() {
		
		parent::__construct();
		
	}
	
	/***** PUBLIC FUNCTIONS *****/

	public function date() {
		
		$this->load->library('utilities/date');
		
		$year_ago = $this->date->year_ago();

		$increments = $this->date->db_date_increments($year_ago, 'week');

	}
	
	/******* TEMPORARY MAPPER FUNCTIONS ********/
	/*
		Map is used to map the default values from categories in table_schema to default_value column in category_type_categories
	*/
	public function map() {

		$this->load->model('general');
		$this->load->library('utilities/format');

		$category_types = $this->general->get_category_types();

		foreach ($category_types as $category_type) {

			$categories = $this->general->get_categories_by_type($category_type);

			if ($categories) {

				foreach ($categories as $category) {

					$default = $this->general->get_column('table_schema', array('category' => $category, 'type' => $category_type), 'default_value');

					if ($default) {

						$default = $this->format->word_format($default);
						$this->general->update('category_type_categories', array('category' => $category, 'category_type' => $category_type), array('default_value' => $default));
						echo "{$category} was updated successfully\n";
					}
				}// end of categories foreach
			}//end of category if loop
		}//end of foreach for category_types
	}

	/***
		
		Location category update
	***/

	public function category_location_update() {

		// this function sets the default values

		$options = array("West Vancouver", "Downtown");
		$table = "default_options";
		$category = "location_category";

		foreach ($options as $option) {
			$this->general->insert($table, array('category' => $category, 'category_value' => $option));
		}
	}

	public function test() {

		$query = $this->db->where(array('data' => 'int'))->get('table_schema');

		$categories = array();

		foreach ($query->result() as $row) {


			$category_info = array('location' => $row->location, 'category' => $row->category);

			array_push($categories, $category_info);

		}//create all categories

		foreach ($categories as $value) {

			if ($value['category'] !== "property_id") {
				
				$this->change_column($value['location'], $value['category']);
				$this->db->where(array('location'=>$value['location'], 'category'=>$value['category']))->update('table_schema', array('data' => 'string'));

			}//end of if piece
		}//end of foreach loop

	}

	private function change_column($table, $category) {

		$this->load->dbforge();//load the dbforge class
		$fields = array($category => array('name' => $category, 'type' => 'TEXT'));
		$this->dbforge->modify_column($table, $fields);
		
	}



}