Project.Modules.walkscore_map = (@container, @data) ->

	do mapInit = () =>

		@center = new google.maps.LatLng @data.center.latitude, @data.center.longitude

		@options = 

			center: @center
			zoom: 16
			mapTypeId: google.maps.MapTypeId.ROADMAP

		@map = new google.maps.Map @container, @options

	# basic helper function for generic thumbnail element
	# link-destination, image-src, google.maps.marker
	thumbnailMarker = (url, src, marker) =>

		parent = document.createElement "div"
		$(parent).html "<a target='new' href='#{url}'><img width='50' height='50' src='#{src}' /></a>" 

		options = 
			content: parent
			boxClass : "map_info_box"
			disableAutoPan : false
			enableEventPropagation : false
			isHidden: false

		infoBox = new InfoBox options

		infoBox.open @map, marker

		return infoBox




	# basic marker element for the base markers - create own if needed
	marker = (coordinates) =>

		marker = new google.maps.Marker
			map : @map
			draggable: false
			visible: true			
			position: new google.maps.LatLng coordinates.latitude, coordinates.longitude

		return marker			

	# initialize center
	do centerInit = () =>
		# center = marker @data.center
		markerBox = thumbnailMarker @data.thumbnail.property_url, @data.thumbnail.image.url, marker(@data.center)
			


	center: @center
	map : @map
	thumbnailMarker : thumbnailMarker
