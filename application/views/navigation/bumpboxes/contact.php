<div class='bumpbox contact'>

	<div class='exit'>

		<img src='<?php echo base_url('resources/images/site_wide/exit.png');?>' alt='exit icon' />	

	</div>

	<div>
		<address>
			<h1>Prospero</h1>
			<span> Suite 517, 1177</span><br />
			<span>West Hastings St.</span><br />
			<span>Vancouver, British Columbia V6E 2K3</span><br />
			<span>(604) 669-7733</span><br />
		</address>
	</div>
	
	<div>	

		<h1>Contact</h1>
		
		<form destination='<?php echo site_url("general_rest/submit_email");?>' method='post'>
			
			<input type='text' value='Email Address' name="email"></input>

			<textarea rows='3' cols='40' name="message">General Contact Message.</textarea>
			
			<button type='submit'>Submit Message</button>

		</form>

		<div class='message'>Email Message Here</div>
	</div>
</div>
