<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


class Image_upload extends CI_Controller {


	function __construct() {

		parent::__construct();//initialize the parent to give us access to the database object

	}

	public function index() {

		// first, read the file line by line into an array
		// second we want to parse the image and grab the pertinent data and then call the add_image function
		// to generate images.txt run the following command in the current folder
		// find property_images -type f > images.txt
		$file = file("images.txt");

		// loop through each line and grab the image
		foreach ($file as $line) {

			$url = trim($line);
			// $url = substr($line, 2, -1);//grab from the second element to the last element in the string
			$exploded = explode("/", $url);
			// echo $exploded[2] . "\n";
			$property_id = $exploded[1];

			// we will assume that the first element of each folder is the thumbnail image. Check here and add if so
			if (trim($exploded[2]) == "01.png")
				$this->add_thumbnail_image($property_id, $url);

			// add the slideshow image for everyone if possible
			$this->add_slideshow_image($property_id, trim($url));
		}
	}

	// add the proper slideshow image into the database
	public function add_slideshow_image($property_id, $url) {

		// iniitalize the proper variables for this particular image so that we can add it in properly
		$data = array(

			"url" => $url,
			"property_id" => $property_id,
			"status" => true,
		);

		$this->db->insert("slideshow_images", $data);
	}

	// add a thumbnail image provided a propery url and a proper property_id
	public function add_thumbnail_image($property_id, $url) {

		// create the proper data entry
		$data = array(

			"url" => $url,
			"property_id" => $property_id,
			"status" => true,
			);

		// actually add the data into the database
		$this->db->insert("thumbnail_images",$data);

	}


}