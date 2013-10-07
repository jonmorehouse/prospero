<?php
	echo $this->header;
	$this->load->view("site_wide/data");
	$this->load->view('site_wide/background');//automatically loads in its images with proper js
	$this->load->view('site_wide/border');//

	$this->load->view('navigation/navigation_top');//takes care of its own bumpboxes assuming the correct content is passed
	$this->load->view('site_wide/logo');
	$this->load->view('site_wide/bumpbox_trigger');//this is used for creating the bumpbox 
?>


<!-- INDIVIDUAL NAVIGATION BAR IS BELOW -->
<?php
	$this->load->view('navigation/search');
?>

<div id='page_container'>
	<div id='page_content'>
		
		<div id='thumbnail_container'>
			<?php
				if (gettype($this->thumbnails) === "array") $this->load->view("browse/listing_thumbnail");
				else echo $this->thumbnails;
			?>
		</div>
	</div> <!--THIS IS THE END OF THE PAGE_CONTENT-->
</div>

<?php

	$this->load->view('site_wide/javascript_module_loader');
	$this->load->view('site_wide/footer');

?>
