Project.Modules.nearby_properties = (@container, @data) =>

	# initialize map
	# create a thumbnail for each one
	@map = do () =>

		@center = @data.center

		options = 

			center : new google.maps.LatLng @center.latitude, @center.longitude
			zoom: 14
			mapTypeId: google.maps.MapTypeId.TERRAIN

		new google.maps.Map @container, options

	# create the center marker so that its different from the rest of the elements
	@centerMarker = do () =>

		options =

			position: new google.maps.LatLng @center.latitude, @center.longitude
			draggable: false
			map: @map

		new google.maps.Marker options

	propertyMarker = (element) =>

		options = 	

			position: new google.maps.LatLng element.coordinates.latitude, element.coordinates.longitude
			draggable: false
			map: @map

		new google.maps.Marker options			

	@thumbnails = do () =>

		# return a list comprehension!
		for element in @data.properties

			marker : propertyMarker element
			listener : "Not Yet Built"


	console.log @thumbnails

