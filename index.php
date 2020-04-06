<?php

ini_set("error_reporting", "E_ALL & ~E_NOTICE");//防止报错代码
include("fqxy/url/url.php");
$wjid=$_GET['wjid'];
$password=$_GET['pass'];
	if($wjid!=""||$password!=""){
$xyurl="http://".config_item('host')."/xxjy/xxjyindex.php?wjid=$wjini&&pass=$pass1";
}else{
$xyurl="http://".config_item('host')."/xxjy/index.php";
}

//隔一定秒数后，自动跳转到其他的Web页
echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$xyurl'>";
?>