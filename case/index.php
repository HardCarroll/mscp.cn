<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/cms/include/php/include.php");
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
  <title>精品案例-弥尚餐饮装饰设计</title>
  <link rel="stylesheet" href="/include/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/include/css/icons.css">
  <link rel="stylesheet" href="/include/css/shared.css">
  <link rel="stylesheet" href="/include/css/case.css">
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
            <li class="current"><a href="javascript:;">精品案例<b>Case</b></a></li>
            <li><a href="/about">企业介绍<b>About</b></a></li>
            <li><a href="/news">新闻资讯<b>News</b></a></li>
            <li><a href="/contact">联系我们<b>Contact</b></a></li>
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
          <li class="active">精品案例</li>
        </ol>
      </div>
    </section>
    <section class="body">
      <div class="inner">
        <ul class="nav nav-tabs" role="tablist" id="case-tab">
          <li role="presentation" class="active"><a href="#type1" aria-controls="type1" role="tab" data-toggle="tab">田园风</a>
          </li>
          <li role="presentation"><a href="#type2" aria-controls="type2" role="tab" data-toggle="tab">工业风</a></li>
          <li role="presentation"><a href="#type3" aria-controls="type3" role="tab" data-toggle="tab">时尚版</a></li>
          <li role="presentation"><a href="#type4" aria-controls="type4" role="tab" data-toggle="tab">新中式</a></li>
          <li role="presentation"><a href="#type5" aria-controls="type5" role="tab" data-toggle="tab">民俗风</a></li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="type1">
            <div id="waterfall" class="container-fluid row">
              <?php
                // waterfall
                $rule_case = "b_posted='T' AND ct_class=0";
                $result_case = $caseManage->selectItem($rule_case);
                $cnt_case = $caseManage->getRecordCounts($rule_case);
                if ($cnt_case) {
                  echo '<div class="col-xs-12 col-sm-4 column">';
                  for($i=0; $i<$cnt_case/3; $i++) {
                    if(3*$i < $cnt_case) {
                      echo '<a href="' . $result_case[3*$i]["st_path"] . '" class="item">';
                      echo '<div class="hd-pic"><img src="' . json_decode($result_case[3*$i]["ct_image"], TRUE)[0]["url"] . '" alt=""></div>';
                      echo '<div class="bd-txt">';
                      echo '<span class="title">' . $result_case[3*$i]["ct_title"] . '</span>';
                      echo '<span class="glyphicon glyphicon-menu-right"></span></div></a>';
                    }
                  }
                  echo '</div>';

                  echo '<div class="col-xs-12 col-sm-4 column">';
                  for($i=0; $i<$cnt_case/3; $i++) {
                    if(3*$i+1 < $cnt_case) {
                      echo '<a href="' . $result_case[3*$i+1]["st_path"] . '" class="item">';
                      echo '<div class="hd-pic"><img src="' . json_decode($result_case[3*$i+1]["ct_image"], TRUE)[0]["url"] . '" alt=""></div>';
                      echo '<div class="bd-txt">';
                      echo '<span class="title">' . $result_case[3*$i+1]["ct_title"] . '</span>';
                      echo '<span class="glyphicon glyphicon-menu-right"></span></div></a>';
                    }
                  }
                  echo '</div>';

                  echo '<div class="col-xs-12 col-sm-4 column">';
                  for($i=0; $i<$cnt_case/3; $i++) {
                    if(3*$i+2 < $cnt_case) {
                      echo '<a href="' . $result_case[3*$i+2]["st_path"] . '" class="item">';
                      echo '<div class="hd-pic"><img src="' . json_decode($result_case[3*$i+2]["ct_image"], TRUE)[0]["url"] . '" alt=""></div>';
                      echo '<div class="bd-txt">';
                      echo '<span class="title">' . $result_case[3*$i+2]["ct_title"] . '</span>';
                      echo '<span class="glyphicon glyphicon-menu-right"></span></div></a>';
                    }
                  }
                  echo '</div>';
                } else {
                  echo "当前分类没有上传案例，请前往后台上传！";
                }
              ?>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="type2">
            <div id="waterfall" class="container-fluid row">
              <?php
                // waterfall
                $rule_case1 = "b_posted='T' AND ct_class=1";
                $result_case1 = $caseManage->selectItem($rule_case1);
                $cnt_case1 = $caseManage->getRecordCounts($rule_case1);
                if ($cnt_case1) {
                  echo '<div class="col-xs-12 col-sm-4 column">';
                  for($i=0; $i<$cnt_case1/3; $i++) {
                    if(3*$i < $cnt_case1) {
                      echo '<a href="' . $result_case1[3*$i]["st_path"] . '" class="item">';
                      echo '<div class="hd-pic"><img src="' . json_decode($result_case1[3*$i]["ct_image"], TRUE)[0]["url"] . '" alt=""></div>';
                      echo '<div class="bd-txt">';
                      echo '<span class="title">' . $result_case1[3*$i]["ct_title"] . '</span>';
                      echo '<span class="glyphicon glyphicon-menu-right"></span></div></a>';
                    }
                  }
                  echo '</div>';

                  echo '<div class="col-xs-12 col-sm-4 column">';
                  for($i=0; $i<$cnt_case1/3; $i++) {
                    if(3*$i+1 < $cnt_case1) {
                      echo '<a href="' . $result_case1[3*$i+1]["st_path"] . '" class="item">';
                      echo '<div class="hd-pic"><img src="' . json_decode($result_case1[3*$i+1]["ct_image"], TRUE)[0]["url"] . '" alt=""></div>';
                      echo '<div class="bd-txt">';
                      echo '<span class="title">' . $result_case1[3*$i+1]["ct_title"] . '</span>';
                      echo '<span class="glyphicon glyphicon-menu-right"></span></div></a>';
                    }
                  }
                  echo '</div>';

                  echo '<div class="col-xs-12 col-sm-4 column">';
                  for($i=0; $i<$cnt_case1/3; $i++) {
                    if(3*$i+2 < $cnt_case1) {
                      echo '<a href="' . $result_case1[3*$i+2]["st_path"] . '" class="item">';
                      echo '<div class="hd-pic"><img src="' . json_decode($result_case1[3*$i+2]["ct_image"], TRUE)[0]["url"] . '" alt=""></div>';
                      echo '<div class="bd-txt">';
                      echo '<span class="title">' . $result_case1[3*$i+2]["ct_title"] . '</span>';
                      echo '<span class="glyphicon glyphicon-menu-right"></span></div></a>';
                    }
                  }
                  echo '</div>';
                } else {
                  echo "当前分类没有上传案例，请前往后台上传！";
                }
              ?>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="type3">
            <div id="waterfall" class="container-fluid row">
              <?php
                // waterfall
                $rule_case2 = "b_posted='T' AND ct_class=2";
                $result_case2 = $caseManage->selectItem($rule_case2);
                $cnt_case2 = $caseManage->getRecordCounts($rule_case2);
                if ($cnt_case2) {
                  echo '<div class="col-xs-12 col-sm-4 column">';
                  for($i=0; $i<$cnt_case2/3; $i++) {
                    if(3*$i < $cnt_case2) {
                      echo '<a href="' . $result_case2[3*$i]["st_path"] . '" class="item">';
                      echo '<div class="hd-pic"><img src="' . json_decode($result_case2[3*$i]["ct_image"], TRUE)[0]["url"] . '" alt=""></div>';
                      echo '<div class="bd-txt">';
                      echo '<span class="title">' . $result_case2[3*$i]["ct_title"] . '</span>';
                      echo '<span class="glyphicon glyphicon-menu-right"></span></div></a>';
                    }
                  }
                  echo '</div>';

                  echo '<div class="col-xs-12 col-sm-4 column">';
                  for($i=0; $i<$cnt_case2/3; $i++) {
                    if(3*$i+1 < $cnt_case2) {
                      echo '<a href="' . $result_case2[3*$i+1]["st_path"] . '" class="item">';
                      echo '<div class="hd-pic"><img src="' . json_decode($result_case2[3*$i+1]["ct_image"], TRUE)[0]["url"] . '" alt=""></div>';
                      echo '<div class="bd-txt">';
                      echo '<span class="title">' . $result_case2[3*$i+1]["ct_title"] . '</span>';
                      echo '<span class="glyphicon glyphicon-menu-right"></span></div></a>';
                    }
                  }
                  echo '</div>';

                  echo '<div class="col-xs-12 col-sm-4 column">';
                  for($i=0; $i<$cnt_case2/3; $i++) {
                    if(3*$i+2 < $cnt_case2) {
                      echo '<a href="' . $result_case2[3*$i+2]["st_path"] . '" class="item">';
                      echo '<div class="hd-pic"><img src="' . json_decode($result_case2[3*$i+2]["ct_image"], TRUE)[0]["url"] . '" alt=""></div>';
                      echo '<div class="bd-txt">';
                      echo '<span class="title">' . $result_case2[3*$i+2]["ct_title"] . '</span>';
                      echo '<span class="glyphicon glyphicon-menu-right"></span></div></a>';
                    }
                  }
                  echo '</div>';
                } else {
                  echo "当前分类没有上传案例，请前往后台上传！";
                }
              ?>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="type4">
            <div id="waterfall" class="container-fluid row">
              <?php
                // waterfall
                $rule_case3 = "b_posted='T' AND ct_class=3";
                $result_case3 = $caseManage->selectItem($rule_case3);
                $cnt_case3 = $caseManage->getRecordCounts($rule_case3);
                if ($cnt_case3) {
                  echo '<div class="col-xs-12 col-sm-4 column">';
                  for($i=0; $i<$cnt_case3/3; $i++) {
                    if(3*$i < $cnt_case3) {
                      echo '<a href="' . $result_case3[3*$i]["st_path"] . '" class="item">';
                      echo '<div class="hd-pic"><img src="' . json_decode($result_case3[3*$i]["ct_image"], TRUE)[0]["url"] . '" alt=""></div>';
                      echo '<div class="bd-txt">';
                      echo '<span class="title">' . $result_case3[3*$i]["ct_title"] . '</span>';
                      echo '<span class="glyphicon glyphicon-menu-right"></span></div></a>';
                    }
                  }
                  echo '</div>';

                  echo '<div class="col-xs-12 col-sm-4 column">';
                  for($i=0; $i<$cnt_case3/3; $i++) {
                    if(3*$i+1 < $cnt_case3) {
                      echo '<a href="' . $result_case3[3*$i+1]["st_path"] . '" class="item">';
                      echo '<div class="hd-pic"><img src="' . json_decode($result_case3[3*$i+1]["ct_image"], TRUE)[0]["url"] . '" alt=""></div>';
                      echo '<div class="bd-txt">';
                      echo '<span class="title">' . $result_case3[3*$i+1]["ct_title"] . '</span>';
                      echo '<span class="glyphicon glyphicon-menu-right"></span></div></a>';
                    }
                  }
                  echo '</div>';

                  echo '<div class="col-xs-12 col-sm-4 column">';
                  for($i=0; $i<$cnt_case3/3; $i++) {
                    if(3*$i+2 < $cnt_case3) {
                      echo '<a href="' . $result_case3[3*$i+2]["st_path"] . '" class="item">';
                      echo '<div class="hd-pic"><img src="' . json_decode($result_case3[3*$i+2]["ct_image"], TRUE)[0]["url"] . '" alt=""></div>';
                      echo '<div class="bd-txt">';
                      echo '<span class="title">' . $result_case3[3*$i+2]["ct_title"] . '</span>';
                      echo '<span class="glyphicon glyphicon-menu-right"></span></div></a>';
                    }
                  }
                  echo '</div>';
                } else {
                  echo "当前分类没有上传案例，请前往后台上传！";
                }
              ?>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="type5">
            <div id="waterfall" class="container-fluid row">
              <?php
                // waterfall
                $rule_case4 = "b_posted='T' AND ct_class=4";
                $result_case4 = $caseManage->selectItem($rule_case4);
                $cnt_case4 = $caseManage->getRecordCounts($rule_case4);
                if ($cnt_case4) {
                  echo '<div class="col-xs-12 col-sm-4 column">';
                  for($i=0; $i<$cnt_case4/3; $i++) {
                    if(3*$i < $cnt_case4) {
                      echo '<a href="' . $result_case4[3*$i]["st_path"] . '" class="item">';
                      echo '<div class="hd-pic"><img src="' . json_decode($result_case4[3*$i]["ct_image"], TRUE)[0]["url"] . '" alt=""></div>';
                      echo '<div class="bd-txt">';
                      echo '<span class="title">' . $result_case4[3*$i]["ct_title"] . '</span>';
                      echo '<span class="glyphicon glyphicon-menu-right"></span></div></a>';
                    }
                  }
                  echo '</div>';

                  echo '<div class="col-xs-12 col-sm-4 column">';
                  for($i=0; $i<$cnt_case4/3; $i++) {
                    if(3*$i+1 < $cnt_case4) {
                      echo '<a href="' . $result_case4[3*$i+1]["st_path"] . '" class="item">';
                      echo '<div class="hd-pic"><img src="' . json_decode($result_case4[3*$i+1]["ct_image"], TRUE)[0]["url"] . '" alt=""></div>';
                      echo '<div class="bd-txt">';
                      echo '<span class="title">' . $result_case4[3*$i+1]["ct_title"] . '</span>';
                      echo '<span class="glyphicon glyphicon-menu-right"></span></div></a>';
                    }
                  }
                  echo '</div>';

                  echo '<div class="col-xs-12 col-sm-4 column">';
                  for($i=0; $i<$cnt_case4/3; $i++) {
                    if(3*$i+2 < $cnt_case4) {
                      echo '<a href="' . $result_case4[3*$i+2]["st_path"] . '" class="item">';
                      echo '<div class="hd-pic"><img src="' . json_decode($result_case4[3*$i+2]["ct_image"], TRUE)[0]["url"] . '" alt=""></div>';
                      echo '<div class="bd-txt">';
                      echo '<span class="title">' . $result_case4[3*$i+2]["ct_title"] . '</span>';
                      echo '<span class="glyphicon glyphicon-menu-right"></span></div></a>';
                    }
                  }
                  echo '</div>';
                } else {
                  echo "当前分类没有上传案例，请前往后台上传！";
                }
              ?>
            </div>
          </div>

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

  <script src="/include/jquery/jquery.min.js"></script>
  <script src="/include/bootstrap/js/bootstrap.min.js"></script>
  <script src="/include/js/shared.js"></script>
</body>

</html>