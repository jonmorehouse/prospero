<?php

class Homepage extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->id = 'homepage';
		
		$this->load->library(array('utilities/header', 'utilities/dynamic_header'), array("page_id" => "homepage"));
		$this->load->library('homepage/bumpbox_content');
	}
	
	public function _remap($uri){
	
		$this->index();
	}
	
	function index(){
				
		// data
		$this->header = $this->dynamic_header->get_header();//gets the dynamic header - not the tables that define the resources included
		$this->javascript_modules = $this->dynamic_header->get_javascript_modules();//get the javascript modules for this homepage
		$this->homepage_blurbs = $this->general->get_column("homepage_blurbs", array(), "blurb", true);//generates all blurbs for the page
		$this->background_images = $this->general->get_multiple_columns("general_images", array("image_id"=>"general_background"), array("url", "alt"), true);//this is an array of urls that we want to have as background images!
		$this->team_bumpbox = $this->bumpbox_content->get_team();
		
		//load and compile the view
		$this->load->view('homepage/homepage_base');//main view for this page
	}
}