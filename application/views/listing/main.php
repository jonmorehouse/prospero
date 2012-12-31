<div id='header'>
	<span><img src='<?php echo $this->thumbnail['image']['url'] ?>' /></span>
	<span><h1>	
<!-- responsible for having a thumbnail image and header content -->
</div>

<div id='content'>
	<div id='slideshow_images'>

		<div class='content'>

			<div data-id='<?php echo $this->slideshow_images[0]['data-id'];?>'>
				<img src='<?php echo $this->slideshow_images[0]['url'];?>' alt='<?php echo $this->slideshow_images[0]['alt']; ?>' />
			</div>

		</div>

		<div class='thumbnails <?php echo (count($this->thumbnail_images) > 5) ? ("single") : ("double");?>'>

			<div data-id='<?php echo $this->thumbnail_images[0]['data-id'];?>'>
				<img src='<?php echo $this->thumbnail_images[0]['url'];?>' alt='<?php echo $this->thumbnail_images[0]['alt']; ?>' />
			</div>				

		</div>

	</div>

	<div id='description'>
		<!-- floated left against the slideshow images! -->
		<!-- contains the descriptions etc -->
	</div>
</div>
