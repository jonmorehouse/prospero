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

			map : new Project.Modules.bumpbox $('#navigation_top li[data-link="map"]'), $('.bumpbox.map')
			contact : new Project.Modules.bumpbox $('#navigation_top li[data-link="contact"]'), $('.bumpbox.contact')

		# now initialize all of the proper module's
		modules =

			# map include
			map : new Project.Modules.thumbnail_controller $('.bumpbox.map > .thumbnails ul'), $('.bumpbox.map > .content'), "all" #will create a pause function later -- this can be embedded in a different element
			map_controller : new Project.Modules.general_maps $('.bumpbox.map > .thumbnails ul'), $('.bumpbox.map > .content')

			# contact modules
			contact: new Project.Modules.contact $('.bumpbox.contact').children("div:nth-child(2)"), site_url + "general_rest/submit_email"
			contact_animation: new Project.Modules.form_animation $('.bumpbox.contact')

		# initialize the fades for each bumpbox!
		setConfig = for key, controller of controllers

			controller["config"]["in_callback"] = fade.fadeOut
			controller["config"]["out_callback"] = fade.fadeIn

		# set up the in call back so that when we click on the bumpbox nav (top_nav) we reset the general thumbnail controller and then reset the specific bumpbox content controller
		controllers.map.config.in_callback = () =>

			do fade.fadeOut
			do modules.map.reset
			modules.map_controller.changeTrigger "new"

		# what to do when we exit / close the bumpbox. Want to reset the controller and signal a reset in the map content controller
		controllers.map.config.out_callback = () =>

			do fade.fadeIn
			do modules.map.reset
			modules.map_controller.changeTrigger "new"


		# now map the thumbnail controller change trigger to the general_maps so that when there isn't a show / hide of the entire bumpbox we still need to call the contnet update!
		modules.map.config.change_trigger = modules.map_controller.changeTrigger


	#return the fade element
	fade : fade
	