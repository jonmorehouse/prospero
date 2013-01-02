Project.Modules.inquire_controller = (listener, container) ->

	config = 

		# basic elements
		form : container.find "form"
		destination : container.find("form").attr "destination"
		messageContainer : 	container.find(".message")
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
						$('#bumpbox_out_trigger').trigger "click"
						config.messageContainer.html response.final_message

					setTimeout timer, config.messageHold

		error : (response) ->
			
			config.messageContainer.html response.message

			config.messageContainer.fadeIn config.animationTime, () ->

				timer = () ->
					config.messageContainer.fadeOut config.animationTime

				setTimeout timer, config.messageHold

	data = () ->

		_data = config.serverData
		_data.message = config.form.find("textarea").attr "value"
		_data.email = config.form.find("input").attr "value"

		return _data

	config.submitButton.click () ->

		$.ajax
			url: config.destination
			data: do data
			type: 'POST'
			dataType: 'json' 

			error: (response) ->

				console.log response

			success: (response) ->

				if response.status
					config.success response

				else 
					config.error response
		
		return false
