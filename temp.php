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
      display: none;
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
      height: 50px;
      line-height: 50px;
      text-align: center;
      font-size: 20px;
      font-weight: 700;
    }
    #fileTree .content .content-head .glyphicon-remove {
      font-size: 16px;
      font-weight: normal;
      float: right;
      width: 30px;
      height: 50px;
      line-height: 50px;
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
    }
    #fileTree .content .content-foot {
      height: 50px;
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

  <div id='fileTree'>
    <div class='content'>
      <div class='content-head'>
        <span class='title'>File Tree Dialog</span>
        <span class='close glyphicon glyphicon-remove'></span>
      </div>
      <div class='content-body'>
        <div class='frame'>
          <?php
          // for($i=0;$i<50;$i++) {
          //   echo 1+$i . "<br/>";
          // }
          // $f = scandir(__DIR__);
          // $fileArray = scandir("./");
          // foreach($fileArray as $file) {
          //   if($file !== "." && $file !== "..") {
          //     echo $file;
          //     if(is_dir($file)) {
          //       echo "<br>&nbsp;&nbsp;";
          //       $arr = scandir("./".$file);
          //       foreach($arr as $f) {
          //         if($f !== "." && $f !== "..") {
          //           echo $f;
          //           if(is_dir($f)) {
          //             echo "<br>&nbsp;&nbsp;";
          //           }
          //         }
          //       }
          //     }
          //     echo "<br>";
          //   }
          // }
          // echo $_SERVER["DOCUMENT_ROOT"]."/upload";
          // echo __DIR__;

          // echo(scandirToJson("./"));
          print_r(json_encode(fileTree(__DIR__."/upload/"), 320));

          function fileTree($path){
            $tree = array();
            $fileArray = scandir($path);
            foreach ($fileArray as $file) {
              if ($file !== "." && $file !== "..") {
                $val = $file;
                $filePath = $path . "/" . $file;
                if (is_dir($filePath)) {
                  $val = array($file => fileTree($filePath));
                }
                array_push($tree, $val);
              }
            }
            return $tree;
          }
          ?>
        </div>
      </div>
      <div class='content-foot'></div>
    </div>
  </div>

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
      if(!$("body").find("#fileTree").length) {
        var dlg = "<div id='fileTree'><div class='content'><div class='content-head'><span class='title'>File Tree Dialog</span><span class='close glyphicon glyphicon-remove'></span></div><div class='content-body'></div><div class='content-foot'></div></div></div>";
        $("body").append(dlg);
      }
      $("#fileTree").css({"display": "block"}).find(".glyphicon-remove").click(function() {
        $("#fileTree").remove();
      });
    });

    $("#btn").click(function() {
      // console.log($(this).attr("id"));
      $.ajax({
        url: "/include/php/handle.php",
        type: "POST",
        data: "token=fileTree",
        processData: false,
        // contentType: false,
        // dataType: "json",
        success: function(result) {
          var val = JSON.parse(result);
          for(var k in val) {
            if(typeof(val[k]) === "object") {
              for(var i in val[k]) {
                console.log(val[k][i]);
              }
            }
          }
          // console.log(val);
        },
        error: function(err) {
          console.log("fail: " + err);
        }
      });
    });

    function isFolder(fileName) {
      for(var i in fileName) {
        if(typeof(fileName) === "object") {
          isFolder(fileName);
        }

      }
    }

  });
</script>