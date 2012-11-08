class ScrollArrows
  constructor: (element) ->
    @main_element = $(element)
    @element = @main_element.parent()

    this.make_arrows()

  arrow_click: (event) =>
    @main_element.trigger("arrow_click", $(event.target).attr("data-direction"))
    return false

  make_arrows: ->
    for direction in ["left", "right"]
      arrow = $("<a>", {
        "href": "#",
        "data-direction": direction,
        "css": {
          "width": 37,
          "height": 37,
          "display": "block",
          "position": "absolute",
          "top": 0,
          "z-index": 50
        "background": "url(/wp-content/themes/hankakoutna/images/arrow.png) no-repeat"
        }
      })
      arrow.css("top", @element.height() / 2 - 37 / 2 + parseInt(@element.attr("data-arrow-fix")))
      if direction == "left"
        arrow.css("left", -37 - if @element.width() == 940 then 20 else 10)
        arrow.css("background-position", "0 -37px")
      else
        arrow.css("right", -37 - if @element.width() == 940 then 20 else 10)
      arrow.click(this.arrow_click)
      arrow.hover(this.mouse_over, this.mouse_out)
      @element.append(arrow)
  mouse_over: (event) ->
    target = $(event.target)
    if target.attr("data-direction") == "left"
      target.css("background-position", "-37px -37px")
    else
      target.css("background-position", "-37px 0px")

  mouse_out: (event) ->
    target = $(event.target)
    if target.attr("data-direction") == "left"
      target.css("background-position", "0px -37px")
    else
      target.css("background-position", "0px 0px")

class ScrollView
  constructor: (element) ->
    @element = $(element)
    this.make_scroller()
    this.make_switch()
    @arrows = new ScrollArrows(@element)
    @element.bind("arrow_click", this.arrow_click)
    @current_page = 0
  arrow_click: (event, direction) =>
    if direction == "left" and @current_page > 0
      this.goto(@current_page-1)
    else if direction == "right" and @current_page < @max_page_index
      this.goto(@current_page+1)

  switch_click: (event) =>
    target = $(event.target)
    index = target.attr("data-index")
    this.goto(index)
  goto: (index) ->
    @current_page = parseInt(index, 10)
    @switch_element.find("li").removeClass("selected")
    $(@switch_element.find("li")[index]).addClass("selected")
    TweenLite.to(@element.find(".screen"), .8, {
      "css": {
        "left": index*@width*(-1)
      },
      "ease": Power4.easeOut
    })
    return false

  make_switch:  ->
    count = @element.find(".view").length
    id = @element.attr("data-for")
    @switch_element = $("#" + id)
    @max_page_index = count - 1
    for index in [0.. @max_page_index]
      link = $("<a>", {
        "data-index": index,
        "href": "#"
      })
      link.click(this.switch_click)
      @switch_element.append($("<li>", {"class": (if index==0 then "selected" else "")}).append(link))

  make_scroller: () ->
    views = @element.find(".view")
    @width = $(views[0]).width()
    @element.width(@width)
    views.width(@width)
    @element.find(".screen").width(views.length * @width)
    views.css("float", "left")
    views.show()

class FormDescription
  constructor: (element, text) ->
    @element = element
    @text = text
    @element.val(text)
    @element.css("color", "#999999")
    this.bind_events()
  bind_events: ->
    @element.focus(this.focus)
    @element.blur(this.blur)
  blur: =>
    if @element.val() == ""
      @element.val(@text)
      @element.css("color", "#999999")
    else
      @element.css("color", "#1a1a1a")
  focus: =>
    if @element.val() == @text
      @element.val("")
      @element.css("color", "#1a1a1a")

class ImageChanger
  texts: [
    {
      "title": "Dobrý den"
      "text": "Vítejte na mém webu. Věřím, že Vám přinese všechny potřebné informace<br>o mně coby moderátorce a prozradí i pár zajímavostí navíc."
    },
    {
      "title": "Společenské akce"
      "text": "Společenské akce jsou jedinečnou příležitostí, jak noblesním a elegantním způsobem prezentovat společnost či firmu. Moderaci takových akcí sama vnímám jako společenskou událost na úrovni."
    },
    {
      "title": "Sportovní akce"
      "text": "Sport je mé druhé já. I proto si sportovní akce neskutečně užívám. Ráda moderuji v pohybu a vždy se snažím publiku předat kus své energie."
    },
    {
      "title": "Kulturní akce"
      "text": "Kultura a umění formuje každého z nás. Mám to štěstí, že díky moderování mohu být přímým účastníkem jedinečných koncertů, očekávaných filmových premiér, významných setkání, autogramiád a křtů."

    },
    {
      "title": "Konference"
      "text": "Každá konference vyžaduje perfektní přípravu, profesionální vystupování, naprostou koncentraci i dovednost umět hosty během náročného dne osvěžit vtipem. Tato vzájemná kombinace je pro mě coby moderátorku vždy výzvou a věřím, že i základem úspěšné konference."

    },
    {
      "title":"Večírky"
      "text": "Večírky mohou být opravdu různé. Profesionální moderátor je to, co by měly mít společné, má-li se předejít komplikacím. Moderace večírků pro mne znamená rozdávat radost, uvolnit atmosféru, udržovat zábavu a zároveň kvalitně a nenásilně prezentovat potřebná témata."

    }
  ]
  constructor: ->
    @bottom = $("#image-changer .bottom")
    @top = $("#image-changer .top")
    @current = 1
    @title = $("#image-changer-title")
    @text = $("#image-changer-text")
    this.make_switch()
    this.prepare_next()
    this.preload()

    @arrows = new ScrollArrows($("#image-changer div.bottom"))
    $("#image-changer  div.bottom").bind("arrow_click", this.arrow_click)
  arrow_click: (event, direction) =>
    clearTimeout(@timeout)
    if direction == "left" and @current > 0
      next_step = @current - 1
      if next_step < 1
        next_step = 6
    else if direction == "right" and @current <= 6
      next_step = @current + 1
      if next_step > 6
        next_step = 1

    this.goto(next_step)
  preload: ->
    for index in [1..6]
      $('<img/>')[0].src = "/wp-content/themes/hankakoutna/images/panel/#{index}.jpg";
  prepare_next: ->
    @timeout = setTimeout(this.next, 1800)
  goto: (step) ->
    @current = step
    @switch_element.find("li").removeClass("selected")
    $(@switch_element.find("li")[step-1]).addClass("selected")
    @bottom.css("background-image", @top.css("background-image"))
    @bottom.css("opacity", @top.css("opacity"))
    @top.css({
      "opacity": 0,
      "background-image": "url(/wp-content/themes/hankakoutna/images/panel/#{step}.jpg)"
    })
    TweenLite.to(@top, .8, {
      "css": {
        "opacity": 1
      },
      "ease": Power4.easeOut
    })
    @title.html(@texts[step-1]["title"])
    @text.html(@texts[step-1]["text"])
  next: =>
    next_step = @current + 1
    if next_step > 6
      next_step = 1
    this.goto(next_step)
    this.prepare_next()
  make_switch: ->
    @switch_element = $("#image-changer-switch")
    for index in [1..6]
      link = $("<a>", {
        "data-index": index,
        "href": "#"
      })
      link.click(this.click)
      @switch_element.append($("<li>", {"class": (if index==1 then "selected" else "")}).append(link))

  click: (event) =>
    clearTimeout(@timeout)
    target = $(event.target)
    index = target.attr("data-index")
    this.goto(index)
    return false

$ ->
  $(".scroller").each((index, element) =>
    new ScrollView(element)
  )

  if /((\.cz)|(\.ps))\/((#.*){0,1}|(\?.*){0,1})$/.test(window.location.href)
    new ImageChanger()

  if (window.location.href.search(/par-slov/) != -1)
    $("header nav li:nth-child(2)").addClass("selected")
  else if (window.location.href.search(/reference/) != -1)
    $("header nav li:nth-child(3)").addClass("selected")
  else if (window.location.href.search(/galerie/) != -1)
    $("header nav li:nth-child(6)").addClass("selected")
  else if (window.location.href.search(/kontakt/) != -1)
    $("header nav li:nth-child(4)").addClass("selected")
  else if (window.location.href.search(/\/category\//) != -1)
    $("header nav li:nth-child(5)").addClass("selected")
  else if (window.location.href.search(/\/blog\//) != -1)
    $("header nav li:nth-child(5)").addClass("selected")

  $("#comment-form a").click(->
    $("#comment-form").submit()
    return false
  )

  $(".post:last-child .post .navigation").show()


  new FormDescription($("input[name=your-email]"), "Váš e-mail *")
  new FormDescription($("input[name=your-name]"), "Vaše jméno *")
  new FormDescription($("textarea[name=your-message]"), "Text *")

  new FormDescription($("#comment-form input[name=email]"), "Váš e-mail *")
  new FormDescription($("#comment-form input[name=author]"), "Vaše jméno *")
  new FormDescription($("#comment-form .text textarea"), "Text *")

  # grayscale images
  $(".gallery .image a img").addClass("grayscale")
  $(".clients .image a img").addClass("grayscale")
  $(".col .image a img").addClass("grayscale")
  $(".partners a img").addClass("grayscale")

  `$(".gallery .image a img").hover(function(event){$(event.target).removeClass("grayscale")}, function(event){$(event.target).addClass("grayscale")})`
  `$(".clients .image a img").hover(function(event){$(event.target).removeClass("grayscale")}, function(event){$(event.target).addClass("grayscale")})`
  `$(".col .image a img").hover(function(event){$(event.target).removeClass("grayscale")}, function(event){$(event.target).addClass("grayscale")})`
  `$(".partners a img").hover(function(event){$(event.target).removeClass("grayscale")}, function(event){$(event.target).addClass("grayscale")})`