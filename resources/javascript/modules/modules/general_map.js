Project.modules.general_map = function(element, data) {

	var config = {

		map_container: element.children('div')[0],//can change this later if necessary!
		center: new google.maps.LatLng(-34.397, 150.644),
		zoom: 8,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	var map = new google.maps.Map(config.map_container, config);

};

