// Generated by CoffeeScript 1.6.3
(function() {
  var _this = this;

  Project.Modules.places_controller = function(form_container, map, data) {
    var getPlaces, success;
    _this.map = map;
    _this.data = data;
    _this.typeInput = form_container.find("select[name='type']");
    _this.placesServices = new google.maps.places.PlacesService(_this.map.map);
    _this.currentPlaces = [];
    success = function(results) {
      var clearMarker, createMarker, element, _i, _j, _len, _len1, _ref;
      clearMarker = function(element) {
        element.marker.setMap(null);
        return element.thumbnail.setMap(null);
      };
      createMarker = function(element) {
        var destination, imageUrl, marker, searchQuery, thumbnail, _return;
        searchQuery = encodeURI(element.vicinity);
        destination = "http://google.com/search?as_q=" + searchQuery;
        imageUrl = element.icon;
        marker = new google.maps.Marker({
          map: _this.map.map,
          draggable: false,
          visible: true,
          position: element.geometry.location
        });
        thumbnail = _this.map.thumbnailMarker(destination, imageUrl, marker);
        return _return = {
          thumbnail: thumbnail,
          marker: marker
        };
      };
      _ref = _this.currentPlaces;
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        element = _ref[_i];
        clearMarker(element);
      }
      for (_j = 0, _len1 = results.length; _j < _len1; _j++) {
        element = results[_j];
        _this.currentPlaces.push(createMarker(element));
      }
      return _this.map.map.setCenter(_this.map.center);
    };
    getPlaces = function(type) {
      var request;
      request = {
        location: new google.maps.LatLng(_this.data.center.latitude, _this.data.center.longitude),
        radius: "1000",
        types: [type]
      };
      return _this.placesServices.nearbySearch(request, function(results, status) {
        if (status === "OK") {
          return success(results);
        }
      });
    };
    return _this.typeInput.change(function() {
      var status;
      return status = getPlaces(_this.typeInput.attr("value"));
    });
  };

}).call(this);
