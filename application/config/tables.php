<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// THIS IS USED FOR CREATING IDS ACROSS TABLES
// 'property_name' is excluded to make my life easier
$config['general_tables'] = array('property_contact', 'property_content', 'property_location', 'property_meta', 'property_thumbnail', 'property_type', 'property_video');


$config['all_tables'] = array('property_contact', 'property_content', 'property_location', 'property_meta', 'property_thumbnail', 'property_type', 'property_video', 'buy_property', 'rent_property');//NEW PROPERTY GOES HERE!

//HAVING SOME PROBLEMS HAVING THE DATE BE CREATED VIA HTML FORM THUS, WE JUST NEED TO USE A STRING!
