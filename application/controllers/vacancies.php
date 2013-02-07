<?php

class Vacancies extends CI_Controller{
	
	function __construct() {

		parent::__construct();
		$this->id = 'vacancies';
		
		$libraries = array("utilities/header", "utilities/dynamic_header");
		$this->load->library($libraries, array("page_id" => "vacancies"));
		$this->load->model(array("general", "pages/elements", "pages/navigation"));
	}
	
	public function _remap($uri) {
	
		$this->index();
	}
	
	function index() {
		

		echo "HELLO WORLD";		
		// $this->output->cache(1440);

		// data
		$this->header = $this->dynamic_header->get_header();//gets the dynamic header - not the tables that define the resources included
		$this->javascript_modules = $this->dynamic_header->get_javascript_modules();//get the javascript modules for this homepage



	}
}