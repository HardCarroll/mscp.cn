$(function() {
  $("[data-toggle='popover'").popover();

  $(".btn-budget").off("click").on("click", function () {
    var area = $("#decoration-area").val();
    var type = $("#decoration-style").val();
    var tel = $("#decoration-tel").val();
    var regTel = /^1[0-9]{10}$/;

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
          var html = '';
          html += '<table class="table table-hover">';
          html += '<thead><tr><th></th><th>名称</th><th>说明</th><th>费用</th></tr></thead>';
          html += '<tbody>';
          for (var item in result) {
            html += '<tr><th>';
            html += (parseInt(item, 10) + 1);
            html += '</th>';
            for (var val in result[item]) {
              html += '<td>';
              html += result[item][val];
              html += '</td>';
            }
            html += '</tr>';
          }
          html += '</tbody></table>';
          $("#budgetModal .modal-body").html(html);
          $("#budgetModal").modal({ backdrop: "static" });
        },
        error: function (err) {
          console.log("fail: " + err);
        }
      });
    }

  });
});
