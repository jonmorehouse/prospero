<?php

class Temp extends MY_Controller {

	function __construct() {

		$this->id = "Temp";
		parent::__construct();
	}

	public function index() {

		// update the team method	
		$data = array(

			"member_id" => "team",	
			"member_order" => "01",
			"title" => "Prospero Executive Team",
			//"content" => file_get_contents("/Users/MorehouseJ09/Desktop/june.md"),
		);

		$this->db->insert("team_bumpbox", $data);
	}

}
