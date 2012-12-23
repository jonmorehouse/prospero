<div class='bumpbox map'>
	<div class='content'>
	<?php
		foreach ($this->map_bumpbox as $index=>$map)
			echo "\n\t\t<div data-id='${index}' data-filter='${map['filter']}' data-url='${map['url']}'><h1>${map['title']}</h1><div></div></div>\n";
	?>
	</div>

	<div class='thumbnails'>
		<ul>
		<?php
			foreach ($this->map_bumpbox as $index=>$map) 
				echo "\n\t\t<li data-id='${index}'>${map['title']}</li>\n";
		?>
		</ul>
	</div>
</div>

