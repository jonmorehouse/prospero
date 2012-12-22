<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*
	TODO

		REFACTOR THIS SO THAT WE HAVE ONE PARENT CLASS WITH ALL OF THESE FUNCTIONS ETC

*/
class About extends CI_Model {

	function __construct() {

		parent::__construct();

		$this->about_table = "about_bumpbox";

	}

	public function get_about_ids() {

		$query = $this->db->distinct()->get($this->about_table);

		$abouts = array();

		foreach ($query->result() as $row)
			array_push($abouts, $row->about_id);

		return $abouts;
	}

	public function get_title($about_id) {

		$query = $this->db->select('title')->where(array('about_id' => $about_id))->get($this->about_table);

		return $query->row()->title;		
	}

	public function get_content($about_id) {

		$query = $this->db->select('content')->where(array('about_id' => $about_id))->get($this->about_table);

		return $query->row()->content;		

	}

}
