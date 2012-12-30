<?php echo $this->header;
	$this->load->view("site_wide/background");
	$this->load->view("site_wide/border");
	$this->load->view("site_wide/navigation");//handles logo, top and left navigation!

?>





<?php
	$this->load->view("site_wide/javascript_module_loader");
	$this->load->view("site_wide/footer");
?>