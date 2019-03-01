<?php
header("Content-type: text/html; charset=utf-8");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- TemplateBeginEditable name="doctitle" -->
<title>梦轩西游</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>

<div style='width: device-width;display:block;word-break: break-all;word-wrap: break-word;'>




<?php

$stime=microtime(true);


$wjid=$_GET['wjid'];
$password=$_GET['pass'];



//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;

	//判断ini文件是否存在	
$ininame = $path."/".$inina;
	

$filename = $ininame;
if(file_exists($filename)){
	include("class/iniclass.php");//调用iniclass文件
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
	
	# 获取一个分类下某个子项的值
$pass=($iniFile->getItem('验证信息','玩家验证'));
	

	if($pass!=""||$pass1!=""){

}else{
$pass=1;
}

if($pass==$password){
echo "<font color=black>---------------------------</font>"."<br>";
echo "<font color=black>请将此页面存为书签,方便下次访问</font>"."<br>";
echo "<font color=red>特别提示:为了你的账号安全请不要将书签发给任何人,如有遗失后果自负</font>"."<br>";
echo "<br>";
echo "<br>";
echo "<font color=red>王者绝非偶然,实力打造非凡</font>"."<br>";
echo "<font color=red>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspby:小轩</font>"."<br>";
echo "<font color=black>---------------------------</font>"."<br>";	
	
	$img='pic/login/1.jpg';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
	echo "<br>";
	echo "<br>";

echo "<font color=black>梦轩西游</font>"."<br>";
echo "<font color=black>古典神话网游，持神兵利器，降五爪金龙，携爱行走西游路……</font>"."<br>";
echo "<font color=red>热力推荐</font>"."<br>";


echo "<a href=/fqxy/xyy.php?wjid=$wjid&&pass=$password><font color=blue>小轩西游（开始游戏）</font></a>"."<br>";

echo "<br>";
echo "<a href='login.php'><font color=blue>返回登录</font></a>"."<br>";
	
	
	
	
	
	
	
	
	
	

} else {
echo "<font color=black>当前书签已失效,请重新登录保存</font>"."<br>";
echo "<br>";
echo "<a href='login.php'><font color=blue>返回登录</font></a>"."<br>";

}


} else {
echo "<font color=black>当前书签已失效,请重新登录保存</font>"."<br>";
echo "<br>";
echo "<a href='login.php'><font color=blue>返回登录</font></a>"."<br>";

}


//usleep(200000);
$etime=microtime(true);
 $total=$etime-$stime;
 
 $total=substr($total,0,5)*1000;
 


 
 echo "<font color=red>【番茄专属】执行耗时:".$total."毫秒</font>"."<br>";	
 
?>

</div>

</body>
</html>




