<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Category_filter extends Base_filter {

	function __construct() {

		parent::__construct();//call the parent!

	}

	public function get_properties($filter) {

		if ($filter === "all")
			return $this->all();

		if ($filter === "new")
			return $this->new();

		if (in_array($this->category_types, $filter)) 
			return $this->filter("category_type", $filter);

		if (in_array($this->types, $filter))
			return $this->filter("type", $filter);

		return $this->all();

	}

	private function all() {

		//select categories
		


	}


	private function new() {

		// returns all new properties

	}

	private function filter($category, $filter) {

		// 

	}

}