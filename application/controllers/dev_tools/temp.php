<?php

class Temp extends MY_Controller {

	function __construct() {

		$this->id = "Temp";
		parent::__construct();


	}

	public function index() {
	
		$this->load->library("utilities/cache");

		
		
	}
}
