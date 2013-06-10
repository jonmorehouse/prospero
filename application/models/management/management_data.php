<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Management_data extends CI_Model {


	function __construct() {

		parent::__construct();

		$this->load->model("general");

	}


	// this is used to get default values for elements that aren't global, that we need to see the value no matter what.
	// examples are property_new, if it is the default value, then we can't see it in the normal element
	public function get_category($property_id, $category) {

		echo $category;

	}

	public function get_default($category) {

		$query = $this->db->where(array("category" => $category))->select("default_value")->get("category_type_categories", 1);

		if ($query->num_rows() == 0) return false;

		return $query->row()->default_value;
	}
}