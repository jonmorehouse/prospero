<div id='add_user'>
	<h1>Add User</h1>

	<form action='<?php echo site_url("admin/user_management/add");?>' method='post'>
		
		<div>
			<span>Username:</span>
			<span><input type='text' name='username'></span>
		</div>

		<div>
			<span>Last Name:</span>
			<span><input type='text' name='lastname'></span>
		</div>

		<div>
			<span>Password:</span>
			<span><input type='text' name='password'></span>
		</div>
			
		<div>
			<span>Admin:</span>
			<span>yes</span><span><input type='radio' name='admin_rights' value='yes'></span>
			<span>no</span><span><input type='radio' name='admin_rights' value='no' checked='yes'></span>
		</div>
		
		<button type='submit'>Submit</button>
	</form>
</div>

<div id='remove_user'>

	<h1>Remove User</h1>
	<?php foreach($this->users as $user):?>

		<div>
			<span><?=$user["username"]?></span>

			<span>
				<a href='<?php echo site_url("admin/user_management/remove/" . $user["username"]);?>'>Remove</a>
			</span>
		</div>
			
	<?php endforeach;?>
</div>

<?php if ($this->message):?>
	
	<div id='message'>
		<?=$this->message?>	
	</div>

<?php endif;?>
