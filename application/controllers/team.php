<?php

class Team extends MY_Controller {
	
	function __construct() {

		// declare our homepage element here
		$this->id = 'homepage';
		// call the construct to initialize our models, libraries etc
		parent::__construct();

		// now load any models that are specific to this controller
		$this->load->model(array("bumpbox/team_member"));	
	}
	
	public function _remap($uri) {
	
		$this->member_id = "derek_lee";

		// cache the uri member for the segment
		if ($this->uri->segment(2)) $this->member_id = $this->uri->segment(2);

		// ensure all routes reroute to the index
		$this->index();
	}
	
	public function index() {
					
		// call our basic page setup here!
		$this->base();

		// grab our homepage blurbs here!
		$this->homepage_blurbs = $this->general->get_column("homepage_blurbs", array(), "blurb", true);//generates all blurbs for the page
		$this->background_images = $this->elements->get_background_images("homepage_background");

		// hack up the logo so it works normally!
		$this->logo["link"] = site_url();

		// now initialize the team member thumbnail data
		$this->team = $this->team_member->get_full_team();

		// now grab the current team member 
		$this->member = $this->team_member->get_member($this->member_id);

		//load and compile the view
		$this->load->view('team/team_base');//main view for this page
	}
}
