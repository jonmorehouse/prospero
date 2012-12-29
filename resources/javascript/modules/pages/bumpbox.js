// Generated by CoffeeScript 1.4.0
(function() {

  Project.Pages.bumpbox = function(elements) {
    var animationTime, controller, controllers, fade, fadedOpacity, key, modules, setConfig,
      _this = this;
    animationTime = 1000;
    fadedOpacity = 0.3;
    fade = {
      fadeIn: function() {
        return elements.map(function(element) {
          var css;
          css = {
            opacity: 1.0
          };
          return element.animate(css, animationTime);
        });
      },
      fadeOut: function() {
        return elements.map(function(element) {
          var css;
          css = {
            opacity: fadedOpacity
          };
          return element.animate(css, animationTime);
        });
      }
    };
    controllers = {
      map: new Project.Modules.bumpbox($('#navigation_top li.map'), $('.bumpbox.map')),
      contact: new Project.Modules.bumpbox($('#navigation_top li.contact'), $('.bumpbox.contact'))
    };
    modules = {
      map: new Project.Modules.thumbnail_controller($('.bumpbox.map > .thumbnails ul'), $('.bumpbox.map > .content')),
      map_controller: new Project.Modules.bumpbox_map_controller($('.bumpbox.map > .thumbnails ul'), $('.bumpbox.map > .content')),
      contact: new Project.Modules.contact($('.bumpbox.contact').children("div:nth-child(2)"), site_url + "general_rest/submit_email"),
      contact_animation: new Project.Modules.form_animation($('.bumpbox.contact'))
    };
    setConfig = (function() {
      var _results;
      _results = [];
      for (key in controllers) {
        controller = controllers[key];
        controller["config"]["in_callback"] = fade.fadeOut;
        controller["config"]["out_callback"] = fade.fadeIn;
        if (modules[key] && modules[key]["reset"]) {
          _results.push(controller["reset"] = modules[key]["reset"]);
        } else {
          _results.push(void 0);
        }
      }
      return _results;
    })();
    return modules['map']['config']['change_trigger'] = modules['map_controller']['change_trigger'];
  };

}).call(this);
