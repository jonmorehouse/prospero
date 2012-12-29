<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Navigation extends CI_Model {

	function __construct() {

		parent::__construct();
		$this->map_table = "navigation_mapper";
		$this->element_table = "navigation_elements";

	}	

	// element data needed for views. name, link, data-link, data-bumpbox

	public function generate_element_data($element_ids) {

		// generate a element object for each id 
		$elements = array();

		foreach ($element_ids as $element_id) {

			$query = $this->db->where(array("element_id" => $element_id))->get($this->navigation_elements, 1, 1);//select only one row for this particular element

			if ($query->num_rows() === 0) continue;

			$data = $query->row();

			$element = array(

				"name" => $data->name,//a label
				"link" => $data->link,//link for when the user clicks can be # as well
				"element_id" => $element_id,//useful for backend purposes
				"data_link" => $data->data_link,//useful for mapping clicks to front-end actions
				"data_bumpbox" => $data->data_bumpbox,//true / false for whether or not a bumpbox element
				);

			// push in the element
			array_push($elements, $elements);

		}

		return $elements;

	}

	public function listing_elements($property_id) {

		$bumpboxes = array();
		// list all the bumpboxes for a particular element
		$query = $this->db->where(array("page_id" => "listing"))->get($this->navigation_mapper);//get a list of all the elements

		if ($query->num_rows() === 0) return $bumpboxes;

		foreach ($query->result() as $row) {//loop through all of the elements for 

			if ($row->required === true) {
				array_push($bumpboxes, $row->element_id);
				continue;
			}

			$_query = $this->db->where(array("element_id" => $row->element_id))->get($this->navigation_elements);

			if ($_query->num_rows() === 0) continue;

			//if its not required, need to check and ensure that the proper category exists for it
			$status = $this->general->get_category($property_id, $_query->row()->category);//get the category from our system

			if ($status)
				array_push($bumpboxes, $_row->element_id);
		}

		return $bumpboxes;
	}

	public function menu_elements($page_id) {//for general elements ... ie the top left etc

		$elements = array();

		$query = $this->db->where(array("page_id" => $page_id))->select("element_id")->order_by("navigation_order", "asc")->get($this->navigation_mapper);//get the correct elements and order them properly

		if ($query->num_rows() === 0) return $elements;

		foreach ($query->result() as $row) 
			array_push($elements, $row->element_id);

		return $elements;

	}


}