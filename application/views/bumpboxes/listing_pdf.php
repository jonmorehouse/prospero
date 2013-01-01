<div class='bumpbox listing_pdf' data-link='listing_pdf'>

	<div class='header'>
		<h1><?php echo $data['name'];?>
	</div>	

	<?php if ($data['status']): ?>
		<img src='<?php echo $data['thumbnail']['image']['url'];?>' alt='<?php echo $data['thumbnail']['image']['alt'];?>' />
		<a href='<?php echo $data['link']; ?>'>Download PDF</a>

	<?php else: ?>
		<?php echo $data['message'];?>
	<?php endif; ?>

</div>

<script type='text/javascript'>
	pageData.pdf = <?php echo json_encode($data);?>;
</script>