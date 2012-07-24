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
	
	function Media(){
		
		$this->CI =& get_instance();
		
		$models = array('general');
		$this->CI->load->model($models);
		
		$this->CI->load->config('site_status');
		
		$this->default_thumbnail_image = base_url($this->CI->config->item('default_thumbnail_image_url'));
		$this->default_slideshow_image = base_url($this->CI->config->item('default_slideshow_image_url'));
	
		$this->search_configuration('thumbnail_image');
	}
	
	
/********** PUBLIC FUNCTIONS ************************/

	public function get_media($property_id, $type = 'thumbnail_image', $status = true) {//type is pdf/video/thumbnail -- returns a single media_id
		
		$this->property_id = $property_id;
		$this->search_configuration($type);

		$query = $this->get_query($status);
		
		if($query && isset($query->row()->$this->category))
			return $query->row()->$this->category;
		
		else
			return false;//remember that the thumbnail will automatically be the default one
	}
	
	public function get_slideshow_images($property_id, $status = 'live') {
		
		$this->property_id = $property_id;
		$this->search_configuration('slideshow_image');//configure the query to get slideshow images
		$query = $this->get_query($status);
		$results = array();
		
		if($query) {
			
			foreach($query->result() as $row)
				array_push($results, $row->$this->category);
				
			return $results;
		}
		
		else
			return false;
	}
	
	public function get_url($media, $media_id = "default") {//will get the media type such as thumbnail_id or video_id etc's url
		
		$this->search_configuration($media);
		$url_result = "{$media}_url";//media_url
		
		$query = $this->CI->general->get($this->table, array($this->category => $media_id));
		
		if($query) {
			
			$url = site_url('property_images');//
			$url .= "/{$query->row()->$url_result}";//the relative url--takes care of slideshow or thumbnail
			if(file_exist($url))//make sure the file exists before returning it
				return $url;//the absolute path
			else
				return $this->default_slideshow_image;//this is declared in constructor
		}

		else if('thumbnail_image' == $media) // shouldn't really happen
			return $this->default_thumbnail_image;

		else//usually a video or pdf that does not exist -- shouldn't really happen unless we call default or something
			return false;
	}	

	public function get_slideshow_thumbnail_url($media_id) {
		
		$full_image_url = $this->get_url('slideshow_image', $media_id);
		$thumbnail_url = $this->CI->format->replace_in_string($full_image_url, 'slideshow_thumbnail', 'slideshow');

		return $thumbnail_url;//we simply replaced the slideshow directory with teh slideshow_thumbnail directory
		
		
		
	}
	

/************* PRIVATE FUNCTIONS ********************/
	
	private function search_configuration($media) {
		
		$this->category = "{$media}_id";//the category we are searching for
		$this->table = $this->CI->general->get_category_table($this->category);//find the location
	}
	
	private function get_query($status) {

		$where = array('property_id' => $this->property_id);
		
		if($status)//we don't want to add this parameter if we are trying to get all medias
			$where['status'] = true;
		
		$return = $this->CI->general->get($this->table, $where);
	
	}

};


?>