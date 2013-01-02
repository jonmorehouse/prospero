<div class='bumpbox listing_pdf' data-link='listing_pdf'>

	<div class='header'>
		<h1><?php echo $data['name'];?> Brochure</h1>
	</div>

	<?php if ($data['status']): ?>
	<div>
		<a href='<?php echo $data['link']; ?>' target='new'>
			<img src='<?php echo $data['thumbnail']['image']['url'];?>' alt='<?php echo $data['thumbnail']['image']['alt'];?>' />
			<span>Download PDF</span>
		</a>
	</div>

	<?php else: ?>
		<?php echo $data['message'];?>
	<?php endif; ?>

</div>

<script type='text/javascript'>
	pageData.pdf = <?php echo json_encode($data);?>;
</script>