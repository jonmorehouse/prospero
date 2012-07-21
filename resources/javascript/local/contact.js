$(document).ready(function(){
	
	$('.bumpbox.team').children('input, textarea').each(function(){
		var element, default;
		element = $(this);
		validation(element);		
	});

});

// THIS IS SO WHEN YOU LEAVE OR ENTER IT WILL CHANGE VICE VERSA!!!
function validation(element){
	var current_value = $(this).value();
	
	element.focusin(function(){
		if(current_value == default)
			$(this).value('');
	});
	
	element.focusout(function(){
		if(current_value == "")
			$(this).value(default);
	});	
}
