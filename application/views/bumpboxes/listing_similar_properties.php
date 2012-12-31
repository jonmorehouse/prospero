<div class='bumpbox similar_properties'>

<?php foreach ($thumbnails as $thumbnail):?>
	<div>
		<div>
			<a href='<?php echo $thumbnail['link'];?>'>
				<img src='<?php echo $thumbnail['image']['url'];?>' alt='<?php echo $thumbnail['image']['alt'];?>'/>
			</a>
		</div>

		<div>
			<h1><?php echo $thumbnail['name'];?></h1>

			<p><?php echo $thumbnail['blurb'];?></p>
		</div>
	</div>
<?php endforeach;?>

</div>