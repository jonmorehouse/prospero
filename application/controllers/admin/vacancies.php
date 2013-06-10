<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Vacancies extends My_Controller{

	public function __construct(){

		$this->id = 'management'; //this is used for the navigation bars--not always page_type in other controllers
		parent::__construct();
		
		$this->content = "";

		// LOAD LIBRARIES
		$this->load->library('user_access/user_status');

		// If the user_status is validated, we will then load session data to be used around the controller
		if ($this->user_status->current_status()){
			$username = $this->session->userdata('username');
			$admin_rights = $this->session->userdata('admin_rights');
			$this->load->library(array('management/management_forms', 'management/management_general', 'management/management_create_update'), array('admin_rights' => $admin_rights, 'username' => $username));
		}

		// initialize a few things!
		$this->base();

		// management variables
		$this->dashboard = false;
		$this->property_status_dashboard = false;
	}
	
	public function _remap($method, $parameters){
			
		if(!$this->user_status->current_status())
			redirect('admin/management');	
		
		if (!$this->uri->segment(3)) $this->add();

		else $this->$method();

	}

	public function index() {

		// show a list of all vacancies!
				
			
		



	}
		
	// create a new vacancy!
	public function add() {

		if ($this->input->post()) {

			// save the element!
		}

		// generate a form here that something can post from!
		else {

			// first check to see if we passed in a parameter for the property_id and if we did that its a legit property!
			if (!$this->uri->segment(4) || !$this->general->live($this->uri->segment(4))) return $this->property_thumbnails();

			// if we have a property continue on!
			$this->property_id = $this->uri->segment(4);

			// generate form below!
			$this->content = $this->load->view('admin/vacancies/add', array(), true);
			$this->load->view('admin/management_base');
		}
	}

	// remove any 
	public function remove() {





	}

	// render views for thumbnail searching etc!
	private function property_thumbnails() {

		// grab all properties from the database that are live
		$properties = $this->general->get_live_properties();

		// now sort the properties and return their thumbnails!
		$thumbnails = $this->base_filter->get_thumbnails($properties);

		// now for each of the thumbnails, load in the view that corresponds properly!
		foreach ($thumbnails as $thumbnail) 
			$this->content .= $this->load->view('admin/vacancies/property_thumbnail', array('thumbnail' => $thumbnail), true);

		// output the proper views etc
		$this->load->view('admin/management/management_base');
	}

	private function vacancy_thumbnails() {

		// now grab all vacancies sorted by their proper date and then save them
		$vacancies = $this->vacancy_filter->get_vacancies("all");	

		// load up all of the proper vacancy thumbnails etc
		foreach ($vacancies as $vacancy)
			$this->content .= $this->load->view('admin/vacancies/vacancy_thumbnail', array('vacancy' => $vacancy), true);

		// 
		$this->load->view('admin/management/management_base');

	}

}