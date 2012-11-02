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


