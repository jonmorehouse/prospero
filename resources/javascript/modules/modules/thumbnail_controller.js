/*
	*	the id of this javascript is to match divs with an id in a thumbnail controller to divs with the same id in a container
	*	pass in callback so that when the click happens I can do something else -- ie most likely a pause function
	*	eventually will create a system where I can manually set the div tags with the configuration
*/
Project.Modules.thumbnail_controller = function(thumbnail_container, container, callback) {


	var config = {

		'selection_class': "selected",
		'animation_speed': 1000,//how quickly the animations run once initialized
		'thumbnail_tag': "data-id",//this should in general, not be overwritten 
		'container_tag': "data-id",//see above
		'current_id' : 0,//assuming that the first one is showing -- overwrite for different scenarios
		'current_content': container.children(":first-child"),
		'current_thumbnail': thumbnail_container.children(":first-child"),

	};

	var reset = function () {

		if (config.current_thumbnail !== undefined) config.current_thumbnail.removeClass(config.selection_class);
		
		config.current_id = 0;
		config.current_content = container.children(":first-child");
		config.current_thumbnail = thumbnail_container.children(":first-child");

		// add the proper class to the element
		config.current_thumbnail.addClass(config.selection_class);

	};

	reset();//run the file -- can't use it as a seaf because it won't return in factory / self revealing pattern

	var listen = thumbnail_container.children().click(function() {

		var id = $(this).attr(config.thumbnail_tag),//this is the tag id
			next = container.children("div[data-id=" + id + "]");//this is the next element -- 

		config.current_content.fadeOut(config.animation_speed, function() {

			$(this).addClass(config.selection_class);
			next.fadeIn(config.animation_speed);

		});

		config.current_thumbnail.removeClass(config.selection_class);
		config.current_thumbnail = $(this);
		config.current_thumbnail.addClass(config.selection_class);
		config.current_content = next;
		config.current_id = id;

	});


	return {

		'reset': reset,//this is the function that is responsible for resetting the entire module
		'config': config,//return the configuration object
	};
};
