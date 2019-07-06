$(function() {
  var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $("html") : $("body")) : $("html,body");
  if($body.width() <= 768) {
    window.location.href = "/wap.php";
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
})