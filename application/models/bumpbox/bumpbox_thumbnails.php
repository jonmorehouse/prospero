<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Bumpbox_thumbnails extends CI_Model {

	function __construct() {

		parent::__construct();

		$model_dependencies = array(

			"property/thumbnail",
			"general"
		);

		$this->load->model($model_dependencies);
	}

	public function similar_property($property_id) {

		$thumbnail = $this->thumbnail->general_thumbnail($property_id);
		$thumbnail['link'] = $this->general->listing_link($property_id);		
	
		return $thumbnail;		
	}








}