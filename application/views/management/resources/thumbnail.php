<div class='thumbnail'>
	<?php
		echo "<span>{$this->property_get->thumbnail_image($property_id, 'return')}</span>
		<span>{$this->property_get->name($property_id, 'return')}</span>";
	?>
	
	<span><a href='<?php echo $url;?>'>Edit Property</a></span>
</div>