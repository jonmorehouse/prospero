<?php

class Management extends CI_Controller{
/*THIS CONTROLLER CLASS IS TO HANDLE ALL OF THE CONTENT MANAGEMENT SYSTEM AJAX REQUESTS*/
	
	public function __construct(){
		parent::__construct();

		// LOAD LIBRARIES
		$libraries = array('user_access/user_status', 'utilities/format', 'utilities/header', 'property/property_set');
		$this->load->library($libraries);
	}

	/******* USED TO MAKE A PROPERTY NOT LIVE ********/
	public function listing_status() {


		$this->load->model('general');

		$table = $this->general->get_category_table('property_status');

		$post_data = $this->input->post();
		$property_statuses = array();

		$return_element = array();

		foreach ($post_data as $property_id => $value) {

			if ($value['property_status'] === "false")
				$status = false;

			else 
				$status = true;

			$status_array = array("property_id" => $property_id,

				"status" => $status
			
			);

			array_push($property_statuses, $status_array);


			$this->general->update($table, array('property_id' => $property_id), array('property_status' => $status));
		}

		echo json_encode($property_statuses);
	}
		
	// THIS IS TO GRAB THE INFORMATION FROM THE CMS GUI
	public function save(){//THIS IS THE SAME AS FOR THE UPDATE LISTING AND CREATE LISTING

		ignore_user_abort(true);//don't stop when the user exits!

		$post_data = $this->input->post();//generate the element data

		foreach ($post_data as $key => $value) {//clean for any bad characters such as dollar signs!

			$post_data[$key] = preg_replace('/[\$,]/', '', $value);
		}
			
		$new_property = false;//dictates whether or not we need run the create worker!

		if ($post_data['property_id'] == "New Listing" || isset($post_data['property_id']) && $post_data['property_id'] == 1) {

			$post_data['property_id'] = "new_listing";

			$insert = $this->db->insert('property_name', array('name' => "temp_update"));

			$property_id = $this->db->insert_id('property_name');//this property_id

			$post_data['property_id'] = $property_id;

			$response = "{\"property_id\" : \"{$property_id}\"}";

			$new_property = true;
			$create_data = array('property_id' => $property_id);

		}

		else $response = "{}";

		header("Connection: close");
		header("Content-Length: " . mb_strlen($response));
		echo $response;
		flush();
		ob_end_flush();

		// start the asynchronous call!
		$url = site_url('ajax/management/save_worker'); //, $post_data);

		$this->curl_post_async($url, $post_data);

		if ($new_property) $this->curl_post_async(site_url("ajax/management/create_worker"), $create_data);

		/***** NOW SAVE THE PROPERTY!******/
		// save the data and return the proper property_id to help generate the next element for the form

	}	

	public function media_status() {

		$post_data = $this->input->post();

		$property_id = $post_data['property_id'];
		$media_categories = $this->general->get_categories_by_type('media');

		foreach($media_categories as $media_category) {
			$media_category = "{$media_category}_id";

			if(isset($post_data[$media_category])) {
				$media_ids = $post_data[$media_category];
				
				foreach($media_ids as $media_id => $status) 
					$this->property_set->media_status($media_id, $media_category, $status, $property_id);
			}
		}

		echo "{}";
	}

	/*************** WORKER FUNCTIONS **************/
	/***** THIS SHOULD NOT BE ACCESSED VIA PUBLIC URL ******/
	public function save_worker() {//this will save to the databse -- ensure that the property id is set

		$post_data = $this->input->post();

		if (count($post_data) > 0) {

			$property_id = $this->property_set->save($post_data);

			// AUTOMATED UPDATE -- COMMENTED OUT FOR NOW UNTIL WE GO THROUGH AND UDPATE THE PROPERTIES FURTHER ON
			//property_automated is seperate from the other property_set because it relies on outside apis
			$this->load->library('property/property_automated', array('property_id' => $property_id));
			$this->property_automated->update_property()->update_static();
		}
	}//end of method


	public function create_worker() {

		$post_data = $this->input->post();
		$property_id = $post_data['property_id'];

		// create directories!
		$this->load->library('utilities/file_management');
		$this->file_management->create_property($property_id);

		// create proper admin
		$this->load->library('property/property_set');
		$this->property_set->add_admin($property_id);


		//set the property as live!
		$this->general->update($this->general->get_category_table('property_status'), array('property_id' => $property_id), array('property_status' => true));

		
	}

	/******** PRIVATE FUNCTIONS *********/
	private function curl_post_async($url, $params) {

		ignore_user_abort(true);

		// create field_string as needed
		foreach ($params as $key=>$value)
			$fields_string .= $key . "=" . $value . "&";

		// remove trailing &
		rtrim($fields_string, "&");

		// init curl session
		$ch = curl_init();

		// set curl options
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, count($params));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);

		// perform request
		$result = curl_exec($ch);
	
		// now set the url
		curl_close($ch);

	}
}
