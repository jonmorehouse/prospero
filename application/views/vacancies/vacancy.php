<div>
	<a href='<?php echo $link;?>'>
		<ul>
			<li><img alt='<?php echo $thumbnail['image']['alt'];?>' src='<?php echo $thumbnail['image']['url'];?>'></li>
			<li><?php echo $title; ?></li>
			<li><?php echo $date_available; ?></li>
			<li><?php echo $description; ?></li>
			<li><?php echo "${price['header']} : ${price['price']}"; ?></li>
		</ul>	
	</a>
</div>