<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Assets extends CI_Controller {

	function __construct() {

		parent::__construct();//call parent constructor
		$this->load->model('general');
		$this->load->library(array("utilities/format", "general/page_management"));
	}	


	public function javascript_resources() {

		$resources = array("resources/javascript/resources/jquery-1.7.1.min.js",
			"resources/javascript/resources/jquery-ui-1.8.18.custom.min.js",
			"resources/javascript/resources/less-1.3.0.min.js",
			"resources/javascript/resources/modernizr.js");

		foreach ($resources as $resource) {

			$insert = array("url" => $resource, "status" => false, "page_id" => "vacancies");
			$this->db->insert("javascript_resources", $insert);
		}	
	}

	public function javascript_module() {

		$module = array(

			"url" => "resources/javascript/modules/modules/map_controller.js",
			"type" => "modules",
			"page_id" => "listing",
			"status" => false
		);

		$this->db->insert("javascript_modules", $module);


	}

	public function javascript_modules() {

		$query = $this->db->where(array("page_id" => "homepage"))->get("javascript_modules");

		foreach ($query->result() as $row) {

			$data = array(

				"page_id" => "vacancies",
				"url" => $row->url,
				"type" => $row->type,
			);

			$this->db->insert("javascript_modules", $data);
		}

	}


}