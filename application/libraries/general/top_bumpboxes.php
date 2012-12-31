<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


class Top_bumpboxes {

	protected $CI;

	public function __construct() {

		$this->CI =& get_instance();

		// load proper libraries
		$this->CI->load->library('utilities/format');

		// initialize all models
		$models = array('bumpbox/map');

		$this->CI->load->model($models);//this corresponds to a small member


		// set proper elements
		$this->maps = $this->set_maps();//sets the maps about page

	}

/******** PRIVATE FUNCTOINS *******/

	private function set_maps()  {

		$map_ids = $this->CI->map->get_map_ids();

		$_maps = array();

		foreach ($map_ids as $map_id) {

			$data = array();

			$data['id'] = $map_id;
			$data['title'] = $this->CI->map->get_map_title($map_id);
			$data['url'] = site_url($this->CI->map->get_map_url($map_id));
			$data['filter'] = $this->CI->map->get_map_category($map_id);

			array_push($_maps, $data);
		}

		return $_maps;
	}
/********* PUBLIC FUNCTIONS ********/

	public function get_maps() {

		return $this->maps;//

	}


};

