<?php
	foreach ($this->thumbnails as $thumbnail) {

		echo "<div class='thumbnail'>
				<a href='{$thumbnail['url']}'>
					<img src='{$thumbnail['image']['url']}' alt='{$thumbnail['image']['alt']}' />
					<h1>${thumbnail['name']}</h1>
					<div>
						${thumbnail['blurb']}
					</div>
				</a>
			</div>";
	}

?>