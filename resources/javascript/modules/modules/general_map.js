Project.modules.general_map = function(element, data) {

	var config = {	

		map_container: element.children('div').get(0),//can change this later if necessary!
		center: new google.maps.LatLng(data['center']['latitude'], data['center']['longitude']),
		zoom: 7,
		mapTypeId: google.maps.MapTypeId.ROADMAP

		};

	var map = new google.maps.Map(config.map_container, config);
	var markers = [];//holds all markers for this map!
	var marker_init = (function() {

		var	points = data['points'];

		for (var current = 0, z = points.length; current < z; current++) {

			markers[current] = (function() {

				var _current = points[current],
					_point = _current['coordinates'];

				return new google.maps.Marker({
					position: new google.maps.LatLng(_point['latitude'], _point['longitude']),
			    	map: map,
				    animation: google.maps.Animation.DROP,
				    image: _current['thumbnail'],
				    title: _current['title'],
				});
			}(current));
		}//end of for loop
		}(data));//end of marker initialization

};

