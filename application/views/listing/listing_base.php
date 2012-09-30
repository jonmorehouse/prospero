<?php
// THIS CONTROLS THE INDIVIDUAL LISTING FOR EACH PROPERTY!

// PAGE META SECTION

/*
	echo $this->header;
	
	$this->load->view('site_wide/background');
	$this->load->view('site_wide/border');
	$this->load->view('navigation/navigation_top');
	$this->load->view('site_wide/logo');
	$this->load->view('navigation/navigation_' . $this->id);//Id is the type_category
*/	
// LISTING SECTION
?>

<div id='page_container'>
	<div id='page_content'>

		<div id='slideshow'>
			<?php // ECHO OUT A JAVASCRIPT ARRAY FOR THE IMAGES HERE! ?>

			<script type='text/javascript'>

				var slideshow_images = {};
				<?php
					for ($i = 0; $i < count($this->slideshow_images); $i++)
						echo "\n\t\t\t\tslideshow_images[{$i}] = '{$this->slideshow_images[$i]}';\n"
				?>

			</script>

			<div class='content'>
				<?php //this is the container where all of the images go - inside of div tags ?>
				
				<div>
					<?php echo $this->listing_media->image_tag($this->slideshow_images[0]);?>
				
				</div>

			</div>

			<div class='thumbnails'>
				
				<?php
					foreach ($this->slideshow_thumbnail_images as $image)
						echo "\n\t\t\t\t<div>\n\t\t\t\t{$this->listing_media->image_tag($image)}\n\t\t\t\t</div>\n";
				?>

			</div>
		</div>
		
		<div id='content'> 
			<?php // this is for all of the content related to the site
			// this class is going to 
			?>
			
		</div>

		<div id='drawers'>
			<?php //WILL LOAD A CLASS TO GENERATE ALL OF THE RELEVANT DRAWERS ?>
			
		</div>
		
		<div id='drawer_sliders'>
			
		</div>


	</div><!--END OF PAGE_CONTENT -->
</div><!-- end of page_container -->