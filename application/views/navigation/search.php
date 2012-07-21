<div id='search'>
	<form action='<?php echo site_url('property/search/');?>' method='post'>
		<input type='text' value='<?php echo (isset($this->search_value)? $this->search_value : 
		'Search via name, location, price etc...'); ?>' name='search' />
		
		<input type='image' name='submit' src='<?php echo base_url('resources/images/site_wide/search.png');?>' />
	</form>
</div>