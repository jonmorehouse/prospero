Project.Modules.listing_map_controller = () ->

	# responsible for initializing all of the elements in the bumpbox
	# responsible for showing the proper elements when needed
	# need a change method -- determine what content to show and load etc
	change_trigger: (id) ->

		console.log id
		# alert "HELLO FROM CHANGE TRIGGER INL IST"


	do walkscore_init = () ->

		# will be responsible for initializing the elements
		data = pageData.listing_map.walkscore
		leftElement = $('.bumpbox.listing_map > div.content > div[data-id="walkscore" > div:first-child')
		mapElement =  $('.bumpbox.listing_map > div.content > div[data-id="walkscore"] > div:nth-child(2)')

		map = new Project.Modules.walkscore_map mapElement[0], data.center, data.triangle
		











