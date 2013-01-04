Project.Modules.listing_map_controller = () ->

	# responsible for initializing all of the elements in the bumpbox
	# responsible for showing the proper elements when needed
	# need a change method -- determine what content to show and load etc

	# status filter to make sure we don't run the filters multiple times!
	status =
		"walkscore" : false
		"nearby_properties" : false
		"directions" : false

	changeTrigger = (id) =>

		# responsible for any extra logic that we need to have here
		if id == "walkscore" and not status.walkscore
			do walkscoreInit
			status.walkscore = true

		# iniitalize the nearby properties only if they haven't been initialized yet!
		else if id == "nearby_properties"  and not status.nearby_properties
			do nearbyPropertiesInit
			status.nearby_properties = true

		else if id == "directions" and not status.directions
			do directionsInit
			status.directions = true


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

	directionsInit = () =>




	changeTrigger: changeTrigger





