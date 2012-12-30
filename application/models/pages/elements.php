<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Elements extends CI_Model {

	function __construct() {

		parent::__construct();
		$this->image_table = "general_images";

	}

	public function get_background_images() {

		$query = $this->db->select("url")->select("alt")->where(array("image_id" => "general_background"))->get($this->image_table);

		$backgrounds = array();

		foreach ($query->result() as $row) {

			$image = array(

				"url" => base_url($row->url),
				"alt" => $row->alt
			);

			array_push($backgrounds, $image);
		}

		return $backgrounds;
	}
}