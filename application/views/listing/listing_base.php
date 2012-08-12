<?php
// THIS CONTROLS THE INDIVIDUAL LISTING FOR EACH PROPERTY!

// PAGE META SECTION

	echo $this->header;
	
	$this->load->view('site_wide/background');
	$this->load->view('site_wide/border');
	$this->load->view('navigation/navigation_top');
	$this->load->view('site_wide/logo');
	$this->load->view('navigation/navigation_' . $this->id);//Id is the type_category
	
// LISTING SECTION
?>

<div id='page_container'>
	<div id='page_content'>

		<div id='slideshow'>
		<!-- will have a main page for the slideshow images in the future and one for the current slideshow image -->
		</div>
		
		<div id='content'>
		<!-- this is for all of the content related to the site   -->
		</div>

		<div id='drawers'>
			<!-- WILL LOAD A CLASS TO GENERATE ALL OF THE RELEVANT DRAWERS -->
			
		</div>
		
		<div class='drawer_sliders'>
			
			<!-- WILL LOAD A CLASS TO CREATE THE DRAWERS -->
			<!-- EACH CONTENT DIV WILL HAVE A DATA TAG TO CALL THE CORRECT SLIDER TO SLIDE OUT -->
			
		</div>
	</div><!--END OF PAGE_CONTENT -->
</div><!-- end of page_container -->