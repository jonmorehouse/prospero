<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Team_member extends CI_Model {

	function __construct() {

		parent::__construct();

		$this->member_table = "team_bumpbox";
		$this->image_table = "general_images";

	}

	public function get_member_ids() {

		// returns an array of all member ids using a distinct phrase
		$query = $this->db->distinct()->get($this->member_table);
		$ids = array();

		foreach ($query->result() as $row)
			array_push($ids, $row->member_id);
		
		return $ids;
	}

	public function get_content($member_id) {

		$query = $this->db->select('content')->get($this->member_table);

		return $query->row()->content;		

	}

	public function get_image_url($member_id) {

		$member_id = "${member_id}_thumbnail";
		$query = $this->db->select('url')->where(array('image_id'=> $member_id))->get($this->image_table);

		return $query->row()->url;
	}

	public function get_image_alt($member_id) {

		$query = $this->db->select('alt')->get($this->image_table);

		return $query->row()->alt;
	}

	public function get_title($member_id) {

		$query = $this->db->where(array('member_id' => $member_id))->select('title')->get($this->member_table);


		return $query->row()->title;



	}
}
