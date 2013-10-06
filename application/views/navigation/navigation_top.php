<div id='navigation_top'>

	<li data-link='contact'>Contact</li>
	<li data-link='map'>Map</li>
	<li class='<?php if($this->id=='residential') echo 'current'; ?>'><a href='<?php echo site_url('browse/residential');?>'>Residential</a></li>
	
	<li class='<?php if($this->id=='retail') echo 'current';?>'><a href='<?php echo site_url('browse/retail');?>'>Retail</a></li>
	
	<!-- Office industrial link. We need to have drop down menus here-->
	<li class='<?php if($this->id=='office_industrial') echo 'current';?>'><a href='<?php echo site_url('browse/office_industrial');?>'>Office/Industrial</a></li>
	
	<!-- Initialize the listings browse page -->
	<li class='<?php if($this->id=='listings') echo 'current';?>'><a href='<?php echo site_url('browse/listings');?>'>Listings</a></li>

	<!-- Initialize nested menu for the vacancies section -->
	<li <?php if ($this->id == "vacancies") echo "class='current'";?>>Vacancies
		<ul>
			<li><a href='<?php echo site_url("vacancies/residential");?>'>Residential</a></li>
			<li><a href='<?php echo site_url("vacancies/retail_office_industrial");?>'>Retail/Office/Industrial</a></li>
		</ul>
	</li>

	<li class='about'>About</li>

	<li class='team'>Team</li>

	<li><a href='<?php 
		// THIS IS SO YOU CAN'T RELOAD THE HOMEPAGE FROM THE HOMEPAGE!!!--THATS ANNOYING
			if(strtolower($this->id)=='homepage')
				echo '#';
			else
				echo site_url();
		?>'>Home</a></li>
</div>


<?php
	// load in the bumboxes necessary for this page
	$this->load->view('navigation/bumpboxes/contact');
	$this->load->view('navigation/bumpboxes/map');
	$this->load->view('navigation/bumpboxes/about');
?>
