<?php

class Temp_development extends CI_Controller {

	function __construct() {

		parent::__construct();//call parent constructor
		$this->load->model('general');
		$this->load->library('utilities/format');

	}

	public function test() {

		foreach (array("new", "all", "office_industrial", "retail", "residential") as $value) {

			$insert_data = array(

				'map_id' => $value,
				'map_title' => $this->format->word_format($value),
				'map_category' => $value,
			);

			$this->db->insert('map_bumpbox', $insert_data);
		}

		
	}



}