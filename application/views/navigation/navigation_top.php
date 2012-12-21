<div id='navigation_top'>
	<li class='contact'>Contact</li>
	<li class='map'>Map</li>
	<li class='<?php if($this->id=='residential') echo 'current'; ?>'><a href='<?php echo site_url('property/residential');?>'>Residential</a></li>
	<li class='<?php if($this->id=='retail') echo'current';?>'><a href='<?php echo site_url('property/retail');?>'>Retail</a></li>
	<li class='<?php if($this->id=='office_industrial') echo'current';?>'><a href='<?php echo site_url('property/office_industrial');?>'>Office/Industrial</a></li>
</div>

<?php
	$this->load->view('navigation/bumpboxes/contact');
	$this->load->view('navigation/bumpboxes/map');
?>