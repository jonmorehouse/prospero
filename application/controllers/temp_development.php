<?php

class Temp_development extends CI_Controller {

	function __construct() {

		parent::__construct();//call parent constructor
		$this->load->model('general');
		$this->load->library('utilities/format');

	}

	public function test() {

		
		
	}

}