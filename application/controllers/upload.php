<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Upload extends CI_Controller {


	function __construct() {

		parent::__construct();

	}


	public function team() {

		$data = array(

			"member_id" => "beng_gunn",
			"content" => "<p>H.B. (Beng) Gunn is our Vice President - Commercial Properties. Beng is responsible for a portfolio of shopping centres, industrial facilities, and apartment properties in Vancouver and the Fraser Valley. He has been with Prospero since 1993 and is a graduate of the University of British Columbia and the Thunderbird School of Global Management.</p>"
		);


		$this->db->where(array('member_id' => $data['member_id']))->update("team_bumpbox", $data);






	}


}