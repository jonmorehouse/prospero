<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Service extends CI_Model {

	function __construct() {

		parent::__construct();

		$this->services_table = "services_bumpbox";

	}

	public function get_service_ids() {

		$query = $this->db->distinct()->get($this->services_table);

		$services = array();

		foreach ($query->result() as $row)
			array_push($services, $row->service_id);

		return $services;
	}

	public function get_title($service_id) {

		$query = $this->db->select('title')->where(array('service_id' => $service_id))->get($this->services_table);

		return $query->row()->title;		
	}

	public function get_content($service_id) {

		$query = $this->db->select('content')->where(array('service_id' => $service_id))->get($this->services_table);

		return $query->row()->content;		


	}

}
