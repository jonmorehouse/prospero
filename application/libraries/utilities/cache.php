<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Cache {

	private $table_name;
	private $CI;

	function __construct() {

		$this->CI =& get_instance();
		$this->table_name = "custom_cache";

	}

	// set the key etc
	public function set($key, $content) {

		// remove all other elements with this key name
		$this->CI->db->where(array("cache_key" => $key))->delete($this->table_name);

		// initialize the expiration date
		$expires = new DateTime();
		$interval = DateInterval::createFromDateString("1 day");
		$expires->add($interval);

		// now initialize the data needed
		$data = array(

			"cache_key" => $key,			
			"content" => json_encode($content),
			"expires" => $expires->format("Y-m-d H:i:s"),  
		);

		// now insert the data into the cache
		$this->CI->db->insert($this->table_name, $data);
	}

	// returns false and removes the key if expired
	public function get($key) {

		// query for the cache key
		$query = $this->CI->db->where(array("cache_key" => $key))->get($this->table_name);

		// initialize the query
		if ($query->num_rows() == 0) return false;

		// now if we get the key, lets make sure its valid
		$expires = new DateTime($query->row()->expires);
		$now = new DateTime();	

		if ($now < $expires) 
			// return the element
			return json_decode($query->row()->content);

		else {

			$this->CI->db->where(array("cache_key" => $key))->delete($this->table_name);
			return false;
		}
	}
}
