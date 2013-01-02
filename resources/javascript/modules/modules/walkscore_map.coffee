Project.Modules.walkscore_map = (@container, @center, @triangle) ->

	console.log @center
	console.log @triangle

	@options = 

		center: new google.maps.LatLng @center.latitude, @center.longitude
		zoom: 14
		mapTypeId: google.maps.MapTypeId.ROADMAP

	@map = new google.maps.Map @container, @options

	do initCenter = () =>

		centerOptions =
			position: @options.center
			# icon:
			# 	path: google.maps.SymbolPath.CIRCLE
			# 	scale: 10

			draggable: true
			map: @map

		# create the marker!
		@centerMarker = new google.maps.Marker centerOptions


	do test = () =>

		marker = (coordinate) =>

			options =
				position: new google.maps.LatLng coordinate.latitude, coordinate.longitude
				draggable: true
				map: @map

			_marker = new google.maps.Marker options
			console.log @centerMarker

		markers = (marker element for element in @triangle)


	createWalkingPolygon = () => 

		# initialize each coordinate marker!
		marker = (coordinate) ->

			new google.maps.LatLng coordinate.latitude, coordinate.longitude

		coordinates = (marker element for element in @triangle)


		# list comprehension to create a marker for each element
		walkingTriangle = new google.maps.Polygon

			paths: coordinates
			strokeColor: "black"
			strokeOpacity: 1
			strokeWeight: 2
			fillColor: "blue"
			fillOpacity: 1

		walkingTriangle.setMap @map




	

