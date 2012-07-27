/* Notes:
	a prototype is an object from which other objects inherit functinos/traits etc
	
*/

var page_container;

$(document).ready(function() {
	
	page_container = $('#page_content');
	
	// alert(model.Podcast.prototype.toString);
	$('#management_dashboard .save').click(function() {
		content_submission();
	});
});

function content_submission() {
	
	// variable settings
	var parent_form;

	parent_form = page_container.children('#form');//declare the master form -- there are forms inside of this however
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
			
			this.container.find('form').each(function(){
				
				var current = $(this);
				$.extend(form_data, get_form_data.input(current));//combine the objects
				$.extend(form_data, get_form_data.radio(current));//combine the objects
				
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
					
					alert(content);
					
				}
			});//end ajax call
		};//end post_data method

}).apply(management_submit);


var get_form_data = get_form_data || {};

//could make this a prototype and could pass it a global 

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

