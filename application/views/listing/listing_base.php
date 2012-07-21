<?php
// THIS CONTROLS THE INDIVIDUAL LISTING FOR EACH PROPERTY!

// PAGE META SECTION

	echo $this->header;
	
	$this->load->view('site_wide/background');
	$this->load->view('site_wide/border');
	$this->load->view('navigation/navigation_top');
	$this->load->view('site_wide/logo');
	$this->load->view('navigation/navigation_' . $this->id);//Id is the type_category
	
// LISTING SECTION
?>

