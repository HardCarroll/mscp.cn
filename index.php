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
  <title>弥尚餐饮装饰设计-官方网站</title>
  <link rel="stylesheet" href="/include/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/include/fullpage/css/fullpage.css">
  <link rel="stylesheet" href="/include/css/icons.css">
  <link rel="stylesheet" href="/include/css/shared.css">
  <link rel="stylesheet" href="/include/css/home.css">
</head>

<body>
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
        <li class="current"><a href="javascript:;">首页<b>Home</b></a></li>
        <li><a href="/advantage/">服务优势<b>Advantage</b></a></li>
        <li><a href="/budget">一键报价<b>Offer</b></a></li>
        <li><a href="/case">精品案例<b>Case</b></a></li>
        <li><a href="/about">企业介绍<b>About</b></a></li>
        <li><a href="/news">新闻资讯<b>News</b></a></li>
        <li><a href="/contact">联系我们<b>Contact</b></a></li>
      </ul>
    </div>
  </div>

  <?php
  // echo file_get_contents($_SERVER["DOCUMENT_ROOT"]."/include/common/navbar.tpl");
  ?>

  <div id="fullpage">
    <!-- .adCarousel begin -->
    <div class="section adCarousel">
      <section class="adCarousel-wrap">
        <div class="item active">
          <img data-src="/images/banner1.jpg">
          <div class="content">
            <p>专注餐饮25年，懂餐饮更懂设计</p>
            <a href="/advantage/" class="btn btn-square">专注所以专业</a>
          </div>
        </div>
        <div class="item">
          <img data-src="/images/banner2.jpg">
          <div class="content">
            <p>装修大数据，不花冤枉钱</p>
            <a href="/budget/" class="btn btn-square">获取装修报价</a>
          </div>
        </div>
        <div class="item">
          <img data-src="/images/banner3.jpg">
          <div class="content">
            <p>花更少的钱，享受更优质的服务</p>
            <a class="btn btn-square" href="tel:13873976777">咨询热线：138 7397 6777</a>
          </div>
        </div>
      </section>

      <section class="adCarousel-indicators">
      </section>

      <section class="adCarousel-control prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </section>
      <section class="adCarousel-control next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </section>
    </div> <!-- .adCarousel end;-->
    <!-- #budget begin -->
    <div class="section" id="budget">
      <div class="mask">
        <div class="hd">
          <h2><strong>餐厅装修与投资</strong>&nbsp;要花多少钱？</h2>
          <h5><span class="left">弥尚餐饮整装计算器</span><span class="right">5秒帮您算出明细，不花冤枉钱！</span></h5>
        </div>
        <div class="bd inner">
          <div class="lt">
            <div class="input-group" data-toggle="popover" data-trigger="manual" data-content="请正确填写餐厅的面积" data-placement="bottom" tabindex="0" id="area-box">
              <span class="input-group-addon">餐厅面积</span>
              <input id="decoration-area" type="number" class="form-control" min="0" placeholder="您的餐厅有多少平方？">
              <span class="input-group-addon">㎡</span>
            </div>
            <div class="input-group">
              <span class="input-group-addon">装修风格</span>
              <select name="" class="form-control" id="decoration-style">
                <option value="0">田园风</option>
                <option value="1">新中式</option>
                <option value="2">时尚版</option>
                <option value="3">工业风</option>
                <option value="4">民俗风</option>
              </select>
              <span class="input-group-addon glyphicon glyphicon-triangle-bottom"></span>
            </div>
            <div class="input-group" data-toggle="popover" data-trigger="manual" data-content="请正确填写您的称呼" data-placement="bottom" tabindex="0" id="name-box">
              <span class="input-group-addon">您的姓名</span>
              <input type="text" class="form-control" id="decoration-name" placeholder="请问您如何称呼">
              <span class="input-group-addon glyphicon glyphicon-user"></span>
            </div>
            <div class="input-group" data-toggle="popover" data-trigger="manual" data-content="请填写有效的手机号码" data-placement="bottom" tabindex="0" id="tel-box">
              <span class="input-group-addon">联系电话</span>
              <input type="text" class="form-control" id="decoration-tel" placeholder="请留下您的手机号码" maxlength="11">
              <span class="input-group-addon glyphicon glyphicon-phone-alt"></span>
            </div>
            <div class="tips">
              <span class="glyphicon glyphicon-heart"></span>
              <span>为了您的利益及我们的口碑，您的隐私将被严格保密！</span>
            </div>
            <div class="qrcode-btn">
              <div class="btn btn-qrcode" data-toggle="modal" data-target="#qrcodeModal">申请免费布局</div>
              <div class="btn btn-qrcode" data-toggle="modal" data-target="#qrcodeModal">装修设计报价</div>
            </div>
          </div>
          <div class="md">
            <div class="btn btn-round">立即报价</div>
          </div>
          <div class="rt">
            <div class="total">您的餐厅投资预算约为<span>166800</span>元</div>
            <div class="detail row container-fluid">
              <p class="col-sm-6" data-item="设计费"><b>设计费：</b><span>0</span><b>元</b></p>
              <p class="col-sm-6" data-item="材料费"><b>材料费：</b><span>0</span><b>元</b></p>
              <p class="col-sm-6" data-item="人工费"><b>人工费：</b><span>0</span><b>元</b></p>
              <p class="col-sm-6" data-item="软装配饰"><b>软装配饰：</b><span>0</span><b>元</b></p>
              <p class="col-sm-6" data-item="灯饰光源"><b>灯饰光源：</b><span>0</span><b>元</b></p>
              <p class="col-sm-6" data-item="餐厅桌椅"><b>餐厅桌椅：</b><span>0</span><b>元</b></p>
              <p class="col-sm-6" data-item="空调电器"><b>空调电器：</b><span>0</span><b>元</b></p>
              <p class="col-sm-6" data-item="厨放设备及抽排"><b>厨放设备及抽排：</b><span>0</span><b>元</b></p>
              <p class="col-sm-6" data-item="企划灯箱"><b>企划灯箱：</b><span>0</span><b>元</b></p>
              <p class="col-sm-6" data-item="门牌发光字"><b>门牌发光字：</b><span>0</span><b>元</b></p>
              <p class="col-sm-6" data-item="餐具小件"><b>餐具小件：</b><span>0</span><b>元</b></p>
              <p class="col-sm-6" data-item="窗帘工服"><b>窗帘工服：</b><span>0</span><b>元</b></p>
              <p class="col-sm-6" data-item="收银监控音响"><b>收银监控音响：</b><span>0</span><b>元</b></p>
              <p class="col-sm-6" data-item="其他"><b>其他：</b><span>0</span><b>元</b></p>
            </div>
            <div class="tips">以上投资报价由优厨联盟历时15年综合348+家分店历史数据分析结果，没有包含房屋租金及押金，加盟费等，具体投资及项目可行性请致电15580807779或微信13873976777免费上门实际考察为准！</div>
          </div>
        </div>
        <div class="ft"></div>
      </div>
    </div> <!-- #budget end;-->
    <!-- #professional begin -->
    <div class="section" id="professional">
      <div class="mask">
        <div class="hd">
          <h2>设计专不专业&nbsp;<strong>直接关系到餐厅盈利与否</strong></h2>
          <h5><span class="left">缔造有价值的餐饮空间</span><span class="right">是我们一直以来的追求</span></h5>
        </div>
        <div class="bd container-fluid row inner">
          <div class="pro-item col-sm-2">
            <div class="pic"><img data-src="/images/adv-1.png"></div>
            <div class="cap">
              <p class="index">01</p>
              <p class="title">针对餐厅客户人群定制风格</p>
              <p class="txt">根据位置分析消费人群的年龄、性格等特性定制风格，<strong>提升餐厅进店率</strong></p>
            </div>
          </div>
          <div class="pro-item col-sm-2">
            <div class="pic"><img data-src="/images/adv-2.png"></div>
            <div class="cap">
              <p class="index">02</p>
              <p class="title">门头可提升进店率50%以上</p>
              <p class="txt">根据不同环境设定不同造型的大气抢眼门头增加曝光率，<strong>同时增加进店率</strong></p>
            </div>
          </div>
          <div class="pro-item col-sm-2">
            <div class="pic"><img data-src="/images/adv-3.png"></div>
            <div class="cap">
              <p class="index">03</p>
              <p class="title">合理动线是快速盈利的秘诀</p>
              <p class="txt">结合五行布局动线不仅增加空间利用率还能快速导流，<strong>提升服务效率及质量</strong></p>
            </div>
          </div>
          <div class="pro-item col-sm-2">
            <div class="pic"><img data-src="/images/adv-4.png"></div>
            <div class="cap">
              <p class="index">04</p>
              <p class="title">灯光设计可促进客户消费</p>
              <p class="txt">针对不同环境运用不同的手法设计灯光，不仅能营造良好就餐氛围，<strong>还能提升食欲</strong></p>
            </div>
          </div>
          <div class="pro-item col-sm-2">
            <div class="pic"><img data-src="/images/adv-5.png"></div>
            <div class="cap">
              <p class="index">05</p>
              <p class="title">造型有效的增加回头率</p>
              <p class="txt">分析消费者年龄层次心理采用对应造型，<strong>能有效的提升回头率</strong></p>
            </div>
          </div>
          <div class="pro-item col-sm-2">
            <div class="pic"><img data-src="/images/adv-6.png"></div>
            <div class="cap">
              <p class="index">06</p>
              <p class="title">色彩搭配增加亲和力</p>
              <p class="txt">根据消费者的需求，创造和加大商业价值，<strong>提高运营的效率</strong></p>
            </div>
          </div>
        </div>
        <div class="ft">
          <a class="btn btn-square" href="javascript:;" data-toggle="modal" data-target="#qrcodeModal">了解更多</a>
        </div>
      </div>
    </div> <!-- #professional end;-->
    <!-- #case begin -->
    <div class="section" id="case">
      <div class="mask">
        <div class="hd">
          <h2><strong>全新餐厅设计案例</strong>&nbsp;激发您的装修灵感？</h2>
          <h5><span class="left">权威设计师为您量身打造</span><span class="right">让您的餐厅脱颖而出</span></h5>
        </div>
        <div class="bd container-fluid inner">
          <ul class="row bd-list">
            <?php
            $rule_case = "b_recommends='T'";
            $result_case = $caseManage->selectItem($rule_case);
            $cnt_case = $caseManage->getRecordCounts($rule_case);

            // print_r(json_decode($result_case[0]["ct_image"], TRUE)[0]["url"]);

            if (!$cnt_case) {
              // no records
              for ($i = 0; $i < 6; $i++) {
                echo '<li class="col-xs-12 col-sm-6 col-md-4">';
                echo '<a href="/case/2019082601.html">';
                echo '<img src="/upload/2019082601/201908260101.jpg" alt="">';
                echo '<div class="cover">';
                echo '<h3 class="text-ellipsis title">东莞洪记荷湘里</h3><h5 class="text-ellipsis content">被称为“芙蓉国”的湖南是中国著名的渔米之乡，绿色大省，生态大省。湖南的旅游资源十分丰富，张家界，崀山，洞庭湖等山水名胜，享誉海内外，人称“人文湘楚、山水湖南”。洞庭湖畔的荷花飘香，“小荷才露尖尖角，早有蜻蜓立上头”也形成了湘土文化的一大特色，打造一个极具田园家乡特色的民俗湘间菜馆，是为了在潮流来来去去，物欲横流的今天，保持原始的个性与初心，让在都市久居的人们能够在原生态的环境中，找到久违的世外桃源，回到内心熟悉的故土，没有束缚，没有压抑，只为了将纯粹的自在与快乐传递给客户，因为极致，所以纯粹，因为用心，所以脱颖而出。</h5><span class="glyphicon glyphicon-plus"></span>';
                echo '</div>';
                echo '</a>';
                echo '</li>';
              }
            } else {
              for ($i = 0; $i < ($cnt_case > 6 ? 6 : $cnt_case); $i++) {
                echo '<li class="col-xs-12 col-sm-6 col-md-4">';
                echo '<a href="' . $result_case[$i]["st_path"] . '">';
                echo '<img src="' . json_decode($result_case[$i]["ct_image"], TRUE)[0]["url"] . '" alt="">';
                echo '<div class="cover">';
                echo '<h3 class="text-ellipsis title">' . $result_case[$i]["ct_title"] . '</h3><h5 class="text-ellipsis content">' . $result_case[$i]["ct_description"] . '</h5><span class="glyphicon glyphicon-plus"></span>';
                echo '</div>';
                echo '</a>';
                echo '</li>';
              }
            }
            ?>
            <!-- <li class="col-xs-12 col-sm-6 col-md-4">
              <a href="/case/2019082601.html">
                <img src="/upload/2019082601/201908260101.jpg" alt="">
                <div class="cover">
                  <h3 class="text-ellipsis title">东莞洪记荷湘里</h3>
                  <h5 class="text-ellipsis content">被称为“芙蓉国”的湖南是中国著名的渔米之乡，绿色大省，生态大省。湖南的旅游资源十分丰富，张家界，崀山，洞庭湖等山水名胜，享誉海内外，人称“人文湘楚、山水湖南”。洞庭湖畔的荷花飘香，“小荷才露尖尖角，早有蜻蜓立上头”也形成了湘土文化的一大特色，打造一个极具田园家乡特色的民俗湘间菜馆，是为了在潮流来来去去，物欲横流的今天，保持原始的个性与初心，让在都市久居的人们能够在原生态的环境中，找到久违的世外桃源，回到内心熟悉的故土，没有束缚，没有压抑，只为了将纯粹的自在与快乐传递给客户，因为极致，所以纯粹，因为用心，所以脱颖而出。</h5>
                  <span class="glyphicon glyphicon-plus"></span>
                </div>
              </a>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-4">
              <a href="/template/temp_case copy.php">
                <img src="/upload/2019082601/201908260101.jpg" alt="">
                <div class="cover">
                  <h3 class="text-ellipsis title">案例模板</h3>
                  <h5 class="text-ellipsis content">点击查看案例展示模板页内容</h5>
                  <span class="glyphicon glyphicon-plus"></span>
                </div>
              </a>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-4">
              <a href="javascript:;">
                <img src="/upload/2019082601/201908260101.jpg" alt="">
                <div class="cover">
                  <h3 class="text-ellipsis title">开胃豆腐王</h3>
                  <h5 class="text-ellipsis content">内酯豆腐是豆腐中的“小鲜肉”,质地细腻嫩滑,热量低,深受各路吃货喜爱</h5>
                  <span class="glyphicon glyphicon-plus"></span>
                </div>
              </a>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-4">
              <a href="javascript:;">
                <img src="/upload/2019082601/201908260101.jpg" alt="">
                <div class="cover">
                  <h3 class="text-ellipsis title">秘制猪脚</h3>
                  <h5 class="text-ellipsis content">猪脚十分软糯，有嚼感，丝毫没有肥腻感，软滑糯嫩、烂而不散、唇齿留香</h5>
                  <span class="glyphicon glyphicon-plus"></span>
                </div>
              </a>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-4">
              <a href="javascript:;">
                <img src="/upload/2019082601/201908260101.jpg" alt="">
                <div class="cover">
                  <h3 class="text-ellipsis title">平锅臭桂鱼</h3>
                  <h5 class="text-ellipsis content">鱼肉经过腌制，具有神奇般鲜嫩和口感，微辣且锅香飘逸，是下饭好选择</h5>
                  <span class="glyphicon glyphicon-plus"></span>
                </div>
              </a>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-4">
              <a href="javascript:;">
                <img src="/upload/2019082601/201908260101.jpg" alt="">
                <div class="cover">
                  <h3 class="text-ellipsis title">香辣刨盐鱼</h3>
                  <h5 class="text-ellipsis content">把生鱼用盐腌制，做成刨盐鱼，制作出符合湖南人的香鲜辣的香辣刨盐鱼</h5>
                  <span class="glyphicon glyphicon-plus"></span>
                </div>
              </a>
            </li> -->
          </ul>
        </div>
        <div class="ft">
          <a href="/case/" class="btn btn-square">查看更多案例</a>
        </div>
      </div>
    </div> <!-- #case end;-->
    <!-- #advantage begin -->
    <div class="section" id="advantage">
      <div class="mask">
        <div class="hd">
          <h2><strong>术业有专攻</strong>&nbsp;弥尚为您省下的不只是时间还有Money</h2>
          <h5>
            <span class="txt">餐饮配套商家</span>
            <b class="operator">+</b>
            <span class="txt">高效运营团队</span>
            <b class="operator">+</b>
            <span class="txt">精英施工团队</span>
            <b class="operator">+</b>
            <span class="txt">全程跟踪指导</span>
            <b class="operator">=</b>
            <span>省时省心更省钱</span>
          </h5>
        </div>
        <div class="bd inner">
          <ul class="container-fluid row bd-list">
            <li class="list-item col-sm-3">
              <div class="wrap">
                <div class="main">价格优势</div>
                <div class="sub">
                  <p>餐饮一站式采购，</p>
                  <p>便宜又齐全</p>
                </div>
                <div class="des">提供从设计施工、厨具家具、软装VI、软装等一系列服务。根据各个产品特性优势进行实施，并节省10%-30%费用。</div>
              </div>
            </li>
            <li class="list-item col-sm-3">
              <div class="wrap">
                <div class="main">工期优势</div>
                <div class="sub">
                  <p>餐饮一站式采购，</p>
                  <p>便宜又齐全</p>
                </div>
                <div class="des">7x24小时服务，全程24小时监理监工，多年的餐饮店施工设计经验，能有效缩短15%装修工期。</div>
              </div>
            </li>
            <li class="list-item col-sm-3">
              <div class="wrap">
                <div class="main">质量优势</div>
                <div class="sub">
                  <p>多年品牌沉淀，</p>
                  <p>工程遍布全国各地</p>
                </div>
                <div class="des">提供从设计施工、厨具家具、软装VI、软装等一系列服务。根据各个产品特性优势进行实施，并节省10%-30%费用。</div>
              </div>
            </li>
            <li class="list-item col-sm-3">
              <div class="wrap">
                <div class="main">服务优势</div>
                <div class="sub">
                  <p>先体验再付费，</p>
                  <p>万元服务免费送</p>
                </div>
                <div class="des">上门量房、方案布局、装修报价、餐饮店选址、用餐人群分析全面做到先体验，再谈是否合作。</div>
              </div>
            </li>
          </ul>
        </div>
        <div class="ft">
          <a href="javascript:;" class="btn btn-square" data-toggle="modal" data-target="#qrcodeModal">立即咨询</a>
        </div>
      </div>
    </div> <!-- #advantage end;-->
    <!-- #service begin -->
    <div class="section" id="service">
      <div class="mask">
        <div class="hd">
          <h2>选择弥尚餐饮整装设计&nbsp;<strong>您会收获什么？</strong></h2>
          <h5><span class="left">价值万元服务免费享</span><span class="right">先体验后合作</span></h5>
        </div>
        <div class="bd inner">
          <ul class="bd-list">
            <li class="list-item">
              <div class="wrap">
                <div class="pic">
                  <img data-src="/images/what-1.jpg">
                </div>
                <div class="txt">
                  <h3>现场查勘</h3>
                  <p>设计师免费为您上门量房，确保发挥您餐厅每一寸空间的价值！</p>
                </div>
              </div>
            </li>
            <li class="list-item">
              <div class="wrap">
                <div class="pic">
                  <img data-src="/images/what-2.jpg">
                </div>
                <div class="txt">
                  <h3>商圈考察</h3>
                  <p>根据您的餐厅大小、位置商圈为您量身定制设计风格！</p>
                </div>
              </div>
            </li>
            <li class="list-item">
              <div class="wrap">
                <div class="pic">
                  <img data-src="/images/what-3.jpg">
                </div>
                <div class="txt">
                  <h3>设计方案</h3>
                  <p>获奖设计师根据您的餐厅类型与布局1对1为您定制方案！</p>
                </div>
              </div>
            </li>
            <li class="list-item">
              <div class="wrap">
                <div class="pic">
                  <img data-src="/images/what-4.jpg">
                </div>
                <div class="txt">
                  <h3>餐厅选址</h3>
                  <p>根据您选址的餐厅类型与客户人群，为您选择适合的餐厅位置！</p>
                </div>
              </div>
            </li>
            <li class="list-item">
              <div class="wrap">
                <div class="pic">
                  <img data-src="/images/what-5.jpg">
                </div>
                <div class="txt">
                  <h3>预算服务</h3>
                  <p>结合多家材料与餐饮设施商家，价格比市面低10%-30%费用！</p>
                </div>
              </div>
            </li>
            <li class="list-item">
              <div class="wrap">
                <div class="pic">
                  <img data-src="/images/what-2.jpg">
                </div>
                <div class="txt">
                  <h3>厨房设计</h3>
                  <p>10年餐饮店后厨设计经验，免费为您设计厨房鸟瞰图！</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="ft">
          <a href="javascript:;" class="btn btn-square" data-toggle="modal" data-target="#qrcodeModal">沟通合作</a>
        </div>
      </div>
    </div> <!-- #service end;-->
    <!-- #designer begin -->
    <div class="section" id="designer">
      <div class="mask">
        <div class="hd">
          <h2>选择弥尚餐饮整装设计&nbsp;&nbsp;<strong>给餐厅一个脱颖而出的机会</strong></h2>
          <h5><span class="left">弥尚帮他们实现了盈利</span><span class="right">可能下一个就是你</span></h5>
        </div>
        <div class="bd inner">
          <div id="style-box">
            <a class="item active" href="/case/">
              <div class="item-hd">
                <img src="/images/adv-1.png" alt="">
                <span>新中式</span>
                <p>选择弥尚餐饮整装设计，给餐厅一个脱颖而出的机会。弥尚帮他们实现了盈利，可能下一个就是你。</p>
              </div>
              <div class="item-bd">
                <img src="/images/adv-1.png" alt="">
              </div>
            </a>
            <a class="item" href="/case/">
              <div class="item-hd">
                <img src="/images/adv-2.png" alt="">
                <span>田园</span>
                <p>选择弥尚餐饮整装设计，给餐厅一个脱颖而出的机会。弥尚帮他们实现了盈利，可能下一个就是你。</p>
              </div>
              <div class="item-bd">
                <img src="/images/adv-2.png" alt="">
              </div>
            </a>
            <a class="item" href="/case/">
              <div class="item-hd">
                <img src="/images/adv-3.png" alt="">
                <span>工业</span>
                <p>选择弥尚餐饮整装设计，给餐厅一个脱颖而出的机会。弥尚帮他们实现了盈利，可能下一个就是你。</p>
              </div>
              <div class="item-bd">
                <img src="/images/adv-3.png" alt="">
              </div>
            </a>
            <a class="item" href="/case/">
              <div class="item-hd">
                <img src="/images/adv-4.png" alt="">
                <span>时尚</span>
                <p>选择弥尚餐饮整装设计，给餐厅一个脱颖而出的机会。弥尚帮他们实现了盈利，可能下一个就是你。</p>
              </div>
              <div class="item-bd">
                <img src="/images/adv-4.png" alt="">
              </div>
            </a>
            <a class="item" href="/case/">
              <div class="item-hd">
                <img src="/images/adv-5.png" alt="">
                <span>民俗</span>
                <p>选择弥尚餐饮整装设计，给餐厅一个脱颖而出的机会。弥尚帮他们实现了盈利，可能下一个就是你。</p>
              </div>
              <div class="item-bd">
                <img src="/images/adv-5.png" alt="">
              </div>
            </a>
          </div>
        </div>
        <div class="ft"></div>
        <!-- <div class="hd">
          <h2>选择弥尚餐饮整装设计&nbsp;<strong>给餐厅一个脱颖而出的机会</strong></h2>
          <h5><span class="left">从前期测量到后期软装搭配</span><span class="right">资深设计师1对1全程为您服务</span></h5>
        </div>
        <div class="bd inner">
          <div class="bd-list">
            <div class="list-item">
              <div class="pic">
                <img data-src="/images/m-pic.png" alt="">
              </div>
              <div class="info">
                <p class="name">钱 一<span>首席设计师</span></p>
                <p class="years">从业时间：<span>7</span>年</p>
                <p class="works">成功案例：
                  <a href="javascript:;">湘当有饭</a>
                  <a href="javascript:;">湘聚味庄</a>
                </p>
              </div>
              <div class="button">
                <div class="btn btn-track">立即预约</div>
              </div>
            </div>
            <div class="list-item">
              <div class="pic">
                <img data-src="/images/fm-pic.jpg" alt="">
              </div>
              <div class="info">
                <p class="name">赵 二<span>创意总监</span></p>
                <p class="years">从业时间：<span>7</span>年</p>
                <p class="works">成功案例：
                  <a href="javascript:;">湘当有饭</a>
                  <a href="javascript:;">湘聚味庄</a>
                </p>
              </div>
              <div class="button">
                <div class="btn btn-track">立即预约</div>
              </div>
            </div>
            <div class="list-item">
              <div class="pic">
                <img data-src="/images/m-pic.png" alt="">
              </div>
              <div class="info">
                <p class="name">张 三<span>设计总监</span></p>
                <p class="years">从业时间：<span>7</span>年</p>
                <p class="works">成功案例：
                  <a href="javascript:;">湘当有饭</a>
                  <a href="javascript:;">湘聚味庄</a>
                </p>
              </div>
              <div class="button">
                <div class="btn btn-track">立即预约</div>
              </div>
            </div>
            <div class="list-item">
              <div class="pic">
                <img data-src="/images/m-pic.png" alt="">
              </div>
              <div class="info">
                <p class="name">李 四<span>首席设计师</span></p>
                <p class="years">从业时间：<span>7</span>年</p>
                <p class="works">成功案例：
                  <a href="javascript:;">湘当有饭</a>
                  <a href="javascript:;">湘聚味庄</a>
                </p>
              </div>
              <div class="button">
                <div class="btn btn-track">立即预约</div>
              </div>
            </div>
            <div class="list-item">
              <div class="pic">
                <img data-src="/images/fm-pic.jpg" alt="">
              </div>
              <div class="info">
                <p class="name">王 五<span>创意总监</span></p>
                <p class="years">从业时间：<span>7</span>年</p>
                <p class="works">成功案例：
                  <a href="javascript:;">湘当有饭</a>
                  <a href="javascript:;">湘聚味庄</a>
                </p>
              </div>
              <div class="button">
                <div class="btn btn-track">立即预约</div>
              </div>
            </div>
            <div class="list-item">
              <div class="pic">
                <img data-src="/images/fm-pic.jpg" alt="">
              </div>
              <div class="info">
                <p class="name">朱 六<span>高级设计师</span></p>
                <p class="years">从业时间：<span>7</span>年</p>
                <p class="works">成功案例：
                  <a href="javascript:;">湘当有饭</a>
                  <a href="javascript:;">湘聚味庄</a>
                </p>
              </div>
              <div class="button">
                <div class="btn btn-track">立即预约</div>
              </div>
            </div>
            <div class="list-item">
              <div class="pic">
                <img data-src="/images/m-pic.png" alt="">
              </div>
              <div class="info">
                <p class="name">卓 七<span>高级设计师</span></p>
                <p class="years">从业时间：<span>7</span>年</p>
                <p class="works">成功案例：
                  <a href="javascript:;">湘当有饭</a>
                  <a href="javascript:;">湘聚味庄</a>
                </p>
              </div>
              <div class="button">
                <div class="btn btn-track">立即预约</div>
              </div>
            </div>
          </div>
        </div>
        <div class="ft">
          <span href="javascript:;" class="btn btn-square">签约设计师</span>
        </div> -->
      </div>
    </div>
    <!-- #designer end -->
    <!-- #support begin -->
    <div class="section" id="support">
      <div class="mask">
        <div class="hd">
          <h2><strong>懂设计更懂餐饮</strong>&nbsp;弥尚还能为您提供这些服务</h2>
          <h5><span class="left">不仅仅是空间设计装修</span><span class="right">还提供专业餐饮运营指导</span></h5>
        </div>
        <div class="bd inner">
          <ul class="container-fluid row bd-list">
            <li class="list-item col-sm-3">
              <div class="wrap">
                <div class="pic"><img data-src="/images/sup-ico1.png"></div>
                <div class="title">人才培训</div>
                <div class="txt">可进行人才输送，也可进行人才培训，确保餐厅有可用之人！</div>
              </div>
            </li>
            <li class="list-item col-sm-3">
              <div class="wrap">
                <div class="pic"><img data-src="/images/sup-ico2.png"></div>
                <div class="title">设备提供</div>
                <div class="txt">涵盖给种类餐饮店设备，可为您提供专业更低价的餐厅设备！</div>
              </div>
            </li>
            <li class="list-item col-sm-3">
              <div class="wrap">
                <div class="pic"><img data-src="/images/sup-ico3.png"></div>
                <div class="title">软装配饰</div>
                <div class="txt">包含市面多种或定制装饰，为您提供更优惠更齐全的餐厅装饰！</div>
              </div>
            </li>
            <li class="list-item col-sm-3">
              <div class="wrap">
                <div class="pic"><img data-src="/images/sup-ico4.png"></div>
                <div class="title">软件服务</div>
                <div class="txt">专业的餐饮店服务与收银软件，为您避免高价过时软件！</div>
              </div>
            </li>
          </ul>
        </div>
        <div class="ft">
          <a href="javascript:;" class="btn btn-square" data-toggle="modal" data-target="#qrcodeModal">了解更多</a>
        </div>
      </div>
    </div> <!-- #support end-->
    <!-- #slogan begin -->
    <div class="section" id="slogan">
      <div class="mask">
        <div class="hd">
          <h2>餐饮+运营一站式服务&nbsp;<strong>省钱省时又省力</strong></h2>
          <h5><span class="left">专业全面一站式服务</span><span class="right">为您的餐厅保驾护航</span></h5>
        </div>
        <div class="bd inner">
          <ul class="bd-list">
            <li class="list-item">
              <div class="wrap">
                <div class="pic">
                  <img data-src="/images/all_in_one-ico3.png">
                </div>
                <div class="txt">现场考察</div>
              </div>
            </li>
            <li class="list-item">
              <div class="wrap">
                <div class="pic">
                  <img data-src="/images/all_in_one-ico6.png">
                </div>
                <div class="txt">市场分析</div>
              </div>
            </li>
            <li class="list-item">
              <div class="wrap">
                <div class="pic">
                  <img data-src="/images/all_in_one-ico4.png">
                </div>
                <div class="txt">空间设计</div>
              </div>
            </li>
            <li class="list-item">
              <div class="wrap">
                <div class="pic">
                  <img data-src="/images/all_in_one-ico2.png">
                </div>
                <div class="txt">品牌设计</div>
              </div>
            </li>
            <li class="list-item">
              <div class="wrap">
                <div class="pic">
                  <img data-src="/images/all_in_one-ico5.png">
                </div>
                <div class="txt">装修施工</div>
              </div>
            </li>
            <li class="list-item">
              <div class="wrap">
                <div class="pic">
                  <img data-src="/images/all_in_one-ico7.png">
                </div>
                <div class="txt">软装配饰</div>
              </div>
            </li>
            <li class="list-item">
              <div class="wrap">
                <div class="pic">
                  <img data-src="/images/all_in_one-ico3.png">
                </div>
                <div class="txt">收银系统</div>
              </div>
            </li>
            <li class="list-item">
              <div class="wrap">
                <div class="pic">
                  <img data-src="/images/all_in_one-ico8.png">
                </div>
                <div class="txt">开业策划</div>
              </div>
            </li>
          </ul>
        </div>
        <div class="ft inner">
          <ul class="container-fluid row ft-list">
            <li class="col-sm-3 list-item">
              <div class="wrap">
                <div class="title">易</div>
                <span class="seperator"></span>
                <div class="txt">一站式悉心指导</div>
              </div>
            </li>
            <li class="col-sm-3 list-item">
              <div class="wrap">
                <div class="title">省</div>
                <span class="seperator"></span>
                <div class="txt">节约人工轻松创收</div>
              </div>
            </li>
            <li class="col-sm-3 list-item">
              <div class="wrap">
                <div class="title">精</div>
                <span class="seperator"></span>
                <div class="txt">半成品到店很省心</div>
              </div>
            </li>
            <li class="col-sm-3 list-item">
              <div class="wrap">
                <div class="title">全</div>
                <span class="seperator"></span>
                <div class="txt">配套产品齐全便宜</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div><!-- #slogan end -->

    <!-- #focus begin -->
    <div class="section" id="focus">
      <div class="mask">
        <div class="hd">
          <h2>您所关心的&nbsp;<strong>是弥尚一直在关注的</strong></h2>
          <h5><span class="left">25年餐饮运营管理经验</span><span class="right">专业名师为您答疑解惑</span></h5>
        </div>
        <div class="bd inner">
          <ul class="bd-list left">
            <li>
              <div class="num">01</div>
              <div class="txt">
                <p>餐饮怎么盈利更快？</p>
                <p>餐饮企业成本需要从运营点点滴滴中节省，多计较一些，降低更多的沉没成本投入，正所谓，运营无小事，计较省开支，这是餐饮行业盈利的主要宗旨...</p>
              </div>
            </li>
            <li>
              <div class="num">03</div>
              <div class="txt">
                <p>餐饮设计装修费用多少钱？</p>
                <p>餐厅设计装修，所花费的钱自然有多有少。这其中的原因有很多，比如餐厅的面积、餐厅的选材、餐厅的设计、餐厅的施工等，费用也从2万-10几万不等...</p>
              </div>
            </li>
            <li>
              <div class="num">05</div>
              <div class="txt">
                <p>如何进行餐饮空间设计？</p>
                <p>企业应结合餐厅的大小，位置，受众人群来确定餐饮的空间设计。是以一种主题文化为出发点的并贯通整体设计形式和内容的设计...</p>
              </div>
            </li>
          </ul>
          <img data-src="/images/npc_03.jpg">
          <ul class="bd-list right">
            <li>
              <div class="num">02</div>
              <div class="txt">
                <p>餐厅怎么设计更好？</p>
                <p>餐厅设计的目的是吸引消费者进入。而创梦在做餐厅设计时，会根据消费者喜好，与餐厅的具体位置来进行设计...</p>
              </div>
            </li>
            <li>
              <div class="num">04</div>
              <div class="txt">
                <p>如何判断餐饮设计公司的好坏？</p>
                <p>弥尚餐饮设计是帮助餐厅可视化的传递餐厅的价值与品牌的定位，而不仅仅是为了好看，或者高大上，在进行设计时会考虑受众人群与品牌定位...</p>
              </div>
            </li>
            <li>
              <div class="num">06</div>
              <div class="txt">
                <p>餐饮设计不满意怎么办？</p>
                <p>弥尚餐饮设计会根据您的餐厅大小、位置来设计，如设计后您不满意，可进行再次设计与沟通，直到您满意为止...</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="ft">
          <a href="javascript:;" class="btn btn-square" data-toggle="modal" data-target="#qrcodeModal">立即咨询</a>
        </div>
      </div>
    </div>

    <div class="section" id="news">
      <div class="mask">
        <div class="hd">
          <h2>弥尚最新动态实时更新&nbsp;<strong>餐饮前沿资讯实时跟踪</strong></h2>
          <h5><span class="left">弥尚餐饮整装设计</span><span class="right">为您提供最实用的装修宝典</span></h5>
        </div>
        <div class="bd inner">
          <div class="box active">
            <div class="title"><span>弥尚<br>动态</span></div>
            <div class="content">
              <ul class="list">
                <?php
                $rule_article0 = "b_recommends='T' AND ct_class=0";
                $result0 = $articleManage->selectItem($rule_article0);
                $cnt_article0 = $articleManage->getRecordCounts($rule_article0);
                if (!$cnt_article0) {
                  // no records
                  echo "<strong>没有相关动态，请前往后台上传发布！</strong>";
                } else {
                  for ($i = 0; $i < ($cnt_article0 > 5 ? 5 : $cnt_article0); $i++) {
                    echo "<li class='list-item'>";
                    echo "<a href='" . $result0[$i]["st_path"] . "'>";
                    echo "<div class='tit'>" . $result0[$i]["ct_title"] . "</div>";
                    echo "</a>";
                    echo "</li>";
                  }
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="box">
            <div class="title"><span>行业<br>资讯</span></div>
            <div class="content">
              <ul class="list">
                <?php
                $rule_article1 = "b_recommends='T' AND ct_class=1";
                $result1 = $articleManage->selectItem($rule_article1);
                $cnt_article1 = $articleManage->getRecordCounts($rule_article1);
                if (!$cnt_article1) {
                  // no records
                  echo "<strong>没有相关动态，请前往后台上传发布！</strong>";
                } else {
                  for ($i = 0; $i < ($cnt_article1 > 5 ? 5 : $cnt_article1); $i++) {
                    echo "<li class='list-item'>";
                    echo "<a href='" . $result1[$i]["st_path"] . "'>";
                    echo "<div class='tit'>" . $result1[$i]["ct_title"] . "</div>";
                    echo "</a>";
                    echo "</li>";
                  }
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="ft">
          <a href="/news/" class="btn btn-square">更多资讯</a>
        </div>
      </div>
    </div>

    <!-- #goal begin -->
    <div class="section" id="goal">
      <div class="mask">
        <div class="hd">
          <h2>25年专注餐饮设计与运营&nbsp;<strong>以打造餐饮品牌店盈利为目标</strong></h2>
          <h5><span class="left">不和加盟商共同承担投资风险的</span><span class="right">都是“套路”</span></h5>
        </div>
        <div class="bd inner">
          <ul class="container-fluid row bd-list">
            <li class="col-sm-3 list-item">
              <div class="wrap">
                <div class="pic"><span data-value="260" data-time="1500">0</span>+</div>
                <div class="txt">覆盖全国<span data-value="260" data-time="1500">0</span>多个城市</div>
              </div>
            </li>
            <li class="col-sm-3 list-item">
              <div class="wrap">
                <div class="pic"><span data-value="49" data-time="1500">0</span>+</div>
                <div class="txt">塑造品牌<span data-value="49" data-time="1500">0</span>余个</div>
              </div>
            </li>
            <li class="col-sm-3 list-item">
              <div class="wrap">
                <div class="pic"><span data-value="460" data-time="1500">0</span>+</div>
                <div class="txt">落地打造<span data-value="460" data-time="1500">0</span>多家餐厅门店</div>
              </div>
            </li>
            <li class="col-sm-3 list-item">
              <div class="wrap">
                <div class="pic"><span data-value="19800" data-time="1500">0</span>+</div>
                <div class="txt">服务面积超过<span data-value="19800" data-time="1500">0</span>平方</div>
              </div>
            </li>
          </ul>
        </div>
        <div class="ft">
          <a href="http://www.xlrj.net" class="btn btn-square">查看更多</a>
        </div>
      </div>
    </div> <!-- #goal end -->

    <!-- #partner begin -->
    <div class="section" id="partner">
      <div class="mask">
        <div class="hd">
          <h2>弥尚餐饮整装设计&nbsp;<strong>合作品牌</strong></h2>
        </div>
        <div class="bd inner">
          <ul class="container-fluid row bd-list">
            <li class="col-sm-2 list-item">
              <div class="wrap">
                <div class="pic"><img data-src="/images/p_01.png"></div>
              </div>
            </li>
            <li class="col-sm-2 list-item">
              <div class="wrap">
                <div class="pic"><img data-src="/images/p_02.png"></div>
              </div>
            </li>
            <li class="col-sm-2 list-item">
              <div class="wrap">
                <div class="pic"><img data-src="/images/p_03.png"></div>
              </div>
            </li>
            <li class="col-sm-2 list-item">
              <div class="wrap">
                <div class="pic"><img data-src="/images/p_04.png"></div>
              </div>
            </li>
            <li class="col-sm-2 list-item">
              <div class="wrap">
                <div class="pic"><img data-src="/images/p_05.png"></div>
              </div>
            </li>
            <li class="col-sm-2 list-item">
              <div class="wrap">
                <div class="pic"><img data-src="/images/p_06.png"></div>
              </div>
            </li>
            <li class="col-sm-2 list-item">
              <div class="wrap">
                <div class="pic"><img data-src="/images/p_01.png"></div>
              </div>
            </li>
            <li class="col-sm-2 list-item">
              <div class="wrap">
                <div class="pic"><img data-src="/images/p_02.png"></div>
              </div>
            </li>
            <li class="col-sm-2 list-item">
              <div class="wrap">
                <div class="pic"><img data-src="/images/p_03.png"></div>
              </div>
            </li>
            <li class="col-sm-2 list-item">
              <div class="wrap">
                <div class="pic"><img data-src="/images/p_04.png"></div>
              </div>
            </li>
            <li class="col-sm-2 list-item">
              <div class="wrap">
                <div class="pic"><img data-src="/images/p_05.png"></div>
              </div>
            </li>
            <li class="col-sm-2 list-item">
              <div class="wrap">
                <div class="pic"><img data-src="/images/p_06.png"></div>
              </div>
            </li>
          </ul>
        </div>
        <div class="ft">
          <a href="javascript:;" class="btn btn-square" data-toggle="modal" data-target="#qrcodeModal">沟通合作</a>
        </div>
      </div>
    </div> <!-- #partner end -->

    <!-- #about begin -->
    <div class="section" id="about">
      <div class="mask">
        <div class="hd inner">
          <div class="cpy">
            <p class="title">关于弥尚</p>
            <p class="content">湖南弥尚餐饮装饰设计有限公司，是一家专业的餐饮整装设计公司。我司成立于2003年，总部位于湖南长沙。我们专注于连锁店面的设计与装修，通过对消费者心理的深度理解，对行为和动线的合理规划，从品牌视觉到空间工程，打造出有价值的餐饮空间。我们具备一站式、短工期、高品质、优服务的优势特色，最大程度为客户省时、省力、省钱，是湖南颇具影响力的餐饮设计装饰机构。</p>
          </div>
          <div class="pos">
            <img data-src="/images/pos-bg.png">
            <div class="cover">
              <img data-src="/images/pos-fg.png">
            </div>
          </div>
        </div>
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
      </div>
    </div><!-- #about end -->

  </div>

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
          <img src="/images/qrcode.jpg" alt="">
        </div>
      </li>
    </ul>
    <li class="list-group-item" role="button" id="btn_backtop">
      <span class="glyphicon glyphicon-arrow-up"></span>
    </li>
  </ul>

  <!-- Budget Modal -->
  <div class="modal fade" id="qrcodeModal" tabindex="-1" role="dialog" aria-labelledby="qrcodeModalLabel">
    <div class="modal-dialog" role="document">
      <img src="/images/qrcode_budget.png" alt="">
    </div>
  </div>

  <div class="modal fade" id="budgetModal" tabindex="-1" role="dialog" aria-labelledby="budgetModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="gridSystemModalLabel">您的餐厅投资预算约为：<strong class="result"></strong> 元</h4>
        </div>
        <div class="modal-body">
          以上投资报价由优厨联盟历时15年综合348+家分店历史数据分析结果，没有包含房屋租金及押金，加盟费等，具体投资及项目可行性请致电<strong>15580807779</strong>或<strong>微信13873976777</strong>免费上门实际考察为准！
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">我知道了</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="tempModal" tabindex="-1" role="dialog" aria-labelledby="tempModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!-- <div class="modal-header">
          <h4 class="modal-title" id="gridSystemModalLabel">您的餐厅投资预算约为：<strong class="result"></strong> 元</h4>
        </div> -->
        <div class="modal-body">
          <img src="/images/2020.jpg" alt="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">新年快乐,点击进入网站</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Budget Modal -->
  <!-- <div class="modal fade" id="budgetModal" tabindex="-1" role="dialog" aria-labelledby="budgetModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</div></button>
          <h4 class="modal-title" id="budgetModalLabel">装修费用明细表</h4>
        </div>
        <div class="modal-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th></th>
                <th>名称</th>
                <th>费用</th>
                <th>备注</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <td>设计费</td>
                <td>38000</td>
                <td>效果图、施工图</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        </div>
      </div>
    </div>
  </div> -->

  <a class="bshareDiv" href="http://www.bshare.cn/share">分享按钮</a>
  <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#uuid=&style=3&fs=4&textcolor=#fff&bgcolor=#000&text=分享"></script>

  <script src="/include/jquery/jquery.min.js"></script>
  <script src="/include/bootstrap/js/bootstrap.min.js"></script>
  <script src="/include/fullpage/js/fullpage.js"></script>
  <script src="/include/js/home.js"></script>
</body>

</html>