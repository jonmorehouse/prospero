Project.Pages.Homepage = (function() {

	// elements
	var elements = [$('#navigation_left'), $('#navigation_top'), $('#logo'), $('#homepage_blurb'), $('#search')];
	var bumpbox = Project.Pages.Bumpbox(elements);//initialize the bumpbox
	var fade = bumpbox.fade;

	// BUMPBOX INIT
	var bumpbox_init = (function() {

		var bumpbox_controllers = {

			"about" : new Project.Modules.bumpbox($('#navigation_left li.about'), $('.bumpbox.about')),
			"team" : new Project.Modules.bumpbox($('#navigation_left li.team'), $('.bumpbox.team')),
			"services" : new Project.Modules.bumpbox($('#navigation_left li.services'), $('.bumpbox.services'))
		};

		var bumpbox_modules = {


			"team" : new Project.Modules.thumbnail_controller($('.bumpbox.team > .thumbnails'), $('.bumpbox.team > .content')),//will create a pause function later -- this can be embedded in a different element
			"services" : new Project.Modules.thumbnail_controller($('.bumpbox.services > .thumbnails ul'), $('.bumpbox.services > .content')),//will create a pause function later -- this can be embedded in a different element
			"about" : new Project.Modules.thumbnail_controller($('.bumpbox.about > .thumbnails ul'), $('.bumpbox.about > .content')),//will create a pause function later -- this can be embedded in a different element

		}; 

		// set the reset on each member here
		for (var controller in bumpbox_controllers) {

			bumpbox_controllers[controller]["config"]["in_callback"] = fade.fadeOut;
			bumpbox_controllers[controller]["config"]["out_callback"] = fade.fadeIn;

		    bumpbox_controllers[controller]["config"]["reset"] = (function() {

		    	if (bumpbox_modules[controller] !== undefined && bumpbox_modules[controller]["reset"] !== undefined) 
		    		return bumpbox_modules[controller]["reset"];

		    	return false;
		    })(controller);//end of closure
		}//end loop


		}());//end of homepage initialization section
	//END OF BUMPBOX CONTROLLERS!
	
	var global_animation = (function() {

		var search_bar_animation = new Project.Modules.form_animation($('#search'));

	}());

}());