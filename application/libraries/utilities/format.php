<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Format{
	
	var $counter;
	
	public function format(){
		$this->counter = 2000;

	}
	
	public function word_format($input){
		
		// THIS FUNCTION IS TO HELP MAKE WORDS UPPERCASE AND REMOVE UNDERSCORES
		$input = str_replace('_', ' ', $input, $this->counter);
		$input = ucwords($input);

		return $input;
	}	
	
	public function logo($logo){
		
		$image_tag = "<img alt='" . $logo . "_logo' src='" . base_url('resources/images/logos/' . $logo . '.png') . "' />";  		
		return $image_tag;
	}
	
	public function comparison_format($input){
		
		$value = str_replace(' ', '_', $input, $this->counter);
		$value = strtolower($value);
		return $value;
	}
	
	public function keywords($input){
		
		$keywords = str_replace('_', ' ', $input, $this->counter);
		$keywords = str_replace(', ', ' ', $keywords, $this->counter);
		$keywords = str_replace(',', ' ', $keywords, $this->counter);
		$keywords = strtolower($keywords);

		$keyword_array = explode(' ', $keywords);

		$counter = count($keyword_array);

		$formatted_keywords = '';
		for($n=0; $n<$counter; $n++){
			$formatted_keywords .= $keyword_array[$n];
			if($n+1!=$counter)
				$formatted_keywords .= ', ';
		}
		
		$formatted_keywords = ucwords($formatted_keywords);
		
		return $formatted_keywords;
	}

	//this function accepts an image tag that is relative as of the resources/images folder
	public function image_tag($url, $class='', $alt='prospero', $id=''){
		
		$link = base_url('resources/images') . '/' . $url;
		$tag = "<img src='{$link}' alt='{$alt}' class='{$class}' id='$id' />";
		
		return $tag;
		
	}
	
	public function max_file($input = '100M') {
		
		$suffix = $this->last_character($input);
		
		$max_file = "";
		
		for ($i = 0; $i<strlen($input); $i++)
			if($input[$i] != $suffix)
				$max_file .= $input[$i];
		
		if('M' == $suffix) 
			$max_file .= " Megabytes";
		else
			$max_file .= "Kilobytes";
			
		return $max_file;
	}
	
	public function last_character($input, $index = 0) {//can also specify for 2-3 etc
		// this function will pop the last character off
		$reverse = strrev($input);
		
		return $reverse[$index];
	}

	public function replace_in_string($input, $original, $replacement, $counter = 1) {
		
		$replacement_output = str_replace($original, $replacement, $input, $counter);
		
		return $replacement_output;
		
		
	}

};