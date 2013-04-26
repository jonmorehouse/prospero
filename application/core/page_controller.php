<?php

class Page_Controller extends MY_Controller {

	function __construct() {

		// now call our parent_contruct...
		parent::__construct();

		// initialize a bunch of page element models etc
		$page_models = array(

			"pages/elements",
			"pages/headers",
			"pages/inquire",
			"pages/messages",
			"pages/navigation",
		);

		// grab all of the page models necessary etc 
		$this->load->model($page_models);
	}
}

