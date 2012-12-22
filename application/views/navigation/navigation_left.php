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
	<li class='services'>Services</li>
	<li class='careers'>Careers</li>
</div>

<?php

	// keep this for now -- should by no sql in the future though
	$this->load->view('navigation/bumpboxes/about');//not finished
	$this->load->view('navigation/bumpboxes/team');//finished
	$this->load->view('navigation/bumpboxes/services');//services bumpbox
	$this->load->view('navigation/bumpboxes/careers');
?>