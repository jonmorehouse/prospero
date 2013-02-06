<?php
	foreach ($this->thumbnails as $thumbnail) {

		echo "<div class='thumbnail'>
				<a href='{$thumbnail['url']}'>
					<h1>${thumbnail['name']}</h1>

					<div>
						<img src='{$thumbnail['image']['url']}' alt='{$thumbnail['image']['alt']}' />
					</div>
					
					<div>
						${thumbnail['blurb']}
					</div>
				</a>
			</div>";
	}

?>