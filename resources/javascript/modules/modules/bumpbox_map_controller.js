Project.modules.bumpbox_map_controller = (function(thumbnails, container) {

	// this is responsible for controlling the maps and creating them
	// will be responsible for getting data and creating map objects from prototypes
	// will be responsible for creating a map if not already created!
	var maps = {};//these are the individual map apis

	var init = (function() {

		// will be responsible for call calling the change trigger for the first time 
		// responsible for looping through each element and getting the data from the api for it

	});

	function change_trigger(id) {

		if (maps[id] === undefined) {

			alert("INVALID KEY OR RETURN INIT");

		}

		if (!maps[id]['created']) 



	}

	return {

		'change_trigger': change_trigger,//responsible for changing the map etc when needed
	};
}());