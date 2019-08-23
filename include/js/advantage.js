$(function() {
  $(".adv-list").children().each(function() {
    $(this).on("mouseenter", function() {
      $(this).addClass("active").siblings().removeClass("active");
      $(".adv-detail").children().eq($(this).index()).addClass("in").siblings().removeClass("in");
    });
  });
});