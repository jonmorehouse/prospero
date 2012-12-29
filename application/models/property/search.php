<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*

	1.) Find search categories
	2.) Search each category with a like statement
	3.) Add properties that show up
	4.) Rank those properties
*/

class Search extends CI_Model {


	function __construct() {

		parent::__construct();//

		$this->load->model('general');		
		$this->table = "search_categories";

	}

	public function general_properties($input) {

		// returns a raw list of all properties that meet the search requirements!
		$categories = $this->search_categories("general");
		$raw_properties = array();

		foreach ($categories as $category)
			$raw_properties = array_merge($raw_properties, $this->category_properties($category, $input));

		return $raw_properties;
	}

	public function similar_properties($property_id) {//

		$categories = $this->search_categories("similar");
		$raw_categories = array();

		foreach ($categories as $category) {

			$value = $this->general->get_category($property_id, $category);
			$raw_categories = array_merge($raw_categories, $this->category_properties($category, $value));

		}

		return $raw_categories;
	}

	public function listing_verification($input) {

		$categories = $this->search_categories("verification");
		$raw_categories = array();

		foreach ($categories as $category) {

			

		}

	}

	// returns the specific categories to search based on a type input
	private function search_categories($type) {

		$query = $this->db->select('category')->where(array('search_type' => $type))->get($this->table);
		
		if ($query->num_rows() == 0) return false;

		$categories = array();

		foreach ($query->result() as $row) 
			array_push($categories, $row->category);

		return $categories;
	}

	//returns properties that have are "like" the category value	
	private function category_properties($category, $value) {

		$table = $this->general->get_category_table($category);
		//like is not case sensitive ie: manor == Manor
		$query = $this->db->select('property_id')->like($category, $value)->get($table);

		$results = array();

		foreach ($query->result() as $row)
			array_push($results, $row->property_id);

		return $results;
	}

}


