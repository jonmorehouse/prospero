<?php

class Tools extends CI_Controller{
	
/*

	THIS CLASS IS JUST FOR DEVELOPMENT -- ITS TO HELP THE DEVELOPERS AS THEY MOVE FORWARD
	THIS SHOULD BE REMOVED ON LIVE SITE

*/
	function __construct() {
		parent::__construct();
		
		$this->load->model('general');
		$this->load->library('utilities/format');
		
	}

	public function index(){
		
		redirect();
		
	}

	public function create_default() { //creates the default property!

		if (!$this->input->is_cli_request()) redirect();

		// get all category types 
		$category_types = $this->general->get_category_types();

		// insert default values into the name etc

		$this->db->insert("property_name", array('name' => "default_name"));//this is used to get the next id for the primary_id
		$property_id = $this->db->insert_id();

		// loop through each category type
		foreach ($category_types as $category_type) {

			// get all categories for this particular category type
			$categories = $this->general->get_categories_by_type($category_type);

			if ($categories) {

				foreach ($categories as $category) {

					$default = $this->general->get_column('category_type_categories', array('category' => $category), "default_value");

					if ($category !== "property_id") {

						if (!$default) $default = $this->format->word_format($category);//create a progammed default if it is not specified

						$table = $this->general->get_category_table($category);//get the category table

						$this->general->update($table, array('property_id' => $property_id), array($category => $default));//this will update the default value if the property exists already in that table otherwise will add a new column

						// echo "Successfully created: $category = $default for default property\n";
					}
				}
			}
		}//end foreach loop

		echo "\nDefault Property Values Created\n";
	}

	public function create_default_media() {

		if (!$this->input->is_cli_request()) redirect();

		$data = array('property_id' => 1, 'url' => 'resources/images/defaults/thumbnail.png', 'status' => True, 'thumbnail_image_id' => 1);
		$this->db->insert('thumbnail_images', $data);

		$data = array('property_id' => 1, 'url' => 'resources/images/defaults/property.png', 'status' => True, 'slideshow_image_id' => 1);
		$this->db->insert('slideshow_images', $data);

		$data = array('property_id' => 1, 'url' => 'resources/images/defaults/pdf.png', 'status' => True, 'pdf_id' => 1);
		$this->db->insert('pdfs', $data);

		$data = array('property_id' => 1, 'url' => 'resources/images/defaults/video.png', 'status' => True, 'video_id' => 1);
		$this->db->insert('videos', $data);

		echo "\nCreated default media urls\n";

	}
	
	public function clear_general_tables(){
		
		if (!$this->input->is_cli_request()) redirect();

		$tables = $this->general->category_tables();

		array_push($tables, 'property_management', 'listing_views');
		
		foreach($tables as $value){

			$this->db->truncate($value, 'prospero');
			// echo "Successfully Cleared table: " . $value . "\n<br />"; 		
		}

		echo "Cleared General Tables \n";
	}
	
	public function create_user($username = False, $password = False, $rights = False){
			
		if ($this->input->is_cli_request()) {

			if (!$username || !$password)
				echo "\nUsername/passwords/rights where rights can be all or any other value\n";

			else {

				$username = strtolower($username);
				$password = md5($password);
				$rights = ($rights) ? "all" : "other";

				$query = $this->db->where(array('username' => $username))->get('user_information');

				if ($query->num_rows() == 0) {

					$this->db->insert('user_information', array('username' => $username, 'password' => $password, 'admin_rights' => $rights));
					echo "\nUsername = $username was created\n";
				}
				else echo "\nUsername ($username) already exists.\n";
			}//end of else statement -- 
		}//end if statement

		else redirect();
	}

	public function destroy_property($property_id = False) {

		if ($this->input->is_cli_request()) {

			// validate the input
			if ($property_id && intval($property_id) > 0 && intval($property_id) < 1000) {
					
				$this->load->library('property/property_set', 'utilities/file_management');

				// remove database values
				$this->property_set->destroy_property($property_id);

				// clean folders!
				$this->file_management->destroy_property($property_id);
			}//
		}//end of if loop

		else
			redirect();

	}
}