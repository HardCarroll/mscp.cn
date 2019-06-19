<?php

if (isset($_POST["token"]) && !empty($_POST["token"])) {
  switch ($_POST["token"]) {
    case "getBudget":
      if (isset($_POST["data"]) && !empty($_POST["data"])) {
        echo proc_getBudget($_POST["data"]);
      }
    break;
    default:
    break;
  }
}


function proc_getBudget($data) {
  $arr_data = [
    array("name"=>"设计费", "tips"=>"效果图、施工图等制作", "value"=>36800),
    array("name"=>"材料费", "tips"=>"装修主材料、辅材料等", "value"=>368000),
    array("name"=>"人工费", "tips"=>"泥工、木工、电工、等", "value"=>88000),
    array("name"=>"设备费", "tips"=>"厨房、空调等设备采购", "value"=>98000),
    array("name"=>"总计", "tips"=>"", "value"=>(36800+368000+88000+98000))
  ];
  return json_encode($arr_data);
}