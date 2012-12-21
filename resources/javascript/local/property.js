var animation;

$(document).ready(function(){
	$('#navigation_browse li, #navigation_top li, .bumpbox').hover(function(){
		bumpbox_window_status = false;
	},function(){
		bumpbox_window_status = true;
	});

	$('#navigation_browse li').hover(
	function(){
		navigation_bar_animation($(this), true);
	},function(){
		navigation_bar_animation($(this), false);
	});
	
	$('#navigation_browse').mouseleave(function(){
		navigation_bar_animation($('#navigation_browse li'));
	});
	
	$('#thumbnail_container').on('mouseenter', '.thumbnail', function() {
			thumbnail_animation($(this));
	});
	
	$('#thumbnail_container').on('mouseleave', '.thumbnail', function() {
			thumbnail_animation($(this));
	});
	
// END DOCUMENT READY FUNCTION
});

function main_content_display(type){
/*
	var element = new Array();
	element[0] = $('#page_content');
	if(type=='lower')
		{
			element[0].fadeOut(time);
		}	
	else
		{
			element[0].fadeIn(time);
		}
	*/	
}

function navigation_bar_animation(element, type){
	// THIS FUNCTION ASSUMES THAT NESTED ELEMENTS ARE ONE DEEP WITH UL's inside of li elemnt
	//THIS FUNCTION ASSUMES THAT YOU ARE PASSING IT A TOP LEVEL LI

	hide();	
	if(type)
		{
			animation = setTimeout(function(){
				element.children('ul').show('clip', time);						
			}, time);
		}

	function hide(){
		window.clearTimeout(animation);
		element.parent('div').children('li').children('ul:visible').stop().hide('clip', time);
	}
}

// HARD CODED FOR PROPERTY_BROWSE THUMBNAILS!
function thumbnail_animation(current){
	var blurb, image;
	image = current.find('.image');
	blurb = current.find('.blurb');
	
	thumbnail_reset(current.siblings('.thumbnail'));
	
	if(blurb.css('display') === 'none') {//INITIAL HOVER ANIMATION
		blurb.hide().fadeIn(time);
		image.css({
			'opacity': 0.5,
		});
	}
	else if(blurb.css('display') === 'block') {
		blurb.show().fadeOut(time);
		image.css({
			'opacity': 1,
		});
	}
}

function thumbnail_reset(current){
	
	current.find('.image').css({'opacity': 1});
	current.find('.blurb').hide();
	
}

