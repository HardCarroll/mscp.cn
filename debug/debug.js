$(function() {
  var adTimer = setInterval(autoPlay, 3000, {target: $(".adCarousel-wrap")});
  $(".adCarousel").mouseenter(function() {
    clearInterval(adTimer);
  });
  $(".adCarousel").mouseleave(function() {
    adTimer = setInterval(autoPlay, 3000, {target: $(".adCarousel-wrap")});
  });

  $(".adCarousel .adCarousel-control").off("click").on("click", function(){
    if($(this).hasClass("prev")) {
      reversePlay({target: $(".adCarousel-wrap")});
    }
    if($(this).hasClass("next")) {
      autoPlay({target: $(".adCarousel-wrap")});
    }
  });
});

function autoPlay(param) {
  var ele = $(param.target).find(".active");
  // $(param.target).stop().find(".active").removeClass("active").fadeOut().parent().append(ele).children().first().addClass("active").fadeIn();
  $(param.target).stop().find(".active").removeClass("active").fadeOut().next().addClass("active").fadeIn().parent().append(ele);
}
function reversePlay(param) {
  var ele = $(param.target).children().last();
  // $(param.target).stop().children().first().removeClass("active").fadeOut().parent().prepend(ele).children().first().addClass("active").fadeIn();
  $(param.target).stop().prepend(ele).children().first().addClass("active").fadeIn().next().removeClass("active").fadeOut();
}