<div id='logo'>
	<a href='<?php
		if(strtolower($this->id)=='homepage')
			echo '#';
		else
			echo site_url();
	?>'>
	<img alt='Prospero logo' src='<?php echo base_url('resources/images/site_wide/logo.png');?>' />
	</a>
</div>