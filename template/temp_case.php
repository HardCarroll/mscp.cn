<?php
// $dataJson = file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/include/json/temp_case.json");
$dataJson = file_get_contents("php://input");
$dataArray = json_decode($dataJson, true);
$p_title = $dataArray["st_title"];
$p_keywords = $dataArray["st_keywords"];
$p_description = $dataArray["st_description"];
$c_title = $dataArray["ct_title"];
$c_area = $dataArray["ct_area"];
$c_address = $dataArray["ct_address"];
$c_class = $dataArray["ct_class"];
$c_team = $dataArray["ct_team"];
$c_company = $dataArray["ct_company"];
$c_description = $dataArray["ct_description"];
// $more_prev = $dataArray["more_prev"];
// $more_next = $dataArray["more_next"];
function transmitCasetype($key)
{
  $type = '';
  switch ($key) {
    case 0:
      $type = '田园风';
      break;
    case 1:
      $type = '工业风';
      break;
    case 2:
      $type = '时尚版';
      break;
    case 3:
      $type = '新中式';
      break;
    case 3:
      $type = '民俗';
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
  <meta name="Keywords" content="<?php echo $p_keywords; ?>">
  <meta name="Description" content="<?php echo $p_description; ?>">
  <title><?php echo $p_title; ?></title>
  <link rel="stylesheet" href="/include/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/include/css/icons.css">
  <link rel="stylesheet" href="/include/css/shared.css">
  <link rel="stylesheet" href="/include/css/temp_case.css">
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
            <li class="current"><a href="javascript:;">精品案例<b>Case</b></a></li>
            <li><a href="/about">企业介绍<b>About</b></a></li>
            <li><a href="/news">新闻资讯<b>News</b></a></li>
            <li><a href="/contact">联系我们<b>Contact</b></a></li>
          </ul>
        </div>
      </div>
    </section>
    <section id="banner">
      <!-- <img src="/images/banner-bg.jpg" alt=""> -->
      <div class="banner-title"><?php echo $c_title; ?></div>
    </section>
    <section class="position">
      <div class="inner">
        <span class="glyphicon glyphicon-map-marker"></span>
        <span>当前位置：</span>
        <ol class="breadcrumb">
          <li><a href="/">首页</a></li>
          <li><a href="/case">精品案例</a></li>
          <li class="active">
            <?php echo $c_title; ?>
          </li>
        </ol>
      </div>
    </section>
    <section class="body">
      <div class="inner">
        <ul class="contain-fluid card-list">
          <span class="glyphicon glyphicon-bookmark"></span>
          <span class="type"><?php echo transmitCasetype($c_class); ?></span>
          <li>
            <span>项目名称：</span>
            <p>
              <?php
              echo $c_title;
              ?>
            </p>
          </li>
          <li>
            <span>项目面积：</span>
            <p>
              <?php
              echo $c_area;
              ?>
            </p>
          </li>
          <li>
            <span>项目地址：</span>
            <p>
              <?php
              echo $c_address;
              ?>
            </p>
          </li>
          <li>
            <span>项目类型：</span>
            <p>
              <?php
              echo transmitCasetype($c_class);
              ?>
            </p>
          </li>
          <li>
            <span>主创团队：</span>
            <p>
              <?php
              echo $c_team;
              ?>
            </p>
          </li>
          <li>
            <span>出品单位：</span>
            <p>
              <?php
              echo $c_company;
              ?>
            </p>
          </li>
          <li>
            <span>项目简介：</span>
            <p>
              <?php
              echo $c_description;
              ?>
            </p>
          </li>
          <li>
            <span>项目图片：</span>
            <div class="case-thumb">
              <?php
              $imgArray = json_decode($dataArray["ct_image"], true);
              foreach ($imgArray as $imgs_item) {
                echo '<div class="case-thumb-item"><img src="' . $imgs_item["url"] . '" title="' . $imgs_item["attr_title"] . '" alt="' . $imgs_item["attr_alt"] . '"></div>';
              }
              ?>
            </div>
          </li>
        </ul>
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
  <!-- <script src="/include/js/temp_case.js"></script> -->
</body>

</html>