<?php
// $dataJson = file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/include/json/temp_article.json");
$dataJson = file_get_contents("php://input");
$dataArray = json_decode($dataJson, true);
$st_title = $dataArray["st_title"];
$st_keywords = $dataArray["st_keywords"];
$st_description = $dataArray["st_description"];
$ct_title = $dataArray["ct_title"];
$ct_author = $dataArray["ct_author"];
$ct_class = $dataArray["ct_class"];
$ct_issue = $dataArray["ct_issue"];
$ct_content = $dataArray["ct_content"];
// $more_prev = $dataArray["more_prev"];
// $more_next = $dataArray["more_next"];
function transmitType($key)
{
  $type = '';
  switch ($key) {
    case 0:
      $type = '行业资讯';
      break;
    case 1:
      $type = '公司动态';
      break;
  }
  return $type;
}
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="renderer" content="webkit">
  <meta name="Keywords" content="关键词">
  <meta name="Description" content="内容描述">
  <title>新闻资讯-弥尚餐饮装饰设计</title>
  <link rel="stylesheet" href="/include/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/include/css/icons.css">
  <link rel="stylesheet" href="/include/css/shared.css">
  <link rel="stylesheet" href="/include/css/temp_article.css">
</head>

<body>
  <section class="layer">
    <section class="header">
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
          <ul class="nav-list clearfix">
            <li><a href="/">首页<b>Home</b></a></li>
            <li><a href="/advantage/">服务优势<b>Advantage</b></a></li>
            <li><a href="/budget">一键报价<b>Offer</b></a></li>
            <li><a href="/case/">精品案例<b>Case</b></a></li>
            <li><a href="/about">企业介绍<b>About</b></a></li>
            <li class="current"><a href="javascript:;">新闻资讯<b>News</b></a></li>
            <li><a href="/contact">联系我们<b>Contact</b></a></li>
          </ul>
        </div>
      </div>
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
          <li><a href="/news">新闻资讯</a></li>
          <li class="active">
            <?php echo $ct_title; ?>
          </li>
        </ol>
      </div>
    </section>
    <section class="body">
      <div class="inner">
        <div class="article-card">
          <div class="contain-fluid">
            <span class="glyphicon glyphicon-bullhorn"></span>
            <div class="card-head">
              <p class="title"><?php echo $ct_title; ?></p>
              <p class="extra">
                <span style="margin-left: 15px;">来源：</span><a href="/" class="author"><?php echo $ct_author; ?></a>
                <span style="margin-left: 15px;">类别：</span><a href="/news/" class="type"><?php echo transmitType($ct_class); ?></a>
                <span style="margin-left: 15px;">发布时间：</span><span class="date"><?php echo $ct_issue; ?></span>
              </p>
            </div>
            <hr>
            <div class="card-body"><?php echo $ct_content; ?></div>
          </div>
        </div>
      </div>
    </section>
    <section class="footer">
      <div id="contact">
        <section class="contact-hd">
          <img src="/images/bottom-text.png" alt="">
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

  <script src="/include/jquery/jquery.min.js"></script>
  <script src="/include/bootstrap/js/bootstrap.min.js"></script>
  <script src="/include/js/shared.js"></script>
  <script src="/include/js/temp_article.js"></script>
</body>

</html>