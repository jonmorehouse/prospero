<div id='navigation_top'>
	<?php
		foreach ($this->navigation_top as $link)
			echo "<li data-bumpbox='{$link['data_bumpbox']}' data-link='{$link['data_link']} class='{$link['class']} {$link['data_bumpbox']}'><a href='{$link['link']}'>{$link['name']}</a></li>\n";
	?>
</div>

<div id='navigation_left'>
	<?php
		foreach ($this->navigation_left as $link)
			echo "<li data-bumpbox='{$link['data_bumpbox']}' data-link='{$link['data_link']} class='{$link['class']} {$link['data_bumpbox']}'><a href='{$link['link']}'>{$link['name']}</a></li>\n";
	?>
</div>