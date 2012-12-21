<div class='bumpbox about'>
<?php
	$count = 6;
	$list = array('company', 'property_management', 'sales_and_leasing', 'investment'); //to add a new item, just edit this list!
	echo "\n\t<div class='trigger'>\n";
	foreach($list as $value)
		echo "\n\t\t<li class='" . $value . "'>" . ucwords(str_replace('_', ' ', $value, $count)) . "</li>";
	echo "\n\t</div>";
	echo "\n\n\t<div class='content'>\n";
	foreach ($list as $value)
		$this->load->view('navigation/bumpboxes/about_slides/' . $value);
	echo "\n\t</div>\n";
	$this->load->view('navigation/bumpboxes/buttons');
?>
</div>
