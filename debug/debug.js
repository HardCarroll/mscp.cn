$(function() {
  var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $("html") : $("body")) : $("html,body");
  if($body.width() <= 768) {
    window.location.href = "/wap.php";
  }
  else {
    // window.location.href = "/debug/index.html";
  }
  // 解决移动端下点其他地方不失焦的问题
  $("body").on("touchend", function(e){
    if(e.target !== "input") {
      $("input").blur();
    }
  });
  // 返回顶部按钮#btn_backtop处理过程
  $("#btn_backtop").click(function() {
    $.fn.fullpage.moveTo(1);
  });

  $("#fullpage").fullpage({
    navigation: true,
    navigationPosition: "left",
    navigationTooltips: ["官网首页", "5秒就能帮您算出明细！", "您的设计够专业吗？", "这些案例能否激发您的灵感？", "术业有专攻，省时省心又省钱！", "选择我们，您会收获什么？", "资深设计师一对一服务！", "您想要的，我们都有！", "一站式服务，为您保驾护航！", "专业名师为您答疑解惑！","多年专注，不玩套路！", "友好合作，互利共赢！", "关注我们，了解我们！"],
    // showActiveTooltip: true,
    afterLoad: function(origin, destination, direction){
      $(destination.item).find(".hd h2").animate({top: 0, opacity: 1}, 600);
      $(destination.item).find(".hd h5 .left").delay(200).animate({left: 0, opacity: 1}, 600);
      $(destination.item).find(".hd h5 .right").delay(200).animate({right: 0, opacity: 1}, 600);

      // 预算页 #budget
      if(destination.index === 1) {
        $("#budget .bd .lt").delay(400).animate({bottom: 0, opacity: 1}, 600);
        $("#budget .bd .btn-round").delay(800).animate({opacity: 1}, 600);
        $("#budget .bd .rt").delay(400).animate({bottom: 0, opacity: 1}, 600);
      }
      // 专业性 #professional
      if(destination.index === 2) {
        $("#professional .bd .pro-item").delay(600).animate({top: 0, opacity: 1}, 800);
        $(destination.item).find(".btn-square").delay(1000).animate({top: 0, opacity: 1}, 600);
      }
      // 案例展示 #case
      if(destination.index === 3) {
        $("#case .bd-list li").delay(800).css("transform", "rotateZ(0) translate(0, 0)");
        $(destination.item).find(".btn-square").delay(400).animate({top: 0, opacity: 1}, 600, function() {$("#case .bd").css("box-shadow", "0 0 16px 0 #ffdc90")});
      }
      // 服务优势 #advantage
      if(destination.index === 4) {
        $("#advantage .hd h5 span:nth-of-type(1)").delay(600).animate({opacity: 1}, 600);
        $("#advantage .hd h5 b:nth-of-type(1)").delay(800).animate({opacity: 1}, 600);
        $("#advantage .hd h5 span:nth-of-type(2)").delay(1000).animate({opacity: 1}, 600);
        $("#advantage .hd h5 b:nth-of-type(2)").delay(1200).animate({opacity: 1}, 600);
        $("#advantage .hd h5 span:nth-of-type(3)").delay(1400).animate({opacity: 1}, 600);
        $("#advantage .hd h5 b:nth-of-type(3)").delay(1600).animate({opacity: 1}, 600);
        $("#advantage .hd h5 span:nth-of-type(4)").delay(1800).animate({opacity: 1}, 600);
        $("#advantage .hd h5 b:nth-of-type(4)").delay(2000).animate({opacity: 1}, 600);
        $("#advantage .hd h5 span:nth-of-type(5)").delay(2200).animate({opacity: 1}, 600);
        $("#advantage .bd").delay(2200).animate({height: "440px", opacity: 1}, 600, function() {
          $("#advantage .list-item").animate({opacity: 1}, 600);
          $("#advantage .list-item .wrap").css("box-shadow", "0 0 3px 0 #FFDC90");
        });
        $(destination.item).find(".btn-square").delay(2400).animate({top: 0, opacity: 1}, 600);
      }
      // 免费服务 #service
      if(destination.index === 5) {
        $(destination.item).find(".bd-list .list-item").css("transform", "translateY(0)");
        $(destination.item).find(".bd-list .list-item:nth-child(2n-1) .txt").delay(600).animate({top: 0}, 600);
        $(destination.item).find(".bd-list .list-item:nth-child(2n) .txt").delay(600).animate({top: "50%"}, 600);
        $(destination.item).find(".btn-square").delay(600).animate({top: 0, opacity: 1}, 600);
      }
      // 资深设计师一对一服务 #designer
      if(destination.index === 6){}
      // 额外服务支持 #support
      if(destination.index === 7) {
        $(destination.item).find(".bd-list .list-item").delay(200).animate({opacity: 1}, 600, function() {
          $(this).css("transform", "translateX(0)");
        });
        $(destination.item).find(".btn-square").delay(100).animate({top: 0, opacity: 1}, 600);
      }
      // 一站式服务 #slogan
      if(destination.index === 8) {
        $(destination.item).find(".bd-list .list-item").each(function(i) {
          $(this).delay(i*200+600).animate({left: 0}, 600);
        });
        $(destination.item).find(".ft").delay(2200).animate({top: 0, opacity: 1}, 600);
      }
      // 名师在线答疑 #focus
      if(destination.index === 9) {
        $(destination.item).find(".bd img").delay(200).animate({opacity: 0.3}, 1000);
        $(destination.item).find(".bd .bd-list.left li").each(function(i) {
          $(this).delay(i*200).animate({right: 0, opacity: 1}, 600);
        });
        $(destination.item).find(".bd .bd-list.right li").each(function(i) {
          $(this).delay(200*i+100).animate({left: 0, opacity: 1}, 600);
        });
        $(destination.item).find(".bd .bd-list.left li").delay(200).animate({right: 0, opacity: 1}, 600);
        $(destination.item).find(".bd .bd-list.right li").delay(200).animate({left: 0, opacity: 1}, 600);
      }
      // 多年专注，不玩套路 #goal
      if(destination.index === 10) {
        $(destination.item).find(".bd-list").delay(800).animate({height: "265px"}, 600);
        $(destination.item).find(".btn-square").delay(800).animate({top: 0, opacity: 1}, 600);
      }
      // 友好合作，互利共赢 #partner
      if(destination.index === 11) {
        $(destination.item).find(".bd-list").delay(600).animate({opacity: 1}, 1000);
        $(destination.item).find(".btn-square").delay(600).animate({top: 0, opacity: 1}, 600);
      }
      // #about
      if(destination.index === 12) {
        $(destination.item).find(".cpy-name span:nth-child(1)").animate({top: 0, opacity: 1}, 600, function() {
          $(this).css("transform", "translateY(-25%)");
        });
        $(destination.item).find(".cpy-name span:nth-child(2)").animate({top: 0, opacity: 1}, 600, function() {
          $(this).css("transform", "translateY(25%)");
        });
        $(destination.item).find(".cpy-des span").each(function(i) {
          $(this).delay(i*200+600).animate({top: 0, opacity: 1}, 1000);
        });
      }

      // 离开页
      $(origin.item).find(".hd h2").animate({top: "-360%", opacity: 0}, 300);
      $(origin.item).find(".hd h5 .left").animate({left: "-360%", opacity: 0}, 300);
      $(origin.item).find(".hd h5 .right").animate({right: "-360%", opacity: 0}, 300);
      $(origin.item).find(".ft .btn-square").animate({top: "500px", opacity: 0}, 200);

      // 预算页 #budget
      if(origin.index === 1) {
        $("#budget .bd .lt").animate({bottom: "-360%", opacity: 0}, 300);
        $("#budget .bd .btn-round").animate({opacity: 0}, 300);
        $("#budget .bd .rt").animate({bottom: "-360%", opacity: 0}, 300);
      }

      // 专业性 #professional
      if(origin.index === 2) {
        $("#professional .bd .pro-item:nth-child(2n-1)").animate({top: "100%", opacity: 0}, 300);
        $("#professional .bd .pro-item:nth-child(2n)").animate({top: "-100%", opacity: 0}, 300);
      }

      // 案例展示 #case
      if(origin.index === 3) {
        $("#case .bd").css("box-shadow", "none");
        $("#case .bd-list li:nth-child(1)").css("transform", "rotateZ(45deg) translate(-3000px, -1000px)");
        $("#case .bd-list li:nth-child(2)").css("transform", "rotateZ(90deg) translate(-3000px, 1000px)");
        $("#case .bd-list li:nth-child(3)").css("transform", "rotateZ(135deg) translate(3000px, -1000px)");
        $("#case .bd-list li:nth-child(4)").css("transform", "rotateZ(180deg) translate(3000px, 1000px)");
        $("#case .bd-list li:nth-child(5)").css("transform", "rotateZ(225deg) translate(-3000px, -1000px)");
        $("#case .bd-list li:nth-child(6)").css("transform", "rotateZ(270deg) translate(-3000px, -1000px)");
      }

      // 服务优势 #advantage
      if(origin.index === 4) {
        $("#advantage .hd h5 span").animate({opacity: 0}, 300);
        $("#advantage .hd h5 b").animate({opacity: 0}, 300);
        $("#advantage .bd").animate({height: 0}, 300, function() {
          $("#advantage .list-item").animate({opacity: 0}, 300);
          $("#advantage .list-item .wrap").css("box-shadow", "none");
        });
      }

      // 免费服务 #service
      if(origin.index === 5) {
        // $("#service .hd h2").animate({top: "-360%", opacity: 0}, 300);
        $(origin.item).find(".bd-list .list-item:nth-child(2n-1)").css("transform", "translateY(50%)").find(".txt").animate({top: "50%"}, 300);
        $(origin.item).find(".bd-list .list-item:nth-child(2n)").css("transform", "translateY(-50%)").find(".txt").animate({top: "0%"}, 300);
      }

      // 资深设计师一对一服务 #designer
      if(origin.index === 6) {}

      // 额外服务支持 #support
      if(origin.index === 7) {
        $(origin.item).find(".list-item:nth-child(1)").animate({opacity: 0}, 300, function() {
          $(this).css("transform", "translateX(150%)");
        });
        $(origin.item).find(".list-item:nth-child(2)").animate({opacity: 0}, 300, function() {
          $(this).css("transform", "translateX(50%)");
        });
        $(origin.item).find(".list-item:nth-child(3)").animate({opacity: 0}, 300, function() {
          $(this).css("transform", "translateX(-50%)");
        });
        $(origin.item).find(".list-item:nth-child(4)").animate({opacity: 0}, 300, function() {
          $(this).css("transform", "translateX(-150%)");
        });
      }

      // #slogan
      if(origin.index === 8) {
        $(origin.item).find(".bd-list .list-item").animate({left: "1200px"}, 300);
        $(origin.item).find(".ft").animate({top: "500px", opacity: 0}, 300);
      }

      // #focus
      if(origin.index === 9) {
        $(origin.item).find(".bd img").animate({opacity: 0}, 300);
        $(origin.item).find(".bd .bd-list.left li").animate({right: "1500px", opacity: 0}, 300);
        $(origin.item).find(".bd .bd-list.right li").animate({left: "1500px", opacity: 0}, 300);
      }

      // #goal
      if(origin.index === 10) {
        $(origin.item).find(".bd-list").animate({height: "0px"}, 300);
      }
      
      // #partner
      if(origin.index === 11) {
        $(origin.item).find(".bd-list").animate({opacity: 0}, 300);
      }

      // #about
      if(origin.index === 12) {
        $(origin.item).find(".cpy-des span").animate({opacity: 0, top: "500px"}, 300);
      }

    }
  });

  // 装修计算器
  $("[data-toggle='popover'").popover();

  $(".btn-round").off("click").on("click", function() {
    var area = $("#decoration-area").val();
    var type = $("#decoration-style").val();
    var tel = $("#decoration-tel").val();
    var regTel = /^1[0-9]{10}$/;

    if(parseInt(area) <= 0 || area == "") {
      $("#area-box").popover("show");
      $("#area-box").on("shown.bs.popover", function() {
        setTimeout(function() {
          $("#area-box").popover("hide");
          $("#decoration-area").select().focus();
        }, 1500);
      });
    }else if(!regTel.test(tel)) {
      $("#tel-box").popover("show");
      $("#tel-box").on("shown.bs.popover", function() {
        setTimeout(function() {
          $("#tel-box").popover("hide");
          $("#decoration-tel").select().focus();
        }, 1500);
      });
    }
    else {
      var data = {area: area, type: type, tel: tel};
      
      var fmd_getBudget = new FormData();
      fmd_getBudget.append("token", "getBudget");
      fmd_getBudget.append("data", JSON.stringify(data));
      $.ajax({
        url: "/include/php/handle.php",
        type: "POST",
        data: fmd_getBudget,
        processData: false,
        contentType: false,
        dataType:"json",
        success: function(result) {
          var html = '';
          html += '<table class="table table-hover">';
          html += '<thead><tr><th></th><th>名称</th><th>说明</th><th>费用</th></tr></thead>';
          html += '<tbody>';
          for(var item in result) {
            html += '<tr><th>';
            html += (parseInt(item, 10)+1);
            html += '</th>';
            for(var val in result[item]) {
              html += '<td>';
              html += result[item][val];
              html +='</td>';
            }
            html += '</tr>';
          }
          html += '</tbody></table>';
          $("#budgetModal .modal-body").html(html);
          $("#budgetModal").modal({backdrop: "static"});
        },
        error: function(err) {
          console.log("fail: " + err);
        }
      });
    }

  });

  // 轮播图
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
