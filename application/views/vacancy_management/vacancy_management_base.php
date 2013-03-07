
<?php
	// SYSTEM WIDE LOADING!
	echo $this->header;
	$this->load->view("site_wide/data");//initialize data
	$this->load->view('site_wide/background');
	$this->load->view('site_wide/border');
	$this->load->view('site_wide/logo');
?>



<?php
	$this->load->view('site_wide/javascript_module_loader');
	$this->load->view('site_wide/footer');
?>