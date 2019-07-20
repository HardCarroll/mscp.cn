<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Keywords" content="关键词">
  <meta name="Description" content="内容描述">
  <title>弥尚餐饮装饰设计</title>
  <link rel="stylesheet" href="/include/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/include/css/icons.css">
  <link rel="stylesheet" href="/include/css/shared.css">
  <link rel="stylesheet" href="/include/css/homepage.css">
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
              <li class="current"><a href="javascript:;">首页</a></li>
              <li><a href="javascript:;">服务优势</a></li>
              <li><a href="/budget">一键报价</a></li>
              <li><a href="/case">精品案例</a></li>
              <li><a href="/about">企业介绍</a></li>
              <li><a href="/news">新闻资讯</a></li>
              <li><a href="/contact">联系我们</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </section>
    <section class="body">
      <div class="adCarousel">
        <section class="adCarousel-wrap">
          <div class="item active"><img src="/images/banner.jpg" alt=""></div>
          <div class="item"><img src="/images/banner2.jpg" alt=""></div>
          <div class="item"><img src="/images/banner3.jpg" alt=""></div>
        </section>

        <section class="adCarousel-indicators">

        </section>

        <section class="adCarousel-control prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </section>
        <section class="adCarousel-control next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </section>
      </div>

      <div id="service">
        <section class="service-hd">
          <h2>餐饮一站式服务</h2>
          <h5>配套产品体系，从根本上提供店面运营指导与餐厅盈利方案</h5>
        </section>
        <section class="service-bd">
          <div class="all-in-one">
            <section class="center-bg">
              <img src="/images/all_in_one-center.png" alt="">
              <div class="center-txt">
                <h2>弥尚</h2>
                <h5>一站式服务</h5>
                <p>第一经营视角为您精准策划</p>
                <p>专业缔造有价值的商业空间</p>
                <a href="tel:13873976777" class="btn btn-custom-sm">了解更多</a>
              </div>
            </section>
            <section class="list">
              <div class="item">
                <div class="des">
                  <img src="/images/all_in_one-ico1.png" alt="">
                  <p>品牌策划</p>
                </div>
              </div>
              <div class="item">
                <div class="des">
                  <img src="/images/all_in_one-ico2.png" alt="">
                  <p>选址分析</p>
                </div>
              </div>
              <div class="item">
                <div class="des">
                  <img src="/images/all_in_one-ico3.png" alt="">
                  <p>项目定位</p>
                </div>
              </div>
              <div class="item">
                <div class="des">
                  <img src="/images/all_in_one-ico4.png" alt="">
                  <p>空间设计</p>
                </div>
              </div>
              <div class="item">
                <div class="des">
                  <img src="/images/all_in_one-ico5.png" alt="">
                  <p>工程施工</p>
                </div>
              </div>
              <div class="item">
                <div class="des">
                  <img src="/images/all_in_one-ico6.png" alt="">
                  <p>材料采购</p>
                </div>
              </div>
              <div class="item">
                <div class="des">
                  <img src="/images/all_in_one-ico7.png" alt="">
                  <p>产品配套</p>
                </div>
              </div>
              <div class="item">
                <div class="des">
                  <img src="/images/all_in_one-ico8.png" alt="">
                  <p>售后服务</p>
                </div>
              </div>
            </section>
          </div>
        </section>
      </div>
      <div id="budget">
        <div class="budget-inner">
          <section class="budget-hd">
            <h2>我的餐厅装修需要花多少钱？</h2>
            <h5>5秒帮您算出明细，不花冤枉钱！</h5>
          </section>
          <section class="container-fluid row budget-bd">
            <div class="col-xs-12 col-sm-4 lt">
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
                </select>
                <span class="input-group-addon glyphicon glyphicon-triangle-bottom"></span>
              </div>
              <div class="input-group" data-toggle="popover" data-trigger="manual" data-content="请填写有效的手机号码" data-placement="bottom" tabindex="0" id="tel-box">
                <span class="input-group-addon">联系电话</span>
                <input type="text" class="form-control" id="decoration-tel" placeholder="请留下您的手机号码" maxlength="11" data-toggle="popover">
                <span class="input-group-addon glyphicon glyphicon-phone-alt"></span>
              </div>
              <div class="tips">
                <span class="glyphicon glyphicon-heart"></span>
                <span>为了您的利益及我们的口碑，您的隐私将被严格保密！</span>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 md">
              <div class="btn btn-budget">点我报价</div>
            </div>
            <div class="col-xs-12 col-sm-4 rt">
              <div class="row-1">
                <span class="item" data-txt="设计费用"><b>?</b></span>
                <span class="item" data-txt="设备费用"><b>?</b></span>
              </div>
              <div class="row-2">
                <span class="item" data-txt="材料费用"><b>?</b></span>
                <span class="item" data-txt="人工费用"><b>?</b></span>
              </div>
            </div>
          </section>
          <section class="budget-ft"></section>
        </div>
      </div>
      <div id="advantage">
        <div class="advantage-inner">
          <section class="container-fluid row advantage-hd">
            <div class="col-sm-9">
              <h2>专业人做专业事</h2>
              <h5>创<span>有内涵</span>的品牌,造<span>富文化</span>的空间,建<span>高品质</span>的工程</h5>
            </div>
            <div class="col-sm-3">
              <a href="tel:13873976777" class="btn-more">预约设计</a>
            </div>
          </section>
          <section class="container-fluid row advantage-bd">
            <div class="col-sm-3 item">
              <img src="/images/adv-1.jpg" alt="">
              <div class="num">01</div>
              <div class="txt">
                <p>灯光的合理布局，不仅满足了基本的照明要求外，还起到烘托气氛的作用。</p>
                <p>恰当的灯光运用可以调动现场的气氛，影响消费者的情绪。</p>
              </div>
            </div>
            <div class="col-sm-3 item">
              <img src="/images/adv-2.jpg" alt="">
              <div class="num">02</div>
              <div class="txt">
                <p>合理布局动线不仅增加空间利用率还能快速导流，提升服务效率及质量。</p>
              </div>
            </div>
            <div class="col-sm-3 item">
              <img src="/images/adv-3.jpg" alt="">
              <div class="num">03</div>
              <div class="txt">
                <p>分析消费者年龄层次心理采用对应色彩及造型，增加餐厅亲和力提升回头率。</p>
                <p>根据消费者的需求，创造和加大商业价值，提高运营的效率！</p>
              </div>
            </div>
            <div class="col-sm-3 item">
              <img src="/images/adv-4.jpg" alt="">
              <div class="num">04</div>
              <div class="txt">
                <p>门头是一张餐厅品牌对外的公开名片；又是一个餐厅整体环境设计的元素融合的代表；更是一家餐饮品牌的品质形象。</p>
              </div>
            </div>
          </section>
          <section class="advantage-ft">
          </section>
        </div>
      </div>
      <div id="case">
        <section class="case-hd">
          <h2>全新餐厅案例</h2>
          <h5>涵盖13个种类、数十种风格，您想要的我们都能做</h5>
        </section>
        <section class="container-fluid case-bd">
          <ul class="row case-list">
            <li class="col-xs-12 col-sm-6 col-md-4">
              <a href="/template/temp_case.php">
                <img src="/images/new-1.jpg" alt="">
                <div class="cover">
                  <h3 class="text-ellipsis title">案例模板</h3>
                  <h5 class="text-ellipsis content">点击查看案例展示模板页内容</h5>
                  <span class="glyphicon glyphicon-plus"></span>
                </div>
              </a>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-4">
              <a href="javascript:;">
                <img src="/images/new-2.jpg" alt="">
                <div class="cover">
                  <h3 class="text-ellipsis title">锅仔滋补羊肉</h3>
                  <h5 class="text-ellipsis content">锅仔羊肉香味扑鼻且驱寒暖身，香在口，暖在心是深受欢迎的冬季家常菜</h5>
                  <span class="glyphicon glyphicon-plus"></span>
                </div>
              </a>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-4">
              <a href="javascript:;">
                <img src="/images/new-3.jpg" alt="">
                <div class="cover">
                  <h3 class="text-ellipsis title">开胃豆腐王</h3>
                  <h5 class="text-ellipsis content">内酯豆腐是豆腐中的“小鲜肉”,质地细腻嫩滑,热量低,深受各路吃货喜爱</h5>
                  <span class="glyphicon glyphicon-plus"></span>
                </div>
              </a>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-4">
              <a href="javascript:;">
                <img src="/images/new-4.jpg" alt="">
                <div class="cover">
                  <h3 class="text-ellipsis title">秘制猪脚</h3>
                  <h5 class="text-ellipsis content">猪脚十分软糯，有嚼感，丝毫没有肥腻感，软滑糯嫩、烂而不散、唇齿留香</h5>
                  <span class="glyphicon glyphicon-plus"></span>
                </div>
              </a>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-4">
              <a href="javascript:;">
                <img src="/images/new-5.jpg" alt="">
                <div class="cover">
                  <h3 class="text-ellipsis title">平锅臭桂鱼</h3>
                  <h5 class="text-ellipsis content">鱼肉经过腌制，具有神奇般鲜嫩和口感，微辣且锅香飘逸，是下饭好选择</h5>
                  <span class="glyphicon glyphicon-plus"></span>
                </div>
              </a>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-4">
              <a href="javascript:;">
                <img src="/images/new-6.jpg" alt="">
                <div class="cover">
                  <h3 class="text-ellipsis title">香辣刨盐鱼</h3>
                  <h5 class="text-ellipsis content">把生鱼用盐腌制，做成刨盐鱼，制作出符合湖南人的香鲜辣的香辣刨盐鱼</h5>
                  <span class="glyphicon glyphicon-plus"></span>
                </div>
              </a>
            </li>
          </ul>
        </section>
        <section class="case-ft">
          <a href="javascript:;" class="more">更多案例 >></a>
        </section>
      </div>
      <div id="company">
        <section class="company-hd">
          <span>弥尚餐饮</span>
          <span>装饰设计</span>
        </section>
        <section class="company-bd">
          <span>湖南优厨联盟餐饮管理有限公司<b>，</b></span>
          <span>是一家年轻的<b>、</b>专业的餐饮管理公司<b>，</b></span>
          <span>不受众多加盟分店经营压力和管理牵制<b>。</b></span>
          <span>是经湖南省工商部门核准的</span>
          <span>独立合法的有限责任公司<b>，</b></span>
          <span>我们是一家专注提供</span>
          <span><b>“</b>餐饮相关专业服务<b>”</b>的</span>
          <span>餐饮连锁管理机构<b>。</b></span>
        </section>
        <section class="company-ft">
          <a href="/about"></a>
        </section>
      </div>
      <div id="news">
        <section class="news-hd">
          <h2>新闻动态</h2>
          <h5>最新资讯实时报道，做行业的风向标</h5>
        </section>
        <section class="news-bd container-fluid row">

          <div class="inner">
            <section class="col-xs-12 col-sm-6 lt">
              <div class="hot">
                <a href="javascript:;">
                  <div class="pic">
                    <img title="主题酒店设计需要注意的事项有哪些？" src="/images/hot.jpg" alt="主题酒店设计需要注意的事项有哪些？">
                  </div>
                  <div class="content">
                    <h4>主题酒店设计需要注意的事项有哪些？</h4>
                    主题类酒店设计突破了酒店设计原有的模式，在酒店行业颇为盛行，主要是通过主题环境与制造出的氛围来展示主题概念，主题突出、和谐一致，才能打造出成功的主题酒店设计。
                  </div>
                </a>
              </div>
            </section>
            <section class="col-xs-12 col-sm-6 rt">
              <ul class="news-list">
                <li class="item">
                  <a href="javascript:;" class="media">
                    <div class="media-body">
                      <h4 class="media-heading">中餐厅的空间设计有哪些注意事项？</h4>
                      做餐厅，装修很重要，空间设计更重要。好的空间设计能让消费者印象深刻，更能为自己的品牌树立独一无二的形象。中餐厅而言，空间设计要考量的方面很多，餐厅品类、消费档次、复古或时尚等等。那么，中餐厅的空间设计到底有哪些注意事项呢？
                    </div>
                    <div class="media-right">
                      <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNmI1NDYzYzNjZCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE2YjU0NjNjM2NkIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy4xNzk2ODc1IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;">
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="javascript:;" class="media">
                    <div class="media-body">
                      <h4 class="media-heading">论厨房设计在饭店运营过程中的重要性及其影响</h4>
                      厨房作为饭店最重要的职能部门，设计的合理好坏与否，都将对饭店的的建设和产品质量产生直接影响，同时也将影响到厨房本身的生产规模和产品结构调整，对于在厨房里工作的员工身心健康以及工作效率也会有着微妙的影响等等。
                    </div>
                    <div class="media-right">
                      <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNmI1NDYzYzNjZCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE2YjU0NjNjM2NkIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy4xNzk2ODc1IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;">
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="javascript:;" class="media">
                    <div class="media-body">
                      <h4 class="media-heading">饭店装修施工之前需要注意到的一些细节</h4>
                      众所周知，作为公共场所的餐饮饭店，对于消防安全管理也是丝毫不能忽视的，这一点在公共娱乐场所消防安全管理规定有明确的规定，这里就不多讲了，很容易就能查阅到，这里想要讲的是，需要根据管理制度提前制定好紧急疏散预案。
                    </div>
                    <div class="media-right">
                      <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNmI1NDYzYzNjZCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE2YjU0NjNjM2NkIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy4xNzk2ODc1IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;">
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="javascript:;" class="media">
                    <div class="media-body">
                      <h4 class="media-heading">中餐厅的空间设计有哪些注意事项？</h4>
                      做餐厅，装修很重要，空间设计更重要。好的空间设计能让消费者印象深刻，更能为自己的品牌树立独一无二的形象。中餐厅而言，空间设计要考量的方面很多，餐厅品类、消费档次、复古或时尚等等。那么，中餐厅的空间设计到底有哪些注意事项呢？
                    </div>
                    <div class="media-right">
                      <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNmI1NDYzYzNjZCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE2YjU0NjNjM2NkIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy4xNzk2ODc1IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;">
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="javascript:;" class="media">
                    <div class="media-body">
                      <h4 class="media-heading">论厨房设计在饭店运营过程中的重要性及其影响</h4>
                      厨房作为饭店最重要的职能部门，设计的合理好坏与否，都将对饭店的的建设和产品质量产生直接影响，同时也将影响到厨房本身的生产规模和产品结构调整，对于在厨房里工作的员工身心健康以及工作效率也会有着微妙的影响等等。
                    </div>
                    <div class="media-right">
                      <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNmI1NDYzYzNjZCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE2YjU0NjNjM2NkIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy4xNzk2ODc1IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;">
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="javascript:;" class="media">
                    <div class="media-body">
                      <h4 class="media-heading">饭店装修施工之前需要注意到的一些细节</h4>
                      众所周知，作为公共场所的餐饮饭店，对于消防安全管理也是丝毫不能忽视的，这一点在公共娱乐场所消防安全管理规定有明确的规定，这里就不多讲了，很容易就能查阅到，这里想要讲的是，需要根据管理制度提前制定好紧急疏散预案。
                    </div>
                    <div class="media-right">
                      <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNmI1NDYzYzNjZCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE2YjU0NjNjM2NkIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy4xNzk2ODc1IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;">
                    </div>
                  </a>
                </li>
              </ul>
            </section>

          </div>
        </section>

        <section class="news-ft">
          <a href="/news" class="more">更多资讯 >></a>
        </section>
      </div>
      <div id="partner">
        <section class="partner-hd">
          <h2>弥尚餐饮装饰合作品牌</h2>
        </section>
        <section class="partner-bd container-fluid row">
          <div class="col-xs-4 col-sm-2 item">
            <img src="/images/p_01.png" alt="">
          </div>
          <div class="col-xs-4 col-sm-2 item">
            <img src="/images/p_02.png" alt="">
          </div>
          <div class="col-xs-4 col-sm-2 item">
            <img src="/images/p_03.png" alt="">
          </div>
          <div class="col-xs-4 col-sm-2 item">
            <img src="/images/p_04.png" alt="">
          </div>
          <div class="col-xs-4 col-sm-2 item">
            <img src="/images/p_05.png" alt="">
          </div>
          <div class="col-xs-4 col-sm-2 item">
            <img src="/images/p_06.png" alt="">
          </div>
        </section>
        <section class="partner-ft">
          <a href="tel:13873976777" class="btn btn-custom">沟通合作</a>
        </section>
      </div>
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

  </section>

  <!-- Budget Modal -->
  <div class="modal fade" id="budgetModal" tabindex="-1" role="dialog" aria-labelledby="budgetModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
  </div>

  <script src="/include/jquery/jquery.min.js"></script>
  <script src="/include/bootstrap/js/bootstrap.min.js"></script>
  <script src="/include/js/shared.js"></script>
  <script src="/include/js/homepage.js"></script>
</body>

</html>