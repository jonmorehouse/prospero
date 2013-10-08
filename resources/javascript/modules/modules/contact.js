/*

	This function is responsible for listening on a contact container for all input / output and controlling that

*/

Project.Modules.contact = function(container, url) {

	var config = {

		'submit' : container.find("button"),
		'url' : container.children("form").attr("destination"),
		'error': error_message,
		'success' : success_message,
		'animation_time' : 1000,
		'delayed_timer' : 5000,
		'message_container': container.children('.message'),
	};

	var listen = config.submit.click(function() {

		var result = submit(data());//submit returns the result of the ajax request

		return false;
	});

	function data() {

		return {};

	};

	function submit(data) {

		$.ajax({

			url: config.url,
			data: data,
			type: "post",
			dataType: "json",

			success: function(response) {

				if (response.status) config.success(response);

				else config.error(response);

				return true;
			}

		});



	};

	function error_message(response) {

		config.message_container.html(response.message);
		config.message_container.fadeIn(config.animation_time, function() {

			setTimeout(function() {
				config.message_container.fadeOut(config.animation_time);
			}, config.delayed_timer);//end settimeout
		});//end of fade In callback
			

	};

	function success_message(response) {

		// will be responsible for hiding the form!
		config.message_container.html(response.message);

		container.find("form").fadeOut(config.animation_time, function() {

			config.message_container.fadeIn(config.animation_time, function() {

				setTimeout(function() {
					config.message_container.fadeOut(config.animation_time, function() {
						container.find("form").fadeIn(config.animation_time);
					});

				}, config.delayed_timer);//end of set Timeout
			});//end of message fade in
		});//end of container fade out

	};//end function
};
