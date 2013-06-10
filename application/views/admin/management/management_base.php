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
		
		if($this->listing_dashboard) $this->load->view('admin/management/resources/listing_dashboard');
		
		if($this->general_dashboard) $this->load->view('admin/management/resources/general_dashboard');
		
		if(isset($this->page)) $this->load->view('admin/management/forms/' . $this->page);
		
		echo $this->content;
		
		?>
		

	</div> <!--THIS IS THE END OF THE PAGE_CONTENT-->
</div>
<?php
	
$this->load->view("site_wide/javascript_module_loader");
$this->load->view('site_wide/footer');
?>
