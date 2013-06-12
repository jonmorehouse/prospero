/*
	The goal of this module is to store all elements and animate them as we enter / exit them
	Send this in an element
*/
Project.Modules.form_animation = function(container) {

	var config = {

		'container': container,
		'elements' : container.find("input, textarea"),
		'animation_time': 500,//this is the fade time of the element
	};

	var defaults = (function() {

		var elements = config.elements,
			_defaults = {};

		elements.each(function() {

			var name = $(this).attr('name'),
				default_value;

			default_value = $(this).attr('value');

			if ($(this).is('textarea')) default_value = $(this).html();

			_defaults[name] = default_value;

		});

		return _defaults;
	}());


	var focus_in = config.elements.focus(function() {

		$(this).val("");
		
	}); 

	var focus_out = config.elements.blur(function() {

		var name = $(this).attr('name'),//this is the name of the element
			default_value = defaults[name],//this is the default value as declared before
			current_value = $(this).val();

		if (current_value !== "") return true;

		$(this).val(default_value);
		

	});

}