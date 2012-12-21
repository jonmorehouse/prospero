<div class='bumpbox team'>

	<div class='thumbnails'>
		<?php
			foreach ($this->team_bumpbox as $index=>$member) 
				echo "<div data-id='${index}'><img src='${member['url']}' alt='${member['alt']}' /><h1>${member['name']}</h1><h2>${member['title']}</h1></div>\n";
		?>
	</div>

	<div class='content'> 

		<?php 
			foreach ($this->team_bumpbox as $index=>$member)
				echo "<div data-id='${index}'>${member['content']}</div>\n";
		?>
	</div>
</div>