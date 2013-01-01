<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Page_management {

	var $CI;

	function __construct() {

		$this->CI =& get_instance();
		$this->CI->load->model(array("general", "property/filter"));

	}

	public function compile($property_id) {

		$this->save($property_id);
	}

	public function compile_all() {

		$properties = $this->CI->filter->get_live_properties();

		foreach ($properties as $property_id)
			$this->save($property_id);

	}

	public function get($property_id) {

		$file_name = "property_static_pages/{$property_id}";

		if (!file_exists($file_name)) return false;
		
		try {

			$file = file_get_contents($file_name);

		} catch (exception $e) {

			$file = false;
		}

		return $file;

	}

	private function save($property_id) {

		// this will get page contents and save them to a directory
		$url = $this->CI->general->listing_link($property_id);

		//this is the file name to save the contents too
		$file_name = "property_static_pages/{$property_id}";

		// delete the current file -- to force a new dynamic regeneration
		if (file_exists($file_name))
			unlink($file_name);

		//get the url contents -- this is the dynamically generated one("")
		$contents = file_get_contents($url);

		// save contents to a file
		file_put_contents($file_name, $contents);	

		return $this;

	}

}