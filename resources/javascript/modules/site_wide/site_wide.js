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


Project.Global.temp = (function() {

	// less css persistently caches mixins / code that is included with the @import tags
	// this is a quick function to help remove those changes

	function destroyLessCache(pathToCss) { // e.g. '/css/' or '/stylesheets/'
	 	
	  // if (!window.localStorage || !less || less.env !== 'development') {
	  //   return;
	  // }

	  var host = window.location.host;
	  var protocol = window.location.protocol;
	  var keyPrefix = protocol + '//' + host + pathToCss;
	  	
	  for (var key in window.localStorage) {
	    if (key.indexOf(keyPrefix) === 0) {
	      delete window.localStorage[key];
	    }
	  }
	}

	destroyLessCache("/resources/css/local/");

}());
