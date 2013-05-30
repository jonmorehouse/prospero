# assume that all libraries / dependencies are loaded in before hand
config = 

	paths: 
		angular: "/resources/javascript/resources/angular.min"
		jquery: "/resources/javascript/resources/jquery"

# initialize require with the proper config
require.config config

# 
require ["angular"], ($) ->

	# 
	alert "HELLO WORLD"	
					





