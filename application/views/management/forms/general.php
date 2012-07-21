<!-- IMPORTANT NOTE...WE WILL HAVE TO GO BACK AND CHANGE THE TERNARIES TO ACCESS A DATABASE IF this->property_id ISSET -->
<hr /><br />
<h2>Property Browsing Information</h2><br />

<form class='browse'>
	<div>
		<h3>Property Purchase Category:</h3><br />
		
		<input type="radio" name="type" value="rent" <?php echo $this->property_get->radio($this->property_id, 'rent', 'type');?> /> Rent<br />
	
		<input type="radio" name="type" value="buy" <?php echo $this->property_get->radio($this->property_id, 'buy', 'type');?> /> Buy <br />	
	</div>

	<div>
		<h3>Property Location Category:</h3><br />
		
		<input type='radio' name="location_category" value="none" <?php echo $this->property_get->radio($this->property_id, 'none', 'location_category');?> />None<br />
	
		<input type="radio" name="location_category" value="west" <?php echo $this->property_get->radio($this->property_id, 'west', 'location_category');?> /> Rent<br />
	
		<input type="radio" name="location_category" value="north" <?php echo $this->property_get->radio($this->property_id, 'north', 'location_category');?> /> Buy <br />	
	</div>

	<div>
		<h3>Property Type Category:</h3><br />

		<input type='radio' name="type_category" value="none" <?php echo $this->property_get->radio($this->property_id, 'none', 'type_category');?> />None<br />
	
		<input type="radio" name="type_category" value="retail" <?php echo $this->property_get->radio($this->property_id, 'retail', 'type_category');?> />Retail<br />
	
		<input type="radio" name="type_category" value="industrial" <?php echo $this->property_get->radio($this->property_id, 'industrial', 'type_category');?> />Industrial<br />
		
		<input type="radio" name="type_category" value="residential" <?php echo $this->property_get->radio($this->property_id, 'residential', 'type_category');?> />Residential<br />
		
		<input type="radio" name="type_category" value="office" <?php echo $this->property_get->radio($this->property_id, 'office', 'type_category');?> />Office<br />

	</div>
	<div>
		<h3>New Property:</h3><br />
		
		<input type='radio' name='new' value='0' <?php echo $this->property_get->radio($this->property_id, 0, 'new');?> />No<br />
		<input type='radio' name='new' value='1' <?php echo $this->property_get->radio($this->property_id, 1, 'new');?> />Yes<br />
	</div>
</form>

<br />
<br /><hr />

	<input type='hidden' name='property_id' value="<?php echo $this->property_id;?>" />

<br />

<h2>Property Information</h2><br />

<form class='general'>	

		<div>
			<h3>Name:</h3><br />
				<input type="text" name="name" value='<?php echo $this->property_get->name($this->property_id);?>' /><br />

			<h3>Meta Description:</h3><br /> 
				<input type='text' name='meta_description' value='<?php=$this->property_get->meta_description($this->property_id)=;?>' /><br />
		
			<h3>Meta Keywords: </h3><br />
				<input type='text' name='meta_keywords' value='<?php $this->property_get->meta_keywords($this->property_id, 'echo');?>' /><br />
				
			<h3>Manager Email:</h3><br /> 
				<input type='text' name='manager_email' value='<?php $this->property_get->manager_email($this->property_id, 'echo');?>' /><br />
		</div>
		
		<div>
			<h3>Manager Phone:</h3><br />
				<input type='text' name='manager_phone' value='<?php $this->property_get->manager_phone($this->property_id, 'echo');?>' /><br />
	
			<h3>Manager First Name:</h3><br /> 
				<input type='text' name='manager_first_name' value='<?php $this->property_get->manager_first_name($this->property_id, 'echo');?>' /><br />
	
			<h3>Manager Last Name:</h3><br /> 
				<input type='text' name='manager_last_name' value='<?php $this->property_get->manager_last_name($this->property_id, 'echo');?>' /><br />

			<h3>Content:</h3><br />
				<textarea rows='5' name='property_content'><?php $this->property_get->property_content($this->property_id, 'echo'); ?></textarea><br />
		</div>
				
		<div>
			<h3>Address:</h3><br />
				<input type='text' name='address' value='<?php $this->property_get->address($this->property_id, 'echo');?>' /><br />
	
			<h3>Location:</h3><br />
				<input type='text' name='location' value='<?php $this->property_get->location($this->property_id, 'echo');?>' /><br />
	
			<h3>Postal Code:</h3><br /> 
				<input type='text' name='postal_code' value='<?php $this->property_get->postal_code($this->property_id, 'echo');?>' /><br />
	
			<h3>Thumbnail Blurb:</h3><br />
				<textarea rows='5' name='thumbnail_blurb'><?php echo $this->property_get->thumbnail_blurb($this->property_id, 'echo');?></textarea><br />
		</div>
</form>


<hr />