# expects data.center, data.points etc
Project.Modules.map = (@container, @data) =>
	
	do initMap = =>

		@options = 

			center : new google.maps.LatLng @data.center.latitude, @data.center.longitude
			zoom : 15
			mapTypeId: google.maps.MapTypeId.TERRAIN

		@map = new google.maps.Map @container, @options

	# will return a data object!
	createPropertyThumbnail = (thumbnail) =>

		parent = document.createElement "div"
		$(parent).html "<a href='#{thumbnail.property_url}'><img width='50' height='50' src='#{thumbnail.image.url}' alt='#{thumbnail.image.alt}' /></a>" 

		options = 
			content: parent
			boxClass : "map_info_box"
			disableAutoPan : false
			enableEventPropagation : false
			isHidden: false

		new InfoBox options

	do initCenter = =>

		@marker = new google.maps.Marker
			map : @map
			draggable: false
			position: new google.maps.LatLng @data.center.latitude, @data.center.longitude
			visible: true			

		# create the info box and then open it for the marker!
		@centerBox = createPropertyThumbnail @data.thumbnail
		@centerBox.open @map, @marker

	createPropertyThumbnail : createPropertyThumbnail
	map : map	
