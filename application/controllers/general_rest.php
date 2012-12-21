<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class General_rest extends CI_Controller {

	public function submit_email() {

		$message = $this->input->post("message");//message section
		$email = $this->input->post("email");// this is the email address section

		$submission = true;

		$response = ($submission) ? (array("status" => true, "message" => "<span>Thanks for your submission.<span>")) : (array("status" => false, "message" => "<span>This message could not be submitted, please try again</span>"));

		echo json_encode($response);		
	}
}



