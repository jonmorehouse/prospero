Project.Modules.slideshow = function(slideshow_container, thumbnail_container, image_list) {

	var data = {

		'slideshow_container': slideshow_container,
		'thumbnail_container': thumbnail_container,
		'image_list': image_list,
		'animation': 'ease_out_bounce',
		'transition_time': 200,

	};

	var controls = (function() {

		var pause = function() {



		};

		var play = function() {



		};

		var go_to = function(image_id) {//this will return the proper image id and will


		};
		
		return {

			pause: pause,
			play: play,
			go_to: go_to
		};

	}());

	return controls;
};

