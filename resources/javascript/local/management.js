$(document).ready(function(){
	var form_value;
	
	$('#page_container').on('click', '#management_dashboard .save', function(){
		// WE WANT TO GET THE MAIN CONTENT PAGE TO GET THE LISTING--SO WE KNOW WHAT TO SAVE!
		var element_id, element;
		element_id = $(this).parent().siblings('div').attr('id');
		element = $('#' + element_id);
		save(element);
	});
	
	$('#login').find('input[type="text"], input[type="password"]').focus(function(){
		
		var current;
		current = $(this);
		form_value = current.attr('value');
		current.attr('value', '');
	});
	
	$('#login').find('input[type="text"], input[type="password"]').focusout(function(){
		
		var current;
		current = $(this);
		if(current.attr('value') == '')
			current.attr('value', form_value);

	});
	
	$('form').find('input[name="property_status"]').each(function() {
		var current = $(this);
		alert(current.attr('data-property_id'));
	});

});

function site_submit(data, url, destination){
	$.ajax({
		url: url,
		type: 'post',
		data: data,
		success: function(msg){
			destination.html(msg);
		}
	});
}

function message_flash(element){
	
	element.fadeIn(time);
	setTimeout(function(){
		element.fadeOut(time);
	}, time*4);
}

// SUBMIT SAVE
function save(element){
	
	var data, url;

	url = site_url + 'ajax/management/save_listing';

	data = form_data();

	site_submit(data, url, element);
	message_flash($('.save .content'));
}

function form_data(){
	var data;
	
	data = new Object();
	
	$('input[type="radio"]:checked').each(function(){
		var input_name, input_value, current;
		current = $(this);
		input_value = current.val();
		input_name = current.attr('name');
		data[input_name] = input_value;
	});
	
	$('textarea').each(function(){
		var input_name, input_value, current;
		current = $(this);
		input_value = current.val();
		input_name = current.attr('name');
		data[input_name] = input_value;
	});
	
	$('input[type="text"]:visible').each(function(){
		var input_name, input_value, current;
		current = $(this);
		input_value = current.val();
		input_name = current.attr('name');
		data[input_name] = input_value;
	});
	
	data.property_id = $('input[name="property_id"]').val();
	
	return data;
}


