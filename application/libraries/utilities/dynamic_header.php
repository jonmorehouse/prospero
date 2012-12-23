	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*

	-This class extends the base prospero project header class

	-This class allows for dyanmic allocation of resources through a database management system

	-Creates javascript resources for the header and gives a resource for getting the elements that should be loaded in after the page loads as modules

	-This class is primarily to be used with the listing pages

*/

class Dynamic_header extends Header{	

	public function Dynamic_header($parameters) {

		parent::__construct();	

		// need to generate the page id for this element
		$this->page_id = ($parameters['page_id']) ? ($parameters['page_id']) : ("listing");

		// only use page id for the actual listing pages
		$this->property_id = -1;

		if ($this->page_id === "listing" && isset($parameters['property_id']) && array_key_exists($parameters['property_id'])) $this->property_id = $parameters['property_id'];

		$this->CI->load->model('general');

	}

	public function get_header() {

		// using parent functions
		$data['cgi_url'] = $this->cgi_url;//this is the cgi url s
		$data['favicon'] = $this->favicon();//this calls the parent - function -- overwrite later for dynamically generated favicons
		$data['meta_keywords'] = $this->meta_keywords($this->page_id, $this->property_id);
		$data['meta_description'] = $this->meta_description($this->page_id, $this->property_id);//this calls the parent function -- 
		$data['page_title'] = $this->get_page_title();//this is the dynamically generated name for the page
		$data['stylesheet_list'] = $this->stylesheets();
		$data['javascript_list'] = $this->javascript_resources();//these are the resources that go at the top of the page

		$header = $this->CI->load->view('site_wide/header', $data, true);
		return $header;
	}

	protected function stylesheets() {

		$table = "stylesheets";
		$query = $this->CI->general->get($table, array('status' => $this->site_status, 'page_id' => $this->page_id));

		$stylesheets = array(); // this is the css linker html

		if ($query) {//if the query exists ("And it should")

			foreach ($query->result() as $row) {//loop through all of the results that come with this query

				$html = "\n\t<link rel='{$row->file_type}' type='text/css' href='{$this->base_url}{$row->url}' />"; //create the html for this particular element

				if (file_exists($row->url))//check if file exists
					array_push($stylesheets, $html);//if it does exist, add it to the current page!
			}
		}

		return $stylesheets;
	}

	public function javascript_resources() {

		$table = "javascript_resources";
		$query = $this->CI->general->get($table, array('status' => $this->site_status, 'page_id' => $this->page_id));

		$raw_resources = array();

		if ($query) {

			foreach ($query->result() as $row) {

				// determine if it is a live resource or a local resource -- check for http in front
				
				if (substr($row->url, 0, 4) === "http") // just assuming the file exists for now!
					array_push($raw_resources, $row->url);

				else {//file is local -- check that it exists locally before adding to the resource lista
					if(file_exists($row->url)) {

						$url = $this->base_url . $row->url;
						array_push($raw_resources, $url);
					}
				}
			}//we now have
		} // end of query if statement

		$javascript_html = array();
		
		// we now have a list of all the resources that exist for this listing page -- these are the header resources to be looped out in the head
		foreach ($raw_resources as $url) {

			$html = "\n\t<script type='text/javascript' src='{$url}'></script>";
			array_push($javascript_html, $html);
		}

		return $javascript_html;		
	}

	public function get_javascript_modules() {

		// this will return the javascript modules that should be loaded in the bottom of the page
		// will load a footer view in with this information
		$module_type = array("site_wide", "utilities", "modules", "pages", "live"); 

		$table = "javascript_modules";

		$raw_files = array();
		// split this into several queries to help make the code easier to read -- multiple queries instead of one -- doesn't matter because this will be static in production

		foreach ($module_type as $type) {//loop through each module_type -- to use for the specific order

			$query = $this->CI->general->get($table, array('page_id' => $this->page_id, 'status' => $this->site_status, 'type' => $type));//

			if ($query) {//verify the query
				foreach ($query->result() as $row) {//loop through each of the loops

					// check to see if using a global module (ie: google maps api url!)
					if (strpos($row->url, "http") !== false) {
						array_push($raw_files, $row->url);
						continue;
					}
					
					if (file_exists($row->url)) array_push($raw_files, base_url($row->url));//only add the file to raw_files if it exists
				}//end of foreach loop
			}//end of if query
		}//raw_files is now a list of ordered javascript files, checked for existences for this particular page

		return $raw_files;//this is going to be echoed out in the footer to be included with javascript
	}

	private function get_page_title() {

		if ($this->page_id === "listing")
			$name = $this->CI->general->get_category($this->property_id, "name");

		else $name = $this->CI->format->word_format($this->page_id);

		$page_title = $this->CI->format->word_format($name);

		return $page_title;
	}

};