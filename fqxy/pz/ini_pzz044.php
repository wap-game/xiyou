<?php
$wpsy=2;//使用成功
include("./ini/zgvip_ini.php");
$nowtime=date('Y-m-d H:i:s');	
$viptime=($iniFile->getItem('尊贵vip','1'));
if($viptime >$nowtime){
$viptime1=date("Y-m-d H:i:s",strtotime("$viptime   $addtime   day"));   //日期天数相加函数
include("./sql/mysql.php");//调用数据库连接 
$q2="zgvip".$wjid;
$strsql = "update $q2 set zgviptime=1 where id=1";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('尊贵vip', ['1' => $viptime1]);
} else{
$viptime1=date("Y-m-d H:i:s",strtotime("$nowtime   $addtime   day"));   //日期天数相加函数
include("./sql/mysql.php");//调用数据库连接 
$q2="zgvip".$wjid;
$strsql = "update $q2 set zgviptime=1 where id=1";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('尊贵vip', ['1' => $viptime1]);	
} 
echo "<font color=red>恭喜你！！获得了尊享VIP特权".$addtime."天（到期时间：".$viptime1."）</font>"."<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."获得了尊享VIP特权".$addtime."天（到期时间：".$viptime1."）";
include("./msg/msgg02.php");


?>
