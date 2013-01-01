<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


class Walkscore extends CI_Model {


	function __consruct() {


		$models = array("general");
		$this->load->model($models);
	}

	public function walkscore($property_id) {
		
		// get walkscore image
		// get center
		// get walkscore value
		// get walking triangle
		// -- will then build in the places to find points in the area
	}




} 
	