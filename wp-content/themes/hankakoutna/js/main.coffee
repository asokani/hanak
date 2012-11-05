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


$ ->
  $(".scroller").each((index, element) =>
    new ScrollView(element)
  )

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

