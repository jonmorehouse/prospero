<div class='bumpbox listing_inquire' data-link='listing_inquire'>
	<div>
		<h1><?php echo $data['name'];?> Inquire</h1>

		<form destination='<?php echo $data['link'];?>' method='post'>

			<input type='text' name='email' value='Email Address'>

			<textarea name='body'><?php echo $data['body'];?></textarea>

			<button type='submit'>Submit Inquire</button>	

		</form>
	</div>
</div>
<script type='text/javascript'>
	pageData.inquireRecipients = <?php echo json_encode($data['recipients']);?>;
</script>