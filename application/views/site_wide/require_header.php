
<!DOCTYPE html>
<head>
	<title><?php echo $page_title; ?></title>		

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" value="IE=9">
	<meta http-equiv="X-UA-Compatible" value="IE=8">
	<meta http-equiv="X-UA-Compatible" value="IE=7">
	<meta name='keywords' content='<?php echo $meta_keywords;?>' />
	<meta name='description' content='<?php echo $meta_description; ?>' />

	<?php echo $favicon;?>
	
	<?php
	foreach($stylesheet_list as $stylesheet) 
		echo $stylesheet;

	foreach($javascript_list as $javascript) 
		echo $javascript;

	?>

	<script data-main='<?php echo $require_app;?>' src='<?php echo base_url("resources/javascript/resources/require.js");?>'></script> 
	
</head>

<body>

