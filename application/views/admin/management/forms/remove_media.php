<div id='remove'>
	<?php
	echo "<h1>Remove Slideshow Images/Videos for <br />{$this->property_get->name($this->property_id, 'return')}</h1>";
	?>

	<h2>Select a Slideshow Image to Delete it</h2>

	<div>
		<?php
		// GET IMAGE LIST FOR THE SLIDESHOWS
			$file_list = $this->property_get->slideshow_image_name($this->property_id);
			
			// CREATE THUMBNAIL FOR EACH PROPERTY!
			foreach($file_list as $value){
				$url = site_url('management/media_remove/slideshow_image/' . $this->property_id);
				echo "<div class='thumbnail'>
					<form action='{$url}' method='post'>
						<input type='hidden' name='file_name' value='{$value}' />
						<input type='hidden' name='property_id' value='{$this->property_id}' />
						<img src='{$value}' alt='Prospero Management System' />

						<button type='submit'>Delete Image</button>
					</form>
				</div>";
			}
		?>
	</div>
	
	<div>
		<?php
		// CREATE URL FOR DELETING VIDEO
		$url = site_url('management/media_remove/video/' . $this->property_id);
		if($this->property_get->video_status($this->property_id))
			echo "<h2>Delete Video for this Property</h2>
					<form action='{$url}' method='post'>
						<input type='hidden' name='property_id' value='{$this->property_id}'>
						<button type='submit'>Delete Video</button>
					</form>";
		?>
	</div>
</div>
