<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Property_filter extends Base_filter {

	function __construct($parameters) {

		parent::__construct();

		$this->category = $parameters['category'];//should be type_category or type
		$this->filter = $parameters['filter'];//should be an option of those elements

		$this->CI->load->model("property/thumbnail");
	}

	public function get_thumbnails($category = "all", $filter = false) {


		// will create custom statements etc based upon absolute values!
		$unfiltered = $this->CI->filter->get_category($this->category, $this->filter);//gets all top level categories

		$filtered = $this->status_filter($unfiltered);

		// now filter based on the input option
		if ($category === "new") 
			$filtered = $this->property_filter($filtered, "new_property", array("new_property" => true));

		else if ($category === "type" && $filter)
			$filtered = $this->property_filter($filtered, $category, array("type" => $filter));

		else if ($category === "over_1000")
			$filtered = $this->property_filter($filtered, "type", array("type >" => "1000"));

		else if ($category === "under_1000")
			$filtered = $this->property_filter($filtered, "type", array("type <" => "1000"));

		else if ($category === "category_location")
			$filtered = $this->property_filter($filtered, "category_location", array("category_location" => $filter));


		// get the thumbnails and return them!
		return $this->generate_thumbnails($filtered);
	}

	protected function status_filter($unfiltered) {

		// ensures that all properties are filtered
		$filtered = array();

		// loop through and validate the property status
		foreach ($unfiltered as $property_id)
			if ($this->CI->general->live($property_id))
				array_push($filtered, $property_id);

		// end for loop
		return $filtered;
	}


	protected function property_filter($unfiltered, $category, $where) {

		// takes in the where
		$table = $this->CI->general->get_category_table($category);
		$filtered = array();

		foreach ($unfiltered as $property_id) {

			$query = $this->CI->db->where($where)->where(array("property_id" => $property_id))->select('property_id')->get($table);
			if ($query->num_rows() === 1) 
				array_push($filtered, $property_id);
		}

		return $filtered;
	}

	protected function generate_thumbnails($properties) {

		$thumbnails = array();

		foreach ($properties as $property_id) {

			$thumbnail = array(

				"status" => $this->CI->thumbnail->get_status($property_id),
				"url" => $this->CI->thumbnail->get_url($property_id),
				"image" => $this->CI->thumbnail->get_image($property_id),
				"blurb" => $this->CI->thumbnail->get_blurb($property_id),
				"name" => $this->CI->thumbnail->get_name($property_id),
			);

			if ($thumbnail['status'])
				array_push($thumbnails, $thumbnail);
		}

		return $thumbnails;
	}

};