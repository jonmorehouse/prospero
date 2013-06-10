###
	Initialize a temporary bumpbox listener that will pop up a bigger box that the image can be displayed in etc
###
Project.Pages.ListingImage = (listener, bumpbox) ->

	# cache a few variables etc
	image = bumpbox.find ".content > img"
	exit = bumpbox.find(".exit")

	# cache a variable for animation duration
	animationDuration = 200

	# basic hide function etc
	hide = ->

		bumpbox.fadeOut animationDuration

	show = ->	

		# grab the current url etc
		img = listener.find("div:visible > img").attr "src"

		# update the the current image etc
		image.attr "src", img

		# now show the bumpbox
		bumpbox.fadeIn animationDuration

	# listen on clicks etc
	exit.click ->

		do hide

	# listen on click etc
	listener.click ->

		do show
