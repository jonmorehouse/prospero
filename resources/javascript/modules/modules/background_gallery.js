/*
	Future functionality 
		1.) different types of animations -- ie: left / right etc -- can be configured through the config object
		2.) Ability to extend this to allow for controls / go to elements etc
		3.) A more efficient image loading system -- doesn't really exist right now
*/
Project.Modules.background_gallery = function (images, container, template) {

	var config = {

		"playing" : true,
		"interval" : 4000,
		"animation_speed": 1000,
		"total_images" : 1,
		"counter" : 0,
		"current": container.children().first(),//container's first child
	};

	var init = (function() {


		for (image in images) {

			config.total_images++;//increase the config counter
			container.append(template(images[image]['url'], images[image]['alt'], image));//appends the actual image to the page
		}//end of for loop -- ensure that we are looping through each one


		return setTimeout(function() {start();}, config.interval);
	}());

	function start() {//this is a recursively running function that controls itself as the animation plays!

		config.counter = (config.counter < config.total_images - 1) ? (config.counter + 1) : (config.counter = 0);

		var next = container.find("[data-id=" + config.counter + "]");//this will take care of if we are on the last element or not

		config.current.fadeOut(config.animation_speed);
		next.fadeIn(config.animation_speed);

		config.current = next;//reset the initial element

		if (config.playing) return setTimeout(function() {start();}, config.interval);

	}

	return {



	};
};