Project.modules.bumpbox_map_controller = function(thumbnails, container) {

	// this is responsible for controlling the maps and creating them
	// will be responsible for getting data and creating map objects from prototypes
	// will be responsible for creating a map if not already created!
	/*

		loop through each element in the the container list,
		grab data and 
	
	*/
	var initialize_data = function () {





	}
	$.ajax({

				url : url,
				data: {"filter": category},
				method: 'POST',
				data: 'json',
			}).done(function(data) {


				this.created = true;//this data has been recieved, notify the object that it has

			});
		});//end of data property

	var maps = {};//map data and modules contained -- will contain objects!

	var init = (function() {



	}());

	/* MAP HOLDER*/
	var maps = {};//map data and modules contained -- will contain objects!

	// initialize the functions here
	var init = (function() {



	}());
	
	// trigger a change in the element -- need to ensure that the map is created
	function change_trigger(id) {

		if (maps[id] === undefined) {//init is not finished

			return setTimeout(function() {change_trigger(id)}, 1000);//we're still waiting on all data to be initialized

		}

		if (!maps[id]['created']) return false;



	};

	return {

		'change_trigger': change_trigger,//responsible for changing the map etc when needed
	};
};