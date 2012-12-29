# This module is responsible for handling the elements for the bumpboxs at the top of the page!
Project.Pages.Bumpbox = (elements) =>

	animationTime = 1000
	fadedOpacity = 0.3

	fade = 

		fadeIn : () =>

			elements.map (element) => 

				css = 
					opacity: 1.0

				element.animate css, animationTime

		fadeOut : () =>

			elements.map (element) =>

				css = 
					opacity: fadedOpacity

				element.animate css, animationTime

	do init = () =>
		# controllers actually control the visual configuration of each bumpbox
		controllers = 

			map : new Project.Modules.bumpbox $('#navigation_top li.map'), $('.bumpbox.map')
			contact : new Project.Modules.bumpbox $('#navigation_top li.contact'), $('.bumpbox.contact')

		# now initialize all of the proper module's
		modules =

			# map include
			map : new Project.Modules.thumbnail_controller $('.bumpbox.map > .thumbnails ul'), $('.bumpbox.map > .content') #will create a pause function later -- this can be embedded in a different element
			map_controller : new Project.Modules.bumpbox_map_controller $('.bumpbox.map > .thumbnails ul'), $('.bumpbox.map > .content')

			# contact modules
			contact: new Project.Modules.contact $('.bumpbox.contact').children("div:nth-child(2)"), site_url + "general_rest/submit_email"
			contact_animation: new Project.Modules.form_animation $('.bumpbox.contact')

		# initialize the fades for each bumpbox!
		setConfig = for key, controller of controllers

			controller["config"]["in_callback"] = fade.fadeOut
			controller["config"]["out_callback"] = fade.fadeIn

			if modules[key] and modules[key]["reset"]
				controller["reset"] = modules[key]["reset"]

		modules['map']['config']['change_trigger'] = modules['map_controller']['change_trigger']

	#return the fade element
	fade : fade
	