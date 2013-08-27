<?php

class Infobox extends MY_Model {

	function __construct() {

		parent:: __construct();
		# load in our property thumbnail model manager for easy queries and to grab all of the data we need
		$this->load->model("property/thumbnail");

	}

	public function get_html($property_id) {
	
		$data = $this->thumbnail->general_thumbnail($property_id);

		$html = $this->load->view('site_wide/infobox', $data, true);

		return $html;	
	}



}
