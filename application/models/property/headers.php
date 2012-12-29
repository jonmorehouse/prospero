<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*
	Change this later to help re-map the entire navigation system and change dependencies?
*/

class Headers extends CI_Model {

	function __construct() {

		parent::__construct();

		$this->table = "page_titles";

	}	

	public function default() {

		$query = $this->db->where(array("page_id" => "default"))->select("title")->get($this->table);

		return $query->row()->title;
	}

	public function property($page_id, $filter) {

		$query = $this->db->where(array("page_id" => $category, "filter" => $filter)->select("title")->get($this->table);

		if ($query->num_rows() === 0) return $this->default();

		else return $query->row()->title;
	}
 
	public function search() {

		$query = $this->db->where(array("page_id" => "search"))->select("title")->get($this->table);

		if ($query->num_rows() === 0) return $this->default();

		else return $query->row()->title;
	}





}