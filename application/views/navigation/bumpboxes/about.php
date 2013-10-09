<div class='bumpbox about'>

	<div class='exit'>

		<img src='<?php echo base_url('resources/images/site_wide/exit.png');?>' alt='exit icon' />	

	</div>

	<div class='content'>
	<?php
		foreach ($this->about_bumpbox as $index=>$about) 
			echo "\n\t\t<div data-id='${index}'><h1>${about['title']}</h1>${about['content']}</div>\n";
	?>
	</div>

	<div class='thumbnails'>
		<ul>
		<?php
			foreach ($this->about_bumpbox as $index=>$about)
				echo "\t\t\n<li data-id='${index}'>${about['title']}</li>\n";
		?>
		</ul>
	</div>
</div>
