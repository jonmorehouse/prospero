// THESE ARE THE GENERIC FUNCTIONS FOR THE SITEWIDE PART!
var search_bar, form_value;

$(document).ready(function(){
	
	// DOM ELEMENTS
	search_bar = $('#search');
	
	navigation_elements = $('#navigation_browse li, #navigation_left li, #navigation_top li');

	// ASSORTED VALUES
	form_value = search_bar.find('input[name="search"]').attr('value');

	// functions

	search_input_controller();

});

function slide_show(parent, slide, direction){
	// ELEMENT IS THE PARENT ELEMENT!
	// WILL ASSUME THAT DIVS ARE INSIDE AND BEING SHIFTED
	current = parent.children(slide).filter(':visible');
	max_length = parent.children(slide).index();
	parent.stop();
	
	var new_slide, horizontal_position;
	if(direction == 'next')
		{
			horizontal_position = '-100%';
			// vertical_position = '0'; --this is not currently being used...
			if(current.index()!=max_length)
				new_slide = current.next();
			else
				new_slide = parent.children(slide).first();	
		}
		
	else
		{
			horizontal_position = '100%';
			if(current.index()!=0)
				new_slide = current.prev();
			else
				new_slide = parent.children(slide).last();
		}
			
	// ANIMATIONS SECTION!!!--this is good for now. Can work on it later...
	current.fadeOut(time*2);
	new_slide.fadeIn(time*2);
}

function element_show_hide(element, type){
	// TAKES AN ELEMENT AND WILL FADE IT OUT AND USE THE ANIMATIONS THAT WE WANT TO APPLY AROUND THE SITE
	// WRITE LOGIC IN SO THAT IT WILL AUTOMATICALLY SHOW OR HIDE IT..
	//IF YOU PASS A FIRST PARAMETER HIDE
	if(type=='hide')
		{
			$(element).fadeOut(time);	
		}
	// IF YOU PASS A SECOND PARAMETER SHOW!
	else if(type=='show')
		{
			$(element).fadeIn(time);
		}	
	
	else
		{//this function finds out if the element is displayed already and automatically determines it...
			var status = $(element).css('display');
			if(status=='none')
				{
					$(element).fadeIn(time);
				}
			else
				{
					$(element).fadeOut(time);
				}
		}
}

function navigation_elements_style(current_tab){
	navigation_elements.removeClass('current');
	current_tab.addClass('current');
}

function search_input_controller(){
	// Could we call a function like this for each value in an object?
		// this would then be instantiated seperately for each one?
	
	var current = search_bar.find('input[name="search"]');
	
	search_bar.focusin(function(){
		current.attr('value', '');
	});
	
	search_bar.focusout(function(){
		if(current.attr('value') === '')
			current.attr('value', form_value);
		else
			form_value = current.attr('value');
	});
}

