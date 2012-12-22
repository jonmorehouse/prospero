<div class='bumpbox about'>

	<div class='content'>
	<?php
		foreach ($this->about_bumpbox as $index=>$about) 
			echo "<div data-id='${index}'><h1>${about['title']}</h1>${about['content']}</div>\n";
	?>
	</div>

	<div class='thumbnails'>
		<ul>
		<?php
			foreach ($this->about_bumpbox as $index=>$about)
				echo "<li data-id='${index}'>${about['title']}</li>\n";
		?>
		</ul>
	</div>
</div>
