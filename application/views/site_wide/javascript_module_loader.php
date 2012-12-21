<?php
	// This module loader will dynamically load in modules after page load
	// requires urls to be given 
?>
<script type='text/javascript'>

(function () {

	var file_list = {};	
	
	var load_script = function (url) {

	    if (url) {
	        var doc = document,
	        t = doc.createElement("script"),
	        s = doc.getElementsByTagName("script")[0];
	        t.type = "text/javascript";
	
	        // Keep script order!
	        t.async = false;
	        t.src = url;
	        s.parentNode.insertBefore(t, s);
	    }
	
	};

	<?php
		foreach ($this->javascript_modules as $key => $value)
			echo "\n\tfile_list[{$key}]='{$value}';";
	?>
	
	for (var index in file_list) {
		
		var url = file_list[index];
		load_script(url);

	}
}());

</script>