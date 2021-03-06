<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Navigation extends CI_Model {

	function __construct() {

		parent::__construct();
		$this->map_table = "navigation_mapper";
		$this->element_table = "navigation_elements";
		$this->load->model("general");
		$this->load->library('utilities/format');
	
	}

	// get a list of the bumpboxes attached to a certain element
	public function get_bumpboxes($page_id = "global_top") {//gets the bumpboxes for this particular id!

		$bumpboxes = array();

		// join navigation_mapper on element id where page_id =
		$query = $this->db->join($this->map_table, "{$this->map_table}.element_id = {$this->element_table}.element_id")->where(array("page_id" => $page_id, "data_bumpbox"=>true))->select("{$this->element_table}.element_id")->get($this->element_table);//select the element_table id to avoid ambigous call

		// iterate through each of the results etc  
		foreach ($query->result() as $row)
			array_push($bumpboxes, $row->element_id);

		return $bumpboxes;
	}

	// this returns the ids of bumpboxes that we need to use for this page
	public function get_listing_bumpboxes($property_id) {

		$elements = $this->listing_elements($property_id);

		$bumpboxes = array();//basic container for all bumpboxes to be returned

		foreach ($elements as $element_id) {

			$query = $this->db->where(array("data_bumpbox" => true, "element_id" => $element_id))->select("element_id")->get($this->element_table);

			if ($query->num_rows() === 1) array_push($bumpboxes, $element_id);			
		}

		return $bumpboxes;
	}

	// can send in selected if there is a specific element
	public function get_navigation($page_id = "global_top", $selected = "") {

		//pass in a selected element_id if you want that element to be selected
		$elements = array_reverse($this->menu_elements($page_id));

		// now grab the actual element data!
		return $this->generate_element_data($elements, $this->format->comparison_format($selected));

	}

	// get the navigation_left element for a particular property -- handles all the proper elements etc
	public function get_listing($property_id) {

		// generate the get_listing element
		return $this->generate_element_data($this->listing_elements($property_id));
	}

	
	// 
	public function get_logo($page_id = "home") {//

		if ($page_id == "home" || $page_id == "homepage")
			$query = $this->db->where(array("element_id" => "home_home"))->get($this->element_table, 1);

		else 
			$query = $this->db->where(array("element_id" => "home"))->get($this->element_table, 1);

		$image_query = $this->db->where(array("image_id" => "logo"))->get("general_images", 1);

		return array(

			"link" => ($query->row()->relative) ? ($query->row()->link) : (site_url($query->row()->link)),//initialize the url
			"url" => base_url($image_query->row()->url),
			"alt" => $image_query->row()->alt,
		);//has an element and an array
	}

	// element data needed for views. name, link, data-link, data-bumpbox
	private function generate_element_data($element_ids, $selected = "") {

		// generate a element object for each id 
		$elements = array();

		foreach ($element_ids as $element_id) {

			$query = $this->db->where(array("element_id" => $element_id))->get($this->element_table, 1);//select only one row for this particular element

			if ($query->num_rows() === 0) continue;

			$data = $query->row();

			$element = array(

				"name" => $data->name,//a label
				"class" => ($selected == $element_id) ? ("selected") : (""),//whether or not this particular element should be flagged as selected from the origin!
				"link" => ($data->relative) ? ($data->link) : (site_url($data->link)),//link for when the user clicks can be # as well
				"relative" => ($data->relative) ? (true) : (false),//whether or not to attach a site-url to the link				
				"element_id" => $element_id,//useful for backend purposes
				"data_link" => $data->data_link,//useful for mapping clicks to front-end actions
				"data_bumpbox" => ($data->data_bumpbox) ? (true) : (false),//true / false for whether or not a bumpbox element
			);

			// push in the element
			array_push($elements, $element);
		}

		return $elements;
	}

	private function listing_elements($property_id) {

		$bumpboxes = array();

		// list all the bumpboxes for a particular element
		$query = $this->db->where(array("page_id" => "listing"))->order_by("navigation_order", "des")->get($this->map_table);//get a list of all the elements

		if ($query->num_rows() === 0) return $bumpboxes;

		foreach ($query->result() as $row) {//loop through all of the elements for 

			if ($row->required) {
				array_push($bumpboxes, $row->element_id);
				continue;
			}	
			
			if ($this->general->media_status($property_id, $row->required_category))
				array_push($bumpboxes, $row->element_id);

		}//end of foreach loop

		return $bumpboxes;
	}

	private function menu_elements($page_id) {//for general elements ... ie the top left etc

		$elements = array();

		$query = $this->db->where(array("page_id" => $page_id))->select("element_id")->order_by("navigation_order", "asc")->get($this->map_table);//get the correct elements and order them properly

		if ($query->num_rows() === 0) return $elements;

		foreach ($query->result() as $row) 
			array_push($elements, $row->element_id);

		return $elements;

	}


}
