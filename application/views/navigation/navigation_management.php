<div id='navigation_management'>
	<li><a href='<?php echo site_url('admin/management/logout');?>'>Logout</a></li>

	<?php if(property_exists($this, "is_admin") && $this->is_admin):?>
		<li><a href='<?php echo site_url('admin/management/create_listing');?>'>Create Listing</a></li>
		<li><a href='<?php echo site_url('admin/management/update_listing');?>'>Update Listing</a></li>
		<li><a href='<?php echo site_url('admin/management/upload_media'); ?>'>Upload Media</a></li>
		<li><a href='<?php echo site_url('admin/management/media_status');?>'>Show/Hide Media</a></li>
		<li><a href='<?php echo site_url('admin/management/remove_listing');?>'>Remove Listing</a></li>
	<?php endif;?>

	<li><a href='<?php echo site_url('admin/vacancies/add');?>'>Add Vacancies</a></li>
	<li><a href='<?php echo site_url('admin/vacancies/remove');?>'>Remove Vacancies</a></li>

	<?php if(property_exists($this, "is_admin") && $this->is_admin):?>
		<li><a href='<?php echo site_url('admin/user_management');?>'>Manage Users</a></li>
	<?php endif;?>
</div>
