<?
header("Content-type: text/html; charset=utf-8");

error_reporting(E_ALL & ~E_NOTICE); 
include("../class/iniclass.php");//调用iniclass文件
$wjid=$_GET['wjid'];
$password=$_GET['pass'];
$qy=$_GET['qy'];
if($wjid!=""&&$password!=""&&$qy!=""){
	

	//调用user.ini是否存在
include("../ini/user_ini.php");	
$pass=($iniFile->getItem('验证信息','玩家验证'));
if($pass==$password&&$password!=""&&$pass!=""){

$name=($iniFile->getItem('验证信息','玩家昵称'));
$xxjyurl="?wjid=".$wjid."&&pass=".$password."&&qy=".$qy;

	//调用进入信息写入社区
include("xywap5.php");





}else{
$xxjyurl="";

}
}else{
$xxjyurl="";	

}



if($xxjyurl!=""){
include("../url/yxurl.php");










include("xywap4.php");
}else{
include("xywap2.php");
}





?>

