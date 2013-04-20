<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Require_header extends Dynamic_header {

	public function Require_header($parameters) {

		
		parent::__construct($parameters);
	}

	// grab the require module for this particular page_id
	public function get_require_module() {

		// grab the require modules table
		$table = "require_modules";

		// grab the the proper 
		$query = $this->CI->general->get($table, array('status' => $this->site_status, 'page_id' => $this->page_id));

		// return the url element that we need!
		return $this->base_url . $query->row()->url;
	}

	// return header element
	public function get_header() {

		// using parent functions
		$data['cgi_url'] = $this->cgi_url;//this is the cgi url s
		$data['favicon'] = $this->favicon();//this calls the parent - function -- overwrite later for dynamically generated favicons
		$data['meta_keywords'] = $this->meta_keywords($this->page_id, $this->property_id);
		$data['meta_description'] = $this->meta_description($this->page_id, $this->property_id);//this calls the parent function -- 
		$data['page_title'] = $this->get_page_title();//this is the dynamically generated name for the page
		$data['stylesheet_list'] = $this->stylesheets();
		// initialize javascript resources list!
		$data['javascript_list'] = $this->javascript_resources();//these are the resources that go at the top of the page
		// now initialize our require segment for this particular header!
		$data['require_app'] = $this->get_require_module();

		// load in the header view and return the proper html from it
		return $this->CI->load->view('site_wide/require_header', $data, true);
	}

}