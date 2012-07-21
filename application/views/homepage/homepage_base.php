
<?php
	// SYSTEM WIDE LOADING!
	echo $this->header;
	
	$this->load->view('site_wide/background');
	
	$this->load->view('site_wide/border');
	
	$this->load->view('navigation/navigation_top');
	$this->load->view('navigation/navigation_left');
	$this->load->view('site_wide/logo');
	$this->load->view('navigation/search');
?>



<!-- INDIVIDUAL HOMEPAGE VIEWS -->
<div id='homepage_blurb'>
<?php
	for($i=1; $i<=1; $i++)
		$this->load->view('homepage/blurb_slides/homepage_blurb_' . $i);
?>
</div>