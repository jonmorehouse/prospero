<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/*
	This is a helper class to be used to help with data manipulation and databases
	The idea is to generate what type of data type a category is and check it with this class before injecting
	
*/
	
class Data_helper{
	
	var $numbers;

	function __construct() {

		$this->numbers = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");


	}
	
	public function input_to_boolean($input) {
		
		if($input == 'false')
			return false;
			
		else if ($input == 'true')
			return true;
		
		else if ($input == '0')
			return false;
		
		else if ($input == '1')
			return true;
		
		else if ($input == 0)
			return false;
			
		else 
			return true;
	}
	
	public function input_to_integer($input) {
		
		if ('integer' === gettype($input)) return $input;

		// 1.) LOOP THROUGH AND ONLY KEEP NUMBERS!
		// 2.) CONVERT TO INPUT!
		$final_number = "";
		for ($i = 0; $i<strlen($input); $i++)  { 

			$character = substr($input, $i,1);     

			if (in_array($character, $this->numbers)) $final_number = "{$final_number}{$character}";
		}

		return intval($final_number);
	}

	// check whether or not input is only digits -- from a string
	public function pure_number($input) {

		if ("integer" == gettype($input)) return true;

		for ($i = 0; $i < strlen($input); $i++) {

			if (!in_array($input[$i], $this->numbers))
				return false;
		}

		return true;


	}

	public function input_to_safe_string($input) {
		
		return htmlentities($input, ENT_QUOTES);
	}
	

};