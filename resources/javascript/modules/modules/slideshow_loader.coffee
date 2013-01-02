Project.Modules.Slideshow_loader = (images, container, template) ->

	for image in images

		html = template image

		container.append html




