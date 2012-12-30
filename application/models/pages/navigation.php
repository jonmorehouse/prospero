<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Navigation extends CI_Model {

	function __construct() {

		parent::__construct();
		$this->map_table = "navigation_mapper";
		$this->element_table = "navigation_elements";
		$this->load->model("general");

	}	

	// public apis

	public function get_navigation($page_id) {

		return $this->generate_element_data($this->menu_elements($page_id));

	}

	public function get_listing($property_id) {

		return $this->generate_element_data($this->listing_elements($property_id));

	}



	// element data needed for views. name, link, data-link, data-bumpbox
	private function generate_element_data($element_ids) {

		// generate a element object for each id 
		$elements = array();

		foreach ($element_ids as $element_id) {

			$query = $this->db->where(array("element_id" => $element_id))->get($this->element_table, 1);//select only one row for this particular element

			if ($query->num_rows() === 0) continue;

			$data = $query->row();

			$element = array(

				"name" => $data->name,//a label
				"link" => $data->link,//link for when the user clicks can be # as well
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