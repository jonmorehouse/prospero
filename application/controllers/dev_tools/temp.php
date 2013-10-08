<?php

class Temp extends MY_Controller {

	function __construct() {

		$this->id = "Temp";
		parent::__construct();


	}

	public function index() {

		$bios = array(

			"jeff_nightingale",
			"harvey_chow",
			"beng_gunn",
		);

		foreach ($bios as $bio) {
			
			// open file and read it 
			$content = file_get_contents($bio);

			$update_data = array("content" => $content);

			$this->db->where(array("member_id" => $bio))->update("team_bumpbox", $update_data);
		}
	}
}
