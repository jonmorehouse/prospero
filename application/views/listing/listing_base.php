<?php
// THIS CONTROLS THE INDIVIDUAL LISTING FOR EACH PROPERTY!

// PAGE META SECTION

	echo $this->header;
	// $this->load->view('site_wide/background');
	// $this->load->view('site_wide/border');
	// $this->load->view('navigation/navigation_top');
	// $this->load->view('site_wide/logo');
	// $this->load->view('navigation/navigation_' . $this->general->get_category($this->property_id, "type_category"));

// LISTING SECTION
?>

<div id='page_container'>
	<div id='page_content'>

		<div id='slideshow'>
			<?php // ECHO OUT A JAVASCRIPT ARRAY FOR THE IMAGES HERE! ?>

			<script type='text/javascript'>

				var slideshow_images = {};
				<?php
					foreach ($this->slideshow_images as $key => $value) {

						if ($key > 0) {
							echo "\n\t\t\t\tslideshow_images[{$key}] = {};";
							echo "\n\t\t\t\tslideshow_images[{$key}]['alt'] = '{$value['alt']}';";
							echo "\n\t\t\t\tslideshow_images[{$key}]['url'] = '{$value['url']}';";
						}
					}
				?>


			</script>

			<div class='content'>
				<?php //this is the container where all of the images go - inside of div tags ?>
				
				<div>
					<?php 
						if (isset($this->slideshow_images[0]))
							echo $this->listing_media->image_tag($this->slideshow_images[0]);
					?>
				</div>

			</div>

			<div class='thumbnails'>
				<?php
					foreach ($this->slideshow_thumbnail_images as $key => $value) {

						$html = "\n\t\t\t\t<div data-image_id='{$key}'>\n\t\t\t\t\t<img src='{$value}' />\n\t\t\t\t</div>";
						echo $html;
					}
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

<?php
	$this->load->view('site_wide/javascript_module_loader');
	$this->load->view('site_wide/footer');
?>


