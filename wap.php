<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>移动端提示页面</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    html, body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      color: #ffdc90;
      background-color: black;
      position: relative;
    }
    .layer {
      width: 100%;
      height: 100%;
      position: relative;
    }
    .tips {
      position: absolute;
      padding: 15px;
      text-align: center;
      font-size: 20px;
      width: 200px;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      /* border: 2px solid #ca1717; */
    }
    .tips>p {
      margin: 15px 0;
    }
  </style>
</head>
<body>
  <div class="layer">
    <div class="tips">
      <p>移动端正在优化调试中</p>
      <p>敬请期待...</p>
    </div>
  </div>
</body>
<script>
  document.addEventListener("touchstart", function(e) {
    e.preventDefault();
    // e.stopPropagation();
    // alert("touch start");
  });
</script>
</html>