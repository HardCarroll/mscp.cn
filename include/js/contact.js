$(function () {
  // 百度地图API功能
  var map = new BMap.Map("baidu-map"); // 创建Map实例
  var point = new BMap.Point(113.013623, 28.195707); //创建地图中心点
  map.centerAndZoom(point, 14); // 初始化地图,设置中心点坐标和地图级别
  var top_right_navigation = new BMap.NavigationControl({
    anchor: BMAP_ANCHOR_TOP_RIGHT
  });
  map.addControl(top_right_navigation);
  var marker = new BMap.Marker(point); // 创建标注
  marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
  map.addOverlay(marker); // 将标注添加到地图中
  var opts = {
    title: "弥尚餐饮装饰设计有限公司", // 信息窗口标题
    offset: new BMap.Size(0, -30)
  };
  var sContent = "<p style='font-size:14px;color:#007a42;margin:5px 0 0;'>电话：13873976777</p><p style='font-size:14px;color:#007a42;margin:0;'>地址：湖南省长沙市芙蓉区朝阳路3号天心电脑城西门1799</p>";
  var infoWindow = new BMap.InfoWindow(sContent, opts); // 创建信息窗口对象 
  map.openInfoWindow(infoWindow, point); //开启信息窗口

  map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放

  marker.addEventListener("click", function() {
    map.openInfoWindow(infoWindow, point);
  });

  $("[data-toggle='popover'").popover();

  var verifyCode = drawCode();
  $("#code_img").off("click").on("click", function () {
    verifyCode = resetCode();
  });
  $("#btn-submit").off("click").on("click", function () {
    var bMessage = getCookie("bMsgBoard");
    if (bMessage) {
      alert("请勿反复提交！如需再次留言，请关闭浏览器并重新打开此页面！");
    }
    else {
      var fmd = new FormData();
      var msgName = $("#msg-name").val();
      var msgPhone = $("#msg-phone").val();
      var msgEmail = $("#msg-email").val();
      var msgAddress = $("#msg-address").val();
      var msgTitle = $("#msg-title").val();
      var msgContent = $("#msg-content").val();
      var inputCode = $("#inputCode").val().toUpperCase();
  
      var regTel = /^1[3|4|5|7|8|9]\d{9}$/;
      if (!regTel.test(msgPhone)) {
        $("#tel-box").popover("show");
        $("#tel-box").on("shown.bs.popover", function () {
          setTimeout(function () {
            $("#tel-box").popover("hide");
            $("#msg-phone").select().focus();
          }, 1500);
        });
      }
      else if (inputCode !== verifyCode) {
        // console.log("error verifyCode");
        $("#verify-box").popover("show");
        $("#verify-box").on("shown.bs.popover", function () {
          setTimeout(function () {
            $("#verify-box").popover("hide");
            $("#inputCode").select().focus();
            verifyCode = resetCode();
          }, 1500);
        });
      }
      else {
        var time = new Date();
        var day = ("0" + time.getDate()).slice(-2);
        var month = ("0" + (time.getMonth() + 1)).slice(-2);
        var today = time.getFullYear() + "-" + (month) + "-" + (day);
        var msgData = { msg_name: msgName, msg_phone: msgPhone, msg_email: msgEmail, msg_address: msgAddress, msg_title: msgTitle, msg_content: msgContent, msg_date: today, b_read: "F", b_end: "TAB_END" };
        fmd.append("token", "leaveMessage");
        fmd.append("data", JSON.stringify(msgData));
        $.ajax({
          url: "/cms/include/php/handle.php",
          type: "POST",
          data: fmd,
          processData: false,
          contentType: false,
          dataType: "json",
          success: function (result) {
            setCookie("bMsgBoard", true);
            if (!result.err_no) {
              alert("感谢您的留言，您的留言已提交至后台！");
              $("#msg-name").val("");
              $("#msg-phone").val("");
              $("#msg-email").val("");
              $("#msg-address").val("");
              $("#msg-title").val("");
              $("#msg-content").val("");
              $("#inputCode").val("");
              verifyCode = resetCode();
            }
          },
          error: function (err) {
            console.log("fail: " + err);
          }
        });
      }
    }

  });
});