<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// SITE STATUS IS SO THAT WE CAN EASILY CHANGE THE LOCAL TO LIVE STATUS OF A WEBSITE
$config['site_status'] = 'local';
$config['cgi_url'] = 'http://localhost:8888/cgi-bin/';
$config['max_file'] = '100M'; //found in php.ini file -- maximum is 100M

$config['default_thumbnail_image_url'] = 'resources/images/defaults/thumbnail.png';
$config['default_slideshow_image_url'] = 'resources/images/defaults/slideshow.png';
$config['default_pdf_thumbnail_url'] = 'resources/images/defaults/pdf.png';
$config['default_video_thumbnail_url'] = 'resources/images/defaults/video.png';

$config['webmaster_email'] = 'morehousej09@gmail.com';