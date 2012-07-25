<?php
	/*LOADING RESOURCES/HEADER FOR NOW BUT IN THE FUTURE THIS WILL BE FOR THE LIBRARY HEADER*/
	echo $this->header;
	$this->load->view('site_wide/background');
	$this->load->view('site_wide/border');
	$this->load->view('site_wide/logo');

	// TOP LEVEL NAVIGATION FOR THE CONTENT MANAGEMENT SYSTEM
	$this->load->view('navigation/navigation_management');		
?>

<div id='page_container'>
	<div id='page_content'>
		
		<?php 
		
		if($this->dashboard) $this->load->view('management/resources/general_dashboard');
		
		if(isset($this->page)) $this->load->view('management/forms/' . $this->page);
		
		echo $this->content;
		
		?>
	</div> <!--THIS IS THE END OF THE PAGE_CONTENT-->
</div>
