Project.Modules.nearby_properties = (@container, @data) =>

	# initialize map
	# create a thumbnail for each one
	@map = new Project.Modules.map @container, @data

	@thumbnails = do () =>

		# return a list comprehension!
		for element in @data.properties

			marker = new google.maps.Marker
				map: @map.map
				draggable: false
				position: new google.maps.LatLng element.coordinates.latitude, element.coordinates.longitude
				visible: true

			box = @map.createPropertyThumbnail element.thumbnail
			box.open @map.map, marker

	