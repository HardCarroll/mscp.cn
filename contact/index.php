<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="renderer" content="webkit">
  <meta name="Keywords" content="关键词">
  <meta name="Description" content="内容描述">
  <title>联系我们-弥尚餐饮装饰设计</title>
  <link rel="stylesheet" href="/include/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/include/css/icons.css">
  <link rel="stylesheet" href="/include/css/shared.css">
  <link rel="stylesheet" href="/include/css/contact.css">
</head>

<body>
  <section class="layer">
    <section class="header">
      <div id="navbar-mscp">
        <div class="nav-left">
          <a href="/" class="nav-logo">
            <img src="/images/logo-hd.png" alt="">
          </a>
        </div>
        <div class="nav-middle visible-lg-block">
          <span>湖南弥尚装饰设计有限公司</span>
        </div>
        <div class="nav-right">
          <ul class="nav-list clearfix">
            <li><a href="/">首页<b>Home</b></a></li>
            <li><a href="/advantage/">服务优势<b>Advantage</b></a></li>
            <li><a href="/budget">一键报价<b>Offer</b></a></li>
            <li><a href="/case/">精品案例<b>Case</b></a></li>
            <li><a href="/about">企业介绍<b>About</b></a></li>
            <li><a href="/news">新闻资讯<b>News</b></a></li>
            <li class="current"><a href="javascript:;">联系我们<b>Contact</b></a></li>
          </ul>
        </div>
      </div>
      <?php
      // echo file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/include/common/navbar.tpl");
      ?>
    </section>
    <section id="banner">
      <!-- <img src="/images/contact-bg.jpg" alt=""> -->
    </section>
    <section class="position">
      <div class="inner">
        <span class="glyphicon glyphicon-map-marker"></span>
        <span>当前位置：</span>
        <ol class="breadcrumb">
          <li><a href="/">首页</a></li>
          <li class="active">联系我们</li>
        </ol>
      </div>
    </section>
    <section class="body">
      <div class="inner">
        <div class="container-fluid row card">
          <div class="col-xs-12 col-sm-6 txt">
            <h2><strong>弥尚餐饮装饰设计</strong></h2>
            <p>电话：+86 13873976777</p>
            <p>座机：0731-88853335</p>
            <p>传真：0731-88853335</p>
            <p>邮箱：382320863@qq.com</p>
            <p>地址：湖南省长沙市芙蓉区朝阳路3号天心电脑城</p>
          </div>
          <div class="col-xs-12 col-sm-6 img">
            <div class="wrap">
              <img src="/images/pos-bg.png" alt="">
              <div class="cover">
                <img src="/images/pos-fg.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div id="baidu-map">
        </div>
        <div class="message">
          <div class="hd">
            <span class="line"></span>
            <span class="txt">在线留言</span>
            <span class="line"></span>
          </div>
          <div class="bd container-fluid row">
            <div class="bd-left col-sm-5">
              <div class="input-group">
                <span class="input-group-addon">您的称呼</span>
                <input type="text" id="msg-name" class="form-control" placeholder="请问如何称呼您呢？">
              </div>
              <div id="tel-box" class="input-group" data-toggle="popover" data-trigger="manual" data-content="请输入有效的手机号码" data-placement="bottom" tabindex="0">
                <span class="input-group-addon">联系电话</span>
                <input type="text" id="msg-phone" class="form-control" placeholder="请填写您的手机号码，稍后会有工作人员回访！">
              </div>
              <div class="input-group">
                <span class="input-group-addon">邮箱地址</span>
                <input type="text" id="msg-email" class="form-control" placeholder="请填写您的邮箱地址，相关资料将通过邮箱发送给您！">
              </div>
              <div class="input-group">
                <span class="input-group-addon">联系地址</span>
                <input type="text" id="msg-address" class="form-control" placeholder="如需要现场考察、量房，请填写您的联系地址！">
              </div>
            </div>
            <div class="bd-right col-sm-7">
              <div class="input-group">
                <span class="input-group-addon">留言标题</span>
                <input type="text" id="msg-title" class="form-control" placeholder="您要留言的标题是什么？">
              </div>
              <div class="input-group">
                <span class="input-group-addon">留言内容</span>
                <textarea name="msg-content" id="msg-content" rows="6" class="form-control" placeholder="请输入留言内容..."></textarea>
              </div>
            </div>
          </div>
          <div id="verify-box" class="ft clearfix" data-toggle="popover" data-trigger="manual" data-content="验证码错误" data-placement="bottom" tabindex="0">
            <span class="tag">验证码</span>
            <input type="text" id="inputCode" maxlength="4">
            <div class="verificationCode">
              <canvas width="90" height="30" id="verifyCanvas"></canvas>
              <img id="code_img">
            </div>
          </div>
          <div class="btn btn-danger" id="btn-submit">提交</div>
        </div>
      </div>
    </section>
    <section class="footer">
      <div id="contact">
        <section class="contact-hd">
          <img class="bottom-logo" src="/images/bottom-text.png" alt="">
          <ul>
            <li>
              <a href="http://wpa.qq.com/msgrd?v=3&uin=382320863&site=qq&menu=yes"><span class="icon icon-cuz icon-qq"></span></a>
            </li>
            <li>
              <span class="glyphicon glyphicon-qrcode"></span>
              <div class="qrcode">
                <img src="/images/qrcode.jpg" alt="">
              </div>
            </li>
          </ul>
        </section>
        <section class="contact-bd">
          <div class="contact-us">
            <h4>联系我们</h4>
            <p>电话：+86 13873976777</p>
            <p>座机：0731-88853335</p>
            <p>传真：0731-88853335</p>
            <p>邮箱：382320863@qq.com</p>
            <p>地址：湖南省长沙市芙蓉区朝阳路3号天心电脑城</p>
          </div>
          <div class="qrcode">
            <p class="pic"><img src="/images/qrcode.jpg" alt="扫一扫，关注弥尚餐饮装饰设计有限公司手机网站"><span>官方二维码</span></p>
            <p class="pic"><img src="/images/qrcode.jpg" alt="扫一扫，关注弥尚餐饮装饰设计有限公司小程序"><span>小程序二维码</span></p>
          </div>
        </section>
        <section class="contact-ft">
          <a href="http://www.mscp.cn">湖南弥尚餐饮装饰设计有限公司</a> Copyright © 2019 版权所有&nbsp;&nbsp;技术支持：<a href="http://www.mscp.cn" target="_blank">弥尚餐饮装饰设计</a>&nbsp;&nbsp;<a href="http://www.beian.miit.gov.cn" target="_blank"><img src="/images/icp.jpg">湘ICP备17010608号-1</a>
        </section>
      </div>
    </section>

    <!-- 右下角fixed侧边栏 -->
    <ul class="list-group fixed fixed-rb" id="asidebar">
      <ul class="hidden-xs list-group" id="asidebar-tools">
        <li class="list-group-item" role="button" id="btn_aside_qq">
          <a href="http://wpa.qq.com/msgrd?v=3&uin=382320863&site=qq&menu=yes"><span class="icon icon-cuz icon-qq"></span></a>
        </li>
        <li class="list-group-item" role="button" id="btn_aside_tel">
          <span class="glyphicon glyphicon-earphone"></span>
          <div class="tel">13873976777</div>
        </li>
        <li class="list-group-item" role="button" id="btn_aside_qrcode">
          <span class="glyphicon glyphicon-qrcode"></span>
          <div class="qrcode">
            <img src="/images/qrcode.jpg" alt="弥尚餐饮装饰设计">
          </div>
        </li>
      </ul>
      <li class="list-group-item" role="button" id="btn_backtop">
        <span class="glyphicon glyphicon-arrow-up"></span>
      </li>
    </ul>
  </section>

  <a class="bshareDiv" href="http://www.bshare.cn/share">分享按钮</a>
  <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#uuid=&style=3&fs=4&textcolor=#fff&bgcolor=#000&text=分享"></script>
  <script src="/include/jquery/jquery.min.js"></script>
  <script src="/include/bootstrap/js/bootstrap.min.js"></script>
  <script src="/include/js/shared.js"></script>
  <script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=Q3tkjSIyd86jWKCzKiRfO4wjtjrnmmZR"></script>
  <script type="text/javascript" src="/include/js/contact.js"></script>
</body>

</html>