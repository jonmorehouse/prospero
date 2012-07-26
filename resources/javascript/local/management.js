var form = {};

form.form_data = {};

form.get_radio_input = function(container) {
	
	container.find('input[type="radio"]').each(function() {
		
		var current = $(this);
		var current_key = current.attr('name');//should be the category in our database
		var current_value = current.attr('value');//should be the value to send to the database
		
		this.form_data.current_key = current_value;
		
	});
	
	return data;//return the object of the values
}

form.get_text_input = function(container) {
	
	var data = {};
	
	container.find('input[type="text"], textarea').each(function() {
		
		var current = $(this);//current element in the loop
		var current_key = current.attr('name');//the category
		var current_value = current.attr('value');//value to update the database with
		
		this.form_data.current_key = current_value;//push into the object
	});
	
	return data;//return the object
}

form.get_password_input = function(container) {
	
	var data = {};
	
	container.find('input[type="password"]').each(function() {
		
		var current = $(this);//current element
		var current_key = current.attr('name');//the category
		var current_value = current.attr('value');//value to update the database with
		
		this.form_data.current_key = current_value;
		
	});
	
	return data;
}

form.get_radio_input = function(container) {//will return the value 
	
	var data = {};//new object
	
	container.find('input[type="radio"]').attr('checked').each(function() {
		
		var current = $(this);//current element
		var current_key = current.attr('name');//the category
		var current_value = current.attr('value');//value to update the database with
		
		this.form_data.current_key = current_value;
		
	});
	
	return data;
}

form.get_checked_input = function(container) {//will return the values that are checked
	
	container.find('input[type="checkbox"]').each(function() {
		var current = $(this);//current
		var values = {};
		var category_name = current.attr('name');
		var category_vaue = current.attr('value');
		if(!this.form_data.category_name)
			this.form_data.category_name = array();
		this.form_data.category_name.category_value;
		
	});
}

form.get_all_input