<?php
/*LOADING RESOURCES/HEADER FOR NOW BUT IN THE FUTURE THIS WILL BE FOR THE LIBRARY HEADER*/

	$this->load->view('site_wide/header', $page_title, $css, $javascript);
	$this->load->view('site_wide/background');
	$this->load->view('site_wide/border');
	$this->load->view('site_wide/logo', $id);

	// TOP LEVEL NAVIGATION FOR THE CONTENT MANAGEMENT SYSTEM
	$this->load->view('navigation/navigation_management');		

?>

<div id='page_container'>
	<div id='page_content'>
 		
		<h1>
			<?php
				echo $this->message;
			?>
		</h1>
		<h2><a href='<?php echo site_url('management/');?>'>Return</a><h2>
	</div> <!--THIS IS THE END OF THE PAGE_CONTENT-->
</div>
