var timer, n=0;

$(document).ready(function(){

	search_bar.find('input[name="submit"]').click(function(){
		property_page_submit();
		return false;
	});
	
	search_bar.find('input[name="search"]').keyup(function(event){
		
		if(event.which == 13)
			return false;
		property_page_submit();
	});
});

function property_page_submit(){

	var data, element, url;
	
	data = new Object();
	
	data.search = search_bar.find('input[name="search"]').attr('value');

	url = "http://localhost:8888/cgi-bin/search.cgi?search?" + data.search;

	$.ajax({
		url: url,
		type: 'get',
		
		success: function(msg){
			$('#thumbnail_container').html(msg);
		}
	});
}