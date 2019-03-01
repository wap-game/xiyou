<?

ini_set("error_reporting","E_ALL & ~E_NOTICE");//防止报错代码
include("fqxy/url/url.php");
$wjid=$_GET['wjid'];
$password=$_GET['pass'];
	if($wjid!=""||$password!=""){
$xyurl="http://".$xxjyurl."/xxjy/xxjyindex.php?wjid=$wjini&&pass=$pass1";
}else{
$xyurl="http://".$xxjyurl."/xxjy/index.php";
}




echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$xyurl'>";


?>