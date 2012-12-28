<?php

class Temp_development extends CI_Controller {

	function __construct() {

		parent::__construct();//call parent constructor
		$this->load->model('general');
		$this->load->library('utilities/format');

	}

	public function temp() {

		foreach (array("retail", "office_industrial", "residential") as $value) {

			$_title = $this->format->word_format($value);
			$title = "Prospero ${_title} Properties";

			$this->db->insert("page_titles", array("page_id" => $value, "title" => $title));

		}


	}


	public function google_api() {

		$insert_data = array(

			'url' => "http://maps.googleapis.com/maps/api/js?key=AIzaSyBgNXY0_P4HuxH3N1ClOSerzSdH7dF7wfs&sensor=false",
			'page_id' => "homepage",
			'status' => false,	
			// 'type' => 'site_wide',		
		);

		$this->db->insert("javascript_resources", $insert_data);
		
	}
}