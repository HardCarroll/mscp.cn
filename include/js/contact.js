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
      var msgData = { msgName: msgName, msgPhone: msgPhone, msgEmail: msgEmail, msgAddress: msgAddress, msgTitle: msgTitle, msgContent: msgContent };
      fmd.append("token", "leaveMessage");
      fmd.append("data", JSON.stringify(msgData));
      $.ajax({
        url: "/include/php/handle.php",
        type: "POST",
        data: fmd,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (result) {
          console.log(JSON.parse(result));
        },
        error: function (err) {
          console.log("fail: " + err);
        }
      });
      console.log(msgData);
    }

    // console.log("name: "+msgName+" tel: "+msgPhone+" email: "+msgEmail+" address: "+msgAddress+" title: "+msgTitle+" content: "+msgContent+" verify: "+inputCode);
  });
});