<?php
/*
	This class is responsible for generating all of the content to be displayed for the property pages 
	This class generates the content, header etc for each object
*/
class Listing_content extends Listing_base{
	
/***** CONSTRUCTOR/DESTRUCTOR METHODS ******/
	private $general_content;//this is the array that holds all of the values
	private $property_type_content;//this is the property_type content
	private $purchase_type_content;//this is the purchase type specific headers

	/*
		Each piece of the listing_category_content looks like this == array('name' => NAME, 'description' => DESCRIPTION, 'value' => VALUE)

		and if the value is false, then we will not add it!
	*/	

	public function __construct($parameters) {
		
		parent::__construct($parameters);

			
	}


/****** PUBLIC FUNCTIONS ******/

//this will be responsible for getting all of the relevant items from the database into an array and returning that array -- for this element only
	
	/**** PROPERTY_TYPE CONTENT ****/

	public function general_content() {//this will get the general categories // need to get the categories for the property

		$content = array();

		$categories = $this->CI->general->get_categories_by_type('general');

		foreach($categories as $category)
			$this->get_content($content, $category, 'general');

		if (count($content) === 0)
			return false;

		return $content;

	}

	public function purchase_type_content() {//this will get the purchase type categories and add them to the array of categories

		$content = array();//

		$category_type = $this->CI->general->get_category('type', $this->property_id);

		$categories = $this->CI->general->get_categories_by_type($category_type);

		foreach ($categories as $category)
			$this->get_content($content, $category, $category_type);

		if(count($content) === 0)
			return false;

		return $content;//return the content to be used by the view a
	}

	public function property_type_content() {//this is the category_type

		$content = array();

		$category_type = $this->CI->general->get_category('type_category', $this->property_id);//generate the purchase type -- ie: buy, lease rent etc
		$categories = $this->CI->general->get_categories_by_type($category_type);//generate all of the relevant categories

		foreach ($categories as $category)
			$this->get_content($content, $category, $category_type);

		if(count($content) == 0)
			return false;

		return $content;

	}

	/**** HEADER FUNCTIONS ****/

	public function property_type_header() {

		$category_type = $this->CI->general->get_category('type_category', $this->property_id);//this is the type of  property == ie residential / retail etc

		return $this->content_header($category_type);
	}

	public function purchase_type_header() {

		$category_type = $this->CI->general->get_category('type', $this->property_id);
		return $this->content_header($category_type);
	}

	public function general_header() {

		$category_type = 'general';
		return $this->content_header($category_type);
	}

/***** PRIVATE CATEGORIES *****/

	private function get_content(&$content, $category, $category_type = 'general') {

		$name = $this->get_name($category, $category_type);//get the name for this element
		$description = $this->get_description($category, $category_type);//get the purchase type
		$value = $this->CI->general->get_category($this->property_id, $category);//get the category value! -- this is the raw value!

		echo "{$description}\n";

		if ($value && $name) {

			$value = $this->CI->format->word_format($value);//clean the value properly!
			array_push($content, array('name' => $name, 'value' => $value, 'description' => $description));//push into the $content array this particular category -- complete with everything s
		}
	} 

	private function get_description($category, $category_type = 'general') {//get the descriptoin for the category -- this is what the user will see upon hovering over the name

		$table = 'category_type_categories';
		$where = array('category' => $category, 'category_type' => $category_type);

		$description = $this->CI->general->get_column($table, $where, 'description');

		return $description;
	}

	private function get_name($category, $category_type = 'general') {//this generates the header name for the category -- this is what the user will see

		//this function will return a db name if it is specified in the database, otherwise will return the formatted category name

		$db_name = $this->CI->general->get_column('category_type_categories', array('category' => $category, 'category_type' => $category_type), 'name');//this is the custom name for the fiel

		if ($db_name) //use the database name given for this category
			return $this->CI->format->word_format($db_name);

		else//return the category in a clean format
			return $this->CI->format->word_format($category);//return just the category name if the database does not have a different name specified
	}

	private function content_header($category_type) {

		$db_name = $this->CI->general->get_column('category_types', array('category_type' => $category_type), 'name');

		if ($db_name) 
			return $this->CI->format->word_format($db_name);

		return $this->CI->format->word_format($category_type);
	}
};

