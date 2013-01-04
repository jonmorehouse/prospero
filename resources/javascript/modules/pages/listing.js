// Generated by CoffeeScript 1.4.0
(function() {
  var __indexOf = [].indexOf || function(item) { for (var i = 0, l = this.length; i < l; i++) { if (i in this && this[i] === item) return i; } return -1; };

  (Project.Pages.Listing = function() {
    var bumpboxDependencies, bumpboxes, elements, fade, listingBumpboxes, listingSlideshow, topBumpbox;
    elements = [$('#navigation_left'), $('#navigation_top'), $('#logo'), $('#search'), $('#header'), $('#content')];
    topBumpbox = Project.Pages.Bumpbox(elements);
    fade = topBumpbox.fade;
    bumpboxes = pageData.listing_bumpboxes;
    bumpboxDependencies = {
      listing_inquire: Project.Modules.inquire_controller
    };
    (listingBumpboxes = function() {
      var bumpbox, containers, contentModules, inquireAnimation, listeners, listingMapController, listingMapThumbnailController, modules, _i, _len;
      listeners = {};
      containers = {};
      modules = {};
      contentModules = {};
      for (_i = 0, _len = bumpboxes.length; _i < _len; _i++) {
        bumpbox = bumpboxes[_i];
        listeners[bumpbox] = $("#navigation_left li[data-link=\"" + bumpbox + "\"]");
        containers[bumpbox] = $(".bumpbox." + bumpbox);
        modules[bumpbox] = new Project.Modules.bumpbox(listeners[bumpbox], containers[bumpbox]);
        modules[bumpbox]['config']['in_callback'] = fade.fadeOut;
        modules[bumpbox]['config']['out_callback'] = fade.fadeIn;
        if (bumpboxDependencies[bumpbox]) {
          modules[bumpbox] = new bumpboxDependencies[bumpbox](listeners[bumpbox], containers[bumpbox]);
        }
      }
      if (__indexOf.call(bumpboxes, "listing_inquire") >= 0) {
        inquireAnimation = new Project.Modules.form_animation(containers["listing_inquire"]);
      }
      if (__indexOf.call(bumpboxes, "listing_map") >= 0) {
        listingMapThumbnailController = new Project.Modules.thumbnail_controller(containers["listing_map"].children(".thumbnails").children("ul"), containers["listing_map"].children(".content"));
        listingMapThumbnailController.config.default_id = "walkscore";
        modules.listing_map.config.in_callback = function() {
          fade.fadeOut();
          return listingMapThumbnailController.reset();
        };
        modules.listing_map.config.out_callback = function() {
          fade.fadeIn();
          return listingMapThumbnailController.reset();
        };
        listingMapController = new Project.Modules.listing_map_controller();
        listingMapThumbnailController.config.change_trigger = listingMapController.changeTrigger;
      }
      return listeners['listing_map'].trigger("click");
    })();
    return (listingSlideshow = function() {
      var containers, controller, image_template;
      containers = {
        thumbnails: $("#slideshow > div.thumbnails"),
        slideshow: $("#slideshow > div.content")
      };
      image_template = function(image) {
        return "<div data-id='" + image.id + "'>\n\t<img src='" + image.url + "' alt='" + image.alt + "' />\n</div>";
      };
      Project.Modules.Slideshow_loader(pageData.slideshow_images.slice(1), containers.slideshow, image_template);
      Project.Modules.Slideshow_loader(pageData.slideshow_thumbnail_images.slice(1), containers.thumbnails, image_template);
      return controller = new Project.Modules.thumbnail_controller(containers.thumbnails, containers.slideshow, pageData.slideshow_images[0]['id']);
    })();
  })();

}).call(this);
