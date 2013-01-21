<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Upload extends CI_Controller {


	function __construct() {

		parent::__construct();

		$this->load->model('general');

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
				$file_name = "slideshow_images/$property_id/$image";

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

	public function add_defaults() {

		//this function is useful for adding in defaults for properties that don't have any images

		$properties = $this->general->get_live_properties();

		$imageless_properties = array();

		$default = array(

			"url" => "resources/images/defaults/property.png",
			"status" => true
		);

		foreach ($properties as $property_id) {

			// query for the live slideshow images 
			// if query rows exists, then continue
			$query = $this->db->where(array("property_id" => $property_id, "status" => true))->select("slideshow_image_id")->get("slideshow_images");

			// make sure that there exists no other images before adding in the correct ones
			if ($query->num_rows() > 0) continue;

			// make sure we record this as not being a valid property right now
			array_push($imageless_properties, $property_id);

			// set the current property_id
			$default['property_id'] = $property_id;


			// now add in 5 default images!
			for ($i = 0; $i < 6; $i++)
				$this->db->insert("slideshow_images", $default);
		}


		// now write out our message!
		$writer = fopen("imageless_properties", "a");

		foreach ($imageless_properties as $property_id)
			fwrite($writer, "$property_id\n");

		fclose($writer);

	}

	public function property_thumbnails() {

		$imageless_properties = file("imageless_properties", FILE_IGNORE_NEW_LINES);

		$property_ids = $this->general->get_live_properties();
		$base_dir = "thumbnail_images";

		$default_thumbnail = "resources/images/defaults/thumbnail.png";

		foreach ($property_ids as $property_id) {

			// base directory the this properties thumbnails
			$directory = "$base_dir/$property_id";

			// check that the folder exists
			if (!is_dir($directory)) mkdir($directory);

			// generate proper url
			$url = "$directory/1.png";

			// perform the copy!
			// check if its an imageless file
			if (in_array($property_id, $imageless_properties))
				copy($default_thumbnail, $url);
			
			else {

				// generate a random number and copy that!
				$query = $this->db->where(array("property_id" => $property_id, "status" => true))->select("url")->get("slideshow_images");
				$images = array();
				
				// put all of the images in the array
				foreach ($query->result() as $row) 
					array_push($images, $row->url);

				copy($images[rand(0, count($images) -1)], $url);
			}

			// 
			$data = array(

				"status" => true,
				"url" => $url,
				"property_id" => $property_id,
			);


			// delete existing thumbnails for this!
			$this->db->where(array("property_id" => $property_id))->delete("thumbnail_images");
	
			// insert into the database
			$this->db->insert("thumbnail_images", $data);			
		}
	}

}