Project.Modules.walkscore_map = (@container, @data) ->

	# make the points proper datatypes
	@center = 
		latitude : parseFloat @data.center.latitude
		longitude : parseFloat @data.center.longitude

	@boundary = parseFloat @data.boundary

	# initialize basic map options
	@options = 

		center: new google.maps.LatLng @center.latitude, @center.longitude
		zoom: 14
		mapTypeId: google.maps.MapTypeId.ROADMAP

	@map = new google.maps.Map @container, @options

	# initialize center
	do initCenter = () =>

		centerOptions =
			position: @options.center
			draggable: true
			icon: @data.thumbnail.image.url
			title: @data.thumbnail.title

			map: @map

		# create the marker!
		@centerMarker = new google.maps.Marker centerOptions

  	# create the overlay and then initialize a bounds object!
	do initBounds = () =>

		createMarker = (point) =>

			options =
				position: point
				draggable: true
				map: @map
		
			# create the marker!
			@centerMarker = new google.maps.Marker options


		# initialize coordiantes!
		@rectCoordinates = []
		@rectCoordinates[0] = new google.maps.LatLng @center.latitude + @boundary, @center.longitude - @boundary
		@rectCoordinates[1] = new google.maps.LatLng @center.latitude + @boundary, @center.longitude + @boundary
		@rectCoordinates[3] = new google.maps.LatLng @center.latitude - @boundary, @center.longitude - @boundary
		@rectCoordinates[2] = new google.maps.LatLng @center.latitude - @boundary, @center.longitude + @boundary

		# create bounds markers!
		@boundMarkers = (createMarker element for element in @rectCoordinates)

		# initialize the options for this 
		options = {paths: @rectCoordinates, strokeColor: "#FF0000", fillColor: "#FF0000", fillOpacity: 0.35, strokeOpacity: 0.35, strokeWeight: 2}

		# create the polygon shape
		@rect = new google.maps.Polygon options
		@rect.setMap @map





	

