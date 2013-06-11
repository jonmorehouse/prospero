<div id='content'>
	<div id='slideshow'>
		<div class='content'>

			<div data-id='<?php echo $this->slideshow_images[0]['data-id'];?>'>
				<img src='<?php echo $this->slideshow_images[0]['url'];?>' alt='<?php echo $this->slideshow_images[0]['alt']; ?>' />
			</div>
			<!-- dynamically add more divs into this at runtime with coffee -->
		</div>

		<div class='thumbnails'>

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


		<div id='surrounding'>
			<ul>
			<?php foreach($this->surrounding_links as $link): ?>
				<li>
					<a href='<?php echo $link['link'];?>'><?php echo $link['label'];?></a>
				</li>
			<?php endforeach;?>
			</ul>
		</div>

	</div>


	<div id='elements'>
		<?php 
			foreach ($this->elements as $element) {
				echo "<div><h1>{$element['header']}</h1><hr />";

				foreach ($element['elements'] as $_element)
					echo "<div><span>{$_element['title']}:</span><span>{$_element['value']}</span></div>";

				echo "</div>";
			}
		?>
	</div>

</div>

<div id='slideshow_bumpbox'>
	<div class='content'>
		<!-- FILL THIS IN WITH IMAGES TO BE POPPED OUT LATER!-->
		<img src='<?php echo $this->thumbnail_images[0]['url'];?>' alt='<?php echo $this->thumbnail_images[0]['alt']; ?>' />
	</div>

	<div class='control'>
		<ul>
			<li class='prev'>Prev</li>
			<li class='next'>Next</li>
		</ul>
	</div>
	
	<div class='exit'>
	</div>
</div>
