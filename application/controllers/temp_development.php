<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Temp_development extends CI_Controller {

	function __construct() {

		parent::__construct();//call parent constructor
		$this->load->model('general');
		$this->load->library(array("utilities/format", "general/page_management"));
	}	

	public function browse_header() {

		// 

		// grab all of the proper 

		foreach ($this->general->get_default_options("type_category") as $type_category) {

			foreach ($this->general->get_default_options("type") as $type) {

				if ($type == "rent") {

					$title = "{$this->format->word_format($type_category)} Rental Properties";

				}

				else {

					$title = "{$this->format->word_format($type_category)} Properties for Purchase";

				}

				$data = array(

					"page_id" => $type_category,
					"category" => "type",
					"filter" => $type,//the individual type
					"title" => $title,

				);	

				$this->db->insert("browse_headers", $data);
			}
			// end of location elements!

			// generate the location property elements!
			foreach ($this->general->get_default_options("location_category") as $category) {

				$title = "{$this->format->word_format($type_category)} Properties Near {$this->format->word_format($category)}";
				$data = array(

					"page_id" => $type_category,
					"category" => "location_category",
					"filter" => $category,//the individual type
					"title" => $title,
				);	

				$this->db->insert("browse_headers", $data);
			} 

			foreach (array("all", "new") as $element) {
				$title = "{$this->format->word_format($element)} {$this->format->word_format($type_category)} Properties";

				$data = array(

					"page_id" => $type_category,
					"category" => $element,
					"filter" => "all",//the individual type
					"title" => $title,
				);	

				$this->db->insert("browse_headers", $data);
			}

			foreach (array("under_1000", "over_1000") as $value) {

				$helper = ($value === "under_1000") ? ("Less Than") : ("Greater Than");

				$title = "{$this->format->word_format($type_category)} Properties {$helper} $1000 / Month.";

				$data = array(

					"page_id" => $type_category,
					"category" => "rent_price",
					"filter" => $value,//the individual type
					"title" => $title,
				);	

				$this->db->insert("browse_headers", $data);
			}


		}



	}

	public function map() {

		$output = "map";

		$query = $this->db->select("name, property_id")->get("property_name");

		file_put_contents($output, "");

		foreach ($query->result() as $row) {

			$text = "{$row->name} ==> {$row->property_id}\n\n";
			file_put_contents($output, $text, FILE_APPEND | LOCK_EX);
		}
	}


	public function temp() {

		$types = array(
			"atm",
			"bar",
			"bus_station",
			"cafe",
			"campground",
			"church",
			"food",
			"gas_station",
			"grocery_or_supermarket",
			"gym",
			"hair_care",
			"library",
			"night_club",
			"park",
			"post_office",
			"real_estate_agency",
			"restaurant",
			"rv_park",
			"school",
			"spa",
			"store"
		);

		foreach ($types as $type) {


			$this->db->insert("places_types", array("formatted_value" => $this->format->word_format($type), "value"=>$type));

		}




	}


	public function compile() {

		$property_id = $this->uri->segment(3);
		$this->page_management->compile($property_id);

	}

	public function compile_all() {

		$this->page_management->compile_all();
	}

	public function insert_message() {

		$message = file_get_contents("temp");
		$data = array("message_id" => "no_listings", "message"=>$message);
		$this->db->insert("general_messages", $data);

	}

	public function browse_test() {

		$libraries = array("property/base_filter", "property/property_filter");
		$this->load->library($libraries, array("category" => "type_category", "filter" => "office_industrial"));

		$this->property_filter->get_thumbnails("all");				

	}

	/****** CSS DB UPDATING *********/
	public function css() {

		$resources = array(

			"resources/css/local/vacancies.less",
			"resources/css/local/bumpbox.less"
		);

		foreach ($resources as $resource) {

			$data = array("url" => $resource, "file_type" => "stylesheet/less", "status" => false, "page_id" => "management");
			$this->db->insert("stylesheets", $data);

		}

	}


	/****** JAVASCRIPT DB UPDATING *******/

	public function javascript_resources() {

		$resources = array("resources/javascript/resources/jquery-1.7.1.min.js",
			"resources/javascript/resources/jquery-ui-1.8.18.custom.min.js",
			"resources/javascript/resources/less-1.3.0.min.js",
			"resources/javascript/resources/modernizr.js");

		foreach ($resources as $resource) {

			$insert = array("url" => $resource, "status" => false, "page_id" => "vacancies");
			$this->db->insert("javascript_resources", $insert);
		}	
	}

	public function javascript_module() {

		$module = array(

			"url" => "resources/javascript/modules/modules/map_controller.js",
			"type" => "modules",
			"page_id" => "listing",
			"status" => false
		);

		$this->db->insert("javascript_modules", $module);


	}

	public function javascript_modules() {

		$query = $this->db->where(array("page_id" => "homepage"))->get("javascript_modules");

		foreach ($query->result() as $row) {

			$data = array(

				"page_id" => "vacancies",
				"url" => $row->url,
				"type" => $row->type,
			);

			$this->db->insert("javascript_modules", $data);
		}


	}

	public function imageless_properties() {

		$writer = fopen("images_needed", "a");

		$property_ids = file("imageless_properties", FILE_IGNORE_NEW_LINES);

		foreach ($property_ids as $property_id) {

			$name = $this->general->get_category($property_id, "name");
			fwrite($writer, "$property_id ==> $name\n");
		}		

		fclose($writer);
	}

	

}