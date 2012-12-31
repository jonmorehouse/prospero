<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Header{
/*This library makes a few assumptions that I use in sites. 
	1.) There is a page_type--usually corresponds to a controller. This must be passed. This is responsible for the basic external css/js files for both live and local
	2.) There is a live/local/resources folder for js and live/local for css. both are in resources/js or resources/css
		-this class checks to make sure both are valid
	3.) This class will add the page_id one to each and will only include the proper file (With link/extension) if it exists
		-this class ensures that all files are verified prior to using
	4.) This class relies on a model called general to get basic meta_information and meta_keywords for each page_id
		-this is stored in header_meta_information table in mysql, primary_key is page_id
	5.) This will check for a favicon with url of resources/images/favicon.ico -- this is hard coded and will only add if it is valid
	6.) This class should be called in the controller and it will return a view--views/site_wide/header.php and can then be echoed from the page_id_base.php view from the controller
*/

/*Future features
	-browser detection-we will have a mobile resources live etc
	-need to work on versioning of css and javascript
*/
	protected $CI, 
		$site_status,
		$cgi_url,
		$base_url;


	public function __construct() {
			
		// DECLARATIONS AND LOADING
		$this->CI =& get_instance();

		// LOADING MODELS
		$models = array('general');
		$this->CI->load->model($models);
		
		// VARIABLES
		$this->site_status = $this->CI->config->item('site_status');
		$this->cgi_url = $this->CI->config->item('cgi_url');

		$this->base_url = $this->CI->config->item('base_url');

	}

	public function header_creation($page_type, $page_title = 'Prospero Real Estate', $property_id = false, $passed_css = array(), $passed_javascript = array()){
		
		$this->property_id = $property_id;
		
		// Data to pass to the view
		$data['page_title'] = $page_title;
		$data['stylesheet_list'] = $this->stylesheets($page_type, $passed_css);
		$data['javascript_list'] = $this->javascript($page_type, $passed_javascript);
		$data['meta_keywords'] = $this->meta_keywords($page_type, $property_id);
		$data['meta_description'] = $this->meta_description($page_type, $property_id);
		$data['favicon'] = $this->favicon();
		$data['cgi_url'] = $this->cgi_url;
		
		$header = $this->CI->load->view('site_wide/header', $data, true);
		return $header;
	}


	//stylesheets will get the site_wide sheets, add any passed_css, add a page_type sheet and then test all of them before adding.
	protected function stylesheets($page_type, $passed_css){
		
		$css_tags = array();//will be the tag that is returned
		
		if($this->site_status == 'local'){
		
			$css = $this->CI->config->item('local_css');
			$ext = 'less';
			
			// Pass in the css for the page type
			array_push($css, "/resources/css/local/{$page_type}.{$ext}");
			
			// Pass any extra css files that were passed from the controller
			foreach($passed_css as $value)
				array_push($css, "/resources/css/local/{$value}");
		}
		
		else if($this->site_status == 'live'){
			
			$css = $this->CI->config->item('live_status');
			$ext = 'css';
			
			// Pass in the css for the page type
			array_push($css, "resources/css/live/{$page_type}.{$ext}");
			
			// Pass any extra css files that were passed from the controller
			foreach($passed_css as $value)
				array_push($css, "resources/css/live/{$value}.{$ext}");
		}
		

		// Now we will validate each css file before creating indivual tags.
		foreach($css as $value){
			// Link for the sheet-relative
			$link = base_url($value);
			$tag = "\n\t<link rel='stylesheet/{$ext}' type='text/css' href='{$link}' />";
			
			// check if file exists-relatie to the root. check echo get_cwd()
			if(file_exists('./' . $value))
				array_push($css_tags, $tag);
		}
		
		return $css_tags;
	}
	
	// javascript will get the site_wide javascripts from config/resources.php	
	protected function javascript($page_type, $passed_javascript){
		// we need to account for the fact that we might want non-local javascript for our final project

		$javascript_links = array();//this is for all valid javascript tags--we have to test our local files to make sure they exist
		$javascript_tags = array();//for all tags completed!
		
		if($this->site_status == 'local'){
		
			$javascript = $this->CI->config->item('local_javascript');

			// Pass in the javascript for the page type
			array_push($javascript, "/resources/javascript/local/{$page_type}.js");
			
			// Pass any extra css files that were passed from the controller
			foreach($passed_javascript as $value)
				array_push($javascript, "/resources/javascript/local/{$value}.js");
		}
		
		else if($this->site_status == 'live'){
			
			$javascript_links = $this->CI->config->item('live_external_javascript');//live hosted externally documents
			
			$javascript = $this->CI->config->item('live_javascript');

			// PUSH THE PAGE_TYPE JS--WILL BE CHECKED IF IT EXISTS LATER
			array_push($javascript, "resources/javascript/live/{$page_type}.js");

			// Pass any extra css files that were passed from the controller
			foreach($passed_javascript as $value)
				array_push($javascript, "resources/javascript/live/{$value}.js");
		}
		
		// Now we will validate each css file before creating indivual tags.
		foreach($javascript as $value){
			$link = base_url($value);
			if(file_exists('./' . $value))
				array_push($javascript_links, $link);

		}
		
		foreach($javascript_links as $link){
			$tag = "\n\t<script type='text/javascript' src='{$link}'></script>";
			array_push($javascript_tags, $tag);
		}

		
		return $javascript_tags;
	}
		
	//will get the meta keywords and will return the tag 
	protected function meta_keywords($page_type, $property_id){
		
		$keywords = "";
		$keywords .= $this->CI->general->get_column("page_type_meta_information", array('page_type' => $page_type), 'keywords');

		if($property_id && $property_id !== -1){
			foreach((array)$property_id as $value) {
				
				$raw_keywords = $this->CI->general->get_category($value, "meta_keywords");

				$keywords .= ' ' . $this->CI->format->keywords($raw_keywords);
			}
		}
		
		$clean_keywords = $this->CI->format->keywords($keywords);

		return $clean_keywords;
	}

	// will get the meta description and return it
	protected function meta_description($page_type, $property_id){
		
		$description = "";
		$description .= $this->CI->general->get_column("page_type_meta_information", array('page_type' => $page_type), 'description');
		
		if($property_id && $page_type == 'listing')
			$description = $this->CI->general->get_category($property_id, "meta_description");
		
		return $description;
	}

	protected function favicon(){
		
		$relative_url = 'resources/images/favicon.ico';
		$favicon_url = base_url('resources/images/favicon.ico');
		
		if(file_exists('./' . $relative_url))
			$tag = "\n\t<link rel='shortcut icon' href='{$favicon_url}' type='image/x-icon' />";
		else
			$tag = "";
			
		return $tag;
	}

}