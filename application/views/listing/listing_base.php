<?php echo $this->header;
	$this->load->view("site_wide/background");
	$this->load->view("site_wide/border");
	$this->load->view("site_wide/navigation");//handles logo, top and left navigation!
?>

<?php//echo out the proper bumpboxes as sent from the controller. Did this to offset logic from the views back into the controllers and libraries
	foreach ($this->top_bumpboxes as $bumpbox) echo $bumpbox;
	foreach ($this->bumpboxes as $bumpbox) echo $bumpbox;
?>





<?php
	$this->load->view("site_wide/javascript_module_loader");
	$this->load->view("site_wide/footer");
?>