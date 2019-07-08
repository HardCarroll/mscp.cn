<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Keywords" content="关键词">
  <meta name="Description" content="内容描述">
  <title>精品案例-弥尚餐饮装饰设计</title>
  <link rel="stylesheet" href="/include/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/include/css/icons.css">
  <link rel="stylesheet" href="/include/css/shared.css">
  <link rel="stylesheet" href="/include/css/temp_case.css">
</head>

<body>
  <section class="layer">
    <section class="header">
      <nav class="navbar navbar-inverse" id="navbar-mscp">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-mscp" aria-expanded="false">
              <span class="sr-only">弥尚餐饮装饰设计导航栏</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="/images/logo.svg" alt=""></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-navbar-mscp">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/">首页</a></li>
              <li><a href="/advantage">服务优势</a></li>
              <li><a href="javascript:;">一键报价</a></li>
              <li class="current"><a href="/case">精品案例</a></li>
              <li><a href="/about">企业介绍</a></li>
              <li><a href="/news">新闻资讯</a></li>
              <li><a href="/contact">联系我们</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
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
          <li><a href="/case">精品案例</a></li>
          <li class="active">案例名称</li>
        </ol>
      </div>
    </section>
    <section class="body">
      <div class="inner">
        <ul class="contain-fluid card-list">
          <span class="glyphicon glyphicon-bookmark"></span>
          <li>
            <span>项目名称：</span>
            <p>
              <?php 
                // echo $c_title;
              ?>
            </p>
          </li>
          <li>
            <span>项目面积：</span>
            <p>
              <?php
                // echo $c_area;
              ?>
            </p>
          </li>
          <li>
            <span>项目地址：</span>
            <p>
              <?php
              // echo $c_address;
              ?>
            </p>
          </li>
          <li>
            <span>项目类型：</span>
            <p>
              <?php
              // echo transmitCasetype($c_class);
              ?>
            </p>
          </li>
          <li>
            <span>主创团队：</span>
            <p>
              <?php
              // echo $c_team;
              ?>
            </p>
          </li>
          <li>
            <span>出品单位：</span>
            <p>
              <?php
              // echo $c_company;
              ?>
            </p>
          </li>
          <hr>
          <div class="case-description">
            <span>项目简介：</span>
            <p>
              <?php
              // echo $c_description;
              ?>
            </p>
          </div>
          <hr>
          <div class="row case-thumb">
            <!-- <section class="col-xs-6 col-sm-4 col-md-3 col-lg-2 case-thumb-item">
                  <img src="img_url" alt="img_alt" title="img_title">
                </section> -->
            <!-- 动态生成案例图片缩略图 -->
            <?php
            // $imgArray = json_decode($dataArray["ct_image"], true);
            // foreach ($imgArray as $imgs_item) {
            //   echo '<section class="col-xs-6 col-sm-4 col-md-3 col-lg-2 case-thumb-item"><img src="' . $imgs_item["url"] . '" title="' . $imgs_item["attr_title"] . '" alt="' . $imgs_item["attr_alt"] . '"></section>';
            // }
            ?>
          </div>
        </ul>
      </div>
    </section>
    <section class="footer">
      <div id="contact">
        <section class="contact-hd">
          <img src="/images/bottom-text.png" alt="">
        </section>
        <section class="contact-bd container-fluid row">
          <div class="col-xs-12 col-sm-4">
            <div class="site-map">
              <h4>关于我们</h4>
              <p><a href="javascript:;">公司介绍</a></p>
              <p><a href="javascript:;">企业文化</a></p>
              <p><a href="javascript:;">荣誉合集</a></p>
              <p><a href="javascript:;">合作伙伴</a></p>
              <p><a href="javascript:;">弥尚团队</a></p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="contact-us">
              <h4>联系我们</h4>
              <p>电话：+86 13873976777</p>
              <p>座机：0731-88853335</p>
              <p>传真：0731-88853335</p>
              <p>邮箱：382320863@qq.com</p>
              <p>地址：湖南省长沙市芙蓉区朝阳路3号天心电脑城</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="qrcode">
              <p class="pic"><img src="/images/qrcode.jpg" alt="扫一扫，关注弥尚餐饮装饰设计有限公司手机网站"><span>官方二维码</span></p>
              <p class="pic"><img src="/images/qrcode.jpg" alt="扫一扫，关注弥尚餐饮装饰设计有限公司小程序"><span>小程序二维码</span></p>
            </div>
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
          <a href="http://wpa.qq.com/msgrd?v=3&uin=292610020&site=qq&menu=yes"><span class="icon icon-cuz icon-qq"></span></a>
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

  <!-- 案例图片展示模态框 -->
  <div id="displayModal" class="modal" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <h4 class="modal-title" id="displayModalLabel">Modal title</h4>
      </div>
      <div class="modal-content">
        <div class="modal-body">
          <!-- <img class="fade" src="img_url" title="img_title" alt="img_alt"> -->
          <!-- 动态生成模态框内案例图片展示 -->
          <?php
          foreach($imgArray as $imgs_item) {
            echo '<img class="fade" src="'.$imgs_item["url"].'" title="'.$imgs_item["attr_title"].'" alt="'.$imgs_item["attr_alt"].'">';
          }
          ?>
        </div>
        <div class="modal-footer">
          <section class="btn-group">
            <span class="btn btn-default glyphicon glyphicon-triangle-left prev"></span>
            <span class="btn btn-default pos">1 / 5</span>
            <span class="btn btn-default glyphicon glyphicon-triangle-right next"></span>
          </section>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

  <script src="/include/jquery/jquery.min.js"></script>
  <script src="/include/bootstrap/js/bootstrap.min.js"></script>
  <script src="/include/js/shared.js"></script>
  <script src="/include/js/temp_case.js"></script>
</body>

</html>