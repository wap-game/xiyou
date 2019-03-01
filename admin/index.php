<?php
header("Content-type: text/html; charset=utf-8");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- TemplateBeginEditable name="doctitle" -->
<title>小轩GM管理平台</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>

<div style='width: device-width;display:block;word-break: break-all;word-wrap: break-word;'>
<?php

error_reporting(E_ALL & ~E_NOTICE); 

$wjid=$_GET['wjid'];
$password=$_GET['pass'];
//ini文件名字
$inina="user2.ini";
//路径
$path='../ache/gm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
$filename = $ininame;
if(file_exists($filename)){
include("../class/iniclass.php");//调用iniclass文件
	//调用user.ini是否存在
include("../ini/user2_ini.php");		
# 获取一个分类下某个子项的值
$pass=($iniFile->getItem('验证信息','玩家验证'));
if($pass!=""||$password!=""){
}else{
$pass=1;
}
if($pass==$password){
$name=($iniFile->getItem('验证信息','玩家昵称'));
include("../url/url.php");



echo "<font color=red>【请选择你需要要管理的项目】</font>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/gm01.php?wjid=$wjid&&pass=$password><font color=blue>社区管理（总站）</font></a>"."<br>";
echo "<br>";
$qy=1;
include("../url/yxurl.php");
echo "<a href=http://".$url."/fqxy/gm.php?wjid=$wjid&&pass=$password&&gid=1><font color=blue>1.公测一区西游管理（1区）</font></a>"."<br>";
echo "<br>";
$qy=2;
include("../url/yxurl.php");
echo "<a href=http://".$url."/fqxy/gm.php?wjid=$wjid&&pass=$password&&gid=1><font color=blue>2.花果山西游管理（2区）</font></a>"."<br>";
echo "<br>";
$qy=3;
include("../url/yxurl.php");
echo "<a href=http://".$url."/fqxy/gm.php?wjid=$wjid&&pass=$password&&gid=1><font color=blue>3.水帘洞西游管理（3区）</font></a>"."<br>";

echo "<br>";
$qy=4;
include("../url/yxurl.php");
echo "<a href=http://".$url."/fqxy/gm.php?wjid=$wjid&&pass=$password&&gid=1><font color=blue>4.乌鸡国西游管理（4区）</font></a>"."<br>";






} else {
include("../url/url.php");
$xyurl="http://".$xxjyurl."/admin/login.php";
$zcxx="<font color=red>当前验证信息失效,请重新登录</font>"."<br><br><a href='login.php'><font color=blue>返回GM登录</font></a>"."<br>";
}
} else {
include("../url/url.php");
$xyurl="http://".$xxjyurl."/admin/login.php";
$zcxx="<font color=red>当前验证信息失效,请重新登录</font>"."<br><br><a href='login.php'><font color=blue>返回GM登录</font></a>"."<br>";
}

?>
</div>

</body>
</html>




