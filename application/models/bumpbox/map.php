<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Map extends CI_Model {

	public function __construct() {

		parent::__construct();

		$this->table = "map_bumpbox";

	}

	public function get_map_ids() {

		$query = $this->db->distinct()->select('map_id')->get($this->table);

		if ($query->num_rows() === 0) return false;

		$maps = array();
		
		foreach ($query->result() as $row)
			array_push($maps, $row->map_id);

		return $maps;
	}

	public function get_map_title($map_id) {

		$query = $this->db->where(array('map_id' => $map_id))->select('map_title')->get($this->table);

		if ($query->num_rows() === 0) return false;

		return $query->row()->map_title;

	}

	public function get_map_url($map_id) {

		$query = $this->db->where(array('map_id' => $map_id))->select('map_url')->get($this->table);
		
		if ($query->num_rows() === 0) return false;

		return $query->row()->map_url;
	}

	public function get_map_category($map_id) {

		$query = $this->db->where(array('map_id' => $map_id))->select('map_category')->get($this->table);

		if ($query->num_rows() === 0) return false;

		return $query->row()->map_category;
	}

}