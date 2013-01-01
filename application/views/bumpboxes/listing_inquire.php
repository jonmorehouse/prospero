<div class='bumpbox listing_inquire' data-link='listing_inquire'>
	<div>
		<h1><?php echo $data['name'];?> Inquire</h1>

		<form destination='<?php echo $data['link'];?>' method='post'>

			<input type='text' name='email' value='Email Address'>

			<textarea rows='5' cols='40' name='message'><?php echo $data['body'];?></textarea>

			<button type='submit'>Submit Inquire</button>	
		</form>

		<div class='message'>Email Message Here</div>
	</div>
</div>

<script type='text/javascript'>
	pageData.listingInquireData = <?php echo json_encode($data['server_data']);?>;
</script>