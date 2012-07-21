$(document).ready(function(){
	// WHEN THE MOUSE LEAVES NAV OR BUMPBOXES
	// WHEN MOUSE ENTERS THE NAV OR BUMPBOXES WE CAN DEACTIVATE IT BECAUSE IT IS REDUNDANT
	// WHEN OVER THE BUMPBOX DEACTIVATE IT!
	// WHEN WE ARE IN THE OPEN WINDOW CAN DEACTIVATE IT
	$('#navigation_top li, #navigation_left li, .bumpbox').hover(function(){
		bumpbox_window_status = false;
	},function(){
		bumpbox_window_status = true;
	});
});

$(window).load(function(){
	
	// LOAD THE HOMEPAGE GALLERY
	homepage_gallery();

	// AUTOMATED GALLERY
	setInterval(function(){
		slide_show($('#background'), 'img', 'next');
	}, 4000);
	
/*	//THIS LISTENER IS NOW OBSOLETE AS WE HAVE GONE TO AN AUTOMATED GALLERY
	$('#background').on('click', '.next, .previous', function(){
		var direction, parent;
		parent = $(this).parent();
		direction = $(this).attr('class');
		slide_show(parent, 'img', direction);
		});
*/
	
	// SINCE THE BUTTONS ARE LOADED AFTER THE DOM, WE NEED TO ADD THESE SPECIAL PIECES!!
	$('#background').on('mouseenter', '.next, .previous', function(){
		bumpbox_window_status = false;
	});
	
	$('#background').on('mouseleave', '.next, .previous', function(){
		bumpbox_window_status = true;
	});
	
// END WINDOW LOAD FUNCTION
});

// MAIN_CONTENT DISPLAY WILL HAVE TO BE WRITTEN AGAIN FOR EACH PAGE THAT IS NOT DISPLAYED OR PUT IN A SITE WIDE WITH SOME SORT OF UNIVERSAL PARENT CONTAIER!
function main_content_display(type){
	// THESE ARE THE ELEMENTS THAT WILL BE LOWERED WHEN YOU OPEN THE BUMPBOX!!
	var element = new Array();
	element[0] = $('#homepage_blurb');
	if(type=='lower')
		{
			element[0].fadeOut(time);
		}	
	else
		{
			element[0].fadeIn(time);
		}
}

function homepage_gallery(){
	var url = site_url + "ajax/general/background_gallery";
	$.ajax({
		url: url,
		type: 'get',
		success: function(msg){
			$('#background').append(msg);
		}
	});	
}
