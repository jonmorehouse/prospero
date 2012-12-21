<h1>Create a User for Prospero Content Management System</h1>

<form method='get' action='<?php echo site_url('tools/create_user');?>'>
	<br />Enter Passcode to add a user: <input type='text' name='pass_code' /><br />
	<br />Username: <input type='text' name='user_name' /><br />
	<br />Password: <input type='password' name='password' /><br />
	<br />LastName: <input type='text' name='last_name' /><br />
	<br />Rights: <input type='text' name='admin_rights' value='manager' /><br />
	
	<button type="submit">Create User</button>
</form>