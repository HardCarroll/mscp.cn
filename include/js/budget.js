$(function() {
  // 装修计算器
  var budgetTimer = 0;
  $("[data-toggle='popover'").popover();

  $(".btn-round").off("click").on("click", function () {
    var area = $("#decoration-area").val();
    var type = $("#decoration-style").val();
    var tel = $("#decoration-tel").val();
    var regTel = /^1[3|4|5|7|8|9]\d{9}$/;

    if (parseInt(area) <= 0 || area == "") {
      $("#area-box").popover("show");
      $("#area-box").on("shown.bs.popover", function () {
        setTimeout(function () {
          $("#area-box").popover("hide");
          $("#decoration-area").select().focus();
        }, 1500);
      });
    } else if (!regTel.test(tel)) {
      $("#tel-box").popover("show");
      $("#tel-box").on("shown.bs.popover", function () {
        setTimeout(function () {
          $("#tel-box").popover("hide");
          $("#decoration-tel").select().focus();
        }, 1500);
      });
    }
    else {
      var data = { area: area, type: type, tel: tel };

      var fmd_getBudget = new FormData();
      fmd_getBudget.append("token", "getBudget");
      fmd_getBudget.append("data", JSON.stringify(data));
      $.ajax({
        url: "/include/php/handle.php",
        type: "POST",
        data: fmd_getBudget,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (result) {
          clearInterval(budgetTimer);
          var total = 0;
          for(var i in result) {
            $("#budget .rt .detail").find("p[data-item='"+i+"']").find("span").html(result[i]);
            total += result[i];
          }
          $("#budget .rt .total").find("span").html(total);
          // alert("您的投资预算为：");
          $("#budgetModal .result").html(total);
          $("#budgetModal").modal();
        },
        error: function (err) {
          console.log("fail: " + err);
        }
      });
    }
  });

  // 随机数
  if (!budgetTimer) {
    budgetTimer = setInterval(function () {
      var val1 = val2 = val3 = val4 = val5 = val6 = val7 = val8 = val9 = val10 = val11 = val12 = val13 = val14 = 0;
      $("#budget").find(".rt .detail p:nth-of-type(1) span").html(val1 = getRandomNum(3000, 30000));
      $("#budget").find(".rt .detail p:nth-of-type(2) span").html(val2 = getRandomNum(10000, 200000));
      $("#budget").find(".rt .detail p:nth-of-type(3) span").html(val3 = getRandomNum(10000, 200000));
      $("#budget").find(".rt .detail p:nth-of-type(4) span").html(val4 = getRandomNum(8000, 80000));
      $("#budget").find(".rt .detail p:nth-of-type(5) span").html(val5 = getRandomNum(5000, 30000));
      $("#budget").find(".rt .detail p:nth-of-type(6) span").html(val6 = getRandomNum(5000, 50000));
      $("#budget").find(".rt .detail p:nth-of-type(7) span").html(val7 = getRandomNum(3000, 30000));
      $("#budget").find(".rt .detail p:nth-of-type(8) span").html(val8 = getRandomNum(10000, 200000));
      $("#budget").find(".rt .detail p:nth-of-type(9) span").html(val9 = getRandomNum(10000, 200000));
      $("#budget").find(".rt .detail p:nth-of-type(10) span").html(val10 = getRandomNum(8000, 80000));
      $("#budget").find(".rt .detail p:nth-of-type(11) span").html(val11 = getRandomNum(5000, 30000));
      $("#budget").find(".rt .detail p:nth-of-type(12) span").html(val12 = getRandomNum(5000, 50000));
      $("#budget").find(".rt .detail p:nth-of-type(13) span").html(val13 = getRandomNum(8000, 80000));
      $("#budget").find(".rt .detail p:nth-of-type(14) span").html(val14 = getRandomNum(5000, 30000));

      $("#budget").find(".rt .total span").html(val1 + val2 + val3 + val4 + val5 + val6 + val7 + val8 + val9 + val10 + val11 + val12 + val13 + val14);
    }, 500);
  }

  // 留言板功能
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
      $("#phone-box").popover("show");
      $("#phone-box").on("shown.bs.popover", function () {
        setTimeout(function () {
          $("#phone-box").popover("hide");
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

// 生成[min, max)区间内的随机数
function getRandomNum(min, max) {
  var min = min || 1;
  var max = max || 10;
  return Math.floor(Math.random() * (max - min + 1) + min);
}
