$(function () {
  var budgetTimer = 0;
  // var designerTimer = 0;
  var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $("html") : $("body")) : $("html,body");
  if ($body.width() <= 768) {
    window.location.href = "/wap.php";
  }
  else {
    // window.location.href = "/debug/index.html";
  }
  // 解决移动端下点其他地方不失焦的问题
  $("body").on("touchend", function (e) {
    if (e.target !== "input") {
      $("input").blur();
    }
  });
  // 返回顶部按钮#btn_backtop处理过程
  $("#btn_backtop").click(function () {
    $.fn.fullpage.moveTo(1);
  });

  // #designer 注册鼠标进入、离开事件
  // $("#designer .bd-list").off("mouseenter").on("mouseenter", function () {
  //   if (designerTimer) {
  //     clearInterval(designerTimer);
  //     designerTimer = 0;
  //   }
  // });
  // $("#designer .bd-list").off("mouseleave").on("mouseleave", function () {
  //   if (!designerTimer) {
  //     designerTimer = setInterval(autoSlide, 3000);
  //   }
  // });
  // #designer 注册鼠标单击事件
  // $("#designer .bd-list").children().each(function () {
  //   $(this).off("click").on("click", function () {
  //     var count = $(this).parent().children().length;
  //     var index = $(this).index();
  //     var mid = Math.floor(count / 2);
  //     var key = Math.abs(index - mid);
  //     while (key > 0) {
  //       if (index - mid > 0) {
  //         autoSlide();
  //       }
  //       else {
  //         reverseSlide();
  //       }
  //       key--;
  //     }
  //   });
  // });

  $("#style-box .item").on("mouseenter", function() {
    $(this).addClass("active").siblings().removeClass("active");
  });

  $("#news .box").on("click", function() {
    $(this).addClass("active").siblings().removeClass("active");
  });

  $("#fullpage").fullpage({
    navigation: true,
    navigationPosition: "left",
    navigationTooltips: ["官网首页", "5秒就能帮您算出明细！", "您的设计够专业吗？", "这些案例能否激发您的灵感？", "术业有专攻，省时省心又省钱！", "选择我们，您会收获什么？", "下一个盈利的就是你！", "您想要的，我们都有！", "一站式服务，为您保驾护航！", "专业名师为您答疑解惑！", "足不出户，尽知行业前沿资讯！", "多年专注，不玩套路！", "友好合作，互利共赢！", "关注我们，了解我们！"],
    // showActiveTooltip: true,
    afterLoad: function (origin, destination, direction) {
      $(destination.item).find(".hd h2").animate({ top: 0, opacity: 1 }, 300);
      $(destination.item).find(".hd h5 .left").delay(100).animate({ left: 0, opacity: 1 }, 300);
      $(destination.item).find(".hd h5 .right").delay(100).animate({ right: 0, opacity: 1 }, 300);

      // 预算页 #budget
      if (destination.index === 1) {
        $(destination.item).find(".bd").animate({ height: "400px", opacity: 1 }, 100, function () {
          $(this).find(".lt").animate({ bottom: 0, opacity: 1 }, 300);
          $(this).find(".btn-round").delay(300).animate({ opacity: 1 }, 300);
          $(this).find(".rt").animate({ bottom: 0, opacity: 1 }, 300);

          if (!budgetTimer) {
            budgetTimer = setInterval(function () {
              var val1 = val2 = val3 = val4 = val5 = val6 = val7 = val8 = val9 = val10 = val11 = val12 = val13 = val14 = 0;
              $(destination.item).find(".rt .detail p:nth-of-type(1) span").html(val1 = getRandomNum(3000, 30000));
              $(destination.item).find(".rt .detail p:nth-of-type(2) span").html(val2 = getRandomNum(10000, 200000));
              $(destination.item).find(".rt .detail p:nth-of-type(3) span").html(val3 = getRandomNum(10000, 200000));
              $(destination.item).find(".rt .detail p:nth-of-type(4) span").html(val4 = getRandomNum(8000, 80000));
              $(destination.item).find(".rt .detail p:nth-of-type(5) span").html(val5 = getRandomNum(5000, 30000));
              $(destination.item).find(".rt .detail p:nth-of-type(6) span").html(val6 = getRandomNum(5000, 50000));
              $(destination.item).find(".rt .detail p:nth-of-type(7) span").html(val7 = getRandomNum(3000, 30000));
              $(destination.item).find(".rt .detail p:nth-of-type(8) span").html(val8 = getRandomNum(10000, 200000));
              $(destination.item).find(".rt .detail p:nth-of-type(9) span").html(val9 = getRandomNum(10000, 200000));
              $(destination.item).find(".rt .detail p:nth-of-type(10) span").html(val10 = getRandomNum(8000, 80000));
              $(destination.item).find(".rt .detail p:nth-of-type(11) span").html(val11 = getRandomNum(5000, 30000));
              $(destination.item).find(".rt .detail p:nth-of-type(12) span").html(val12 = getRandomNum(5000, 50000));
              $(destination.item).find(".rt .detail p:nth-of-type(13) span").html(val13 = getRandomNum(8000, 80000));
              $(destination.item).find(".rt .detail p:nth-of-type(14) span").html(val14 = getRandomNum(5000, 30000));

              $(destination.item).find(".rt .total span").html(val1 + val2 + val3 + val4 + val5 + val6 + val7 + val8 + val9 + val10 + val11 + val12 + val13 + val14);
            }, 500);
          }

        });
      }
      // 专业性 #professional
      if (destination.index === 2) {
        $("#professional .bd .pro-item").delay(100).animate({ top: 0, opacity: 1 }, 300);
        $(destination.item).find(".btn-square").delay(100).animate({ top: 0, opacity: 1 }, 300);
      }
      // 案例展示 #case
      if (destination.index === 3) {
        $("#case .bd-list li").delay(100).css("transform", "rotateZ(0) translate(0, 0)");
        $(destination.item).find(".btn-square").delay(100).animate({ top: 0, opacity: 1 }, 600, function () { $("#case .bd").css("box-shadow", "0 0 16px 0 #ffdc90") });
      }
      // 服务优势 #advantage
      if (destination.index === 4) {
        $("#advantage .hd h5 span:nth-of-type(1)").delay(100).animate({ opacity: 1 }, 200);
        $("#advantage .hd h5 b:nth-of-type(1)").delay(150).animate({ opacity: 1 }, 200);
        $("#advantage .hd h5 span:nth-of-type(2)").delay(200).animate({ opacity: 1 }, 200);
        $("#advantage .hd h5 b:nth-of-type(2)").delay(250).animate({ opacity: 1 }, 200);
        $("#advantage .hd h5 span:nth-of-type(3)").delay(300).animate({ opacity: 1 }, 200);
        $("#advantage .hd h5 b:nth-of-type(3)").delay(350).animate({ opacity: 1 }, 200);
        $("#advantage .hd h5 span:nth-of-type(4)").delay(400).animate({ opacity: 1 }, 200);
        $("#advantage .hd h5 b:nth-of-type(4)").delay(450).animate({ opacity: 1 }, 200);
        $("#advantage .hd h5 span:nth-of-type(5)").delay(500).animate({ opacity: 1 }, 200);
        $("#advantage .bd").delay(400).animate({ height: "410px", opacity: 1 }, 200, function () {
          $("#advantage .list-item").animate({ opacity: 1 }, 200);
          $("#advantage .list-item .wrap").css("box-shadow", "0 0 3px 0 #FFDC90");
        });
        $(destination.item).find(".btn-square").delay(400).animate({ top: 0, opacity: 1 }, 300);
      }
      // 免费服务 #service
      if (destination.index === 5) {
        $(destination.item).find(".bd-list .list-item").css("transform", "translateY(0)");
        $(destination.item).find(".bd-list .list-item:nth-child(2n-1) .txt").delay(200).animate({ top: 0 }, 300);
        $(destination.item).find(".bd-list .list-item:nth-child(2n) .txt").delay(200).animate({ top: "50%" }, 300);
        $(destination.item).find(".btn-square").delay(100).animate({ top: 0, opacity: 1 }, 300);
      }
      // 资深设计师一对一服务 #designer
      if (destination.index === 6) {
        // $(destination.item).find(".btn-square").delay(100).animate({ top: 0, opacity: 1 }, 600);
        // setItemStyle({ object: $(destination.item).find(".bd-list") });
        // if (!designerTimer) {
        //   designerTimer = setInterval(autoSlide, 3000);
        // }
        $(destination.item).find("#style-box").delay(300).animate({opacity: 1}, 300);
      }
      // 额外服务支持 #support
      if (destination.index === 7) {
        $(destination.item).find(".bd-list .list-item").delay(100).animate({ opacity: 1 }, 300, function () {
          $(this).css("transform", "translateX(0)");
        });
        $(destination.item).find(".btn-square").delay(100).animate({ top: 0, opacity: 1 }, 300);
      }
      // 一站式服务 #slogan
      if (destination.index === 8) {
        $(destination.item).find(".bd-list .list-item").each(function (i) {
          $(this).delay(i * 50 + 100).animate({ left: 0 }, 300);
        });
        $(destination.item).find(".ft").delay(300).animate({ top: 0, opacity: 1 }, 300);
      }
      // 名师在线答疑 #focus
      if (destination.index === 9) {
        $(destination.item).find(".bd img").delay(300).animate({ opacity: 0.3 }, 300);
        $(destination.item).find(".bd .bd-list.left li").each(function (i) {
          $(this).delay(i * 50).animate({ right: 0, opacity: 1 }, 100);
        });
        $(destination.item).find(".bd .bd-list.right li").each(function (i) {
          $(this).delay(i * 50 + 50).animate({ left: 0, opacity: 1 }, 100);
        });
        $(destination.item).find(".ft .btn-square").delay(300).animate({ top: 0, opacity: 1 }, 300);
      }
      if (destination.index === 10) {
        $(destination.item).find(".bd").delay(300).animate({height: "414px", opacity: 1}, 300);
        $(destination.item).find(".btn-square").delay(100).animate({ top: 0, opacity: 1}, 300);
      }
      // 多年专注，不玩套路 #goal
      if (destination.index === 11) {
        $(destination.item).find(".bd-list").delay(300).animate({ height: "265px" }, 300, function () {
          $(this).children().each(function () {
            digtalAutoIncrease($(this).find(".wrap div span"));
          });
        });
        $(destination.item).find(".btn-square").delay(150).animate({ top: 0, opacity: 1 }, 300);
      }
      // 友好合作，互利共赢 #partner
      if (destination.index === 12) {
        $(destination.item).find(".bd-list").delay(300).animate({ opacity: 1 }, 300);
        // $(destination.item).find(".list-item").css({"transform": "translate(0, 0)"});
        $(destination.item).find(".btn-square").delay(0).animate({ top: 0, opacity: 1 }, 300);
      }
      // #about
      if (destination.index === 13) {
        // $(destination.item).find(".cpy-name span:nth-child(1)").animate({ top: 0, opacity: 1 }, 600, function () {
        //   $(this).css("transform", "translateY(-25%)");
        // });
        // $(destination.item).find(".cpy-name span:nth-child(2)").animate({ top: 0, opacity: 1 }, 600, function () {
        //   $(this).css("transform", "translateY(25%)");
        // });
        // $(destination.item).find(".cpy-des span").each(function (i) {
        //   $(this).delay(i * 200 + 600).animate({ top: 0, opacity: 1 }, 1000);
        // });
        // $(destination.item).find(".pos").delay(600).animate({ left: 0, opacity: 1 }, 1000);
        // $(destination.item).find(".bd .cover").delay(800).animate({ top: "100%" }, 1000);
        // $(destination.item).find(".ft").delay(1600).animate({ opacity: 1 }, 800);
      }

      // 离开页
      $(origin.item).find(".hd h2").animate({ top: "-360%", opacity: 0 }, 100);
      $(origin.item).find(".hd h5 .left").animate({ left: "-360%", opacity: 0 }, 100);
      $(origin.item).find(".hd h5 .right").animate({ right: "-360%", opacity: 0 }, 100);
      $(origin.item).find(".ft .btn-square").animate({ top: "500px", opacity: 0 }, 200);

      // 预算页 #budget
      if (origin.index === 1) {
        $(origin.item).find(".bd").animate({ height: 0, opacity: 0 }, 100, function () {
          $(this).find(".lt").animate({ bottom: "-360%", opacity: 0 }, 100);
          $(this).find(".btn-round").animate({ opacity: 0 }, 100);
          $(this).find(".rt").animate({ bottom: "-360%", opacity: 0 }, 100);
        });
        if(budgetTimer) {
          clearInterval(budgetTimer);
          budgetTimer = 0;
        }
      }

      // 专业性 #professional
      if (origin.index === 2) {
        $("#professional .bd .pro-item:nth-child(2n-1)").animate({ top: "100%", opacity: 0 }, 100);
        $("#professional .bd .pro-item:nth-child(2n)").animate({ top: "-100%", opacity: 0 }, 100);
      }

      // 案例展示 #case
      if (origin.index === 3) {
        $("#case .bd").css("box-shadow", "none");
        $("#case .bd-list li:nth-child(1)").css("transform", "rotateZ(45deg) translate(-3000px, -1000px)");
        $("#case .bd-list li:nth-child(2)").css("transform", "rotateZ(90deg) translate(-3000px, 1000px)");
        $("#case .bd-list li:nth-child(3)").css("transform", "rotateZ(135deg) translate(3000px, -1000px)");
        $("#case .bd-list li:nth-child(4)").css("transform", "rotateZ(180deg) translate(3000px, 1000px)");
        $("#case .bd-list li:nth-child(5)").css("transform", "rotateZ(225deg) translate(-3000px, -1000px)");
        $("#case .bd-list li:nth-child(6)").css("transform", "rotateZ(270deg) translate(-3000px, -1000px)");
      }

      // 服务优势 #advantage
      if (origin.index === 4) {
        $("#advantage .hd h5 span").animate({ opacity: 0 }, 100);
        $("#advantage .hd h5 b").animate({ opacity: 0 }, 100);
        $("#advantage .bd").animate({ height: 0 }, 100, function () {
          $("#advantage .list-item").animate({ opacity: 0 }, 100);
          $("#advantage .list-item .wrap").css("box-shadow", "none");
        });
      }

      // 免费服务 #service
      if (origin.index === 5) {
        // $("#service .hd h2").animate({top: "-360%", opacity: 0}, 300);
        $(origin.item).find(".bd-list .list-item:nth-child(2n-1)").css("transform", "translateY(50%)").find(".txt").animate({ top: "50%" }, 100);
        $(origin.item).find(".bd-list .list-item:nth-child(2n)").css("transform", "translateY(-50%)").find(".txt").animate({ top: "0%" }, 100);
      }

      // 资深设计师一对一服务 #designer
      if (origin.index === 6) {
        // $(origin.item).find(".list-item").attr("style", "");
        // if (designerTimer) {
        //   clearInterval(designerTimer);
        //   designerTimer = 0;
        // }
        $(origin.item).find("#style-box").animate({opacity: 0}, 100);
      }

      // 额外服务支持 #support
      if (origin.index === 7) {
        $(origin.item).find(".list-item:nth-child(1)").animate({ opacity: 0 }, 100, function () {
          $(this).css("transform", "translateX(150%)");
        });
        $(origin.item).find(".list-item:nth-child(2)").animate({ opacity: 0 }, 100, function () {
          $(this).css("transform", "translateX(50%)");
        });
        $(origin.item).find(".list-item:nth-child(3)").animate({ opacity: 0 }, 100, function () {
          $(this).css("transform", "translateX(-50%)");
        });
        $(origin.item).find(".list-item:nth-child(4)").animate({ opacity: 0 }, 100, function () {
          $(this).css("transform", "translateX(-150%)");
        });
      }

      // #slogan
      if (origin.index === 8) {
        $(origin.item).find(".bd-list .list-item").animate({ left: "1200px" }, 100);
        $(origin.item).find(".ft").animate({ top: "500px", opacity: 0 }, 100);
      }

      // #focus
      if (origin.index === 9) {
        $(origin.item).find(".bd img").animate({ opacity: 0 }, 100);
        $(origin.item).find(".bd .bd-list.left li").animate({ right: "1500px", opacity: 0 }, 100);
        $(origin.item).find(".bd .bd-list.right li").animate({ left: "1500px", opacity: 0 }, 100);
      }

      if (origin.index === 10) {
        $(origin.item).find(".bd").animate({height: "0px", opacity: 0}, 100);
      }

      // #goal
      if (origin.index === 11) {
        $(origin.item).find(".bd-list").animate({ height: "0px" }, 100);
        $(origin.item).find(".bd-list .list-item .wrap div span").html(0);
      }

      // #partner
      if (origin.index === 12) {
        $(origin.item).find(".bd-list").animate({ opacity: 0 }, 100);
        // $(origin.item).find(".list-item").each(function() {
        //   var posX = Math.ceil(Math.random()*1000 + 1500) + "px";
        //   var posY = Math.ceil(Math.random()*1000 + 1500) + "px";
        //   $(this).css({"transform": "translate("+posX+", "+posY+")"});
        // });
      }

      // #about
      if (origin.index === 13) {
        // $(origin.item).find(".cpy-name span:nth-child(1)").animate({ top: "-500px", opacity: 0 }, 300);
        // $(origin.item).find(".cpy-name span:nth-child(2)").animate({ top: "500px", opacity: 0 }, 300);
        // $(origin.item).find(".cpy-des span").animate({ opacity: 0, top: "500px" }, 300);
        // $(origin.item).find(".pos").animate({ left: "500px", opacity: 0 }, 300);
        // $(origin.item).find(".bd .cover").animate({ top: "0%" }, 300);
        // $(origin.item).find(".ft").animate({ opacity: 0 }, 300);
      }

    }
  });

  // 装修计算器
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
        },
        error: function (err) {
          console.log("fail: " + err);
        }
      });
    }

  });

  // 轮播图
  var adTimer = setInterval(autoPlay, 3000, { target: $(".adCarousel-wrap") });
  $(".adCarousel").mouseenter(function () {
    clearInterval(adTimer);
  });
  $(".adCarousel").mouseleave(function () {
    adTimer = setInterval(autoPlay, 3000, { target: $(".adCarousel-wrap") });
  });

  $(".adCarousel .adCarousel-control").off("click").on("click", function () {
    if ($(this).hasClass("prev")) {
      reversePlay({ target: $(".adCarousel-wrap") });
    }
    if ($(this).hasClass("next")) {
      autoPlay({ target: $(".adCarousel-wrap") });
    }
  });
});

// 生成[min, max)区间内的随机数
function getRandomNum(min, max) {
  var min = min || 1;
  var max = max || 10;
  return Math.floor(Math.random() * (max - min + 1) + min);
}

function digtalAutoIncrease(target, paramJson) {
  var ele = $(target);
  var param = paramJson || {};
  var finalNum = param.targetNum || ele.data("value");
  var time = param.totalmSec || ele.data("time");
  var step = param.permSec || 50;

  var oneStep = finalNum / (time / step);
  var count = 0;
  var initial = 0;

  ele.html(0);

  var ascTimer = setInterval(function () {
    count += oneStep;
    if (count >= finalNum) {
      clearInterval(ascTimer);
      count = finalNum;
    }
    var tmp = Math.floor(count);
    if (tmp === initial) {
      return;
    }
    initial = tmp;
    ele.html(initial);
  }, step);
}

function reverseSlide() {
  var ele = $("#designer .bd-list").children().last();
  $("#designer .bd-list").prepend(ele);
  setItemStyle({ object: $("#designer .bd-list") });
}
function autoSlide() {
  var ele = $("#designer .bd-list").children().first();
  $("#designer .bd-list").append(ele);
  setItemStyle({ object: $("#designer .bd-list") });
}

function setItemStyle(paramJson) {
  var count = $(paramJson.object).children().length;
  var mid = Math.floor(count / 2);
  $(paramJson.object).children().each(function (i) {
    var zIndex = count - Math.abs(i - mid);
    var nScale = Math.pow(0.9, Math.abs(i - mid));
    var nOpacity = Math.pow(0.9, Math.abs(i - mid));
    var mLeft = (i - mid) * 150 + "px";
    // var bgColor = "rgb("+Math.ceil(Math.random()*255)+", "+Math.ceil(Math.random()*255)+", "+Math.ceil(Math.random()*255)+")";
    // $(this).css({"z-index": zIndex, "opacity": nOpacity, "background-color": bgColor, "margin-left": mLeft, "transform": "translateX(-50%) scale("+nScale+")"});
    $(this).css({ "z-index": zIndex, "opacity": nOpacity, "margin-left": mLeft, "transform": "translateX(-50%) scale(" + nScale + ")" });
  });
  $(paramJson.object).children().removeClass("active").eq(mid).addClass("active");
}

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
