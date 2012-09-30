<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// LOCAL SECTION JAVASCRIPT AND CSS

$config['local_javascript'] = array(
	0=>'/resources/javascript/resources/jquery-1.7.1.min.js',
	1=>'/resources/javascript/resources/less-1.3.0.min.js',
	2=>'/resources/javascript/resources/jquery-ui-1.8.18.custom.min.js',
	3=>'/resources/javascript/local/site_wide.js', //for functions that appear around the site
	4=>'/resources/javascript/local/bumpbox.js', //for bumpbox specific functions to reduce site_wide bloat
	5=>'/resources/javascript/local/variables.js', //for variables such as time etc...
);

$config['local_css'] = array(
	0=>'/resources/css/local/variables.less',
	1=>'/resources/css/local/mixins.less',
	2=>'/resources/css/local/site_wide.less',
	3=>'/resources/css/local/bumpbox.less',
	4=>'/resources/css/local/javascript.less'//this is for any javascript only activated css
);


// LIVE CSS AND JAVASCRIPT
$config['live_external_javascript'] = array();
$config['live_local_javascript'] = array();
$config['live_css'] = array();


// PAGE META INFORMATION!
$config['page_title'] = 'Prospero Real Estate';

