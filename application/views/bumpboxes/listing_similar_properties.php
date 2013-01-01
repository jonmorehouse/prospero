<div class='bumpbox similar_properties' data-link='similar_properties'>
	<div class='header'>
		<h1><?php echo $property['name'];?></h1>
		<h2>Similar Properties</h2>
	</div>

	<div class='content'>
	<?php foreach ($thumbnails as $thumbnail):?>
		<div>
			<a href='<?php echo $thumbnail['link'];?>'>
				<img src='<?php echo $thumbnail['image']['url'];?>' alt='<?php echo $thumbnail['image']['alt'];?>'/>
			</a>

			<h1><?php echo $thumbnail['name'];?></h1>

			<p><?php echo $thumbnail['blurb'];?></p>
		</div>
	<?php endforeach;?>
	</div>
</div>