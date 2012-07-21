<?php

class Homepage extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->id = 'homepage';
		
		$this->load->library('utilities/header');
	}
	
	public function _remap($uri){
	
		$this->index();
	}
	
	function index(){
		
		$this->header = $this->header->header_creation($this->id, 'Prospero Real Estate Homepage', $property_id = false);
		$this->load->view('homepage/homepage_base');
		
	}
}