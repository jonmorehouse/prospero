<?php
$this->load->view('management/resources/general_dashboard');
?>

<h1>Update New Listing</h1>
<br />

<div id='update_listing'>
<?php

foreach($this->views as $view)
	$this->load->view('management/forms/' . $view);

	
?>

</div>