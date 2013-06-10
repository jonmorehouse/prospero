<?php
$this->load->view('admin/management/resources/general_dashboard');
?>

<h1>Create New Listing</h1>
<div id='create_listing'>

<?php

$this->property_id = 'new_listing';

// FOLLOWING IS TO LOAD THE GENERAL FORMS
$this->load->view('admin/management/forms/general');

// PROPERTY-Specific Forms
$this->load->view('admin/management/forms/rent');
$this->load->view('admin/management/forms/buy');

// Property_Type specific forms

$this->load->view('admin/management/forms/industrial');
$this->load->view('admin/management/forms/retail');
$this->load->view('admin/management/forms/residential');
$this->load->view('admin/management/forms/office');

// Management Section
$this->load->view('admin/management/forms/administration');

?>

</div>