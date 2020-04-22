<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/cms/include/php/include.php");
if (!isset($_SESSION["state"]) || $_SESSION["state"] !== sha1(0)) {
  $_SESSION["state"] = sha1(-1);
  header("location: /cms/admin/login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/cms/include/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/cms/include/css/icons.css">
  <link rel="stylesheet" href="/cms/include/css/cms.css">
  <link rel="stylesheet" href="/cms/include/css/budget_manage.css">
  <title>留言管理——Powered by 黄狮虎</title>
</head>

<body>
  <div class="layer">
    <section class="page-head">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed pull-left" data-target="#navbar-menu">
              <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
            <a class="navbar-brand" href="/cms/admin/index.php">后台管理系统</a>
            <button type="button" class="navbar-toggle collapsed pull-right" data-target="#navbar-config">
              <span class="glyphicon glyphicon-cog"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-config">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="glyphicon glyphicon-user"></span>
                  <span id="username"><?php echo $_SESSION["user"]["username"]; ?></span>
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#" data-toggle="modal" data-target="#modPwd" role="button"><span class="icon icon-cuz icon-key"></span>&nbsp;修改密码</a></li>
                  <li><a id="logout" href="#" role="button"><span class="glyphicon glyphicon-log-out"></span>&nbsp;注销登录</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;返回前台</a></li>
                </ul>
              </li>
            </ul>
            <!-- <form class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form> -->
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </section>
    <section class="page-body">
      <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="nav-list">
          <div class="list-item slide" role="button" href="/cms/admin/index.php">
            <div class="slide-head">
              <span class="glyphicon glyphicon-file"></span>
              <span class="title">开始文档</span>
            </div>
          </div>
          <div class="list-item slide" role="button" href="/cms/admin/site_setting.php">
            <div class="slide-head">
              <span class="glyphicon glyphicon-globe"></span>
              <span class="title">网站设置</span>
            </div>
          </div>
          <div class="list-item slide slide-left" role="button" href="/cms/admin/case_manage.php">
            <div class="slide-head">
              <span class="glyphicon glyphicon-blackboard"></span>
              <span class="title">案例管理</span>
              <span class="pull-right glyphicon glyphicon-menu"></span>
            </div>
            <ul class="slide-menu">
              <li class="text-primary" href="#caseTab">
                <span class="glyphicon glyphicon-list"></span>
                <span class="title">案例总览</span>
              </li>
              <li class="text-primary" href="#uploadCase">
                <span class="glyphicon glyphicon-cloud-upload"></span>
                <span class="title">上传案例</span>
              </li>
            </ul>
          </div>
          <div class="list-item slide slide-left" role="button" href="/cms/admin/article_manage.php">
            <div class="slide-head">
              <span class="glyphicon glyphicon-pencil"></span>
              <span class="title">新闻管理</span>
              <span class="pull-right glyphicon glyphicon-menu"></span>
            </div>
            <ul class="slide-menu">
              <li class="text-primary" href="#articleTab">
                <span class="glyphicon glyphicon-list"></span>
                <span class="title">新闻总览</span>
              </li>
              <li class="text-primary" href="#uploadArticle">
                <span class="glyphicon glyphicon-cloud-upload"></span>
                <span class="title">上传新闻</span>
              </li>
            </ul>
          </div>
          <div class="list-item slide slide-left active" role="button" href="/cms/admin/budget_manage.php">
            <div class="slide-head">
              <span class="glyphicon glyphicon-book"></span>
              <span class="title">预算信息</span>
              <span class="pull-right badge"><?php echo $budgetManage->getRecordCounts("b_read='F'"); ?></span>
            </div>
          </div>
          <div class="list-item slide slide-left" role="button" href="/cms/admin/message_manage.php">
            <div class="slide-head">
              <span class="glyphicon glyphicon-comment"></span>
              <span class="title">留言管理</span>
              <span class="pull-right badge"><?php echo $messageManage->getRecordCounts("b_read='F'"); ?></span>
            </div>
          </div>
          <!-- <div class="list-item slide" role="button" href="/cms/admin/user_manage.php">
            <div class="slide-head">
              <span class="glyphicon glyphicon-user"></span>
              <span class="title">用户管理</span>
            </div>
          </div> -->
        </div>
        <a href="/index.php" class="front-end">
          <span class="glyphicon glyphicon-home"></span>
          <span>前台首页</span>
        </a>
      </div>

      <div class="content-wrap">
        <div class="content-inner">
          <ul id="pageTabs" class="hidden-xs nav nav-tabs" role="tablist">
            <li role="presentation" class="active" href="#budgetTab">
              <span class="pull-left glyphicon glyphicon-comment"></span>
              <span class="title">预算信息</span>
            </li>
          </ul>
          <div id="pageTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="budgetTab">
              <div class="clearfix overview">
                <div class="col-xs-6">
                  <div class="wrap total">
                    <p>全部留言</p>
                    <span class="text-primary digital"><?php echo $budgetManage->getRecordCounts(); ?></span>
                    <span>条</span>
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="wrap marked">
                    <p>暂未处理</p>
                    <span class="text-danger digital"><?php echo $budgetManage->getRecordCounts("b_read='F'"); ?></span>
                    <span>条</span>
                  </div>
                </div>
              </div>
              <div class="message-wrap">
                <!-- 动态生成案例列表 -->
              </div> <!-- .message-wrap -->
              <div class="list-wrap">
                <!-- 分页按钮动态输出 -->
              </div>
            </div> <!-- #budgetTab -->
          </div> <!-- #pageTabContent-->
        </div> <!-- .content-inner-->
      </div> <!-- .content-wrap-->

    </section>
    <section class="page-foot"></section>

    <!-- Modal confirm-->
    <div class="modal fade" id="modalConfirm" tabindex="-1" role="dialog" aria-labelledby="modalConfirmLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-danger" id="modalConfirmLabel">敬告</h4>
          </div>
          <div class="modal-body">
            此操作不可逆，请谨慎选择！您确认要删除吗？
          </div>
          <div class="modal-footer">
            <span class="tips"></span>
            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
            <button type="button" class="btn btn-danger">确认</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modPwd" tabindex="-1" role="dialog" aria-labelledby="modPwdLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="modPwdLabel">修改用户密码</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="old-pwd" class="control-label">旧密码:</label>
                <input type="password" class="form-control" id="old-pwd" name="old-pwd" required>
              </div>
              <div class="form-group">
                <label for="new-pwd1" class="control-label">新的密码:</label>
                <input type="password" class="form-control" id="new-pwd1" name="new-pwd1" required>
              </div>
              <div class="form-group">
                <label for="new-pwd2" class="control-label">确认新密码:</label>
                <input type="password" class="form-control" id="new-pwd2" name="new-pwd2" required>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <span class="tips"></span>
            <button type="button" class="btn btn-primary" id="btn_ok">确认</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
          </div>
        </div>
      </div>
    </div>

  </div> <!-- /.layer-->

  <script type="text/javascript" src="/cms/include/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="/cms/include/bootstrap/js/bootstrap.min.js"></script>
  <script src="/cms/include/kindeditor/kindeditor-all-min.js"></script>
  <script src="/cms/include/kindeditor/lang/zh-CN.js"></script>
  <script type="text/javascript" src="/cms/include/js/cms.js"></script>
  <script type="text/javascript" src="/cms/include/js/budget_manage.js"></script>
</body>

</html>