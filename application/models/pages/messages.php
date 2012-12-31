<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Messages extends CI_Model {


	function __construct() {

		parent::__construct();

		$this->table = "general_messages";

	}

	public function default_message () {

		$query = $this->db->select("message")->where(array("message_id" => "default"))->get($this->table, 1);

		return $query->row()->message;
	}

	public function no_listings() {

		$query = $this->db->select("message")->where(array("message_id" => "no_listings"))->get($this->table, 1);

		if ($query->num_rows() === 0) return $this->get_default();

		else return $query->row()->message;
	}

	public function email_message($type="default_inquire_body") {

		$query = $this->db->select("message")->where(array("message_id" => $type))->get($this->table, 1);

		return $query->row()->message;//


	}






}