do Project.Pages.Listing = () ->

	elements = [$('#navigation_left'), $('#navigation_top'), $('#logo'), $('#search'), $('#header'), $('#content')]

	Project.Pages.Bumpbox elements

	bumpboxes = pageData.listing_bumpboxes #this is the list of elements

	do listingBumpboxes = () ->

		# create the dom elements and cache them
		# create the show / hide master listeners
		# for each of the elements, require the proper functions etc
		listeners = {} #the listeners -- cached so we can optimize
		containers = {}	#the actual containers that hold the content	
		modules = {} #responsible for showing the elements and not showing them
		contentModules = {} #the magic behind what happens in the bumpboxes

		# notes, we send modules a reset element from contentModules ... that way we can easily map these together
		for bumpbox in bumpboxes
			 listeners[bumpbox] = $("#navigation_left li[data-link=\"#{bumpbox}\"]")
			 containers[bumpbox] = $(".bumpbox.#{bumpbox}")

			 # 
			 modules[bumpbox] = new Project.Modules.bumpbox listeners[bumpbox], containers[bumpbox]
			 
			 
	
