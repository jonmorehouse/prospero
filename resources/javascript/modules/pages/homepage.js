Project.Pages.Homepage = (function() {

	var fade = (function() {

		var animation_time = 1000,//how long the fade out will last
			faded_opacity = 0.4;

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

			"team" : new Project.Modules.thumbnail_controller($('.bumpbox.team .thumbnails'), $('.bumpbox.team .content')),//will create a pause function later -- this can be embedded in a different element
			"contact": new Project.Modules.contact($('.bumpbox.contact').children("div:nth-child(2)"), site_url + "general_rest/submit_email"),
			"contact_animation": new Project.Modules.form_animation($('.bumpbox.contact')),

		}; 

		for (var controller in bumpbox_controllers) {

		    bumpbox_controllers[controller]["test"] = (function(i) {

		        // creating a new context for i
		        return function() {
		            alert(i); // access the i in scope, not the controller
		        }
		    })(controller);

		}//end loop

		bumpbox_controllers["team"]["test"]();

		$('#navigation_left li.team').trigger('click');


	}());//end of homepage initialization section


}());