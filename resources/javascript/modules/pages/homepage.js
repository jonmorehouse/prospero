Project.Pages.Homepage = (function() {

	var fade = (function() {

		var animation_time = 1000,//how long the fade out will last
			faded_opacity = 0.3;

		var elements = [$('#navigation_left'), $('#navigation_top'), $('#logo'), $('#homepage_blurb'), $('#search')];

		var fade_in = function() {

			elements.map(function(element) {

				element.animate({
					'opacity': 1.0
				},animation_time);	
			});
		};

		var fade_out = function() {

			elements.map(function(element) {

				element.animate({
					'opacity': faded_opacity,
				}, animation_time);
			});
		};

		return {

			"fade_in" : fade_in,
			"fade_out" : fade_out,
		};

	}());//homepage fade in / fade out

	// END FADE

	// BUMPBOX INIT
	var bumpbox_init = (function() {

		var bumpbox_controllers = {

			"map" : new Project.Modules.bumpbox($('#navigation_top li.map'), $('.bumpbox.map')),
			"contact" : new Project.Modules.bumpbox($('#navigation_top li.contact'), $('.bumpbox.contact')),
			"about" : new Project.Modules.bumpbox($('#navigation_left li.about'), $('.bumpbox.about')),
			"team" : new Project.Modules.bumpbox($('#navigation_left li.team'), $('.bumpbox.team')),
			"careers" : new Project.Modules.bumpbox($('#navigation_left li.careers'), $('.bumpbox.careers')),
			"services" : new Project.Modules.bumpbox($('#navigation_left li.services'), $('.bumpbox.services'))
		};

		var bumpbox_modules = {

			"map" : new Project.Modules.thumbnail_controller($('.bumpbox.map > .thumbnails ul'), $('.bumpbox.map > .content')),//will create a pause function later -- this can be embedded in a different element
			"map_controller": new Project.Modules.bumpbox_map_controller($('.bumpbox.map > .thumbnails ul'), $('.bumpbox.map > .content')),//
			"team" : new Project.Modules.thumbnail_controller($('.bumpbox.team > .thumbnails'), $('.bumpbox.team > .content')),//will create a pause function later -- this can be embedded in a different element
			"contact": new Project.Modules.contact($('.bumpbox.contact').children("div:nth-child(2)"), site_url + "general_rest/submit_email"),
			"contact_animation": new Project.Modules.form_animation($('.bumpbox.contact')),
			"services" : new Project.Modules.thumbnail_controller($('.bumpbox.services > .thumbnails ul'), $('.bumpbox.services > .content')),//will create a pause function later -- this can be embedded in a different element
			"about" : new Project.Modules.thumbnail_controller($('.bumpbox.about > .thumbnails ul'), $('.bumpbox.about > .content')),//will create a pause function later -- this can be embedded in a different element

		}; 

		// set the reset on each member here
		for (var controller in bumpbox_controllers) {

			bumpbox_controllers[controller]["config"]["in_callback"] = fade.fade_out;
			bumpbox_controllers[controller]["config"]["out_callback"] = fade.fade_in;
		    bumpbox_controllers[controller]["config"]["reset"] = (function(i) {

		    	if (bumpbox_modules[controller] !== undefined && bumpbox_modules[controller]["reset"] !== undefined) 
		    		return bumpbox_modules[controller]["reset"];

		    	return false;
		    })(controller);//end of closure
		}//end loop

		// link bumpbox window controller with bumpbox map controller
		bumpbox_modules['map']['config']['change_trigger'] = bumpbox_modules['map_controller']['change_trigger'];

	}());//end of homepage initialization section
	//END OF BUMPBOX CONTROLLERS!
	
	var test = (function() {

		$('#navigation_top li.map').trigger('click');

	}());


}());