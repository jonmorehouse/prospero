<div class='bumpbox listing_map'>

	<div class='content'>

		<div data-link='walkscore'></div>

		<div data-link='directions'></div>

		<div data-link='nearby_properties'></div>

	</div>

	<div class='thumbnails'>
		<ul>
			<li data-link='walkscore'>WalkScore</li>
			<li data-link='directions'>Directions</li>
			<li data-link='nearby_properties'>Nearby Properties</li>
		</ul>
	</div>

</div>

<script type='text/javascript'>
	
	pageData.listing_map = {

		"walkscore": <?php echo json_encode($walkscore);?>,
		"directions": <?php echo json_encode($directions);?>,
		"nearby_properties": <?php echo json_encode($nearby_properties);?>
	};
	
</script>