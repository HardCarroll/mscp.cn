<?php
$baseinfo = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/cms/include/json/siteinfo.json"), TRUE);
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="renderer" content="webkit">
  <meta name="Keywords" content="<?php echo $baseinfo["site_info"]["keywords"] ?>">
  <meta name="Description" content="<?php echo $baseinfo["site_info"]["description"] ?>">
  <title>服务优势-弥尚餐饮装饰设计</title>
  <link rel="stylesheet" href="/include/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/include/css/icons.css">
  <link rel="stylesheet" href="/include/css/shared.css">
  <link rel="stylesheet" href="/include/css/advantage.css">
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
          <span><?php echo $baseinfo["company_info"]["name"] ?></span>
        </div>
        <div class="nav-right">
          <ul class="nav-list clearfix">
            <li><a href="/">首页<b>Home</b></a></li>
            <li class="current"><a href="javascript:;">服务优势<b>Advantage</b></a></li>
            <li><a href="/budget">一键报价<b>Offer</b></a></li>
            <li><a href="/case">精品案例<b>Case</b></a></li>
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
          <li class="active">服务优势</li>
        </ol>
      </div>
    </section>
    <section class="body">
      <div class="inner" id="advantage">
        <div class="advantage">
          <div class="hd">
            <h2>为什么选择我们？</h2>
          </div>
          <div class="bd">
            <div class="list-item">
              <img src="/images/adv-ico1.png" alt="">
              <div class="title">精准的空间策划</div>
              <div class="txt">第一经营视角，精准商业策划，打造赢利空间。</div>
            </div>
            <div class="list-item">
              <img src="/images/adv-ico2.png" alt="">
              <div class="title">丰富的项目经验</div>
              <div class="txt">顺利完成两百余个设计与施工项目，深度洞悉餐饮市场。</div>
            </div>
            <div class="list-item">
              <img src="/images/adv-ico3.png" alt="">
              <div class="title">完备的施工团队</div>
              <div class="txt">几百个精品施工作品，几千名优秀施工人员。</div>
            </div>
            <div class="list-item">
              <img src="/images/adv-ico4.png" alt="">
              <div class="title">整体的商业配套</div>
              <div class="txt">几千种产品系列，保障空间效果。</div>
            </div>
          </div>
          <div class="ft">
            <div class="adv-detail">
              <div class="list-item fade in">
                <div class="content">
                  筛选、优化材料供应合作伙伴，严格考察装饰材料生产厂家的生产设备与生产工艺的先进性、最新生产标准水平的应用、装饰材料有害物质限量释放控制标准。入库抽查，进入工地复查，严格控制有问题材料进入工流程，有效的保证工程质量，形成了稳定的材料供应合作伙伴关系，价格更加稳定有保障。且公司直接跟总代或厂家采购，省去大量中间环节，我们是将最大优惠直接让利给客户。
                </div>
                <div class="title"><span class="glyphicon glyphicon-tags"></span>价格优势</div>
              </div>
              <div class="list-item fade">
                <div class="content">设计与施工是同步的，出了问题可以及时处理，整体施工效率大大提高；各环节一步到位，从前期设计、规划到后期配套、安装，内部衔接更到位，再加上所有材料由公司统一配送，省去了大量的协调及沟通的时间，让客户做到了真正地省心。
                </div>
                <div class="title"><span class="glyphicon glyphicon-tags"></span>工期优势</div>
              </div>
              <div class="list-item fade">
                <div class="content">多年的装饰从业经验，让我们积累了大量的优秀人才，专业人做专业事，每个设计师都只专做一个领域。设计师可以专注对某个领域的研究 ，更能精准的把握客户需求，最大程度为客户考虑投资产出比，为客户打造一个真正可持续赢利的商业空间。
                </div>
                <div class="title"><span class="glyphicon glyphicon-tags"></span>设计优势</div>
              </div>
              <div class="list-item fade">
                <div class="content">施工工艺严格执行国家相关质量标准规范：1、工程施工质量类的标准规范——《室内装饰工程质量规范》QB/1838-93;2、建筑工程室内环境污染控制标准规范——《民用建筑工程室内环境污染控制规范》GB-50325-2001；3、室内装饰材料有害物质含量释放限量标准。
                </div>
                <div class="title"><span class="glyphicon glyphicon-tags"></span>品质优势</div>
              </div>
              <div class="list-item fade">
                <div class="content">全方位一站式的服务模式。您只需一个电话，其余可以全部交给我们来解决。您只需要与一个人对接即可，为您省去反复沟通和协调的时间，做到让客户真正的省心、放心和舒心。完善的配套体系为客户完美体现“一站式完整商业空间服务”。
                </div>
                <div class="title"><span class="glyphicon glyphicon-tags"></span>管理优势</div>
              </div>
              <div class="list-item fade">
                <div class="content">整个施工过程中，项目总监专业受理客户咨询和投诉，每一位客户均享受客服中心工程前、工程中、工程施工后三个阶段回访与监督。设计师在整个全程服务过程中会定期进行工地技术交底，包括开工交底、水电交底、泥工交底、木工交底、中期碰头验收、涂料定色交底、主材配套服务交底、竣工验收。
                </div>
                <div class="title"><span class="glyphicon glyphicon-tags"></span>价格优势</div>
              </div>
            </div>

            <ul class="adv-list">
              <li class="list-item active">
                <img src="/images/advico1.png" alt="">
                <p>价格优势</p>
              </li>
              <li class="list-item">
                <img src="/images/advico2.png" alt="">
                <p>工期优势</p>
              </li>
              <li class="list-item">
                <img src="/images/advico3.png" alt="">
                <p>设计优势</p>
              </li>
              <li class="list-item">
                <img src="/images/advico4.png" alt="">
                <p>品质优势</p>
              </li>
              <li class="list-item">
                <img src="/images/advico5.png" alt="">
                <p>服务优势</p>
              </li>
              <li class="list-item">
                <img src="/images/advico6.png" alt="">
                <p>管理优势</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="step"></div>
      </div>
    </section>
    <section class="footer">
      <div id="contact">
        <section class="contact-hd">
          <img class="bottom-logo" src="/images/bottom-text.png" alt="">
          <ul>
            <li>
              <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $baseinfo["company_info"]["qq"]; ?>&site=qq&menu=yes"><span class="icon icon-cuz icon-qq"></span></a>
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
            <p>电话：<?php echo $baseinfo["company_info"]["mobile"]; ?></p>
            <p>座机：<?php echo $baseinfo["company_info"]["tel"]; ?></p>
            <p>传真：<?php echo $baseinfo["company_info"]["fax"]; ?></p>
            <p>邮箱：<?php echo $baseinfo["company_info"]["email"]; ?></p>
            <p>地址：<?php echo $baseinfo["company_info"]["address"]; ?></p>
          </div>
          <div class="qrcode">
            <p class="pic"><img src="/images/qrcode.jpg" alt="扫一扫，关注弥尚餐饮装饰设计有限公司手机网站"><span>官方二维码</span></p>
            <p class="pic"><img src="/images/qrcode.jpg" alt="扫一扫，关注弥尚餐饮装饰设计有限公司小程序"><span>小程序二维码</span></p>
          </div>
        </section>
        <section class="contact-ft">
          <a href="http://www.mscp.cn"><?php echo $baseinfo["company_info"]["name"]; ?></a> Copyright © 2019 版权所有&nbsp;&nbsp;技术支持：<a href="http://www.mscp.cn" target="_blank"><?php echo $baseinfo["company_info"]["name"]; ?></a>&nbsp;&nbsp;<a href="http://www.beian.miit.gov.cn" target="_blank"><img src="/images/icp.jpg"><?php echo $baseinfo["site_info"]["icp"]; ?></a>
        </section>
      </div>
    </section>

    <!-- 右下角fixed侧边栏 -->
    <ul class="list-group fixed fixed-rb" id="asidebar">
      <ul class="hidden-xs list-group" id="asidebar-tools">
        <li class="list-group-item" role="button" id="btn_aside_qq">
          <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $baseinfo["company_info"]["qq"]; ?>&site=qq&menu=yes"><span class="icon icon-cuz icon-qq"></span></a>
        </li>
        <li class="list-group-item" role="button" id="btn_aside_tel">
          <span class="glyphicon glyphicon-earphone"></span>
          <div class="tel"><?php echo $baseinfo["company_info"]["mobile"]; ?></div>
        </li>
        <li class="list-group-item" role="button" id="btn_aside_qrcode">
          <span class="glyphicon glyphicon-qrcode"></span>
          <div class="qrcode">
            <img src="/images/qrcode.jpg" alt="">
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
  <script src="/include/js/advantage.js"></script>
</body>

</html>