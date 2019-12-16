<?php
session_start();
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]);
require_once(ROOT_PATH."/cms/include/php/path_def.php");
require_once(ROOT_PATH."/cms/include/php/class_def.php");
$userManage = new DBManager("localhost", "mscp", "2tks5jt3", "mscp", "tab_admin");
$caseManage = new DBManager("localhost", "mscp", "2tks5jt3", "mscp", "tab_case");
$articleManage = new DBManager("localhost", "mscp", "2tks5jt3", "mscp", "tab_article");
$classManage = new DBManager("localhost", "mscp", "2tks5jt3", "mscp", "tab_class");
?>