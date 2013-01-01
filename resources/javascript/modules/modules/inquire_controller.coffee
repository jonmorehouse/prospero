Project.Modules.inquire_controller = (listener, container) ->

	config = 

		# basic elements
		form : container.children "form"
		destination : container.children("form").attr "destination"
		messageContainer : 	container.children("form").attr "destination"
		submitButton : container.find "button[type='submit']"

		# extra data
		serverData : pageData.listingInquireData

		# animation settings
		animationTime: 1000 #how long the animations take!
		messageHold: 5000 #how long we show a message


		# declare the success and failure messages for the inquire to handle
		success : (response) ->

			config.messageContainer.html response.message

			config.form.fadeOut config.animationTime, () ->

				config.messageContainer.fadeIn config.animationTime, () ->

					timer = () ->
						config.messageContainer.fadeOut config.animationTime

					setTimeout timer, config.messageHold

		failure : (response) ->

			config.messageContainer.html response.message
			config.messageContainer.fadeIn config.animationTime, () ->

				timer = () ->
					config.messageContainer.fadeOut config.animationTime

				setTimeout time, config.messageHold


	data = () ->


		_data = config.serverData
		_data.message = config.form.find("textarea").html()
		_data.email = config.form.find("input[name='email']")

		return _data


	config.submitButton.click () ->

		data = do data
		console.log data

		return false


