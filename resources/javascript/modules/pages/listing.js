Project.Pages.listing = (function() {

	var images = (function() {

		var data = {

			'slideshow' : $('#slideshow .content'),
			'thumbnails' : $('#slideshow .thumbnails'),
			'image_list' : slideshow_images, //this is an object literal  that is dynamically allocated using php
		};

		// load images
		Project.Modules.image_loader(data.slideshow, data.image_list);


		// create slideshow
		var slideshow = new Project.Modules.slideshow(data.slideshow, data.thumbnails);

		slideshow.pause();

		data.thumbnails.click(function() {

			alert("HELLO WORLd");

		});
	// END OF IMAGE CONTROLLER
	}());
 

	var drawer_animation = (function() {


		// responsible for instantiating the objects for each of the drawers that are included on the page
		// will be responsible for the easing in and out of the tabs
	//end of DRAWER ANIMATION
	}());

	var drawer_content = (function() {



	}());


// END OF LISTING PAGE
}());

