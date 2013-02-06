Project.Pages.Site_wide = function () {

	var background_slideshow = (function() {

		// responsible for loading in the entire background images here and then initializing the slideshow to run automatically
		var images = background_images;//cache the object for quick local access
		var html = function(url, alt, id) {

			var _html = "<div class='slide' data-id='" + id + "'>";
			_html += "<img src='" + url + "' alt='" + alt + "' />";
			_html += "</div>";

			return _html;
		}	

		var gallery = new Project.Modules.background_gallery(images, $('#background'), html);//this will initialize the gallery and then will run it automatically
	}());
	

};//