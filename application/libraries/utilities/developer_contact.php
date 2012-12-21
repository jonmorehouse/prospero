<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Developer_contact{
/*THIS CLASS IS FOR THE DEVELOPER TO BE EMAILED FOR PARTICULAR ERRORS THROUGHOUT THE SITE, BY DEFAULT IT IS GOING TO GO TO morehouse_j09@gmail.com with any errors*/

	var $CI, $email;//YOU CAN PASS EMAIL AS A PARAMETER 
	


	function Developer_contact(){
		// 
		$this->CI =& get_instance();
		$this->CI->load->library('email');
		$this->email = 'morehousej09@gmail.com';
	}
	
	/*function Developer_contact($email){
			// THIS IS THE CLASS CONSTRUCT
			$this->CI->load->library('email');
			$this->CI =& get_instance();
			$this->email = $email;
	}*/
	
	function general_error($subject, $message){

		// THIS IS THE GENERIC FOR THE DEVELOPER--CONSTRUCTOR
		$this->CI->email->from('morehousej09@gmail.com', 'Website_Error');
		$this->CI->email->to($this->email); 
		
		$this->CI->email->subject($subject);
		$this->CI->email->message($message);	

		$this->CI->email->send();		
	}
};