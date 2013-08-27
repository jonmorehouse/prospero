Project.Modules.general_maps = (@thumbnails, container) =>

	# responsible for initializing all of the elements in the bumpbox
	# responsible for showing the proper elements when needed
	# need a change method -- determine what content to show and load etc
	data = pageData.general_maps

	maps = {}	

	mapInit = (id) =>

		# cache the properties that we are currently working with
		_data = data[id]

		# update the data element to actually include html pre-formatted for each of the properties for injection into an info box
		# https://developers.google.com/maps/documentation/javascript/examples/infowindow-simple

		# find container where we will inject our map
		_container = container.find("div[data-id='#{id}'] > div").get 0

		# inject the actual map
		options =

			center: new google.maps.LatLng _data.center.latitude, _data.center.longitude
			zoom: 11
			mapTypeId: google.maps.MapTypeId.ROADMAP

		# initialize the map
		map = new google.maps.Map _container, options
		# store a list of all markers and their subsequent infowindows etc
		markers = []
		infowindows = []

		# loop through all the properties -- create a new property and initialize a thumbnail!
		for property in _data.properties

			# make sure to create all markers etc in a closure to prevent any dangerous cross mapping of pointers etc
			do ->
				# create the infobox content (this shows up when you click on a marker below)
				infowindow = new google.maps.InfoWindow
					
					content: property.infobox

				# create the red marker that goes on the map
				marker = new google.maps.Marker
					map : map
					draggable: false
					visible: true			
					position: new google.maps.LatLng property.coordinates.latitude, property.coordinates.longitude

				# store references to the proper elements as we need them
				markers.push marker
				infowindows.push infowindow

				# initialize each of the markers for the map
				google.maps.event.addListener marker, "click", ->

					# make sure that all other infowindows close properly
					for otherInfowindow in infowindows

						otherInfowindow.close()

					# now make sure the selected infowindow opens when we click the correct button
					infowindow.open map, marker

	changeTrigger = (id) =>

		maps[id] ?= mapInit id

	changeTrigger: changeTrigger
