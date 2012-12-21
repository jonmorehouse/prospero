<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class File_management{
	
	var $CI;
	
	public function File_management(){
		
			$this->CI =& get_instance();
	}
	
	public function create_property($property_id){
		
		// TESTING IF THE DIRECTORY IS CREATED ALREADY--IF IT IS WE DON'T WANT TO RECREATE IT!
			
		if(!file_exists("property_images/{$property_id}")){
			mkdir("property_images/{$property_id}");
			mkdir("property_images/{$property_id}/thumbnail");
			mkdir("property_images/{$property_id}/slideshow");
			mkdir("property_images/{$property_id}/thumbnail_slideshow");
		}	
		
		if(!file_exists("property_videos/{$property_id}")) {
			mkdir('property_videos/' . $property_id);
		}
		
		if(!file_exists("property_pdfs/{$property_id}")) {
			
			mkdir("property_pdfs/{$property_id}");
		}

	}

	public function destroy_property($property_id) {

		$directories = array("property_images/{$property_id}", 
			"property_pdfs/{$property_id}", 
			"property_videos/{$property_id}");

		foreach ($directories as $directory) {

			if (file_exists($directory)) {

				$this->destroy_directory($directory);

			}
		}


		// DELETE STATIC FILE
		$static_file = "property_static_pages/{$property_id}";

		if (file_exists($static_file)) {
			unlink($static_file);
			echo "Static listing page deleted\n";
		}//end of if statement

	}//end of destroy property method


/******** PRIVATE FUNCTIONS *********/
	private function destroy_directory($directory) {

		foreach(scandir($directory) as $file) {

			if ($file !== "." && $file !== "..") {

				$file = "{$directory}/{$file}";//ensure we are working with the proper path

				if (is_dir($file))
					$this->destroy_directory($file);//recursively delete this directory!

				else unlink($file);
			}//end of if loop!
		}//end of foreach loop

		rmdir($directory);//remove the directory!

	}//end of directory destroy

}