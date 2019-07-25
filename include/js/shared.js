$(function() {
  var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $("html") : $("body")) : $("html,body");
  if($body.width() <= 768) {
    window.location.href = "/wap.php";
  }
  else {
    window.location.href = "/debug/index.html";
  }
  // 解决移动端下点其他地方不失焦的问题
  $("body").on("touchend", function(e){
    if(e.target !== "input") {
      $("input").blur();
    }
  });
  // 返回顶部按钮#btn_backtop处理过程
  $("#btn_backtop").click(function() {
    $body.animate({scrollTop: 0}, 300);
  });


  // 整屏滚动
  //   var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $("html") : $("body")) : $("html,body");
  //   var count = true;
  //   $(document).on("mousewheel", function(e) {
  //     var delta = (e.originalEvent.wheelDelta && (e.originalEvent.wheelDelta > 0 ? 1 : -1)) || (e.originalEvent.detail && (e.originalEvent.detail > 0 ? -1 : 1));
  //     if(delta > 0) {
  //       if(count && $("html").scrollTop() > 0) {
  //         console.log("up");
  //         count = false;
  //         $("html").stop(true).animate({scrollTop: $("html").scrollTop()-$("html").height()}, 600, function() {
  //           count = true;
  //         });
  //       }
  //     }
  //     else {
  //       if(count && $("html").height() + $("html").scrollTop() < $(document).height()) {
  //         console.log("down");
  //         count = false;
  //         $("html").stop(true).animate({scrollTop: $("html").scrollTop()+$("html").height()}, 600, function() {
  //           count = true;
  //         });
  //       }
  //     }
  //   });
})