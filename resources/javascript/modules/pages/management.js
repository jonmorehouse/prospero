/* Notes:
	a prototype is an object from which other objects inherit functinos/traits etc
*/
var login_page = (function($, document) {

	$(document).ready(function() {

		$('#login').find('input').click(function() {

			var old_value = $(this).attr('value');
			$(this).attr('value', '');

			$(this).blur(function() {

				if (!$(this).attr('value') || $(this).attr('value') == "")
					$(this).attr('value', old_value);
			});
		});

	});
}(jQuery, document));

var multiple_fields = (function($, document) {


	$(document).ready(function() {

		$('#form input, textarea, #form form input').blur(function() {

			var name = $(this).attr('name'),
				value = $(this).attr('value'),
				type = $(this).prop('tagName');

			var test =	$('#form').find(type + '[name="' + name + '"]').attr('value', value);

		});
	});

}(jQuery, document));

/********* OLD MANAGEMENT CODE BASE *********/
var page_container,
	running = false;

$(document).ready(function() {
	
	page_container = $('#page_content');
	
	$('#listing_dashboard .save, #general_dashboard .save').click(function() {
		
		if (!running) {

			running = true;
			start_loading();//this will start the loading of the image
			content_submission();
		}

	});

	$('#form input').keypress(function() {
		if(event.which == 13) {
			start_loading();
			content_submission();
			return false;
		}
	});
	
	$('input, textarea').focus(function() {
		content_submission();
	});

});

function start_loading() {

	$('#listing_dashboard .loading, #general_dashboard .loading').fadeIn(500);
}

function stop_loading() {

	$('#listing_dashboard .loading, #general_dashboard .loading').fadeOut(500);
}

function content_submission() {
	
	// variable settings
	var parent_form;

	parent_form = page_container.find('#form');//declare the master form -- there are forms inside of this however
	management_submit.form_type = parent_form.attr('data-form_type');//form type -- save is the general, property_listing and media_status are 'special cases'
	management_submit.url = parent_form.attr('data-destination');//the destination -- as set in the hard coded form
	management_submit.container = parent_form;//master form as above
	management_submit.page_container = page_container;//the page container to be replaced with ajax on successful load
	
	// submit the form by using the prototype
	management_submit.submit();
}

var management_submit = {//defaults -- uses the prototype below

	form_type: 'save',
	url: 'ajax/management/save',
	container: '',
	page_container: $('#page_content'),

};

(function () {//prototype for submitting data
		
		this.data = {};
		
		this.submit = function() {//controller function for the namespace
			
			// set the proper data object values depending upon the forms included
			if('property_status' === this.form_type)
				this.property_status();
			else if('media_status' === this.form_type)
				this.media_status();
			else
				this.save();
				
			this.post_data();//will post the data and update the page 
		};
		
		this.save = function() {
			
			var form_data = {};
			
			// form_data.property_id = this.container.find('form').attr('data-property_id');
			this.container.find('form').each(function(){
				
				var current = $(this);

				$.extend(form_data, get_form_data.input(current));//combine the objects
				$.extend(form_data, get_form_data.radio(current));//combine the objects
				$.extend(form_data, get_form_data.hidden(current));//combine the objects!
				
			});
			
			this.data = form_data;//set the global object as the local object
		};
		
		this.property_status = function() {
				
			var property_status = {};
			
			this.container.children('form').each(function() {
				var current = $(this);
				property_status[current.attr('data-property_id')] = get_form_data.radio(current);
			});
			
			$.extend(this.data, property_status);
		};
		
		this.media_status = function() {
			
			var form_data = {};
			form_data['property_id'] = this.container.find('form').attr('data-property_id');//store the property_id to send to the server
			
			this.container.find('form').each(function() {
				
				var current = $(this);
				var category = current.attr('data-category');
				form_data[category] = get_form_data.radio(current);

			});
			
			/* sample form:
				<form data-category='' data-property_id='' >
					<radio name='media_id' vale='true/false'>
					
			
			*/
			
			$.extend(this.data, form_data);

		};
	
		this.post_data = function() {

			$.ajax({
				url: this.url,
				data: this.data,
				type: 'post',
					
				success:function(content) {
					
					stop_loading();

					console.log(content);
					content = $.parseJSON(content);

					if (content.property_id !== undefined) {//need to update the category!
						$('#form').find('input[name="property_id"]').attr('value', content.property_id);
					}
					running = false;
				}
			});//end ajax call
		};//end post_data method

}).apply(management_submit);


var get_form_data = get_form_data || {};

//could make this a prototype and could pass it a global 
	get_form_data.hidden = function(container) {
		
		var data = {};
		
		container.find('input[type="hidden"]').each(function() {
			

			data[this.name] = this.value;
			
		});
		
		return data;
		
	}
	
	get_form_data.input = function(container) {
		
		var data = {};
	
		container.find('input[type="text"], textarea').each(function() {
		
			data[this.name] = this.value;
		});
		
		return data;//return the object
	}

	get_form_data.password = function(container) {
	
		var data = {};
		
		container.find('input[type="password"]').each(function() {
			
			data[this.name] = this.value;
		
		});
	
		return data;
	}

	get_form_data.radio = function(container) {//will return the value 
		
		var data = {};//function data object to return
		
		container.find('input[type="radio"]:checked').each(function() {
			
			data[this.name] = this.value;
		});

		return data;
	}

	get_form_data.checkbox = function(container) {//will return the values that are checked
	
		var data = {};
		
		container.find('input[type="checkbox"]:checked').each(function() {
			
			var data = data[this.name];
			data.push(this.value);
			
		});
		
		return data;
	}
