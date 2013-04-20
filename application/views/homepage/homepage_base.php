<?php
	$this->load->view('site_wide/page_base');
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