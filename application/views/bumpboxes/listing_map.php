<div class='bumpbox listing_map'>

	<div class='content'>

		<div data-id='walkscore'>
			<div>
				<!-- left container -->
				<div>
					<img src='<?php echo $walkscore['thumbnail']['image']['url'];?>' alt='<?php echo $walkscore['thumbnail']['image']['alt']; ?>' />
					<h1><?php echo $walkscore['thumbnail']['name']; ?></h1>
				</div>

				<!-- set up walkscore api requirements and display walkscore -->
				<div>
					<!-- walkscore logo goes here -->
					<a href='http://www.walkscore.com/about.shtml' target='new'>
						<img src='<?php echo $walkscore['walkscore_logo']['url'];?>' alt='<?php echo $walkscore['walkscore_logo']['alt'];?>' />
					</a>

					<a href='http://www.walkscore.com/about.shtml' target='new'><span><?php echo $walkscore['walkscore']; ?></span></a>
				</div>

				<div>
					<span>Find your favorite places within walking distance!</span>
					<input type='text'>
					<button type='submit' value='Find!'>Find!</button>
					<div></div><!-- SEARCH RESULTS GO HERE! -->
				</div>
				<!-- left container end -->
			</div>

			<!-- map content / this is the second floated div -->
			<div></div>
		</div>

		<div data-id='directions'>
			<div>
				<div>
					<h1>Get Directions to this property.</h1>
					<input type='text' value='<?php echo $directions['address'];?>'>
					<input type='text' value='destination'>
					<button type='submit' value='Find!'>Find!</button>
					<div></div><!-- SEARCH RESULTS GO HERE! -->
				</div>

			</div>

			<div>

				<!-- map goes here -->

			</div>
		</div>

		<div data-id='nearby_properties'>
			other element goes her
		</div>

	</div>

	<div class='thumbnails'>
		<ul>
			<li data-id='walkscore'>WalkScore</li>
			<li data-id='directions'>Directions</li>
			<li data-id='nearby_properties'>Nearby Properties</li>
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