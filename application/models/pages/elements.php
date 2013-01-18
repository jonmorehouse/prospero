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

	public function get_image($image_id) {

		$query = $this->db->where(array("image_id" => $image_id))->select("url, alt")->get($this->image_table, 1);

		if ($query->num_rows() === 0) return false;

		$url = (strstr($query->row()->url, "http")) ? ($query->row()->url) : (base_url($query->row()->url));

		return array(

			"alt" => $query->row()->alt,
			"url" => $url,
			"src" => $url,
		);
	}

	public function site_label() {

		$query = $this->db->where(array('element_id' => "site_label"))->select("value")->get("config_settings");

		return $query->row()->value;
	}
}