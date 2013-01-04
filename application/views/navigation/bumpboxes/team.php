<div class='bumpbox team'>

	<div class='thumbnails'>
		<ul>
			<?php
				foreach ($this->team_bumpbox as $index=>$member) {
					$class = ($index == 0) ? "selected" : "";
					echo "<li data-id='${index}' class='${class}'><img src='${member['url']}' alt='${member['alt']}' /><h1>${member['name']}</h1><h2>${member['title']}</h1></li>\n";
				}
			?>
		</ul>
	</div>

	<div class='content'> 

		<?php 
			foreach ($this->team_bumpbox as $index=>$member)
				echo "<div data-id='${index}'>${member['content']}</div>\n";
		?>
	</div>
</div>