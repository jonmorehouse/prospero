<div id='header'>
	<h1><?php echo $this->thumbnail['name'];?></h1>
<!-- responsible for having a thumbnail image and header content -->
</div>

<div id='content'>
	<div id='slideshow'>

		<div class='content'>

			<div data-id='<?php echo $this->slideshow_images[0]['data-id'];?>'>
				<img src='<?php echo $this->slideshow_images[0]['url'];?>' alt='<?php echo $this->slideshow_images[0]['alt']; ?>' />
			</div>
			<!-- dynamically add more divs into this at runtime with coffee -->
		</div>

		<div class='thumbnails <?php echo (count($this->thumbnail_images) > 5) ? ("single") : ("double");?>'>

			<div data-id='<?php echo $this->thumbnail_images[0]['data-id'];?>'>
				<img src='<?php echo $this->thumbnail_images[0]['url'];?>' alt='<?php echo $this->thumbnail_images[0]['alt']; ?>' />
			</div>				
			<!-- will dynamically add more elements into this later -->
		</div>
	</div>

	<div id='description'>
		<!-- this is the property content! -->
		<h1><?php echo $this->content['name'];?></h1>

		<p><?php echo $this->content['content'];?></p>

	</div>

	<div id='elements'>


	</div>




</div>
