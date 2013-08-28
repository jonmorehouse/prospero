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
					<!-- initialize input form for walkscore search using google places! -->
					<h1>Find Places Nearby</h1>
					<select name='type'>
					<?php foreach ($walkscore['types'] as $key=>$type): ?>
						<option value='<?php echo $type['value'];?>'><?php echo $type['name'];?></option>
					<?php endforeach;?>
					</select>					
					<div></div><!-- SEARCH RESULTS GO HERE! -->
				</div>
				<!-- left container end -->
			</div>

			<!-- map content / this is the second floated div -->
			<div></div>
		</div>

		<div data-id='directions'>
			<div>
				<!-- initialize property_thumbnail -->
				<div>
					<img src='<?php echo $walkscore['thumbnail']['image']['url'];?>' alt='<?php echo $directions['thumbnail']['image']['alt']; ?>' />
					<h1><?php echo $directions['thumbnail']['name']; ?></h1>
				</div>
				<div>	
					<h1>Get Directions</h1>
					<input type='text' name='origin' value='<?php echo $directions['address'];?>' /><br />
					<input type='text' name='destination' value='Destination' /><br />
					<button type='submit' name='submit'>Get Directions</button>
					<div></div><!-- SEARCH RESULTS GO HERE! -->
				</div>

			</div>

			<div>
				<div class='thumbnails'>
					<ul>
						<li data-id='map' class='selected'>Map</li>
						<li data-id='directions'>Directions</li>
					</ul>
				</div>

				<div class='content'>
					<div data-id="map"></div>
					<div data-id="directions">
						<ul>
							<!-- directions go here! -->
						</ul>
					</div>
				</div>

			</div>
		</div>

		<!-- functionality built in, client didn't want it -->
		<!-- <div data-id='nearby_properties'></div> -->

	</div>

	<div class='thumbnails'>
		<ul>
			<li>WalkScore</li>
			<li><a target='_blank' href='<?php echo 'https://maps.google.com/maps?q={$this->data["geolocation"]["latitude"]},{$this->data["geolocation"]["longitude"]}&ll={$this->data["geolocation"]["latitude"]},{$this->data["geolocation"]["longitude"]}&z=17';?>'>Directions</a></li>

			<!-- this functionality built in and tested, client didn't want it though -->
			<!-- <li data-id='nearby_properties'>Nearby Properties</li> -->
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
