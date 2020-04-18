$(function() {
  // 分页按钮列表
  paginationList({
    token: "refreshPagination",
    handle: "message",
    url: "/cms/include/php/handle.php",
    target: $("#messageTab>.list-wrap"),
    tableId: "message-panel-wrap"
  });
});

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
              fmd.append("handle", "case");
              fmd.append("id", $(this).parent().attr("data-id"));
              $(this).toggleClass("glyphicon-star-empty").toggleClass("glyphicon-star");
              if($(this).hasClass("glyphicon-star")) {
                fmd.append("data", '{"b_recommends": "T"}');
              }
              else {
                fmd.append("data", '{"b_recommends": "F"}');
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
                  if(result.err_no) {
                    $(this).toggleClass("glyphicon-star-empty").toggleClass("glyphicon-star");
                    alert(result.err_code);
                  }
                  else {
                    getCounts({rule: "b_recommends='T'", target: $(".wrap.marked>span.digital")});
                  }
                },
                error: function(err) {
                  console.log("fail: "+err);
                }
              });
              break;
            // 编辑案例
            case "edit":
              $("#editTab").attr("data-id", $(this).parent().attr("data-id"));
              activateTab($(this));
              break;
            // 发布案例
            case "post":
              updateItem({token: "updateItem", id: $(this).parent().attr("data-id")});
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