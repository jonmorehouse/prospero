<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Uri_counter{
	
	public function last_element(){


		$i = 0;
		while(true)
		{
			$i++;
			
			if($i>24)
				break;
			else
				echo $i;
		}
	}

}