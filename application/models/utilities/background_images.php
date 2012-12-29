<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Background_images extends CI_Model {


	function __construct() {

		parent::__construct();
		$this->table = "general_images";

	}

	public function get_images() {

		$query = $this->db->select("url")->select("alt")->where(array("image_id" => "general_background"))->get($this->table);

		if ($query->num_rows() == 0) {
			throw new exception();
			return;
		}

		$images = array();
		
		foreach ($query->result() as $row) {

			$image = array();
			$image['url'] = base_url($row->url);
			$image['alt'] = $row->alt;

			array_push($images, $image);

		}
		return $images;

	}






}


