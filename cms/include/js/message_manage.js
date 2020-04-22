$(function() {
  // 分页按钮列表
  paginationList({
    token: "refreshPagination",
    handle: "message",
    url: "/cms/include/php/handle.php",
    target: $("#messageTab>.list-wrap"),
    tableId: "message-panel-wrap"
  });

  // 留言消息管理管理标签页上分类按钮处理函数
  $("#messageTab .overview .wrap").each(function() {
    $(this).off("click").on("click", function(e) {
      e.stopPropagation();
      e.preventDefault();
      if($(this).hasClass("total")) {
        refreshTabList({page: 1, rule: "", tableId: "message-panel-wrap"});
        paginationList({token: "refreshPagination", handle: "message", url: "/cms/include/php/handle.php", target: $("#messageTab>.list-wrap"), rule: "", tableId: "message-panel-wrap"});
      }
      if($(this).hasClass("marked")) {
        refreshTabList({page: 1, rule: "b_read='F'", tableId: "message-panel-wrap"});
        paginationList({token: "refreshPagination", handle: "message", url: "/cms/include/php/handle.php", target: $("#messageTab>.list-wrap"), rule: "b_read='F'", tableId: "message-panel-wrap"});
      }
    });
  });

  // 删除确认对话框处理函数
  $("#modalConfirm .btn-danger").off("click").on("click", function() {
    var fmd = new FormData();
    fmd.append("token", "removeItem");
    fmd.append("handle", "message");
    fmd.append("id", $(this).attr("data-id"));
    $.ajax({
      url: "/cms/include/php/handle.php",
      type: "POST",
      data: fmd,
      processData: false,
      contentType: false,   //数据为formData时必须定义此项
      dataType: "json",     //返回json格式数据
      context: $(this),
      success: function(result) {
        if(!result.err_no) {
          location.reload(true);
        }
      },
      error: function(err) {
        console.log("fail: "+err);
      }
    });
  });

  refreshTabList({page: 1, rule: "", tableId: "message-panel-wrap"});

});

/**
 * 实时获取数据库对应条件的记录数
 * @param {JSON} argJson {rule: 数据库查询条件, target: 目标DOM对象}
 */
function getCounts(argJson) {
  
  var fmd = new FormData();
  fmd.append("token", "getCounts");
  fmd.append("handle", "message");
  fmd.append("rule", argJson.rule);
  $.ajax({
    url: "/cms/include/php/handle.php",
    type: "POST",
    data: fmd,
    processData: false,
    contentType: false,   //数据为formData时必须定义此项
    context: argJson.target,
    success: function(result) {
      $(this).html("").html(result);
    },
    error: function(err) {
      console.log("fail: "+err);
    }
  });
}

/**
 * ajax刷新案例列表
 * @param {JSON} data:{page: 1, //按10条每页计算，获取第几页的内容
 *                      rule: "b_recommends='T'"  //查询数据库规则
 *                    }
 */
function refreshTabList(data) {
  var fmd = new FormData();
  fmd.append("token", "refreshTabList");
  fmd.append("handle", "message");
  if(data) {
    fmd.append("data", JSON.stringify(data));
  }
  $.ajax({
    url: "/cms/include/php/handle.php",
    type: "POST",
    data: fmd,
    processData: false,
    contentType: false,   //数据为formData时必须定义此项
    context: $("#messageTab>.message-wrap"),
    success: function(result) {
      // 先清空内容后再追加
      $(this).html("").append(result);

      // 注册按钮点击事件
      $(this).find(".panel-collapse .btn").each(function() {
        $(this).off("click").on("click", function() {
          switch($(this).attr("data-token")) {
            // 推荐阅读
            case "mark":
              var fmd = new FormData();
              fmd.append("token", "markItem");
              fmd.append("handle", "message");
              fmd.append("id", $(this).parent().attr("data-id"));
              if($(this).hasClass("glyphicon-star")) {
                fmd.append("data", '{"b_read": "F"}');
              }
              else {
                fmd.append("data", '{"b_read": "T"}');
              }
              $.ajax({
                url: "/cms/include/php/handle.php",
                type: "POST",
                data: fmd,
                processData: false,
                contentType: false,   //数据为formData时必须定义此项
                dataType: "json",     //返回json格式数据
                context: $(this),
                success: function(result) {
                  $(this).toggleClass("glyphicon-star-empty").toggleClass("glyphicon-star").parent().parent().parent().toggleClass("panel-default").toggleClass("panel-danger");
                  getCounts({rule: "b_read='F'", target: $(".wrap.marked>span.digital")});
                  getCounts({rule: "b_read='F'", target: $(".nav-list .list-item.active .badge")});
                },
                error: function(err) {
                  console.log("fail: "+err);
                }
              });
              break;
            // 删除案例
            case "remove":
              $("#modalConfirm").modal("show").find(".btn-danger").attr("data-id", $(this).parent().attr("data-id"));
              break;
          }
        });
      });
    },
    error: function(err) {
      console.log("fail: "+err);
    }
  }); // ajax_func

}