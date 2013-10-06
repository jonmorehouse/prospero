<div id='navigation_left'>
	<li <?php if ($this->id == "vacancies") echo "class='current'";?>>Vacancies
		<ul>
			<li><a href='<?php echo site_url("vacancies/residential");?>'>Residential</a></li>
			<li><a href='<?php echo site_url("vacancies/retail_office_industrial");?>'>Retail/Office/Industrial</a></li>
		</ul>
	</li>
</div>

<?php

	// keep this for now -- should by no sql in the future though
	$this->load->view('navigation/bumpboxes/about');//not finished
	$this->load->view('navigation/bumpboxes/team');//finished
	// $this->load->view('navigation/bumpboxes/services');//services bumpbox
	// $this->load->view('navigation/bumpboxes/careers');
?>
