<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class File_analysis{
	
	public function file_list($dir, $type='image'){
		
		// THIS METHOD WILL RETURN AN ARRAY WITH ALL OF THE IMAGES--
		opendir($dir);
		
		$file_list = array(); //INITIALIZING ARRAY
		
		$list = scandir($dir);//SCAN DIRECTORY
		
		if($type=='image'){
			foreach($list as $value){
				$format = end(explode('.', $value));
					if($format == 'png' || $format == 'jpg' || $format == 'gif' || $format == 'jpeg')
							array_push($file_list, $value);
				}
		}//END OF IF LOOP
		else{
			foreach($list as $value){
				$format = end(explode('.', $value));
				if($format == $type){
					array_push($file_list, $value);
				}
			}
		}//END OF ELSE LOOP

		// RETURN 
		return $file_list;
	}
	
	public function file_count($dir){
		
		$list = $this->file_list($dir, 'image');
		$length = count($list);
		return $length;
	}
	// CONSTRUCTOR TO FIND THE ROOT DIRECTORY
	
	public function file_format($file_name) {
		
		
		
	}
}