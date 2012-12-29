<?php
class Media{
/* this class will be responsible for returning 

	-need all media
	-need all visibile media
	-want to return thumbnail_id or slideshow_id
	
	-we feed this a property_id and type such as pdf, thumbnail, video
*/

	var $CI;//codeigniter instance
	var $table;//the table to search in
	var $category;//thumbnail_image 
	var $media;//thumbnail_image/video/pdf etc

	
/********* CONSTRUCTORS / DESCTRUCTORS **************/	
	

	public function Media() {
		
		$this->CI =& get_instance();
		
		$models = array('general');
		$this->CI->load->model($models);
		
		$this->CI->load->config('site_status');
		
		$this->default_thumbnail_image_url = base_url($this->CI->config->item('default_thumbnail_image_url'));
		$this->default_slideshow_image_url = base_url($this->CI->config->item('default_slideshow_image_url'));
	
		$this->search_configuration('thumbnail_image');
	}

	
/********** PUBLIC FUNCTIONS ************************/
	
	public function get_thumbnail($property_id) {

		$media_id = $this->get_media($property_id);
		return array(

			'alt' => $this->CI->general->get_category($property_id, 'name'),
			'url' => $this->get_url('thumbnail_image', $media_id),
		);
	}

	//this is for retrieving a single media id!
	public function get_media($property_id, $type = 'thumbnail_image', $status = true) {//type is pdf/video/thumbnail -- returns a single media_id
		
		$this->property_id = $property_id;
		$this->search_configuration($type);
		
		$category = "{$type}_id";//category
		$table = $this->CI->general->get_category_table($category);
		$where = array('property_id' => $property_id);
	
		if($status) $where['status'] = $status;
		
		$query = $this->CI->general->get($table, $where);//generate database query
		
		if($query && isset($query->row()->$category))
			return $query->row()->$category;
		
		else
			return false;//remember that the thumbnail will automatically be the default one
	}
	
	// this is for retrieving a list of images or -- for the thumbnail image or slideshow image media type
	public function get_media_list($property_id, $type = 'thumbnail_image', $status = true) {//returns array of any media type with ids
		
		$media_list = array(); //array of integers that are primary keys for each table
		$category = "{$type}_id";//generic media type--hardcoded around the site in this format
		$table = $this->CI->general->get_category_table($category);//category location
		
		$query = $this->CI->general->get($table, array('property_id' => $property_id));//get all all medias for this property!
		
		if(!$query)//no medias for this type for this property_id
			return $media_list;
		
		foreach($query->result() as $row)
			array_push($media_list, $row->$category);//push all of the type_ids into the array to be returned
		
		return $media_list;
	}
	
	public function get_slideshow_thumbnails($property_id) {//get a list of all the thumbnails for a property slideshow
		
		$media_ids = $this->slideshow_images($property_id);
		$thumbnail_urls = array();
		
		foreach($media_ids as $media_id) {
			
			$url = $this->get_slideshow_thumbnail_url($media_id);
			if($url)
				array_push($thumbnail_urls, $url);
		}
	}
	
	public function get_image_thumbnail($media_id) {
			
		$url = $this->get_slideshow_thumbnail_url($media_id);
		
		if($url)
			return $url;
		else
		 	return false;
	}
	
	public function get_slideshow_images($property_id, $status = 'live') {
		
		$media_ids = $this->slideshow_images($property_id, $status);//returns a list of the media_ids for the property
		$media_urls = array();
		
		foreach($media_ids as $media_id) {
			
			$url = $this->get_url('slideshow_image', $media_id);
			if($url)
				array_push($media_urls, $url);
		}
	}
	
	public function get_url($media, $media_id = false) {//will get the media type such as thumbnail_id or video_id etc's url

		if ($media === "thumbnail_image" && !$media_id) 
			return $this->default_thumbnail_image_url;

		$category = "{$media}_id";

		$table = $this->CI->general->get_category_table($category);
		$query = $this->CI->general->get($table, array($category => $media_id));

		if(!$query)//for a different media type--should not happen
			return false;
		
		else {//exists
			
			$url = "{$query->row()->url}";

			if(file_exists($url))//only works for local files no http:// etc
				return base_url($url);

			
			else if('thumbnail_image' == $media)
				return $this->default_thumbnail_image_url;

			else if('slideshow_image' == $media)
				return $this->default_slideshow_image_url;
		}
	}	

	// this function is useful for getting the thumbnail url to be used by each slideshow image!
	public function get_slideshow_thumbnail_url($media_id) {
		
		$full_image_url = $this->get_url('slideshow_image', $media_id);

		$thumbnail_url = $this->CI->format->replace_in_string($full_image_url, 'slideshow', 'thumbnail_slideshow');

		return $thumbnail_url;//we simply replaced the slideshow directory with teh slideshow_thumbnail directory
	}
	
	public function get_media_status($category, $media_id) {//will return the value of the media_id as true or false
		
		if(strpos($category, "_id") === false)
			$category = "{$category}_id";

		$table = $this->CI->general->get_category_table($category);
		
		$query = $this->CI->general->get($table, array($category => $media_id));
		
		if($query)
			return $query->row()->status;
	}

/************* PRIVATE FUNCTIONS ********************/
	
	
	private function slideshow_images($property_id, $status = 'live') {
		
		$category = "slideshow_image_id";
		$table = $this->CI->general->get_category_table($category);

		$where = array('property_id' => $property_id);
		
		if($status)
			$where['status'] = $status;//only include the status if specified
		
		$query = $this->CI->general->get($table, $where);
		
		if($query) {
			
			foreach($query->result() as $row) {
				
				$media_id = $row->$category;
			}
		}
		
		
		$where = array('property_id' => $this->property_id);//search parameters
		$query = $this->CI->general->get($table, $where);
		$results = array();
		
		if($query) {
			
			foreach($query->result() as $row)
				array_push($results, $row->$this->category);
				
			return $results;
		}
		
		else
			return false;
	}
	
	private function search_configuration($media) {
		
		$this->category = "{$media}_id";//the category we are searching for
		$this->table = $this->CI->general->get_category_table($this->category);//find the location
	}
	
};