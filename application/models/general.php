<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class General extends CI_Model{
	
	function __construct(){
		parent::__construct();
		
		
	}
	
	public function page_meta_information($page_type, $column){
		
		$query = $this->db->where('page_type', $page_type)->get('header_meta_information');
		
		if($query->num_rows()==1)
			return $query->row()->$column;
		else
			return "";
	}


}

