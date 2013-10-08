do Project.Pages.Vacancy = () ->

	# initialize all elements for hiding etc
	elements = [$('#navigation_left'), $('#navigation_top'), $('#logo'), $('#search'), $('#header'), $('#page_container'), $('#page_content')]

	# initialize bumpbox elements across the board
	bumpbox = Project.Pages.Bumpbox elements

	# cache our fade functionality
	fade = bumpbox.fade
	
	# initialize search bar animation for this element
	search_bar_animation = new Project.Modules.form_animation $('#search')

	do bumpbox_init = () =>

		bumpbox_controllers = 

			"about" : new Project.Modules.bumpbox($('#navigation_left li.about'), $('.bumpbox.about'))
			"team" : new Project.Modules.bumpbox($('#navigation_left li.team'), $('.bumpbox.team'))
			"services" : new Project.Modules.bumpbox($('#navigation_left li.services'), $('.bumpbox.services'))

		bumpbox_modules = 

			"team" : new Project.Modules.thumbnail_controller($('.bumpbox.team > .thumbnails > ul'), $('.bumpbox.team > .content'), 0)#will create a pause function later -- this can be embedded in a different element
			"services" : new Project.Modules.thumbnail_controller($('.bumpbox.services > .thumbnails > ul'), $('.bumpbox.services > .content'), 0)#will create a pause function later -- this can be embedded in a different element
			"about" : new Project.Modules.thumbnail_controller($('.bumpbox.about > .thumbnails > ul'), $('.bumpbox.about > .content'), 0)#will create a pause function later -- this can be embedded in a different element
		
		# run the initiation element for each piece etc
		init = (controller)	=>		

			controller['config']['in_callback'] = fade.fadeOut
			controller['config']['out_callback'] = fade.fadeIn


		# run init for each controller
		init controller for name, controller of bumpbox_controllers
