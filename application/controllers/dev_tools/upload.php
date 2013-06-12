<?php

class Upload extends CI_Controller {

	function __construct() {

		parent::__construct();


	}

	public function pdfs() {

		$property_ids = array_reverse(scandir("property_pdfs"));	
		array_pop($property_ids);
		array_pop($property_ids);

		foreach ($property_ids as $property_id) {

			$data = array(

				"url" => "property_pdfs/${property_id}/${property_id}.pdf",
				"status"=>true,
				'property_id'=>$property_id
			);

			$this->db->insert("pdfs", $data);
		}


	}









}