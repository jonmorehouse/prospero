<?php

class Listing extends MY_Controller {

	function __construct() {

		$this->id = "tool";
		// call parent controller etc
		parent::__construct();
	}

	public function index() {

		echo phpinfo();


	}

	public function save_lower() {

		// cache controller pointer for use inside of closure
		$_this = $this;

		// stor a master content list
		$content = array();

		// initialize the save element
		$save = function($property_id, $_content) use (&$content) {

			$content[$property_id] = $_content;
		};

		// fix the case of each element
		$fix_case = function($property_id) use ($_this, $save) {

			// grab the content for this particular element
			$content = $_this->general->get_unformatted_category($property_id, "property_content");

			// save the content
			$content = strtolower($content);

			// now save the content etc
			$save($property_id, $content);
		};

		// grab the id for a particular element
		$get_id = function($property_name, $next_function) use ($_this) {

			$query = $_this->db->like('name', $property_name, 'both')->select('property_id')->get('property_name');

			if ($query->num_rows() == 0)
				echo $property_name;

			// if we actually find a name pass the property_id to the next element
			else $next_function($query->row()->property_id);

		};

		// cache all names that we are using as our initial element
		$names = array(

			"Barclay Viking",
			"Baron",
			"Beachview Tower",
			"Braemar Court Apartments",
			"Delroy Place",
			"Kerrisdale Parc",
			"Olive Court",
			"Westwind Apartments",
			"Vivian Apartments"
		);	

		// for each element grab the id and then pass it the proper function for the next step
		foreach ($names as $name)
			$get_id($name, $fix_case);

		// now lets save the json encoded contents array
		file_put_contents("lower_case.json", json_encode($content, JSON_PRETTY_PRINT));
	}		

	public function save_formatted() {

		// grab the data
		$json = file_get_contents("lower_case.json");
		$contents = json_decode($json, true);

		// cache this for closure use
		$_this = $this;

		$save = function($property_id, $content) use ($_this) {

			// save the content to the datbase
			$_this->db->where(array('property_id' => $property_id))->update('property_content', array('property_content' => $content));

		};

		// now save each of the descriptions etc
		foreach ($contents as $property_id => $content)
			$save($property_id, $content);
	}

}