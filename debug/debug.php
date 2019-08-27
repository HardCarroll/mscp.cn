<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Debug Document</title>
  <link rel="stylesheet" href="/include/bootstrap/css/bootstrap.min.css">
  <style>
    ul {
      list-style: none;
    }

    #navbar-mscp {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: rgba(0, 0, 0, 0.8);
      border-radius: 0;
      width: 100%;
      height: 100px;
      border: none;
      margin-bottom: 0;
      padding: 0 15px;
      position: fixed;
      z-index: 1000;
    }

    #navbar-mscp .nav-left {
      height: 100%;
      padding: 15px 0;
    }

    #navbar-mscp .nav-left img {
      display: inline-block;
      height: 100%;
    }

    #navbar-mscp .nav-left span {
      display: inline-block;
      border-left: 1px solid #ffdc90;
      margin-left: 10px;
      padding-left: 10px;
      font-size: 20px;
      font-weight: 700;
      color: #ffdc90;
      height: 100%;
      line-height: 70px;
      vertical-align: top;
      /* text-align: left; */
      /* line-height: 1.7em; */
    }

    #navbar-mscp .nav-middle span {
      font-size: 40px;
      font-weight: 700;
      color: #ffdc90;
    }

    #navbar-mscp .nav-right {
      margin-top: 20px;
      padding: 0;
    }

    #navbar-mscp .nav-list {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    #navbar-mscp .nav-list li {
      float: left;
    }

    #navbar-mscp .nav-list li>a {
      color: #f6f8f8;
      padding: 10px;
      font-size: 16px;
      text-align: center;
    }

    #navbar-mscp .nav-list li>a b {
      display: block;
      font-size: 14px;
    }

    #navbar-mscp .nav-list li.current>a {
      color: #ca1717;
    }

    #navbar-mscp .nav-list li:hover>a {
      color: #ffdc90;
    }

    #navbar-mscp .nav-list li.current:hover>a {
      color: #ca1717;
    }
  </style>
</head>

<body>
  <div id="navbar-mscp">
    <div class="nav-left">
      <a href="/" class="nav-logo">
        <img src="/images/xc.png" alt="">
        <span>懂餐饮更懂设计</span>
      </a>
    </div>
    <div class="nav-middle visible-lg-block">
      <span>湖南弥尚空间设计</span>
    </div>
    <div class="nav-right">
      <ul class="nav-list">
        <li class="current">
          <a href="javascript:;">首页<b>Home</b></a>
        </li>
        <li><a href="/advantage/">服务优势<b>Advantage</b></a></li>
        <li><a href="/budget">一键报价<b>Offer</b></a></li>
        <li><a href="/case">精品案例<b>Case</b></a></li>
        <li><a href="/about">企业介绍<b>About</b></a></li>
        <li><a href="/news">新闻资讯<b>News</b></a></li>
        <li><a href="/contact">联系我们<b>Contact</b></a></li>
      </ul>
    </div>
  </div>


  <div style="height: 100px;"></div>
  <input type="text" id="inputCode" maxlength="4">
  <div id="verificationCode" class="verificationCode">
    <canvas width="90" height="30" id="verifyCanvas"></canvas>
    <img id="code_img">
  </div>
  <input type="button" value="Verify" id="btn_verify">

  <input type="button" value="CreateHtmlFile" id="btn_createhtml">

</body>

</html>

<script src="/include/jquery/jquery.min.js"></script>
<script>
  $(function() {
    var verifyCode = drawCode();;

    $("#code_img").on("click", function() {
      verifyCode = resetCode();
    });

    $("#btn_verify").click(function() {
      var inputCode = $("#inputCode").val().toUpperCase();
      if (inputCode === verifyCode) {
        console.log("verify success");
      } else {
        console.log("verify fail");
        verifyCode = resetCode();
      }
    });

    $("#btn_createhtml").click(function() {
      console.log("hello world");
      $.ajax({
        url: "/include/php/handle.php",
        type: "POST",
        data: "token=createHtmlFile",
        processData: false,
        // contentType: false, // 当数据格式为FormData时
        dataType: "json", // 返回数据类型
        success: function(result) {
          console.log("success: " + result);
        },
        error: function(err) {
          console.log("error: " + err);
        }
      });
    });

  });

  // 绘制验证码
  function drawCode() {
    var randPool = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0",
      'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
      'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
    ];
    var canvas = document.getElementById("verifyCanvas"); //获取HTML端画布
    var context = canvas.getContext("2d"); //获取画布2D上下文
    context.fillStyle = "cornflowerblue"; //画布填充色
    context.fillRect(0, 0, canvas.width, canvas.height); //清空画布
    context.fillStyle = "white"; //设置字体颜色
    context.font = "20px Consolas"; //设置字体
    var rand = new Array();
    var x = new Array();
    var y = new Array();
    for (var i = 0; i < 4; i++) {
      rand.push(rand[i]);
      rand[i] = randPool[Math.floor(Math.random() * randPool.length)];
      x[i] = i * 15 + 15;
      y[i] = Math.random() * 15 + 15;
      context.fillText(rand[i], x[i], y[i]);
    }
    code = rand.join('').toUpperCase();
    //画3条随机线
    for (var i = 0; i < 3; i++) {
      drawline(canvas, context);
    }

    // 画30个随机点
    for (var i = 0; i < 30; i++) {
      drawDot(canvas, context);
    }
    convertCanvasToImage(canvas);
    return code;
  }

  // 随机线
  function drawline(canvas, context) {
    context.moveTo(Math.floor(Math.random() * canvas.width), Math.floor(Math.random() * canvas.height)); //随机线的起点x坐标是画布x坐标0位置，y坐标是画布高度的随机数
    context.lineTo(Math.floor(Math.random() * canvas.width), Math.floor(Math.random() * canvas.height)); //随机线的终点x坐标是画布宽度，y坐标是画布高度的随机数
    context.lineWidth = 0.5; //随机线宽
    context.strokeStyle = 'rgba(50,50,50,0.3)'; //随机线描边属性
    context.stroke(); //描边，即起点描到终点
  }
  // 随机点(所谓画点其实就是画1px像素的线，方法不再赘述)
  function drawDot(canvas, context) {
    var px = Math.floor(Math.random() * canvas.width);
    var py = Math.floor(Math.random() * canvas.height);
    context.moveTo(px, py);
    context.lineTo(px + 1, py + 1);
    context.lineWidth = 0.2;
    context.stroke();

  }
  // 绘制图片
  function convertCanvasToImage(canvas) {
    $("#verifyCanvas").css("display", "none");
    $("#code_img").attr("src", canvas.toDataURL("image/png"));
  }

  // 重置验证码
  function resetCode() {
    $('#verifyCanvas').remove();
    $('#code_img').before('<canvas width="90" height="30" id="verifyCanvas"></canvas>');
    return drawCode();
  }
</script>