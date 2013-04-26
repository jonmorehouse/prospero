<div>
	<a href='<?php echo $link;?>'>
		<ul>
			<li><img alt='<?php echo $thumbnail['image']['alt'];?>' src='<?php echo $thumbnail['image']['url'];?>'></li>
			<li><?php echo $title; ?></li>
			<li><?php echo $date_available; ?></li>
			<?php if ($type_category === "residential"):?>
				<li>Layouts
					<ul>
					<?php foreach($layouts as $layout):?>
						<li><label><?php echo $layout['layout'];?>:</label><label><?php echo $layout['quantity'];?></label></li>
					<?php endforeach;?>
					</ul>
				</li>
			<?php else:?>
				<li><?php echo $description; ?></li>
			<?php endif;?>
			<li><?php echo "${price['header']} : ${price['price']}"; ?></li>
		</ul>	
	</a>
</div>