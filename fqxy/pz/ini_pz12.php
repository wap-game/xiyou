<?php
include("./sql/mysql.php");//调用数据库连接 	
$q2="all_zt";
mysql_query("set names utf8");
$sql1=mysql_query("select wjid,username from $q2 where lh=$lh",$conn);
$info1=@mysql_fetch_array($sql1);	
$lhid=$info1[wjid];
$lhname=$info1[username];
if($lhid>=10000000){
echo "<font color=red>对不起！此靓号ID[".$lh."]已被".$lhname."占用，无法使用</font>"."<br>";		
$wpsy=1;//使用失败
} else{
$q2="all_zt";	
$strsql = "update $q2 set lh=$lh where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['靓号' => $lh]);
echo "<font color=red>恭喜你！获得的全区唯一靓号ID[".$lh."]</font>"."<br>";		


$wpsy=2;//使用成功		
} 

?>
