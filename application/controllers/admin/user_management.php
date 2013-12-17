<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class User_management extends My_Controller {

	public function __construct() {

		// store the id to be used with this application
		$this->id = 'management';

		// construct base my_controller class
		parent::__construct();

		// load user status for checking admin etc
		$this->load->library('user_access/user_status');
		
		// If the user_status is validated, we will then load session data to be used around the controller
		if($this->user_status->current_status()){

			$username = $this->session->userdata('username');
			$admin_rights = $this->session->userdata('admin_rights');
			$this->is_admin = (($admin_rights == "all")? (true) : (false));
			$this->load->library(array('management/management_forms', 'management/management_general', 'management/management_create_update'), array('admin_rights' => $admin_rights, 'username' => $username));
		}

		// iitialize elements
		$this->base();

		// load any other dependencies
		$this->load->model("management/user");

		// management variables
		$this->listing_dashboard = false;
		$this->general_dashboard = false;
		$this->message = "";
	}
	
	// remap methods	
	public function _remap($method, $parameters){
			
		if(!$this->user_status->current_status())
			redirect('admin/management');	
		
		if (!$this->uri->segment(3)) 
			$this->index();

		else $this->$method();

	}

	// now go ahead and load the correct view
	public function index() {

		$this->users = $this->user->get_users();

		// initialize the content for this element
		$this->content = $this->load->view("admin/user_management/base", true, true);
		$this->load->view("admin/management/management_base");
	}

	public function remove() {
	
		// grab the username
		$username = $this->uri->segment(4);
			
		// remove the user
		$this->message = $this->user->remove_user($username);

		// call view
		$this->index();
	}

	public function add() {
		
		// grab the data
		$data = $this->input->post();
		
		// now add the user
		$this->message = $this->user->add_user($data);

		// now call the index
		$this->index();
	}
}
