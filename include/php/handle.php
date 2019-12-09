<?php

if (isset($_POST["token"]) && !empty($_POST["token"])) {
  switch ($_POST["token"]) {
    case "getBudget":
      if (isset($_POST["data"]) && !empty($_POST["data"])) {
        echo proc_getBudget($_POST["data"]);
      }
    break;
    case 'leaveMessage':
      if (isset($_POST["data"]) && !empty($_POST["data"])) {
        echo proc_leaveMessage($_POST["data"]);
      }
      break;
    case 'createHtmlFile':
      echo proc_createHtmlFile("2019082601");
      break;
    default:
    break;
  }
}

// 预算服务处理函数
function proc_getBudget($data) {
  $arr_data = json_decode($data, TRUE);
  $arr_budget = array("设计费"=>$arr_data["area"]*80,
                      "材料费"=>$arr_data["area"]*550,
                      "人工费"=>$arr_data["area"]*650,
                      "软装配饰"=>$arr_data["area"]*80,
                      "灯饰光源"=>$arr_data["area"]*100,
                      "餐厅桌椅"=>$arr_data["area"]*150,
                      "空调电器"=>$arr_data["area"]*150,
                      "厨放设备及抽排"=>$arr_data["area"]*200,
                      "企划灯箱"=>$arr_data["area"]*100,
                      "门牌发光字"=>$arr_data["area"]*50,
                      "餐具小件"=>$arr_data["area"]*50,
                      "窗帘工服"=>$arr_data["area"]*50,
                      "收银监控音响"=>$arr_data["area"]*80,
                      "其他"=>$arr_data["area"]*50,
                    );
  return json_encode($arr_budget, 320);
}

// 留言板功能处理函数
function proc_leaveMessage($data) {
  return json_encode($data, 320);
}

// 生成案例html文件
function proc_createHtmlFile($index) {
  $clsArray = array("htmlPath"=>"/case/", "tempPath"=>"/template/temp_case.php", "jsonPath"=>"/upload/2019082601/2019082601.json");
  $ext = ".html";
  $htmlPath = $clsArray["htmlPath"].$index.$ext;
  // 获取网站信息数据
  $siteinfo = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"]."/include/json/info_site.json"), true);
  $url = "http://".$siteinfo["domain"].$clsArray["tempPath"];
  $data = file_get_contents($_SERVER["DOCUMENT_ROOT"].$clsArray["jsonPath"]);
  $str = curl_request($url, $data);
  file_put_contents($_SERVER["DOCUMENT_ROOT"].$htmlPath, $str);
  $result = json_encode('{"result": "success"}');
  return $result;
}


/**
* curl请求
* @param string $url：发送请求的地址
* @param mixed|null $post：请求post的数据
* @return mixed $data：请求返回的结果
*/
function curl_request($url, $post = null) {
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
  if (!empty($post)){
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
  }
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $data = curl_exec($curl);
  curl_close($curl);
  return $data;
}