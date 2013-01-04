Project.Modules.places_controller = (form_container, @map, @data) =>

	@searchInput = form_container.find "input[name='search']"
	@searchSubmit = form_container.find "[type='submit']"


	error = (value) => 

		# will append the data message below!


	success = =>

		# will create the proper points on the map!
		# append the elements below!


	do getPlaces = () =>


		console.log @data
		# url = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=#{@data.center.latitude},#{@data.center.longitude}&radius=500&types=#{@data.types}&name=#{value}&sensor=false&key=#{@data.api_key}"

		console.log url



	@searchSubmit.click =>
		alert @searchInput.attr "value"
		




