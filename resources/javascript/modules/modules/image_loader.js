/*
	Module responsibilities:

		1.) Be called with container with which to create the images
		2.) Given a list of image urls
		3.) This module will instantiate each image and will then load it into the container
		4.) This module will assume that each image goes inside of a "div"

*/

Project.Modules.image_loader = function(container, image_content) {

	(function() {

		for (var key in image_content) {

			var url = image_content[key]['url'];
			var alt = image_content[key]['alt'];

			load_image(url);
			container.append(image_html(url, alt));
		}

	}());

	function image_html(url, alt) {

		var html = "<div><img src='" + url + "' alt='" + alt + "' /></div>";//this is an image tav

		return html; 
	}

	function load_image(url, image) {

		if (image === null) {

			image = new Image();
			image.src = url;
		}
	}
};