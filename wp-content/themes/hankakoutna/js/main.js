// Generated by CoffeeScript 1.3.3
(function() {
  var FormDescription, ImageChanger, ScrollView,
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

  ImageChanger = (function() {

    ImageChanger.prototype.texts = [
      {
        "title": "Dobrý den",
        "text": "Vítejte na mém webu. Věřím, že Vám přinese všechny potřebné informace<br>o mně coby moderátorce a prozradí i pár zajímavostí navíc."
      }, {
        "title": "Společenské akce",
        "text": "Společenské akce jsou jedinečnou příležitostí, jak noblesním a elegantním způsobem prezentovat společnost či firmu. Moderaci takových akcí sama vnímám jako společenskou událost na úrovni."
      }, {
        "title": "Sportovní akce",
        "text": "Sport je mé druhé já. I proto si sportovní akce neskutečně užívám. Ráda moderuji v pohybu a vždy se snažím publiku předat kus své energie."
      }, {
        "title": "Kulturní akce",
        "text": "Kultura a umění formuje každého z nás. Mám to štěstí, že díky moderování mohu být přímým účastníkem jedinečných koncertů, očekávaných filmových premiér, významných setkání, autogramiád a křtů."
      }, {
        "title": "Konference",
        "text": "Každá konference vyžaduje perfektní přípravu, profesionální vystupování, naprostou koncentraci i dovednost umět hosty během náročného dne osvěžit vtipem. Tato vzájemná kombinace je pro mě coby moderátorku vždy výzvou a věřím, že i základem úspěšné konference."
      }, {
        "title": "Večírky",
        "text": "Večírky mohou být opravdu různé. Profesionální moderátor je to, co by měly mít společné, má-li se předejít komplikacím. Moderace večírků pro mne znamená rozdávat radost, uvolnit atmosféru, udržovat zábavu a zároveň kvalitně a nenásilně prezentovat potřebná témata."
      }
    ];

    function ImageChanger() {
      this.click = __bind(this.click, this);

      this.next = __bind(this.next, this);
      this.bottom = $("#image-changer .bottom");
      this.top = $("#image-changer .top");
      this.current = 1;
      this.title = $("#image-changer-title");
      this.text = $("#image-changer-text");
      this.make_switch();
      this.prepare_next();
      this.preload();
    }

    ImageChanger.prototype.preload = function() {
      var index, _i, _results;
      _results = [];
      for (index = _i = 1; _i <= 6; index = ++_i) {
        _results.push($('<img/>')[0].src = "/wp-content/themes/hankakoutna/images/panel/" + index + ".jpg");
      }
      return _results;
    };

    ImageChanger.prototype.prepare_next = function() {
      return this.timeout = setTimeout(this.next, 1200);
    };

    ImageChanger.prototype.goto = function(step) {
      this.current = step;
      this.switch_element.find("li").removeClass("selected");
      $(this.switch_element.find("li")[step - 1]).addClass("selected");
      this.bottom.css("background-image", this.top.css("background-image"));
      this.bottom.css("opacity", this.top.css("opacity"));
      this.top.css({
        "opacity": 0,
        "background-image": "url(/wp-content/themes/hankakoutna/images/panel/" + step + ".jpg)"
      });
      TweenLite.to(this.top, .8, {
        "css": {
          "opacity": 1
        },
        "ease": Power4.easeOut
      });
      this.title.html(this.texts[step - 1]["title"]);
      return this.text.html(this.texts[step - 1]["text"]);
    };

    ImageChanger.prototype.next = function() {
      var next_step;
      next_step = this.current + 1;
      if (next_step > 6) {
        next_step = 2;
      }
      this.goto(next_step);
      return this.prepare_next();
    };

    ImageChanger.prototype.make_switch = function() {
      var index, link, _i, _results;
      this.switch_element = $("#image-changer-switch");
      console.log(this.switch_element);
      _results = [];
      for (index = _i = 1; _i <= 6; index = ++_i) {
        link = $("<a>", {
          "data-index": index,
          "href": "#"
        });
        link.click(this.click);
        _results.push(this.switch_element.append($("<li>", {
          "class": (index === 1 ? "selected" : "")
        }).append(link)));
      }
      return _results;
    };

    ImageChanger.prototype.click = function(event) {
      var index, target;
      clearTimeout(this.timeout);
      target = $(event.target);
      index = target.attr("data-index");
      this.goto(index);
      return false;
    };

    return ImageChanger;

  })();

  $(function() {
    var _this = this;
    $(".scroller").each(function(index, element) {
      return new ScrollView(element);
    });
    if (/(\.cz)|(\.ps)\/$/.test(window.location.href)) {
      new ImageChanger();
    }
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
    new FormDescription($("#comment-form .text textarea"), "Text *");
    $(".gallery .image a img").addClass("grayscale");
    $(".clients .image a img").addClass("grayscale");
    $(".col .image a img").addClass("grayscale");
    $(".gallery .image a img").hover(function(event){$(event.target).removeClass("grayscale")}, function(event){$(event.target).addClass("grayscale")});

    $(".clients .image a img").hover(function(event){$(event.target).removeClass("grayscale")}, function(event){$(event.target).addClass("grayscale")});

    return $(".col .image a img").hover(function(event){$(event.target).removeClass("grayscale")}, function(event){$(event.target).addClass("grayscale")});
  });

}).call(this);
