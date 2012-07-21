<!-- SYSTEM WIDE LOADING! -->
<!-- THIS IS BASICALLY THE RENT/BUY PIECE FOR THE PROPERTY SECTION FOR EACH!! -->
<?php
	echo $this->header;
	$this->load->view('site_wide/background');
	$this->load->view('site_wide/border');
	$this->load->view('navigation/navigation_top');
	$this->load->view('site_wide/logo');
	$this->load->view('navigation/navigation_' . $this->id);
?>

<!-- INDIVIDUAL NAVIGATION BAR IS BELOW -->
<div id='header'>
	<h1>Prospero Real Estate</h1>
	<h2>
		<?php
			echo $this->browse->browse_header($this->id, $this->category, $this->filter);
		?>
	</h2>
</div>

<?php
	$this->load->view('navigation/search');
?>

<div id='page_container'>
	<div id='page_content'>
	
		<div id='thumbnail_container'>
			<?php
				if(!$this->thumbnail_list)
					$this->load->view('browse/resources/message');

				else if($this->thumbnail_list){
					foreach((array)$this->thumbnail_list as $thumbnail['property_id'])
						$this->load->view('browse/resources/thumbnail', $thumbnail);
				}
			?>
		</div>
	
	</div> <!--THIS IS THE END OF THE PAGE_CONTENT-->
</div>
