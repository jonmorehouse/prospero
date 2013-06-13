Project.Modules.general_maps = (@thumbnails, container) =>

	# responsible for initializing all of the elements in the bumpbox
	# responsible for showing the proper elements when needed
	# need a change method -- determine what content to show and load etc
	data = pageData.general_maps

	maps = {}	

	thumbnailMarker = (thumbnail) =>
		
		parent = document.createElement "div"
		$(parent).html "<a href='#{thumbnail.property_url}'><img width='50' height='50' src='#{thumbnail.image.url}' alt='#{thumbnail.image.alt}' /></a>" 

		options = 
			content: parent
			boxClass : "map_info_box"
			disableAutoPan : false
			enableEventPropagation : false
			isHidden: false

		new InfoBox options

	mapInit = (id) =>

		_data = data[id]
		_container = container.find("div[data-id='#{id}'] > div").get 0

		options =

			center: new google.maps.LatLng _data.center.latitude, _data.center.longitude
			zoom: 13 
			mapTypeId: google.maps.MapTypeId.ROADMAP

		# initialize the map
		map = new google.maps.Map _container, options

		# now going to initialize the elements

		# loop through all the properties -- create a new property and initialize a thumbnail!
		for property in _data.properties

			marker = new google.maps.Marker
				map : map
				draggable: false
				visible: true			
				position: new google.maps.LatLng property.coordinates.latitude, property.coordinates.longitude


			# client requested that we remove the thumbnails that are present in the general maps section
			# markerBox = thumbnailMarker property.thumbnail
			# markerBox.open map, marker			

		return true

	changeTrigger = (id) =>

		if not maps[id]

			callback = () =>
				maps[id] = mapInit id

			setTimeout callback, 500
			

	changeTrigger: changeTrigger