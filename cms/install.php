<?php
$str = file_get_contents("./install.json");
$arr = json_decode($str, TRUE);

$link = mysqli_connect($arr["host"], $arr["username"], $arr["password"], $arr["database"]);
foreach($arr["sql_init_table"] as $key=>$val) {
  mysqli_query($link, $val);
}
foreach($arr["sql_init_data"] as $key=>$val) {
  mysqli_query($link, $val);
}

echo "<h1>初始化完成</h1>";
?>