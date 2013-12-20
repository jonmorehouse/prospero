<?php

class Thumbnail_upload extends CI_Controller {

	function __construct() {
		
		parent::__construct();

		$this->load->model("general");
	}

	public function index() {

		// initialize the properties
		$properties = $this->general->get_live_properties();
		
		// initialize properties
		foreach ($properties as $property_id) {

			$query = $this->db->where(array("property_id" => $property_id))->get("slideshow_images");
			$slideshow_image = $query->row();

			$data = array(
				
				"status" => 1,
				"url" => $slideshow_image->url,
				"property_id" => $property_id,
			);

			if (!property_exists($slideshow_image, "url"))
				echo $property_id;
			
			$this->db->insert("thumbnail_images", $data);

		}	
	}
	




}
