
<a href='<?php echo site_url("team/" . $member["member_id"]);?>' <?php if ($member["member_id"] == $this->member_id) echo "class=\'selected\'";?>>

	<div>
		<img src="<?php echo $member["image"]["url"];?>" alt="<?php echo $member["image"]["alt"];?>"></img>
	</div>
	
	<div>
		<h1><?php echo $member["name"];?></h1>
		<h2><?php echo $member["title"];?></h2>
	</div>

</a>

