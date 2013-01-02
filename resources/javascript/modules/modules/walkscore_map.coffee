Project.Modules.walkscore_map = (container, center, triangle) ->

	options = 

		center: new google.maps.LatLng center.latitude, center.longitude
		zoom: 8
		google.maps.MapTypeId.ROADMAP


	map = new google.maps.Map container, options
