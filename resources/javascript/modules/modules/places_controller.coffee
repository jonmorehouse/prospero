Project.Modules.places_controller = (form_container, @map, @data) =>

	@typeInput = form_container.find "select[name='type']"
	@placesServices = new google.maps.places.PlacesService @map.map
	@currentPlaces = []


	success = (results) =>

		clearMarker = (element) =>

			element.marker.setMap null
			element.thumbnail.setMap null
			# @currentPlaces.remove element

		createMarker = (element) =>

			searchQuery = encodeURI element.vicinity
			destination = "http://google.com/search?as_q=#{searchQuery}"
			imageUrl = element.icon

			# initialize the marker
			marker = new google.maps.Marker
				map: @map.map
				draggable: false
				visible: true
				position: element.geometry.location

			# create the thumbnail
			thumbnail = @map.thumbnailMarker destination, imageUrl, marker

			_return = 
				thumbnail : thumbnail
				marker: marker

		# clear all markers
		clearMarker element for element in @currentPlaces
		# create the markers for the next step!
		for element in results
			@currentPlaces.push createMarker element 
		
		@map.map.setCenter @map.center


	# make a request to the google places api
	getPlaces = (type) =>

		# will return a status 
		request =

			location: new google.maps.LatLng @data.center.latitude, @data.center.longitude
			radius: "1000"
			types : [type]

		@placesServices.nearbySearch request, (results, status) =>

			if status == "OK"
				success results

	# listen for submit to control this element
	@typeInput.change =>
		
		status = getPlaces @typeInput.attr("value")





