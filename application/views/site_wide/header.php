
<!DOCTYPE html>
<head>
	<title><?php echo $page_title; ?></title>		

	<meta http-equiv="X-UA-Compatible" value="IE=9">
	<meta http-equiv="X-UA-Compatible" value="IE=8">
	<meta http-equiv="X-UA-Compatible" value="IE=7">
	<meta name='keywords' content='<?php echo $meta_keywords;?>' />
	<meta name='description' content='<?php echo $meta_description; ?>' />

	<?php echo $favicon;?>
	
	<?php
	foreach($stylesheet_list as $stylesheet) 
		echo $stylesheet;

	echo "\n\n\t<script type='text/javascript'>var base_url='" . base_url() . "';</script>";
	echo "\n\n\t<script type='text/javascript'>var site_url='" . site_url() . "/';</script>";
	echo "\n\n\t<script type='text/javascript'>var cgi_url='{$cgi_url}';</script>";
	echo "\n\n";


	foreach($javascript_list as $javascript) 
		echo $javascript;
	?>
	
</head>

<body>

