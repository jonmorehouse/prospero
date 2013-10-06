<?php
	// SYSTEM WIDE LOADING!
	echo $this->header;
	$this->load->view("site_wide/data");//initialize data
	$this->load->view('site_wide/background');
	$this->load->view('site_wide/border');
	$this->load->view('navigation/navigation_top');//load primary top navigation. Responsible for injecting its own bumpboxes into the application
	$this->load->view('site_wide/logo');
	$this->load->view('navigation/search');
	$this->load->view('site_wide/bumpbox_trigger');//this is used for creating the bumpbox 
?>
