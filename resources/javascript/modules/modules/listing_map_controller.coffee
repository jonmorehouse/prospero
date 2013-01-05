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
		leftElement = $('.bumpbox.listing_map > div.content > div[data-id="walkscore"] > div:first-child')
		mapElement =  $('.bumpbox.listing_map > div.content > div[data-id="walkscore"] > div:nth-child(2)')

		# initialize form animation
		animation = new Project.Modules.form_animation leftElement.children()

		# console.log Project.Modules.walkscore_map
		map = new Project.Modules.walkscore_map mapElement.get(0), data
		# initialize places controller
		placesController = new Project.Modules.places_controller leftElement, map, data		

	nearbyPropertiesInit = () => 

		data = pageData.listing_map.nearby_properties
		container = $('.bumpbox.listing_map > div.content > div[data-id="nearby_properties"]')

		map = new Project.Modules.nearby_properties container.get(0), data

	directionsInit = () =>

		# will be responsible for initializing the elements
		data = pageData.listing_map.directions
		leftElement = $('.bumpbox.listing_map > div.content > div[data-id="directions"] > div:first-child')
		container =  $('.bumpbox.listing_map > div.content > div[data-id="directions"] > div:nth-child(2)')
		mapElement = container.find("> .content > div[data-id='map']")
		directions = container.find("> .content > div[data-id='directions']")

		# initialize form animation
		animation = new Project.Modules.form_animation leftElement
		# initialize the right side thumbnail animations
		thumbnailAnimation = new Project.Modules.thumbnail_controller container.children(".thumbnails").children("ul"), container.children(".content"), "map"
		# iniitalize the rightside map
		map = new Project.Modules.map mapElement.get(0), data
		# initialize the directions controller -- it will be passed the map so that it can work on it!
		controller = new Project.Modules.listing_directions leftElement, container, data, map, thumbnailAnimation


	changeTrigger: changeTrigger





