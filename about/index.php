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
  <title>企业介绍-弥尚餐饮装饰设计</title>
  <link rel="stylesheet" href="/include/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/include/css/icons.css">
  <link rel="stylesheet" href="/include/css/shared.css">
  <link rel="stylesheet" href="/include/css/about.css">
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
            <li><a href="/advantage/">服务优势<b>Advantage</b></a></li>
            <li><a href="/budget">一键报价<b>Offer</b></a></li>
            <li><a href="/case">精品案例<b>Case</b></a></li>
            <li class="current"><a href="javascript:;">企业介绍<b>About</b></a></li>
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
          <li class="active">企业介绍</li>
        </ol>
      </div>
    </section>
    <section class="body">
      <div class="inner">
        <ul class="nav nav-tabs" role="tablist" id="company-tab">
          <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">公司简介</a></li>
          <li role="presentation"><a href="#honor" aria-controls="honor" role="tab" data-toggle="tab">荣誉资质</a></li>
          <li role="presentation"><a href="#partner" aria-controls="partner" role="tab" data-toggle="tab">合作品牌</a></li>
          <li role="presentation"><a href="#team" aria-controls="team" role="tab" data-toggle="tab">弥尚团队</a></li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="profile">
            <div class="gsjj">
              <h4>公司简介</h4>
              <p>弥尚餐饮装饰设计有限公司是一家专业的餐饮空间设计装饰公司，多年来专注于连锁店面设计与装修。连锁店面的成功建造，有无品牌感是关键，通过对商业体系的深入洞察，弥尚发现最佳的服务模式是为客户提供包括品牌设计、空间设计、装修工程、餐饮配套在内的一站式连锁品牌服务，让客户不必东奔西走，通过一家公司不同团队之间的高效协同合作，从而达成其从品牌建设到终端落地的所有实际需求。</p>
            </div>
            <div class="qywh">
              <h4>企业文化</h4>
              <ul>
                <li>工作理念
                  <p>聆听大地之音，探索自然美学逻辑与组合规律。聆听使用者的声音始终思考设计的真实意义及对人们的影响，让人们重新思考生活的各种可能和生活的意义。</p>
                </li>
                <li>用人理念
                  <p>尊重员工的个性，提供良好的平台与工作环境，人人平等，与员工共拼共赢！重视员工培训，持续培养专业化、富有激情和创造力的专业团队！</p>
                </li>
                <li>社会责任
                  <p>以服务客户为核心，以导向市场为航标，持续提供超越客户期望的作品和服务！敢于突破常规，提供更多高品质产品；倡导生态文明建设，提供更有利于人类生存的环境空间！</p>
                </li>
              </ul>
            </div>
            <div class="sjln">
              <h4>设计理念</h4>
              <p>以人与建筑、自然和谐同生为核心目标，设计元素从生活中选材，从自然与传统书画艺术中寻找规则，以运用阴阳五行与环境美学艺术组合的理论为设计指针，不需要特定的规则来约束，注入其环境设计，对每个项目进行原创设计。用简单的装饰，寻找特别的美好生活！思维跨越人类灵性维度的大门，从古至今，穿越未来！</p>
            </div>
            <div class="qyyj">
              <h4>企业愿景</h4>
              <p>造就一支意志风发、斗志昂扬、战无不胜，且敢于突破常规的专业化团队，让设计作品走向全国，远播全球！</p>
            </div>

          </div>
          <div role="tabpanel" class="tab-pane fade" id="honor">
            <div id="waterfall" class="container-fluid row">
              <div class="col-xs-12 col-sm-6 column">
                <div class="item">
                  <img src="/images/honor1.jpg" alt="">
                  <p>全国餐饮连锁行业最具诚信十大影响力人物</p>
                </div>
                <div class="item">
                  <img src="/images/honor3.jpg" alt="">
                  <p>全国餐饮业最具投资价值连锁加盟品牌</p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 column">
                <div class="item">
                  <img src="/images/honor2.jpg" alt="">
                  <p>餐饮理事单位</p>
                </div>
                <div class="item">
                  <img src="/images/honor4.jpg" alt="">
                  <p>金典奖-全国餐饮连锁行业最具诚信十大影响力人物</p>
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="partner">
            <div id="waterfall" class="container-fluid row">
              <div class="col-xs-6 col-sm-4 column">
                <div class="item">
                  <img src="/images/p_01.png" alt="">
                  <p>湘聚 湘里人家</p>
                </div>
                <div class="item">
                  <img src="/images/p_04.png" alt="">
                  <p>宋小厨 柴灶鱼</p>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 column">
                <div class="item">
                  <img src="/images/p_02.png" alt="">
                  <p>湘聚 味庄</p>
                </div>
                <div class="item">
                  <img src="/images/p_05.png" alt="">
                  <p>食在湘</p>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 column">
                <div class="item">
                  <img src="/images/p_03.png" alt="">
                  <p>湘当有饭</p>
                </div>
                <div class="item">
                  <img src="/images/p_06.png" alt="">
                  <p>蒸粥道</p>
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="team">
            <div id="waterfall" class="container-fluid row">
              <div class="col-xs-12 col-sm-3 column">
                <div class="item">
                  <div class="photo">
                    <img src="/images/photo1.gif" alt="">
                  </div>
                  <div class="info">
                    <span class="name">宋东明</span>
                    <span class="pos">执行董事</span>
                  </div>
                  <div class="txt">
                    主要负责：餐饮加盟咨询、考察选址分析、加盟接待洽谈、投资咨询筹划、餐饮设计指导、连锁统筹督导等
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 column">
                <div class="item">
                  <div class="photo">
                    <img src="/images/photo1.gif" alt="">
                  </div>
                  <div class="info">
                    <span class="name">宋东明</span>
                    <span class="pos">执行董事</span>
                  </div>
                  <div class="txt">
                    主要负责：餐饮加盟咨询、考察选址分析、加盟接待洽谈、投资咨询筹划、餐饮设计指导、连锁统筹督导等
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 column">
                <div class="item">
                  <div class="photo">
                    <img src="/images/photo1.gif" alt="">
                  </div>
                  <div class="info">
                    <span class="name">宋东明</span>
                    <span class="pos">执行董事</span>
                  </div>
                  <div class="txt">
                    主要负责：餐饮加盟咨询、考察选址分析、加盟接待洽谈、投资咨询筹划、餐饮设计指导、连锁统筹督导等
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 column">
                <div class="item">
                  <div class="photo">
                    <img src="/images/photo1.gif" alt="">
                  </div>
                  <div class="info">
                    <span class="name">宋东明</span>
                    <span class="pos">执行董事</span>
                  </div>
                  <div class="txt">
                    主要负责：餐饮加盟咨询、考察选址分析、加盟接待洽谈、投资咨询筹划、餐饮设计指导、连锁统筹督导等
                  </div>
                </div>
              </div>
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
  <script language="javascript" src="http://dkt.zoosnet.net/JS/LsJS.aspx?siteid=DKT87949349&float=1&lng=cn"></script>
</body>

</html>