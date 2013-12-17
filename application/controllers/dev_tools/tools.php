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
