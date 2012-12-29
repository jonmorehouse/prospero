Project.Modules.bumpbox = function(in_trigger, container) {

	var config = {

		'speed': 500,
		'easing' : false,//will 
		'reset': false,//will be responsible for resetting the bumpbox when we are done
		'in_callback': false,
		'out_callback' : false,
		'visible': false,
		'out_trigger' : $('#bumpbox_out_trigger'),//this is set by default only change if you know what you are doing!
	};

	var in_listener = in_trigger.click(function() {

		if (config.visible) return true;//don't want to call the animation if not necessary

		// reset the configuration if we need to
		if (config.reset) config.reset();

		if (config.in_callback) config.in_callback();

		container.fadeIn(config.speed, function() {

			config.out_trigger.fadeIn(config.speed, function() {

				config.visible = true;
			});//
		});//

		return true;
	});

	var esc_listener = $(document).keydown(function(key) {
		if (key.keyCode == 27) close();
	});

	var out_listener = config.out_trigger.click(function() { close()});

	function close() {

		if (!config.visible) return true;

			if (config.out_callback) config.out_callback();//call the callback function here!

			container.fadeOut(config.speed, function() {

				config.out_trigger.fadeOut(config.speed, function() {

					config.visible = false;
				});//end of out trigger fade
			});//end of container fade

			return true;
	}

	return {

		'config' : config,//returns the config element so that we can set variables for this element

	};

}