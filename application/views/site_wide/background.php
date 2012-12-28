<div id='background'>

	<div data-id='0'>
	<?php
		if (count($this->background_images) > 0) {

			$url = $this->background_images[0]['url'];
			echo "<img src=\"{$url}\" alt=\"{$this->background_images[0]['alt']}\" />";
		}
	?>
	</div>
</div>

<script type='text/javascript'>
	
	var background_images = {};
	<?php

		foreach ($this->background_images as $index => $image)

			if ($index > 0) {
				echo "background_images[{$index}] = {};\n\t";//this is the actual indiviaul object for this image
				echo "background_images[{$index}]['alt'] = \"{$image['alt']}\";\n\t";//
				echo "background_images[{$index}]['url'] = \"{$image['url']}\";\n\t";
			}// end of if loop
		// end of foreach loop
	?>

</script>
