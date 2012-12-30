<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Navigation_development extends CI_Controller {


	function __construct() {

		parent::__construct();

	}

	public function test() {

		

	}

	// similar properties, map, pdf, video inquire
	public function element() {

		$table = "navigation_elements";

		$element = array(
			"element_id"=>"home",
			"name" => "Home",
			"link" => "",			
			"relative" => false,
			"data_bumpbox"=>false,
			"data_link" => ""
		);

		$this->db->insert($table, $element);
	}

	// map 
	public function map() {

		$table = "navigation_mapper";
		$name = "listing";

		$elements = array(

			"similar_properties",
			"listing_map",
			"listing_pdf",
			"listing_video",
			"listing_inquire"
		
		);

		foreach ($elements as $element_id) {

			$data = array(
				"page_id" => "navigation_top",
				"element_id" => $element_id,
			);

			$this->db->insert($table, $data);
		}
	}
}