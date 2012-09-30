<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Top level navigation for the website
$config['top_level_category'] = 'type_category'; //this is the type of category that the top level navigation views
$config['top_level_table'] = 'property_type'; // these are as noted in views/navigation/navigation_top.php

$config['top_level_categories'] = array('office_industrial', 'retail', 'residential', 'other');
$config['second_level_categories'] = array('rent', 'buy', 'lease', 'other');