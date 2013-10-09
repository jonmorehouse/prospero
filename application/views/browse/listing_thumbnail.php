<?php foreach($this->thumbnails as $thumbnail):?>
<div class='thumbnail'>
	<h1><?=$thumbnail["name"]?></h1>

	<div>
		<img src='<?=$thumbnail["image"]["url"]?>' alt='<?=$thumbnail["image"]["alt"]?>' />
	</div>

	<div>
	<span><?=$thumbnail["address"]?></span>
	<span>Priced from: $<?=$thumbnail["priced_from"]?></span>
	
	<?php if($thumbnail["pdf_status"]):?>

		<a href='<?=$thumbnail["pdf_link"]?>'>Brochure</a>
	<?php endif;?>
		<a href='<?=$thumbnail["url"]?>'>Full Property Listing</a>
	</div>
</div>
<?php endforeach;?>
