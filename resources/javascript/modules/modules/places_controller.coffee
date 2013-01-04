Project.Modules.places_controller = (form_container, @map, @data) =>

	@searchInput = form_container.find "input[name='search']"
	@typeInput = form_container.find "select[name='type']"
	@searchSubmit = form_container.find "[type='submit']"


	error = (value) => 

		# will append the data message below!


	success = =>

		# will create the proper points on the map!
		# append the elements below!


	getPlaces = (value, type) =>



		


	@searchSubmit.click =>
		
		status = getPlaces @searchInput.attr("value"), @typeInput.attr("value")






