<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Debug Document</title>
</head>

<body>
  <input type="text" id="inputCode" maxlength="4">
  <div id="verificationCode" class="verificationCode">
    <canvas width="90" height="30" id="verifyCanvas"></canvas>
    <img id="code_img">
  </div>
  <input type="button" value="Verify" id="btn_verify">

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
      if(inputCode === verifyCode) {
        console.log("verify success");
      }
      else {
        console.log("verify fail");
        verifyCode = resetCode();
      }
    });

  });

  // 绘制验证码
  function drawCode() {
    var randPool = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0",
      'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
      'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
    ];
    var canvas = document.getElementById("verifyCanvas"); //获取HTML端画布
    var context = canvas.getContext("2d");  //获取画布2D上下文
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