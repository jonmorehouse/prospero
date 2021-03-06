/*
	*	the id of this javascript is to match divs with an id in a thumbnail controller to divs with the same id in a container
	*	pass in callback so that when the click happens I can do something else -- ie most likely a pause function
	*	eventually will create a system where I can manually set the div tags with the configuration
*/
Project.Modules.thumbnail_controller = function(thumbnail_container, container, default_id) {

	var config = {

		'selection_class': "selected",
		'animation_speed': 1000,//how quickly the animations run once initialized
		'thumbnail_tag': "data-id",//this should in general, not be overwritten 
		'container_tag': "data-id",//see above
		'default_id': (!default_id) ? "0" : default_id,//initialize the element
		'change_trigger': false,//this is a change trigger for contacting other elements
		'current_id' : (!default_id) ? "0" : default_id,//assuming that the first one is showing -- overwrite for different scenarios
		'current_content': container.children(":first-child"),
		'current_thumbnail': thumbnail_container.children(":first-child"),
	},

	changing = false;//this is an element useful for determining if the element is still running to prevent overlap / errors in code

	var change = function(id) {

		var thumbnail = thumbnail_container.children("li[data-id=" + id + "]"),
			next = container.children("div[data-id=" + id + "]");//this is the next element -- 

		config.current_thumbnail.removeClass(config.selection_class);
		thumbnail.addClass(config.selection_class);

		if (id === config.current_id) return;

		config.current_content.fadeOut(config.animation_speed, function() {

			thumbnail.addClass(config.selection_class);
			next.fadeIn(config.animation_speed);

			if (config.change_trigger)
				config.change_trigger(id);//contact another object to let it know that there was a change triggered

			changing = false;//stop this after the final animation is complete -- to allow for other elements
		});

		config.current_thumbnail.removeClass(config.selection_class);
		config.current_thumbnail = thumbnail;
		config.current_thumbnail.addClass(config.selection_class);
		config.current_content = next;
		config.current_id = id;
	};


	var reset = function () {

		change(config.default_id);
	};

	reset();//run the file -- can't use it as a seaf because it won't return in factory / self revealing pattern

	var listen = thumbnail_container.children().click(function() {

		if (changing) return;//ensure that we are allowed to run the animation

		changing = true;//the animation is running -- want to prevent any other elements from overlapping errors in the future
		var id = $(this).attr(config.thumbnail_tag);

		change(id);
	});


	return {

		"changeTrigger" : change,//only call if you know what you are doing
		'reset': reset,//this is the function that is responsible for resetting the entire module
		'config': config,//return the configuration object
	};
};
