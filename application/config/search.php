<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// THIS IS FOR NEW SEARCH CATEGORIES!
// COULD HAVE THIS DYNAMICALLY UPDATE A NAV BAR
//THESE CORRESPONDE TO FUNCTIONS IN MODEL: property/search.php

// THERE ALSO NEEDS TO BE A RENT/BUY VERSION OF THIS
$config['search_type'] = array('residential', 'retail', 'office');
$config['search_price'] = array('under_1000', 'over_1000');
$config['search_location'] = array('location_1', 'location_2');

// THESE ARE ACCESSED IN PROPERTY SEARCH LIBRARY/MODEL/VIEWS:
	//Libraries/property/search
	//model/property/search
	//management/form/search
	//SHOULD BE IN RENT/BUY NAVIGATION BARS?
$config['rent_type'] = array('residential', 'retail', 'office');
$config['rent_price'] = array('under_1000', 'over_1000');
$config['rent_location'] = array('location_1', 'location_2');

$config['buy_type'] = array('residential', 'retail', 'office');
$config['buy_price'] = array('under_1000', 'over_1000');
$config['buy_location'] = array('location_1', 'location_2');

/*
$config['industrial'] = array('',)

*/
