$(function() {
  // 网站信息标签页输入框输入内容
  $(".site-wrap input, .site-wrap textarea").on("input", function() {
    $(".btn-save").removeClass("disabled");
  });
  // 保存按钮点击事件处理函数
  $(".btn-save").off("click").on("click", function() {
    save_siteInfo();
  });

  refresh_siteTab();
});


/**
 * ajax更新网站信息
 */
function refresh_siteTab() {
  var fmd = new FormData();
  fmd.append("token", "getSiteInfo");
  $.ajax({
    url: "/cms/include/php/handle.php",
    type: "POST",
    data: fmd,
    processData: false,
    contentType: false,   //数据为formData时必须定义此项
    dataType: "json",     //返回json格式数据
    context: $(".site-wrap"),
    success: function(result) {
      console.log(result);
      if(result) {
        $(this).find("[id='domain']").val(result.site_info.domain);
        $(this).find("[id='title']").val(result.site_info.title);
        $(this).find("[id='keywords']").val(result.site_info.keywords);
        $(this).find("[id='description']").val(result.site_info.description);
        $(this).find("[id='icp']").val(result.site_info.icp);
        $(this).find("[id='company-name']").val(result.company_info.name);
        $(this).find("[id='mobile']").val(result.company_info.mobile);
        $(this).find("[id='service-qq']").val(result.company_info.qq);
        $(this).find("[id='phone']").val(result.company_info.tel);
        $(this).find("[id='fax']").val(result.company_info.fax);
        $(this).find("[id='email']").val(result.company_info.email);
        $(this).find("[id='company-address']").val(result.company_info.address);
        setCookie("siteInfo", JSON.stringify(result));
        // setCookie("siteInfo", result);
      }
    },
    error: function(err) {
      console.log("fail: "+err);
    }
  }); // ajax_func
}

/**
 * ajax设置网站基本信息，并反馈状态信息
 */
function save_siteInfo() {
  var fmd = new FormData();
  // var siteInfo = '{"domain":"'+$("#domain").val()+'", "title": "'+$("#title").val()+'", "keywords": "'+$("#keywords").val()+'", "description": "'+$("#description").val()+'"}';
  var siteInfo = {site_info: {domain: $("#domain").val(), title: $("#title").val(), keywords: $("#keywords").val(), description: $("#description").val(), icp: $("#icp").val()}, company_info: {name: $("#company-name").val(), mobile: $("#mobile").val(), qq: $("#service-qq").val(), tel: $("#phone").val(), fax: $("#fax").val(), email: $("#email").val(), address: $("#company-address").val()}};
  fmd.append("token", "setSiteInfo");
  fmd.append("siteInfo", JSON.stringify(siteInfo));
  // fmd.append("siteInfo", siteInfo);
  $.ajax({
    url: "/cms/include/php/handle.php",
    type: "POST",
    data: fmd,
    processData: false,
    contentType: false,   //数据为formData时必须定义此项
    dataType: "json",     //返回json格式数据
    context: $("#siteTab"),
    success: function(result) {
      $(this).find(".text-state").addClass("text-success").html(result.err_code);
      $(this).find(".btn-save").addClass("disabled");
      setTimeout(function() {
        $(".text-state").html("");
      }, 2000);
    },
    error: function(err) {
      console.log("fail: "+err);
    }
  }); // ajax_func
}