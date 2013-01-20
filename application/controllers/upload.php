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

	public function slideshows() {

		$folder = "/Users/MorehouseJ09/Desktop/prospero/";

		// open the directory that holds all of our property images in folders based upon their 
		$parent_directory = opendir($folder);
		$banned_files = array(".", "..", ".DS_Store");

		while (false !== ($entry = readdir($parent_directory))) {

			if( in_array($entry, $banned_files)) continue;


			$property_id = $entry;

			// generate the property_images folder
			$property_images = opendir("$folder/$entry");

			// loop through each of the images for this particular image
			while (false !== ($image = readdir($property_images))) {


				// ensure that this is a valid file name
				if (in_array($image, $banned_files)) continue;

				// generate the file name for this image
				$file_name = "property_slideshow_images/$property_id/$image";

				// data 
				$data = array(

					"property_id" => $property_id,
					"url" => $file_name,
					"status" => true,
				);

				// insert the image into the slideshow database
				$this->db->insert("slideshow_images", $data);

			}
	    }

	}



}