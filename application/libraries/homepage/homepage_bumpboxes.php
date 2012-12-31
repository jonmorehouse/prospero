<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Homepage_bumpboxes {

	protected $CI;

	public function __construct() {

		$this->CI =& get_instance();

		// load proper libraries
		$this->CI->load->library('utilities/format');

		// initialize all models
		$models = array('bumpbox/team_member', 'bumpbox/service', 'bumpbox/about');
		$this->CI->load->model($models);//this corresponds to a small member

		// set proper elements
		$this->team = $this->set_team();//get the team members
		$this->services = $this->set_services();//
		$this->about = $this->set_about();//this sets the about page

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

	private function set_about() {

		$_abouts = array();

		$about_ids = $this->CI->about->get_about_ids();

		foreach ($about_ids as $about_id) {

			$about = array();
			$about['title'] = $this->CI->about->get_title($about_id);
			$about['content'] = $this->CI->about->get_content($about_id);

			array_push($_abouts, $about);
		}

		return $_abouts;
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


};

