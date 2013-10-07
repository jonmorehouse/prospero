<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Team_member extends CI_Model {

	function __construct() {

		parent::__construct();

		$this->load->library("utilities/format");

		// initialize sql dependencies
		$this->member_table = "team_bumpbox";
		$this->image_table = "general_images";
	}

	/*
	 * Return an array for the thumbnails for each member
	 * 
	 * teamMember = array(
	 * 	"member_id" => member_id,
	 * 	"image" => array("imageUrl", "imageAlt"),
	 *	"title" => title,
	 *  )
	 */
	public function get_full_team() {
	
		// grab all relevant member ids (in the correct order)
		$member_ids = $this->get_member_ids();
		
		// loop through and create an array of members
		$members = array();

		// loop through each member 
		foreach ($member_ids as $member_id) {

			// grab the correct member and push it into the array
			array_push($members, $this->get_member($member_id));
		}

		return $members;
	}

	public function get_member($member_id) {
	
		$member = array(

			"member_id" => $member_id,
			"content" => $this->get_content($member_id),
			"image" => array(

				"url" => $this->get_image_url($member_id),
				"src" => $this->get_image_url($member_id),
				"alt" => $this->get_image_alt($member_id),

			),
			"title" => $this->get_title($member_id),
			"name" => $this->format->word_format($member_id),
		);

		return $member;
	}
	
	public function get_member_ids() {

		// returns an array of all member ids using a distinct phrase
		$query = $this->db->distinct()->order_by("member_order", "asc")->get($this->member_table);
		$ids = array();

		foreach ($query->result() as $row)
			array_push($ids, $row->member_id);
		
		return $ids;
	}

	public function get_content($member_id) {

		$query = $this->db->select('content')->where(array('member_id' => $member_id))->get($this->member_table, 1);

		return $query->row()->content;		

	}

	public function get_image_url($member_id) {

		$member_id = "${member_id}_thumbnail";
		$query = $this->db->select('url')->where(array('image_id'=> $member_id))->get($this->image_table);


		return base_url($query->row()->url);
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
