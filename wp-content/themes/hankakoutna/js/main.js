// Generated by CoffeeScript 1.3.3
(function() {
  var FormDescription, ScrollView,
    __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

  ScrollView = (function() {

    function ScrollView(element) {
      this.click = __bind(this.click, this);
      this.element = $(element);
      this.make_scroller();
      this.make_switch();
    }

    ScrollView.prototype.click = function(event) {
      var index, target;
      this.switch_element.find("li").removeClass("selected");
      target = $(event.target);
      index = target.attr("data-index");
      target.parent().addClass("selected");
      TweenLite.to(this.element.find(".screen"), .8, {
        "css": {
          "left": index * this.width * (-1)
        },
        "ease": Power4.easeOut
      });
      return false;
    };

    ScrollView.prototype.make_switch = function() {
      var count, id, index, link, _i, _ref, _results;
      count = this.element.find(".view").length;
      id = this.element.attr("data-for");
      this.switch_element = $("#" + id);
      _results = [];
      for (index = _i = 0, _ref = count - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; index = 0 <= _ref ? ++_i : --_i) {
        link = $("<a>", {
          "data-index": index,
          "href": "#"
        });
        link.click(this.click);
        _results.push(this.switch_element.append($("<li>", {
          "class": (index === 0 ? "selected" : "")
        }).append(link)));
      }
      return _results;
    };

    ScrollView.prototype.make_scroller = function() {
      var views;
      views = this.element.find(".view");
      this.width = $(views[0]).width();
      this.element.width(this.width);
      views.width(this.width);
      this.element.find(".screen").width(views.length * this.width);
      views.css("float", "left");
      return views.show();
    };

    return ScrollView;

  })();

  FormDescription = (function() {

    function FormDescription(element, text) {
      this.focus = __bind(this.focus, this);

      this.blur = __bind(this.blur, this);
      this.element = element;
      this.text = text;
      this.element.val(text);
      this.element.css("color", "#999999");
      this.bind_events();
    }

    FormDescription.prototype.bind_events = function() {
      this.element.focus(this.focus);
      return this.element.blur(this.blur);
    };

    FormDescription.prototype.blur = function() {
      if (this.element.val() === "") {
        this.element.val(this.text);
        return this.element.css("color", "#999999");
      } else {
        return this.element.css("color", "#1a1a1a");
      }
    };

    FormDescription.prototype.focus = function() {
      console.log(this.element);
      if (this.element.val() === this.text) {
        this.element.val("");
        return this.element.css("color", "#1a1a1a");
      }
    };

    return FormDescription;

  })();

  $(function() {
    var _this = this;
    $(".scroller").each(function(index, element) {
      return new ScrollView(element);
    });
    if (window.location.href.search(/par-slov/) !== -1) {
      $("header nav li:nth-child(2)").addClass("selected");
    } else if (window.location.href.search(/reference/) !== -1) {
      $("header nav li:nth-child(3)").addClass("selected");
    } else if (window.location.href.search(/galerie/) !== -1) {
      $("header nav li:nth-child(6)").addClass("selected");
    } else if (window.location.href.search(/kontakt/) !== -1) {
      $("header nav li:nth-child(4)").addClass("selected");
    } else if (window.location.href.search(/\/category\//) !== -1) {
      $("header nav li:nth-child(5)").addClass("selected");
    } else if (window.location.href.search(/\/blog\//) !== -1) {
      $("header nav li:nth-child(5)").addClass("selected");
    }
    $("#comment-form a").click(function() {
      $("#comment-form").submit();
      return false;
    });
    $(".post:last-child .post .navigation").show();
    new FormDescription($("input[name=your-email]"), "Váš e-mail *");
    new FormDescription($("input[name=your-name]"), "Vaše jméno *");
    new FormDescription($("textarea[name=your-message]"), "Text *");
    new FormDescription($("#comment-form input[name=email]"), "Váš e-mail *");
    new FormDescription($("#comment-form input[name=author]"), "Vaše jméno *");
    return new FormDescription($("#comment-form .text textarea"), "Text *");
  });

}).call(this);
