<?php echo $this->header;
	$this->load->view("site_wide/background");
	$this->load->view("site_wide/border");
	$this->load->view("site_wide/navigation");//handles logo, top and left navigation!
?>

<?php
	//echo out the proper bumpboxes as sent from the controller. Did this to offset logic from the views back into the controllers and libraries
	foreach ($this->top_bumpboxes as $bumpbox) echo $bumpbox;//loop through the top bumpboxes - logic built out in the bumpbox.js page
	foreach ($this->left_bumpboxes as $bumpbox) echo $bumpbox;//need to loop out some bumpbox js objects to help our front end. Will send everything
?>

<?php
	$this->load->view("listing/main");//load the main content
?>

<?php
	$this->load->view("site_wide/data");//responsible for echoing out the proper data
	$this->load->view("site_wide/javascript_module_loader");//responsible for echoing out the proper modules to be loaded
	$this->load->view("site_wide/footer");//responsible for the footer and html closing tags
?>