<div class='message'>
<?php
	$category = $this->format->word_format($this->type);

	echo "\n<h1>{$this->general->get_category($this->property_id, "name")}</h1>";
	echo "\n<h2> " . (($this->status) ? (' Successful '):('Unsuccessful')) . " {$category} Upload</h1>";
	echo "\n<p>This {$category} was successfully uploaded for this property.</p>";
	echo "\n<p>By default all media is set to live upon upload. If you wish to deactivate this {$category} use the 'Media Status' tool</p>";
?>
	
</div>
