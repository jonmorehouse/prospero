<?php

class Sorting extends Page_Controller {

	function __construct() {

		$this->id = 'sorting';
		parent::__construct();

	}

	public function index() {

		$libraries = array("property/base_filter", "property/property_filter");
		$this->load->library($libraries, array("category" => "type_category", "filter" => $this->id));//initialize the category_filter library for the type of page this is

	}

}	


