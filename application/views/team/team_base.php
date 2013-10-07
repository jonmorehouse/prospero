<?php
	$this->load->view('site_wide/page_base');
?>

<!-- now load in the various thumbnails etc and initialize the elements for each member -->
<div id='member_thumbnails'>
<?php 
	foreach ($this->team as $member)
		$this->load->view('team/thumbnail', array('member' => $member));
?>
</div>

<!-- initialize current member main / middle box etc -->
<div id='current_member'>

	<div>
		<img src='<?php echo $this->member["image"]["url"];?>' alt='<?php echo $this->member["image"]["alt"];?>' />
	</div>
	<div>
		<h1><?php echo $this->member["name"]; ?></h1>
		<h2><?php echo $this->member["title"];?></h2>
		
		<hr>
		<p><?php echo $this->member["content"];?></p>
	</div>
</div>

<?php
	$this->load->view('site_wide/javascript_module_loader');
	$this->load->view('site_wide/footer');
?>
