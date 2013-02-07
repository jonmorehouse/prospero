<div id='navigation_left'>
	<li><a href='<?php 
		// THIS IS SO YOU CAN'T RELOAD THE HOMEPAGE FROM THE HOMEPAGE!!!--THATS ANNOYING
			if(strtolower($this->id)=='homepage')
				echo '#';
			else
				echo site_url();
		?>'>Home</a></li>
	<li class='about'>About</li>
	<li class='team'>Team</li>
	<li <?php if ($this->id == "vacancies") echo "class='current'";?>>Vacancies
		<ul>
			<li><a href='<?php echo site_url("vacancies/residential");?>'>Residential</li>
			<li><a href='<?php echo site_url("vacancies/retail_office_industrial");?>'>Retail/Office/Industrial</li>
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