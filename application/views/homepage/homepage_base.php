
<?php
	// SYSTEM WIDE LOADING!
	echo $this->header;
	
	$this->load->view('site_wide/background');
	$this->load->view('site_wide/border');
	$this->load->view('navigation/navigation_top');//responsible for loading its own ivews
	$this->load->view('navigation/navigation_left');//responsible for loading its own views
	$this->load->view('site_wide/logo');
	$this->load->view('navigation/search');
	$this->load->view('site_wide/bumpbox_trigger');//this is used for creating the bumpbox 
?>



<!-- INDIVIDUAL HOMEPAGE VIEWS -->
<div id='homepage_blurb'>
<?php
	foreach($this->homepage_blurbs as $blurb)
		echo "<div><p> ${blurb}</p></div>";
?>
</div>

<?php
	$this->load->view('site_wide/javascript_module_loader');
	$this->load->view('site_wide/footer');
?>