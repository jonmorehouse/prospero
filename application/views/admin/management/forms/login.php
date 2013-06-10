<div id='login'>
<h1>Login for Prospero Site Management and Updating</h1>
	
	<span>	<?php	echo ($this->message ? $this->message: 'Please login below.'); ?></span>
	<br />
	<br />
	<form action='<?php echo site_url('admin/management/login_validation')?>' method='post'>
		
		<span>Username:</span>
			<input type='text' name='username' value='<?php echo ($this->username ? $this->username: 'Username');?>' />
		<br />
		
		<span>Password:</span>
			<input type='password' name='password' value='password' />
		<br />
		
		<button type='submit'>Login</button>
	</form>
	
</div>