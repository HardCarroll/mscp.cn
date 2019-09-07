<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Temp Document</title>
  <link rel="stylesheet" href="/include/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/include/css/icons.css">
  <style>
    .wrap {
      max-width: 1200px;
      margin: 0 auto;
      padding: 15px;
      position: relative;
      box-shadow: 0 0 6px #333;
      margin-top: 50px;
    }

    .input-box .input-group+.input-group {
      margin-top: 5px;
    }

    .input-box .input-group .input-group-addon,
    .input-box .input-group .form-control {
      border-radius: 0;
    }

    .button-box {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .button-box .btn+.btn {
      margin-top: 5px;
    }

    #fileTree {
      cursor: default;
      /* display: none; */
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 10000;
      background-color: rgba(0, 0, 0, 0.3);
    }

    #fileTree .content {
      width: 600px;
      height: 600px;
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #FFF;
      box-shadow: 0 0 6px 0 #333;
      border-radius: 6px;
      display: flex;
      flex-direction: column;
    }

    #fileTree .content .content-head {
      height: 40px;
      line-height: 40px;
      text-align: center;
      font-size: 20px;
      font-weight: 700;
    }

    #fileTree .content .content-head .glyphicon-remove {
      font-size: 16px;
      font-weight: normal;
      float: right;
      width: 30px;
      height: 40px;
      line-height: 40px;
      cursor: pointer;
    }

    #fileTree .content .content-body {
      border-top: 1px solid #666;
      border-bottom: 1px solid #666;
      flex: 1;
      overflow: hidden;
    }

    #fileTree .content .content-body .frame {
      border: 5px solid #FFF;
      background-color: #EEE;
      width: 100%;
      height: 100%;
      padding-right: 17px;
      overflow-x: hidden;
      overflow-y: scroll;
      word-break: break-all;
      text-align: center;
    }

    .frame .file-list .list-item {
      padding: 10px 0;
      cursor: pointer;
    }

    .frame .file-list .list-item .item-icon {
      display: block;
      font-size: 50px;
    }

    #fileTree .content .content-foot {
      height: 40px;
      padding: 0 10px;
    }

    #fileTree .content .content-foot label {
      vertical-align: top;
      height: 100%;
      line-height: 40px;
      margin-bottom: 0;
    }

    .pathRoute {
      display: inline-block;
      padding-left: 10px;
      height: 40px;
      line-height: 40px;
      font-weight: 700;
      position: relative;
    }

    .pathRoute::before {
      content: "/\00a0";
      width: 10px;
      height: 100%;
      text-align: center;
      position: absolute;
      top: 0;
      left: 0px;
    }

    .pathRoute span {
      display: inline-block;
      height: 100%;
      padding-right: 10px;
      position: relative;
    }

    .pathRoute span::after {
      content: "/\00a0";
      width: 20px;
      height: 100%;
      text-align: center;
      position: absolute;
      top: 0;
      right: -10px;
    }

  </style>
</head>

<body>
  <div class="wrap">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 input-box">
          <div class="input-group">
            <label for="inJsonPath" class="input-group-addon">数据文件路径</label>
            <input type='text' spellcheck='false' class="form-control" id='inJsonPath' placeholder='path of source file' value="/upload/">
          </div>
          <div class="input-group">
            <label for="inTemplatePath" class="input-group-addon">模板文件路径</label>
            <input type='text' spellcheck='false' class="form-control" id='inTemplatePath' placeholder='path of template file' value="/template/temp_case.php">
          </div>
        </div>
        <div class="col-md-2 button-box">
          <div class="btn btn-default" id="btnFileTree">Button1</div>
          <div class="btn btn-default" id="btn">Button2</div>
        </div>
      </div>
    </div>
  </div>

  <?php

  // echo json_encode(fileTree(__DIR__), 320);
  // echo "<br>".__DIR__."<br>";
  ?>

  <!-- <div id='fileTree'>
    <div class='content'>
      <div class='content-head'>
        <span class='title'>File Tree Dialog</span>
        <span class='close glyphicon glyphicon-remove'></span>
      </div>
      <div class='content-body'>
        <div class='frame container-fluid'>
          <div class='file-list row'>
            <div class='list-item col-xs-3'>
              <span class='item-icon glyphicon glyphicon-folder-close'></span>
              <span class='item-title'>about</span>
            </div>
            <div class='list-item col-xs-3'>
              <span class='item-icon glyphicon glyphicon-folder-close'></span>
              <span class='item-title'>advantage</span>
            </div>
            <div class='list-item col-xs-3'>
              <span class='item-icon glyphicon glyphicon-folder-close'></span>
              <span class='item-title'>budget</span>
            </div>
            <div class='list-item col-xs-3'>
              <span class='item-icon glyphicon glyphicon-file'></span>
              <span class='item-title'>index.php</span>
            </div>
            <div class='list-item col-xs-3'>
              <span class='item-icon glyphicon glyphicon-file'></span>
              <span class='item-title'>temp.php</span>
            </div>
          </div>
        </div>
      </div>
      <div class='content-foot'>
        <label>当前位置：</label>
        <div class="pathRoute">
          <span>about</span>
          <span>upload</span>
        </div>
      </div>
    </div> -->

</body>

</html>
<script src="/include/jquery/jquery.min.js"></script>
<script src="/include/bootstrap/js/bootstrap.min.js"></script>
<script>
  $(function() {
    $(".form-control").on("focus", function() {
      console.log("focus in " + $(this).attr("id"));
      $(this).select();
    });

    // var d = '{"key": "hello", "value": "world", "array": [{"a1": "v1", "b1": "v1"}, {"a2": "v2", "b2": "v2"}]}';
    // var a = {k: "hello", v: "world", arr: [{a1: "a1", b1: "b1"}, {a2: "a2", b2: "b2"}]};
    // console.log(JSON.parse(d).array[1]);
    // console.log(JSON.stringify(a));

    $("#btnFileTree").click(function() {
      if (!$("body").find("#fileTree").length) {
        var dlg = $("<div id='fileTree'><div class='content'><div class='content-head'><span class='title'>File Tree Dialog</span><span class='close glyphicon glyphicon-remove'></span></div><div class='content-body'></div><div class='content-foot'><label>当前位置：</label><div class='pathRoute'></div></div></div></div>");
        $("body").append(dlg);
      }
      $("#fileTree").find(".glyphicon-remove").click(function() {
        $("#fileTree").remove();
      });

      $.ajax({
        url: "/include/php/handle.php",
        type: "POST",
        data: "token=fileTree",
        processData: false,
        // contentType: false,
        // dataType: "json",
        success: function(result) {
          var val = JSON.parse(result);
          console.log(val);
          var html = "";
          var ele = $("<div class='frame container-fluid'><div class='file-list row'></div></div>");
          for (var i in val) {
            for (var k in val[i]) {
              if ("folder" === i) {
                ele.find(".file-list").append("<div class='list-item col-xs-3'><span class='item-icon glyphicon glyphicon-folder-close'></span><span class='item-title'>" + val[i][k] + "</span></div>");
              } else if ("file" === i) {
                ele.find(".file-list").append("<div class='list-item col-xs-3'><span class='item-icon glyphicon glyphicon-file'></span><span class='item-title'>" + val[i][k] + "</span></div>");
              }
            }
          }
          $("#fileTree").find(".content-body").append(ele).find(".list-item").click(function() {
            console.log($(this).html());
          });

        },
        error: function(err) {
          console.log("fail: " + err);
        }
      });

    });

    $("#btn").click(function() {
      $.ajax({
        url: "/include/php/handle.php",
        type: "POST",
        data: "token=fileTree",
        processData: false,
        // contentType: false, // 发送数据为复杂格式时设置此项
        dataType: "json", // 返回数据为JSON格式
        success: function(result) {
          console.log(result);
          for(var k in result) {
            console.log(result[k]);
          }
          console.log(JSON.stringify(result));

          // var ele = $("<div></div>");
          // console.log(isFolder(ele, val).html());
        },
        error: function(err) {
          console.log("fail: " + err);
        }
      });
    });

    var data = JSON.parse('{"name":"upload","path":"/upload/","sub_file":[{"name":"2019082601","path":"/upload/2019082601","sub_file":[{"name":"2019082601.json","path":"/upload/2019082601/2019082601.json","sub_file":""},{"name":"201908260101.jpg","path":"/upload/2019082601/201908260101.jpg","sub_file":""},{"name":"201908260102.jpg","path":"/upload/2019082601/201908260102.jpg","sub_file":""},{"name":"201908260103.jpg","path":"/upload/2019082601/201908260103.jpg","sub_file":""},{"name":"201908260104.jpg","path":"/upload/2019082601/201908260104.jpg","sub_file":""}]}]}');
    // console.log(typeof data.name);
    // console.log(fileTree(data).html());
    $("body").append(fileTree(data));

    function fileTree(data, deepth=0) {
      var ele = $("<div data-deepth="+deepth+" data-path="+data.path+"></div>");
      ele.html(data.name);
      if("object" === typeof(data.sub_file)) {
        deepth += 1;
        for(var k in data.sub_file) {
          ele.append(fileTree(data.sub_file[k], deepth));
        }
      }
      return ele;
    }

    function isFolder(targetEle, fileName) {
      // var targetEle = $("<div></div>");
      // if("object" === typeof(fileName)) {
      //   var tar = $("<ul></ul>");
      //   for(var i in fileName) {
      //     tar.append(i);
      //     if("object" === typeof(fileName[i])) {}
      //   }
      // }
      // else {
      //   var ele = $("<p>"+fileName+"</p>");
      // }

      for (var i in fileName) {
        if ("object" === typeof(fileName[i])) {
          var tar = $("<div>" + i + "</div>");
          var ele = isFolder(tar, fileName[i]);
        } else {
          var ele = $("<p>" + fileName[i] + "</p>");
          // console.log(ele.html());
        }

        $(targetEle).append(ele);
      }

      // console.log($(targetEle).html());
      return targetEle;
    }

  });
</script>