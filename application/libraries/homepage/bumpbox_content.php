<?php

class Bumpbox_content {

	protected $CI;

	public function __construct() {

		$this->CI =& get_instance();

		// load proper libraries
		$this->CI->load->library('utilities/format');

		// initialize all models
		$models = array('homepage/team_member', 'homepage/service');

		$this->CI->load->model($models);//this corresponds to a small member


		// set proper elements
		$this->team = $this->set_team();//get the team members
		$this->services = $this->set_services();//


	}

/******** PRIVATE FUNCTOINS *******/
	
	private function set_team() {

		$_team = array();

		$members = $this->CI->team_member->get_member_ids();

		foreach ($members as $member) {

			$_member = array();
			$_member['name'] = $this->CI->format->word_format($member);
			$_member['title'] = $this->CI->team_member->get_title($member);
			$_member['url'] = $this->CI->team_member->get_image_url($member);
			$_member['alt'] = $this->CI->team_member->get_image_alt($member);
			$_member['content'] = $this->CI->team_member->get_content($member);

			array_push($_team, $_member);
		}

		return $_team;
	}

	private function set_services() {

		$_services = array();//this is the collection of services

		$service_ids = $this->CI->service->get_service_ids();//returns all service ids

		foreach ($service_ids as $service_id) {

			$service = array();
			$service['title'] = $this->CI->service->get_title($service_id);
			$service['content'] = $this->CI->service->get_content($service_id);

			array_push($_services, $service);
		}

		return $_services;
	}

	private function set_maps()  {

		// will be responsible for generating proper map code
		// will be responsible for generating proper map codes etc 
	}
/********* PUBLIC FUNCTIONS ********/

	public function get_team() {

		return $this->team;//returns an array of member like objects

	}

	public function get_maps() {

		return $this->maps;//

	}

	public function get_history() {

		return $this->history;


	}

	public function get_services() {

		return $this->services;

	}	

	public function get_about() {

		return $this->about;


	}

	public function get_careers() {

		return $this->careers;


	}

};

