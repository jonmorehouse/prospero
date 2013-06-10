do Project.Pages.Listing = () ->

	elements = [$('#navigation_left'), $('#navigation_top'), $('#logo'), $('#search'), $('#header'), $('#content')]

	topBumpbox = Project.Pages.Bumpbox elements

	fade = topBumpbox.fade

	bumpboxes = pageData.listing_bumpboxes #this is the list of elements

	# map individual modules to the proper objects
	bumpboxDependencies = 

		listing_inquire: Project.Modules.inquire_controller

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

			 # initialize the bumpbox popup controller
			 modules[bumpbox] = new Project.Modules.bumpbox listeners[bumpbox], containers[bumpbox]
			 modules[bumpbox]['config']['in_callback'] = fade.fadeOut
			 modules[bumpbox]['config']['out_callback'] = fade.fadeIn

			 # initialize the bumpbox content controller -- this is what controls what happens inside!
			 # create a map?
			 if bumpboxDependencies[bumpbox]
			 	modules[bumpbox] = new bumpboxDependencies[bumpbox] listeners[bumpbox], containers[bumpbox]


		#special cases for bumpboxes here!
		# these are generally hard - coded non reusuable front-end modules for this application
		# responsible for interacting with the pageData global
		if "listing_inquire" in bumpboxes
			inquireAnimation = new Project.Modules.form_animation containers["listing_inquire"]

		if "listing_map" in bumpboxes

			# need to map the bumpbox listner to the thumbnail controller
			# need to map the thumbnail controller to the listingMapController
			listingMapThumbnailController = new Project.Modules.thumbnail_controller containers["listing_map"].children(".thumbnails").children("ul"), containers["listing_map"].children(".content") #return a change trigger
			listingMapThumbnailController.config.default_id = "walkscore"

			# connect the bumpbox click to listingMapThumbnailController to target a change_trigger that can be used to contact the actual code base later
			modules.listing_map.config.in_callback = () ->

				# do the normal element, but also do a reset on the actual caller etc!
				do fade.fadeOut
				do listingMapThumbnailController.reset

			# connect the call out to ensure proper reset!
			modules.listing_map.config.out_callback = () ->

				do fade.fadeIn
				do listingMapThumbnailController.reset

			listingMapController = new Project.Modules.listing_map_controller()
			listingMapThumbnailController.config.change_trigger = listingMapController.changeTrigger

		# development work
########### listeners['listing_map'].trigger "click"
	do listingSlideshow = () ->

		containers = 
			thumbnails : $("#slideshow > div.thumbnails")
			slideshow : $("#slideshow > div.content")
			imageBumpbox: $("#slideshow_bumpbox")

		# want an 
		image_template = (image) ->

			return "<div data-id='#{image.id}'>\n\t<img src='#{image.url}' alt='#{image.alt}' />\n</div>"

		# initialize the images 
		Project.Modules.Slideshow_loader pageData.slideshow_images[1..], containers.slideshow, image_template
		Project.Modules.Slideshow_loader pageData.slideshow_thumbnail_images[1..], containers.thumbnails, image_template

		# initialize slideshow controller -- initialize it with a default id -- ie: a first element to show!
		controller = new Project.Modules.thumbnail_controller containers.thumbnails, containers.slideshow, pageData.slideshow_images[0]['id']

		slideShowBumpbox = new Project.Pages.ListingImage containers.slideshow, containers.imageBumpbox 









