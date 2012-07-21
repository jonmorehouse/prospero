<div class='bumpbox team'>

<div class='trigger'>
	<?php
	$members = array(0=>'robert_lee', 1=>'derek_lee', 2=>'harvey_chow', 3=>'jeff_nightingale', 4=>'rick_hallady', 5=>'beng_gunn');
	foreach($members as $value)
		echo "\n\t<div class='" . $value . "'>"
			. "\n\t\t<img alt='" . $value . " bio' src='" . base_url('resources/images/site_wide/team/' . $value . '.png') . "' />"
			. "\n\t</div>"; //end of images div for each team member
	echo "\n\t</div>"; //end of trigger div
	echo "\n\t<div class='content'>";
	foreach($members as $values)
		$this->load->view('navigation/bumpboxes/team_slides/' . $values);
	echo "\n\t</div>";
	
	$this->load->view('navigation/bumpboxes/buttons');
	?>
</div> <!--END OF BUMPBOX TEAM DIV!!!-->
