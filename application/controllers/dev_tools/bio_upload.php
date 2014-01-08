<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Bio_upload extends CI_Controller {

	function __construct() {

		$this->id = "";
		parent::__construct();

	}

	public function index() {

		$member_id = "caroline_pataky";
		
		// create the proper bio pic as needed
		$data = array(

			"image_id" => "${member_id}_thumbnail",
			"url" => "resources/images/team_thumbnails/${member_id}.png",
			"status" => false,
			"alt" => $member_id,
		);

		// insert the image 
		$this->db->insert("general_images", $data);

		// upload the actual bio and create the team member
		$data = array(

			"member_id" => $member_id,
			"content" => file_get_contents("/Users/MorehouseJ09/Desktop/bio.md"),
			"title" => "Lease Administrator",
			"member_order" => 80,
		);

		$this->db->insert("team_bumpbox", $data);
	}
}	
