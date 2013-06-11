###
	Initialize a temporary bumpbox listener that will pop up a bigger box that the image can be displayed in etc
###
Project.Pages.ListingImage = (listener, bumpbox) ->

	# cache a few variables etc
	images = pageData.slideshow_images
	image = bumpbox.find ".content > img"
	currentUrl = images["0"].url
	next = bumpbox.find ".next"
	prev = bumpbox.find ".prev"
	exit = bumpbox.find(".exit")
	length = images.length

	alert length


	# cache a variable for animation duration
	animationDuration = 200

	# basic hide function etc
	hide = ->

		bumpbox.fadeOut animationDuration

	show = ->	

		# grab the current url etc
		currentUrl = listener.find("div:visible > img").attr "src"

		# update the the current image etc
		image.attr "src", currentUrl 

		# now show the bumpbox
		bumpbox.fadeIn animationDuration


	# listen on clicks etc
	exit.click ->


		do hide

	# listen on click etc
	listener.click ->

		do show

	# initialize next / previous listeners etc
	next.click ->

		# determine current key
		id = parseInt(key) for key, object of images when object.url == currentUrl
		# determine next key
		next = if id < length - 1 then id + 1 else 0

		# update image
		currentUrl = images["#{next}"].url
		image.attr "src", currentUrl

	prev.click ->	

		# determine current key
		id = parseInt(key) for key, object of images when object.url == currentUrl

		# determine next key
		prev = if id == 0 then length - 1 else id - 1

		# update image
		currentUrl = images["#{prev}"].url
		image.attr "src", currentUrl

