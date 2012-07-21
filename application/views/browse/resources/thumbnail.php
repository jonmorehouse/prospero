<?php

echo 
	"<div class='thumbnail'>
		<a href='{$this->property_get->listing_url($property_id)}'>
			<h1>{$this->property_get->name($property_id)}</h1>
			
			<div class='image'>
				{$this->property_get->thumbnail_image($property_id)}
			</div>
			
			<div class='blurb'>
				{$this->property_get->thumbnail_blurb($property_id)}
			</div>
		</a>
	</div>";
?>