<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Vacancy extends MY_Model {

	function __construct() {

		// initialize our parent model
		parent::__construct();

		// now load in extra libraries / models that we may need for this particul element
		$models = array("property/thumbnail", "vacancy/vacancy_layout");

		// load in the models for this particular model to use
		$this->load->model($models);
	}

	// create a temporary vacancy for a property and return a vacancy_id
	public function create_vacancy($property_id) {

		// initialize our base saving data etc
		$data = array('property_id' => $property_id);

		// now create the vacancy and insert it into the proper table
		$this->db->insert('vacancies', $data);

		// grab the insert id and return it etc
		$vacancy_id = $this->db->insert_id();

		// now return the proper id
		return $vacancy_id;
	}

	public function save_vacancy($data) {

		// generate our valid update data etc
		$update_data = array(

			'property_id' => $data['property_id'],
			'date_available' => $data['date_available'],
			'description' => $data['description'],
			'price' => $data['price']
		);

		// update the data in the database
		$this->db->where(array('vacancy_id'=> $data['vacancy_id']))->update('vacancies', $update_data);
	}

	// create a vacancy, will throw an error if the proper elements don't exist
	public function add_vacancy($data) {

		// will ensure that each of the vacancies are valid etc
		$insert = array(

			"property_id" => $data['property_id'],//property id for the element
			// date available is a string so we can customize it with the least amount of overhead possible
			"date_available" => $data["date_available"],//date available should be a string formatted date or a message similar to "Now available"
			"description" => $data["description"],//should be a string, provided by the element
			"price" => $data["price"],
		);

		// insert the particular vacancy etc into our database
		$this->db->insert("vacancies", $insert);//insert the data into the data
	}

	// delete an individual vacancy from our database
	public function delete_vacancy($vacancy_id) {

		// this will see if the row exists and will then delete the vacancy etc 
		$this->db->where(array('vacancy_id' => $vacancy_id))->delete("vacancies");//delete the vacancy from the database
	}

	// 
	public function get_vacancy_id($property_id) {

		// search the database for any vacancies with this propert_id
		$query = $this->db->where(array('property_id' => $property_id))->select("vacancy_id")->get("vacancies");

		// now return false / vacancy_id dependeing upon whether or not the vacancy for this particular property exists
		if ($query->num_rows() === 0) return false;

		// found a vacancy already
		return $query->row()->vacancy_id;
	}

	// grab an individual vacancy from the database
	public function get_vacancy($vacancy_id) {

		// grab an actual vacancy object from the database
		$query = $this->db->where(array('vacancy_id' => $vacancy_id))->get("vacancies");

		// do some basic primitive tests to ensure that the vacancy exists 
		if ($query->num_rows() == 0) return false;		

		// grab the first query row
		$data = $query->row();

		// create our vacancy array which yields the normal vacancy object for the view etc
		$vacancy = array(

			"vacancy_id" => $data->vacancy_id,
			"property_id" => $data->property_id,
			// grab the date available for this particular element etc
			// grab the date-available string from the database
			"date_available" => $data->date_available,
			// grab the description string from the database -- assume formatting of the text / cases is in place
			// grab the listing link etc
			"link" => $this->general->listing_link($data->property_id),
			// now grab the initial thumbnail element etc
			"thumbnail" => $this->thumbnail->general_thumbnail($data->property_id),
			// now grab the title etc 
			"title" => $this->general->get_category($data->property_id, "name"),
			// now grab the price etc ...
			"price" => $data->price,
			//"price" => $this->general->get_price($data->property_id),
			// now initialize elements
			"type_category" => $this->general->get_unformatted_category($data->property_id, "type_category"),
		);

		// add in the layouts associated with this particular vacancy etc
		if ($this->general->get_unformatted_category($vacancy['property_id'], "type_category") == "residential")
			$vacancy['layouts'] = $this->vacancy_layout->get_layouts($vacancy_id);

		// otherwise we don't need to include the assorted layouts etc
		else
			$vacancy['description'] = $data->description;

		// now return this exact vacancy object ...
		return $vacancy;	
	}
}
