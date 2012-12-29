do Project.Pages.Property = () ->

	elements = [$('#navigation_browse'), $('#navigation_top'), $('#logo'), $('#search'), $('#header'), $('#page_content')]

	Project.Pages.Bumpbox elements
	

	search_bar_animation = new Project.Modules.form_animation $('#search')

	
	
