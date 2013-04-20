<?php
$this->load->view('management/resources/general_dashboard');
?>

<h1>Create New Listing</h1>
<div id='create_listing'>

<?php

$this->property_id = 'new_listing';

// FOLLOWING IS TO LOAD THE GENERAL FORMS
$this->load->view('management/forms/general');

// PROPERTY-Specific Forms
$this->load->view('management/forms/rent');
$this->load->view('management/forms/buy');

// Property_Type specific forms

$this->load->view('management/forms/industrial');
$this->load->view('management/forms/retail');
$this->load->view('management/forms/residential');
$this->load->view('management/forms/office');

// Management Section
$this->load->view('management/forms/administration');

?>

</div>