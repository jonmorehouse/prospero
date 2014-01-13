<div id='navigation_top'>

	<li data-link='contact'>Contact</li>
	<li data-link='map'>Map</li>
	<li class='<?php if($this->id=='residential') echo 'current'; ?>'><a href='<?php echo site_url('browse/residential');?>'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Residential&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<ul>
			<li><a href='<?php echo site_url("browse/residential/location_category/downtown_west_end");?>'>Downtown / West End</a></li>
			<li><a href='<?php echo site_url("browse/residential/location_category/north_shore");?>'>North Shore</a></li>
			<li><a href='<?php echo site_url("browse/residential/location_category/kitsilano_kerrisdale");?>'>Kitsilano / Kerrisdale</a></li>
			<li><a href='<?php echo site_url("browse/residential/location_category/burnaby");?>'>Burnaby / East Vancouver</a></li>
			<li><a href='<?php echo site_url("browse/residential/location_category/other_vancouver");?>'>Other Vancouver</a></li>
			<li><a href='<?php echo site_url("browse/residential/location_category/surrey_new_westminster");?>'>New Westminster</a></li>
			<li><a href='<?php echo site_url("browse/residential/location_category/tri_cities");?>'>Tri-Cities: Coquitlam / Port Moody / Maple Ridge</a></li>
			<li><a href='<?php echo site_url("browse/residential/location_category/fraser_valley");?>'>Surrey / Fraser Valley / Chilliwack</a></li>
			<li><a href='<?php echo site_url("browse/residential/location_category/vancouver_island");?>'>Vancouver Island</a></li>
			<li><a href='<?php echo site_url("browse/residential/location_category/other");?>'>Other</a></li>
		</ul>

	</a></li>
	
	<li class='<?php if($this->id=='retail') echo 'current';?>'><a href='<?php echo site_url('browse/retail');?>'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<ul>
			<li><a href='<?php echo site_url("browse/retail/location_category/vancouver");?>'>Vancouver</a></li>
			<li><a href='<?php echo site_url("browse/retail/location_category/burnaby");?>'>Burnaby / Coquitlam / Port Moody</a></li>
			<li><a href='<?php echo site_url("browse/retail/location_category/richmond_delta");?>'>Richmond / Delta</a></li>
			<li><a href='<?php echo site_url("browse/retail/location_category/squamish");?>'>Squamish / North Shore</a></li>
			<li><a href='<?php echo site_url("browse/retail/location_category/fraser_valley");?>'>Fraser Valley: Abbotsford / Mission</a></li>	
			<li><a href='<?php echo site_url("browse/retail/location_category/okanagan_valley");?>'>Okanagan Valley: Kamloops / Kelowna</a></li>
			<li><a href='<?php echo site_url("browse/retail/location_category/vancouver_island");?>'>Vancouver Island: Nanimo / Parksville</a></li>
			<li><a href='<?php echo site_url("browse/retail/location_category/other");?>'>Other</a></li>
		</ul>
	</a></li>
	
	<!-- Office industrial link. We need to have drop down menus here-->
	<li class='<?php if($this->id=='office_industrial') echo 'current';?>'><a href='<?php echo site_url('browse/office_industrial');?>'>Office / Industrial

		<ul>
			<li><a href='<?php echo site_url("browse/office_industrial/location_category/vancouver");?>'>Vancouver</a></li>
			<li><a href='<?php echo site_url("browse/office_industrial/location_category/richmond");?>'>Richmond</a></li>
			<li><a href='<?php echo site_url("browse/office_industrial/location_category/burnaby");?>'>Burnaby</a></li>
			<li><a href='<?php echo site_url("browse/office_industrial/location_category/delta");?>'>Delta</a></li>
			<li><a href='<?php echo site_url("browse/office_industrial/location_category/other");?>'>Other</a></li>
		</ul>

	</a></li>
	
	<!-- Initialize the listings browse page -->
	<li class='<?php if($this->id=='browse_listings') echo 'current';?>'><a href='<?php echo site_url('browse_listings');?>'>Listings</a></li>

	<!-- Initialize nested menu for the vacancies section -->
	<li <?php if ($this->id == "vacancies") echo "class='current'";?>><a href='<?php echo site_url('vacancies');?>'>Vacancies
		<ul>
			<li><a href='<?php echo site_url("vacancies/residential");?>'>Residential</a></li>
			<li><a href='<?php echo site_url("vacancies/retail_office_industrial");?>'>Retail / Office / Industrial</a></li>
		</ul>
	</a></li>

	<?php if($this->id == "homepage"):?>
		<li class='about'>About</li>
	<?php endif;?>

	<li class='team'><a href='<?php echo site_url("team");?>'>Team</a></li>

	<?php if(strtolower($this->id) != "homepage"): ?>

		<li><a href='<?=site_url()?>'>Home</a></li>
	
	<?php endif;?>

</div>


<?php
	// load in the bumboxes necessary for this page
	$this->load->view('navigation/bumpboxes/contact');
	$this->load->view('navigation/bumpboxes/map');
	$this->load->view('navigation/bumpboxes/about');
?>
