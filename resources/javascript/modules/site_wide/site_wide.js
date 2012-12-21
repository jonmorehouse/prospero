var Project = (function($, window) {

	var Pages = Pages || {};

	var Modules = Modules || {};

	var Global = {};

	return {

		'pages': Pages,
		'Pages': Pages,

		'modules': Modules,
		'Modules': Modules,

		'global' : Global,
		'Global' : Global, 

	};

}(jQuery, window));


Project.Pages = (function() {

	var Site_wide = Site_wide || {};//site wide initialize seaf
	var Homepage = Homepage || {};//homepage base page
	var Listing = Listing || {};//listing base page 

	return {

		'Site_wide': Site_wide,
		'site_wide': Site_wide,

		'homepage': Homepage,
		'Homepage' : Homepage,
		
		'listing' : Listing,
		'Listing' : Listing,

	};
}());

Project.Global.google_maps = {

	"api_key" : "asdf",

};