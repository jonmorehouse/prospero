
<?php
	echo $this->header;
	$this->load->view('site_wide/background');//automatically loads in its images with proper js
	$this->load->view('site_wide/border');//
	$this->load->view('navigation/navigation_top');//takes care of its own bumpboxes assuming the correct content is passed
	$this->load->view('site_wide/logo');

	$this->load->view('navigation/navigation_' . $this->id);
?>


<!-- INDIVIDUAL NAVIGATION BAR IS BELOW -->
<div id='header'>
	<h1>Prospero Real Estate</h1>
	<h2>
		<?php
			echo $this->browse->browse_header($this->id, $this->category, $this->filter);
		?>
	</h2>
</div>

<?php
	$this->load->view('navigation/search');
?>



<?php

	$this->load->view('site_wide/javascript_module_loader');
	$this->load->view('site_wide/footer');

?>