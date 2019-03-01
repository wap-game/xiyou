<?
error_reporting(E_ALL & ~E_NOTICE); 
$wjid=$_GET['wjid'];
$password=$_GET['pass'];
if($wjid!=""||$password!=""){
//ini文件名字
$inina="user.ini";
//路径
$path='../ache/'.$wjid;
	//判断ini文件是否存在	
$ininame = $path."/".$inina;
include("../class/iniclass.php");//调用iniclass文件
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
$pass=($iniFile->getItem('验证信息','玩家验证'));
if($pass==$password&&$password!=""&&$pass!=""){
$name=($iniFile->getItem('验证信息','玩家昵称'));
$xxjyurl="?wjid=".$wjid."&&pass=".$password;
}else{
$xxjyurl="";
}
}else{
$xxjyurl="";	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">  
<title>分区列表-小轩西游-</title>

<link rel="stylesheet" href="../css/touchScreen/mobile.css" />
<link rel="stylesheet" href="../css/touchScreen/ch5game.css" />
<link rel="stylesheet" href="../css/touchScreen/ccolorbutton.css" />
<link rel="icon" href="../img/favicon.png" type="image/x-icon" />
<style type="text/css">
	a{color: #0077E0;}	table{max-width: 600px;min-width: 280px;}	td{height:30px;}	.lbg{height:20px;border-bottom: 1px solid #DCDCDC;}	.btable{border-top: 1px solid #9DB3C5;}
	.circle {width: 16px;height: 16px;line-height:16px;-moz-border-radius: 8px;-webkit-border-radius: 8px;border-radius: 8px;color: #fff;text-align:center;font-size: 10px;}
	.red.circle{background: #e62727;}	.orange.circle{background: #ff5c00;}	.pink.circle{background: #e22092;}	.green.circle{background: #56A418;}	.blue.circle{background: #2981e4;}	.err{color: red;font-size: 13px;}
</style>
</head>
<body>
<div class="g-hd f-cb">

    <img src="../images/logo1.jpg" alt="">

<div align="right">
<div style="margin-right: 10px;" class="m-icon-list">
<br />

</div>
</div>
</div>
<div class="g-mn">
<div class="m-box">
<div class="m-box-hd" style="margin-left: 3%;">
<div class="tt">
分区列表 - 小轩西游
</div>
</div>
<div class="m-box-mn" style="padding: 5px 10px 0px 10px;">

<div style="min-height: 80px;">

<table>
<tr>
</tr>

<tr>
<?

?>

<td><div class="lbg"><div class="blue circle">1</div></div></td>
<td><div class="lbg"><a href="/fqxy/xyy.php<?echo $xxjyurl;?>" style='color:green'>内测区(流畅)</a></div></td>
<td><div class="lbg"><a href="/fqxy/xyy.php<?echo $xxjyurl;?>" style='color:green'>进入游戏</a></div></td>



$xyurl="http://".$url."/fqxy/xyy.php?wjid=$wjid&&pass=$password";


echo "<a href=$xyurl><font color=blue>梦轩西游（内测开发区）</font></a>"."<br>";



</tr>
</table>
</div>
<div class="article-content" style="font-size: 15px;margin-top: 10px;">

</div>
</div>
</div>
</div>
<div class="g-ft f-cb">

<div class="f-fr"><a href="../index.php" class="to-top">返回官网</a><br /></div>
</div>
</body>
</html>




