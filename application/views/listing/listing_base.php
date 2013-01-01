<?php echo $this->header;
	$this->load->view("site_wide/data");//responsible for echoing out the proper data
	$this->load->view("site_wide/background");
	$this->load->view("site_wide/border");
	$this->load->view("site_wide/navigation");//handles logo, top and left navigation!
	$this->load->view('site_wide/bumpbox_trigger');//this is used for creating the bumpbox 
?>

<?php
	// initialize the default bumpboxes!
	$this->load->view('navigation/bumpboxes/contact');
	$this->load->view('navigation/bumpboxes/map');

	foreach ($this->bumpbox_content as $bumpbox) echo $bumpbox;//need to loop out some bumpbox js objects to help our front end. Will send everything
?>

<?php
	$this->load->view("listing/main");//load the main content
?>

<?php
	$this->load->view("site_wide/javascript_module_loader");//responsible for echoing out the proper modules to be loaded
	$this->load->view("site_wide/footer");//responsible for the footer and html closing tags
?>