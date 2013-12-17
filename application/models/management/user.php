<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class User extends My_Model {

	function __construct() {

		// call parent construction
		parent::__construct();

		// initialize table for users
		$this->table = "user_information";

	}

	public function get_users() {

		// grab from the database
		$query = $this->db->get($this->table);

		// create an array for all users
		$users = array();

		// now lets process the query to fill the users array
		foreach ($query->result() as $row) {

			// grab the user
			$user = array(
			
				"username" => $row->username,	
				"admin" => (($row->admin_rights == "all") ? (true) : (false)),
			);
			
			// push the user onto the array
			array_push($users, $user);
		}

		// now lets return the users array
		return $users;
	}

	public function add_user($params) {
	
		// all the keys required for this user
		$required_keys = array("username", "lastname", "password", "admin_rights");
		
		// now ensure that all parameters are attached here
		foreach ($required_keys as $key) 
			// make sure we have the key here
			if (!array_key_exists($key, $params))
				return "Missing paramaters {$key}";

		// now lets make sure the username isn't already taken
		$query = $this->db->where(array("username" => $params["username"]))->get($this->table);

		// now make sure no results returned
		if ($query->num_rows() > 0)
			return "Duplicate username {$params["username"]}";

		// now that we know each of the required keys exists, lets create a user
		$data = array(

			"username" => strtolower($params["username"]),
			"last_name" => strtolower($params["lastname"]),
			"password" => md5($params["password"]),
			"admin_rights" => ((strtolower($params["admin_rights"]) == "yes") ? ("all") : ("other")),
		);
		
		// now inser this username into the database
		$this->db->insert($this->table, $data);

		return "Successfully created user: {$params["username"]}";
	}

	public function remove_user($username) {

		// remove the username
		$removed = $this->db->where(array("username" => $username))->delete($this->table);

		// pass a message back
		return "Successfully removed user: {$username}";
	}
}

