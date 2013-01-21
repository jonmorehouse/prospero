<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class General extends CI_Model{

/*
	-this class is for database abstraction
	-as much as possible, use the functions in here, several functions that are used alot are here to make queries quicker
	-in theory, this would be the only place we would have to implement memcached in 

*/
	function __construct(){

		parent::__construct();

		
	}
	
	/****** GENERAL DATABASE ABSTRACTION ********/
	public function delete($table, $data) {//delete from database
		
		$this->db->where($data)->delete($table);
		
	}

	public function get($table, $data, $order = false) {//get a query -- orderby is like array(column, asc or desc)
		
		$this->db->where($data);
		

		if($order) {//add an order to the results
			
			if($order[1] === 'asc' || $order[1] === 'desc') 
				$this->db->order_by($order[0], $order[1]);
			
			else
				$this->db->order_by($order[0], 'desc');//incase the proper order was not given
		}
	

		$query = $this->db->get($table);

		if(0 == $query->num_rows())
			return false;
		else
			return $query;//this is a generic return-will handle the query in our class
	}

	public function update($table, $where, $update) {//update database
		
		$query = $this->db->where($where)->get($table);

		if ($query->num_rows() === 0) {

			$update['property_id'] = $where['property_id'];

			$this->db->insert($table, $update);
		}

		else $this->db->where($where)->update($table, $update);
	}

	public function insert($table, $data) {//insert into database

		$this->db->insert($table, $data);
		
	}

	public function get_properties($table, $where) {//get all properties for certain table
		
		$properties = array();
		
		if(!$where) 
			$query = $this->db->get($table);

		else
			$query = $this->db->where($where)->get($table);
			
		foreach($query->result() as $row) {
			
			$property_id = $row->property_id;
			if($property_id > 1)
				array_push($properties, $property_id);
		}
		
		return $properties;
	}
	
	public function get_column($table, $where, $category, $array = false) {//returns an array or single value -- if 
				
		$this->db->select($category);
		$this->db->where($where);
		$query = $this->db->get($table);
		
		if(0 === $query->num_rows() || !isset($query->row()->$category))//return false the query failed
			return false;
		
		if(!$array) //only return one result -- the first!
			return $query->row()->$category;
		
		else {//the results exist and need to return an array of results
			$results = array();
			foreach($query->result() as $row)
				array_push($results, $row->$category);
			
			return $results;
		}
	}

	public function get_multiple_columns($table, $where, $columns) {


		$query = $this->db->select($columns)->where($where)->get($table);//get the query

		if (0 === $query->num_rows())//return on empty set
			return array();

		$results = array();

		foreach ($query->result() as $row) {

			$temp = array();

			// put each column into the result array!
			foreach($columns as $column) 
				$temp[$column] = $row->$column;

			array_push($results, $temp);//push the queries into the back of the element
		}

		return $results;
	}

	public function get_message($message_id) {

		$table = "general_messages";
		$query = $this->db->where(array("message_id" => $message_id))->get($table);
	
		if ($query->num_rows() === 0) return false;

		return $query->row()->message;

	}

/******** PROSPERO SPECIFIC FUNCTIONS *******/

	/****  CATEGORY TYPE ****/
	public function get_category_types() {//get all category types for the site wide
		
		$category_types = array();
		$query = $this->db->order_by('category_order', 'asc')->get('category_types');
		foreach($query->result() as $row)
			array_push($category_types, $row->category_type);
		
		return $category_types;
	}
	
	public function category_tables() {//returns all tables for the site -- used to clear stuff!
		
		$query = $this->db->distinct()->get('table_schema');
		$all_tables = array();
		
		foreach($query->result() as $row) {
			$table = $row->location;
		
			if(!in_array($table, $all_tables) && ""!=$table)
				array_push($all_tables, $row->location);
		}
			
		return $all_tables;
	}
	
	
	// Need to generate the order for particular general 
	public function get_categories_by_type($category_type) {//returns all the categories for a specific category_type
				
		$query = $this->db->where(array('type' => $category_type))->get('table_schema');
		$categories = array();

		if(!$query || $query->num_rows() === 0) return false;
		
		else {
			
			foreach($query->result() as $row)
				array_push($categories, $row->category);
			
			return $categories;
		}
	}
	
	
	/**** INDIVIDUAL CATEGORY ****/
	
	// get category_location
	public function get_category_table($category) {//get table for individul category
		
		// this function will search table schema for the correct table and return the string location
		$query = $this->db->where(array('category' => $category))->get('table_schema');
		
		if($query->num_rows() !== 1) {

			return false;

		}

		else return $query->row()->location;
	}

	// useful for data changes
	public function get_category_datatype($category) {//get individual category data-type such as boolean, integer etc
		
		$query = $this->db->where(array('category' => $category))->select("data")->get('table_schema');

		if($query->num_rows() == 0) return "text";
		
		return $query->row()->data;
	}

	public function get_category_input_type($category) {

		$query = $this->db->select("input_type")->where(array("category" => $category))->get("table_schema", 1);

		if ($query->num_rows() == 0) return "text";

		return $query->row()->input_type;		

	}
	
	public function get_category($property_id, $category) {//database abstraction to get the individual category at any time

		if (is_numeric($category)) {

			$temp = $category;	
			$category = $property_id;
			$property_id = $temp;
		}
		
		$table = $this->get_category_table($category);//need to do some

		$query = $this->db->where(array('property_id' => $property_id))->select($category)->get($table, 1);

		// make sure the query exists
		if(!$query || $query->num_rows() ==0 || !$query->row()->$category)
			return false;

		// value exists now use logic to ensure that it is an allowed value (non-default) and return a formatted version if needed
		// make sure default not allowed
		$category_traits = $this->db->where(array("category" => $category))->get("category_type_categories", 1);

		// check if category_traits formatted exists or default value exist!
		// some properties accessed through this api are for backend only and not mapped to the category_Type_categories table
		if (!isset($category_traits->row()->formatted) || !isset($category_traits->row()->default_value)) return $query->row()->$category;

		// see if it needs formatted. Also note that the format_class relies on a db table for some further value mapping. This is extremely specific and a last resort, used mainly for things like the location_category etc
		$value = ($category_traits->row()->formatted) ? ($query->row()->$category) : ($this->format->word_format($query->row()->$category));
		$default_value = $category_traits->row()->default_value;

		// not check if default allowed if it is then move on
		if ($category_traits->row()->default_allowed) return $value;

		if ($default_value == $value || $default_value == $query->row()->$category) return false;

		return $value;
	}
	
	public function get_category_type_categories($category_type) {//returns an array of all category_types

		$categories = array();//initialize empty array so that we don't have to validate in methods!
		
		$query = $this->db->select('category')->where(array('category_type' => $category_type))->order_by("category_order", "asc")->get('category_type_categories');
		
		if(0 != $query->num_rows()) {
			foreach ($query->result() as $row) 
				array_push($categories, $row->category);
		}
		
		return $categories;
	}

	public function get_category_title($category, $category_type = false) {

		// sends back the proper category title based on element!
		$where = ($category_type) ? (array()) : (array("category_type" => $category_type));

		$query = $this->db->where($where)->where(array("category" => $category))->select("category_title")->get("category_type_categories");

		if ($query->num_rows() === 1 && $query->row()->category_title) return $query->row()->category_title;

		return $this->format->word_format($category);		 

	}

	public function get_category_type_header($category_type) {

		$query = $this->db->where(array("category_type" => $category_type))->select("header")->get("category_types");

		if ($query->num_rows() === 0) return $this->format->word_format($category_type);

		else return $query->row()->header;
	}

	public function get_default_options($category) {

		$table = "default_options";

		$query = $this->db->where(array('category' => $category))->select('category_value')->get($table);

		if ($query->num_rows() == 0) return false;

		$options = array();

		foreach ($query->result() as $row)
			array_push($options, $row->category_value);

		return $options;
	} 

	public function get_category_by_default_option($option) {

		$table = "default_options";
		$categories = $this->db->distinct()->select('category')->get($table);

		

		foreach ($categories->result() as $category) {

			$category_options = $this->get_default_options($category->category);

			if (!$category_options) continue;
	
			if (in_array($option, $category_options))
				return $category->category;

		}

		return false;//was not found

	} 

	public function non_global_categories() {

		$query = $this->db->select("category")->where(array("global_content" => false))->get("category_type_categories");

		$categories = array();

		foreach ($query->result() as $row) 
			array_push($categories, $row->category);

		return $categories;		
	}

	public function live($property_id) {

		// live is not a category_type_category because we don't want it to be in the main
		$table = $this->get_category_table("property_status");

		// had some trouble returning boolean values from mysql mapping- using mysql properties so we don't have to map
		$query = $this->db->where(array('property_status' => true, 'property_id' => $property_id))->get($table, 1);
		$name = $this->get_category($property_id, "name");

		// returstatus
		if ($query->num_rows() === 1 && $name) return true;

		return false;

	}

	public function listing_link($property_id) {

		// for now, no special listing mapping functionality required
		return site_url("listing/{$property_id}");

	}

	public function media_status($property_id, $type = "pdf_id") {

		$table = $this->get_category_table($type);

		$query = $this->db->where(array("property_id" => $property_id))->select("status")->get($table);

		if ($query->num_rows() === 0) return false;

		else return $query->row()->status;		

	}

	public function config($element_id) {

		$query = $this->db->where(array("element_id" => $element_id))->select("value")->get("config_settings", 1);

		if ($query->num_rows() == 0) return false;

		return $query->row()->value;		

	}

	public function get_live_properties() {

		$query = $this->db->select("property_id")->distinct()->where(array("property_status" => True))->get("status");

		if ($query->num_rows() == 0) return false;

		$properties = array();

		foreach ($query->result() as $row)
			array_push($properties, $row->property_id);


		return $properties;

	}

}

?>
