<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MY_Model extends CI_Model {

	function __construct() {

		parent::__construct();

		// load all parent models needed here etc
		$this->load->model('general');


		// load the word formatting library
		$this->load->library('utilities/format');

	}
}
