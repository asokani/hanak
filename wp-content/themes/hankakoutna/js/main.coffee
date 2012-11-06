class ScrollView
  constructor: (element) ->
    @element = $(element)
    this.make_scroller()
    this.make_switch()

  click: (event) =>
    @switch_element.find("li").removeClass("selected")
    target = $(event.target)
    index = target.attr("data-index")
    target.parent().addClass("selected")
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
    for index in [0..(count-1)]
      link = $("<a>", {
        "data-index": index,
        "href": "#"
      })
      link.click(this.click)
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
    console.log(@element)
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
  prepare_next: ->
    @timeout = setTimeout(this.next, 1200)
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
      next_step = 2
    this.goto(next_step)
    this.prepare_next()
  make_switch: ->
    @switch_element = $("#image-changer-switch")
    console.log(@switch_element)
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

  if /(\.cz)|(\.ps)\/$/.test(window.location.href)
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

  `$(".gallery .image a img").hover(function(event){$(event.target).removeClass("grayscale")}, function(event){$(event.target).addClass("grayscale")})`
  `$(".clients .image a img").hover(function(event){$(event.target).removeClass("grayscale")}, function(event){$(event.target).addClass("grayscale")})`
  `$(".col .image a img").hover(function(event){$(event.target).removeClass("grayscale")}, function(event){$(event.target).addClass("grayscale")})`