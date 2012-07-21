// WE WANT TO INCLUDE SOME SORT OF GALLERY FUNCTION FOR THE HOMEPAGE
$(document).ready(function(){

	// THE FOLLOWING LISTENER ALSO WILL CONTROL THE CURRENT_TAB CLASS BECAUSE WE WANT TO GRAB THE CLASS BEFORE ADDING CURRENT!
	$('#navigation_top li, #navigation_left li').click(function(){
		var current = $(this).attr('class');
		if($(this).hasClass('current'))
			bumpbox_hide_controller();
		else
			{
				bumpbox_display_controller(current);
				navigation_elements_style($(this));				
			}
	});
	
	// THIS IS SO THAT YOU CAN HIDE THE ELEMENT

	bumpbox_display=false;
	
	$(window).click(function(){
		bumpbox_window_hide();
	});	
	
	// BELOW IS NOT FOR DYNAMICALLY GENERATED JS
	$('.bumpbox .trigger').children().click(function(){
		var member = $(this).attr('class');
		var bumpbox = $(this).parent().parent();
		var content = bumpbox.children('.content');
		var new_content = content.children('.' + member);
		bumpbox_content_controller(bumpbox, content, new_content);	
	});

	$('.bumpbox').children('.next, .previous').click(function(){
		var parent, slide, direction;
		direction = $(this).attr('class');
		parent = $(this).parent().children('.content');//the slides are just the divs inside per our team.php bumpbox...
		children = 'div';
		slide_show(parent, slide, direction);
		
				
	});
// END DOCUMENT READY
});

// THE FOLLOWING FUNCTIONS ARE TO HELP SEPERATE THE CONTROLLER FROM THE OTHER PIECES SO THAT BUMPBOX IS EASY TO WORK WITH
// JUST NEED TO ADD THE LISTENER LIKE ON HOMEPAGE JS FOR EACH PAGE AND JUST UPDATE WHICH ELEMENTS HIDE!
// TO CHANGE THE TRANSITIONS, CHANGE SHOW_HIDE_ELEMENT FUNCTION IN SITE_WIDE.js

function bumpbox_display_controller(element){
	// WE ARE DOING EXTRA LOGIC HERE TO ENSURE THAT THE CONTENT FADING WORKS PROPERLY!
	if(element)
		{
			test_element = 'bumpbox ' + element;
			element = '.bumpbox.' + element;
		
			if(!bumpbox_display)//we want to lower the opacity!
				{
					element_show_hide(element, 'show');
					main_content_display('lower'); //this will be two functions with the same name--one on homepage and  another on the content pagess
					bumpbox_display = true;
				}
			else//opacity does not need to be lowered nor does bumpbox_display need to change
				{
					var current_element = $('.bumpbox:visible').attr('class');
					
					if(test_element == current_element)
						bumpbox_hide_controller();
					else{
						$('.bumpbox').fadeOut(time);
						// JUST A SIMPLE FADEOUT THAT ISN'T INSIDE OF THE MAIN DISPLAY CONTROLLER
						element_show_hide('.bumpbox.' + element , 'show');
					}
				}
		}
	else
		bumpbox_hide_controller();
}

function bumpbox_hide_controller(){
		$('#navigation_left, #navigation_top').children('li').removeClass('current');
		element_show_hide('.bumpbox', 'hide');
		main_content_display(); //this will be two functions
		bumpbox_display = false; //the bumpbox is hidden
}	

function bumpbox_window_hide(){
	if(bumpbox_display && bumpbox_window_status)
		bumpbox_hide_controller();
	
}

// THE FOLLOWING IS TO CHANGE THE CURRENT CONTENT OF THE BUMPBOX BASED ON WHAT IS SENT TO THE FUNCTION...
// SEND THE container and the content
function bumpbox_content_controller(bumpbox, content, new_content){
	content.children('div').fadeOut(time);
	new_content.delay(time).fadeIn(time);

	
}


