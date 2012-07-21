<!-- SYSTEM WIDE LOADING! -->
<!-- THIS IS BASICALLY THE RENT/BUY PIECE FOR THE PROPERTY SECTION FOR EACH!! -->
<?php
	echo $this->header;
	$this->load->view('site_wide/background');
	$this->load->view('site_wide/border');
	$this->load->view('navigation/navigation_top');
	$this->load->view('site_wide/logo');
	$this->load->view('navigation/navigation_office_industrial');

?>

<!-- INDIVIDUAL NAVIGATION BAR IS BELOW -->
<div id='header'>
	<h1>Prospero Real Estate</h1>
	<h2>
		<?php
			echo "Search Results for: '{$this->search_value}'";
		?>
	</h2>
</div>

<?php
	$this->load->view('navigation/search');
?>

<div id='page_container'>
	<div id='page_content'>
	
	<?php
		if(!$this->thumbnail_list)
			$this->load->view('browse/resources/message');

		else if($this->thumbnail_list){
			echo "<div id='thumbnail_container'>";
			
			foreach((array)$this->thumbnail_list as $thumbnail['property_id'])
				$this->load->view('browse/resources/thumbnail', $thumbnail);
			echo "</div>";
		}
	?>
	
	</div> <!--THIS IS THE END OF THE PAGE_CONTENT-->
</div>


