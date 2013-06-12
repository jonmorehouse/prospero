<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Vacancies extends My_Controller{

	public function __construct(){

		$this->id = 'management'; //this is used for the navigation bars--not always page_type in other controllers
		parent::__construct();
		
		$this->content = "";

		$this->load->model(array('vacancy/vacancy', 'vacancy/vacancy_filter'));

		// LOAD LIBRARIES
		$this->load->library(array('user_access/user_status'));

		// If the user_status is validated, we will then load session data to be used around the controller
		if ($this->user_status->current_status()){
			$username = $this->session->userdata('username');
			$admin_rights = $this->session->userdata('admin_rights');
			$this->load->library(array('management/management_forms', 'management/management_general', 'management/management_create_update'), array('admin_rights' => $admin_rights, 'username' => $username));
		}

		// initialize a few things!
		$this->base();

		// management variables
		$this->listing_dashboard = false;
		$this->general_dashboard = false;
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

		// load in general add header
		$this->content = $this->load->view('admin/vacancies/add_header', array(), true);

		// show thumbnails if no uris passed
		if (!$this->uri->segment(4) || !$this->general->live($this->uri->segment(4))) return $this->property_thumbnails();

		// if we have a property continue on!
		$this->property_id = $this->uri->segment(4);
		// grab some basic data!
		$this->data = $this->thumbnail->general_thumbnail($this->property_id);
		$this->data['vacancy_id'] = $this->vacancy->create_vacancy($this->property_id);

		// generate form below!
		$this->content = $this->load->view('admin/vacancies/add', array(), true);
		$this->general_dashboard = true;
		$this->load->view('admin/management/management_base');
	}

	public function save() {

		$data = array(

			'property_id'=> $this->uri->segment(4),
			'date_available'=>$this->input->post('date_available'),
			'description'=>$this->input->post('description'),
			'vacancy_id'=>$this->input->post('vacancy_id')
		);

		$this->vacancy->save_vacancy($data);

		echo "{}";
	}


	// remove any 
	public function remove() {

		// initialize our basic header
		$this->content = $this->load->view('admin/vacancies/remove_header', array(), true);

		// if we pass in a query element go ahead and delete that vacancy_id
		if ($this->uri->segment(4)) $this->vacancy->delete_vacancy($this->uri->segment(4));

		// grab our vacancy_thumbnails
		$this->content .= $this->vacancy_thumbnails();

		// load out our layout 
		$this->load->view('admin/management/management_base');
	}

	// render views for thumbnail searching etc!
	// render links to create a property forms etc
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

	}

}