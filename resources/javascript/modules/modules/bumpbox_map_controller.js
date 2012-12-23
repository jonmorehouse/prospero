Project.modules.bumpbox_map_controller = function(thumbnails, container) {

	// this is responsible for controlling the maps and creating them
	// will be responsible for getting data and creating map objects from prototypes
	// will be responsible for creating a map if not already created!
	/*

		loop through each element in the the container list,
		grab data and 
	*/

	var maps = {};//map data and modules contained -- will contain objects!

	var init = (function() {

		container.children('div').each(function() {

			var current = $(this),
				id = current.attr('data-id'),
				category = current.attr('data-category'),
				url = current.attr('data-url');

			var data = {

				element: current,//cache the element so that we can store stuff in it
				id: id,//cache the id -- this is the element id -- not completely necessary but helpful
				created: false,//map not created yet
				ready: false,//data is not recieved -- not ready to be created

			};//end of data

			(function() {//initialize the data

					$.ajax({

						url: url,
						data: {filter: category},
						dataType: 'JSON',
						method: 'post'

					}).done(function(_data) {


						data['data'] = _data;//initialize data!
						data['ready'] = true;//data is processed

						return true;
					});
				}()),

			maps[id] = data;
		});//end of each loop

		// end of init function
		}());
		
	// trigger a change in the element -- need to ensure that the map is created
	function change_trigger(id) {

		if (maps[id] === undefined || !maps[id]['ready']) {//init is not finished

			return setTimeout(function() {change_trigger(id)}, 200);//we're still waiting on all data to be initialized

		}//

		// we now know that the data is initialized and ready!
		if (!maps[id]['created']) {//id not yet created need to create new module

			maps[id]['module'] = (function() {

				maps[id]['created'] = true;//set this element to created!
				return new Project.Modules.general_map(maps[id]['element'], maps[id]['data']);//return a new map with all of the elements in the space
			}(id));//

		}//end of if loop
		};//end of function

	return {

		'change_trigger': change_trigger,//responsible for changing the map etc when needed
	};
};