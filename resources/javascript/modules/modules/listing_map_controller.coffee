Project.Modules.listing_map_controller = () ->

	# responsible for initializing all of the elements in the bumpbox
	# responsible for showing the proper elements when needed
	# need a change method -- determine what content to show and load etc
	changeTrigger = (id) =>

		# responsible for any extra logic that we need to have here
		if id == "walkscore" 
			do walkscoreInit

		else if id == "nearby_properties" 
			do nearbyPropertiesInit

		else 
			alert "functionality not built yet!"

	walkscoreInit = () =>

		# will be responsible for initializing the elements
		data = pageData.listing_map.walkscore
		leftElement = $('.bumpbox.listing_map > div.content > div[data-id="walkscore" > div:first-child')
		mapElement =  $('.bumpbox.listing_map > div.content > div[data-id="walkscore"] > div:nth-child(2)')


		# console.log Project.Modules.walkscore_map

		map = new Project.Modules.walkscore_map mapElement[0], data

	nearbyPropertiesInit = () => 

		data = pageData.listing_map.nearby_properties
		container = $('.bumpbox.listing_map > div.content > div[data-id="nearby_properties"]')


		map = new Project.Modules.nearby_properties container[0], data


	changeTrigger: changeTrigger





