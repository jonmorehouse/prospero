<div id='navigation_left'>
	<?php
		foreach ($this->navigation_left as $link)
			echo "<li data-bumpbox='{$link['data_bumpbox']}' data-link='{$link['data_link']}' class='{$link['class']}'><a href='{$link['link']}'>{$link['name']}</a></li>\n\t";

		if ($this->id == "listing") echo "<li><a target='_blank' href='https://maps.google.com/maps?q={$this->data["geolocation"]["latitude"]},{$this->data["geolocation"]["longitude"]}&ll={$this->data["geolocation"]["latitude"]},{$this->data["geolocation"]["longitude"]}&z=17'>Directions</a></li>";

	?>
</div>
