<div id='navigation_top'>
	<?php
		foreach ($this->navigation_top as $link)
			echo "<li data-bumpbox='' data-link='' class='{$link['class']}'>{$link['name']}</li>\n";
	?>
</div>

<div id='navigation_left'>
	<?php
		foreach ($this->navigation_left as $link)
			echo "<li data-bumpbox='' data-link='' class='{$link['class']}'>{$link['name']}</li>\n";
	?>
</div>