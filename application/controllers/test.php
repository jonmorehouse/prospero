<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Test extends CI_Controller {

	function __construct() {

		parent::__construct();
		$libraries = array("property/base_filter");
		$this->load->library($libraries);

		$this->load->model('general');
	}

	public function index() {


		$this->load->model("pages/navigation");

		$this->navigation->get_bumpboxes();

	}


}
