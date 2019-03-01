<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

echo "<font color=red>恭喜你关闭了尊贵vip特权显示</font>"."<br>";
include("./ini/zgvip_ini.php");
include("./sql/mysql.php");//调用数据库连接 
$q2="zgvip".$wjid;
$strsql = "update $q2 set xs=1 where id=1";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('尊贵vip开关', ['1' => '1']);
include("template/xy060.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");




} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>