$(function() {
  var imgs = $(".case-thumb").find("img");
  if (imgs.length) {
    for (var i = 0; i < imgs.length; i++) {
      var ele = $("<div class='item'><img></div>");
      ele.find("img").attr({
        src: imgs[i].src,
        alt: imgs[i].alt,
        title: imgs[i].title
      });
      $(".card-list .carousel-inner").append(ele);
      imgs[i].remove();
    }
    $(".card-list .carousel-inner").find(".item").eq(0).addClass("active");
  }
  else {
    $("#carousel-case").remove();
  }
});