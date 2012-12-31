do Project.Pages.Listing = () ->

	elements = [$('#navigation_browse'), $('#navigation_top'), $('#logo'), $('#search'), $('#header'), $('#content')]

	Project.Pages.Bumpbox elements

	search_bar_animation = new Project.Modules.form_animation $('#search')
