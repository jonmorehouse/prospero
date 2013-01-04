Project.Modules.listing_directions = (@form, @container, @data) =>

	@elements = 
		destination: @form.find "input[name='destination']"
		origin : @form.find "input[name='origin']"
		submit : @form.find "[type='submit']"

	update = (data) =>

		# clear the ul inside of maps
		# append all steps
		# clear the map points
		# append all the map points
		# add listners to switch between map / directions


	getDirections = (origin, destination) =>

		$.ajax
			type: "get"
			url: "http://maps.googleapis.com/maps/api/directions/json?origin=#{encodeURI origin}&destination=#{encodeURI destination}&sensor=false"

			failure : (response) =>

				console.log "no elements found put message here!"

			success : (response) =>

				update response.routes[0].legs
				
	@elements.submit.click =>

		return getDirections @elements.origin.attr("value"), @elements.destination.attr("value")



