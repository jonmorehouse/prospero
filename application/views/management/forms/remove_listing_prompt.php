<div id='remove_prompt'>
	<h2><?php $this->property_get->name($this->property_id); ?></h2>
	
	<h2>Are you sure you want to delete this listing?</h2>
	
	<form action = '<?php echo site_url('management/remove_listing/' . $this->property_id);?>' method='post'>
		<button type='submit'>Delete Property</button>
	</form>
	
	<form action='<?php echo site_url('management');?>'>
		<button type='submit'>Don't Delete</button>
	</form>
</div>