<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/*
	Change this later to help re-map the entire navigation system and change dependencies?
	Responsible for delivering proper page titles and headers where needed throughout the sitea
*/

class Headers extends CI_Model {

	function __construct() {

		parent::__construct();

		$this->table = "page_titles";//initialize the generic table
		$this->load->model("general");//initialize general for other elements needed
		$this->load->library("utilities/format");//initialize helper for words etc in certain places.

	}	

	public function get_default() {

		$query = $this->db->where(array("page_id" => "default"))->select("title")->get($this->table);

		return $query->row()->title;
	}

	public function browse_header($page_id, $filter) {

		$query = $this->db->where(array("page_id" => $page_id, "filter" => $filter))->select("title")->get($this->table);

		if ($query->num_rows() === 0) return $this->get_default();

		else return $query->row()->title;
	}
 
	public function search_header() {

		$query = $this->db->where(array("page_id" => "search"))->select("title")->get($this->table);

		if ($query->num_rows() === 0) return $this->get_default();

		else return $query->row()->title;

		// put the search query in here somewhere?
	}

	public function listing_page_title($property_id) {

		$name = $this->general->get_category($property_id, "name");

		if ($name) return $this->format->word_format($name);

		else return $this->get_default();
	}

	public function page_title($page_id) {

		$query = $this->db->select("title")->where(array("page_id" => $page_id))->get($this->table);

		if ($query->num_rows() === 0) return $this->get_default();

		else return $query->row()->title;
	}


}