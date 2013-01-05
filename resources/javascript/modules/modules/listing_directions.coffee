Project.Modules.listing_directions = (@form, @container, @data, @map, @thumbnailController) =>

	@elements = 
		destination: @form.find "input[name='destination']"
		origin : @form.find "input[name='origin']"
		submit : @form.find "[type='submit']"	
		directionsElement : @container.find "div[data-id='directions']" #find the ul that will hole the elements

	@currentPoints = [] #this is the current array of points that are on the map!

	do init = () =>

		@directionsService = new google.maps.DirectionsService()
		@directionsDisplay = new google.maps.DirectionsRenderer()

		# initialize the directions for the map!
		@directionsDisplay.setMap @map.map

		# create an element for the directions to go into
		@directionsDisplay.setPanel @elements.directionsElement.get 0


	getDirections = (origin, destination) =>

		request = 
			origin: origin
			destination: destination
			travelMode : google.maps.TravelMode.DRIVING

		@directionsService.route request, (response, status) =>

		    if status == google.maps.DirectionsStatus.OK
		    	@directionsDisplay.setDirections response


	# listen on click!
	@elements.submit.click =>

		return getDirections @elements.origin.attr("value"), @elements.destination.attr("value")

	redraw = () =>

		_redraw = () =>
			google.maps.event.trigger @map.map, 'resize'

		setTimeout _redraw, 2000

	@container.find(".thumbnails ul li").click () =>

		do redraw

	@container.find(".content div[data-id='directions']").click () =>

		# need to switch over to the other elements
		@thumbnailController.changeTrigger "map"
		do redraw



