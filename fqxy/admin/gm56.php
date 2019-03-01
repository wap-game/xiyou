<?php

$wjid=10000001;
//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");



/////////公共锁
$path='acher/lock';//路径
$lockmz='allhbmoney_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁


if($zsspd==1&&$all_lock2==1){


echo "<font color=red>【天降财神】（统计）已清零</font>"."<br>";
include("./sql/mysql.php");//调用数据库连接 
include("./ini/hbmoneyjc_ini.php");
$iniFile->updItem('财神币总和', ['初始' => 0]);
$iniFile->updItem('财神币总和', ['初始1' => 0]);
$q2="all_hbmoneyjc";
$strsql = "update $q2 set money=0 where id=1";//物品id号必改值
$result = mysql_query($strsql);	
$q2="all_hbmoneyjc";
$strsql = "update $q2 set money=0 where id=2";//物品id号必改值
$result = mysql_query($strsql);	



echo "<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=54'><font color=blue>【返回上级】</font></a>"."<br>";


echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjiddd=$wjid&&pass=$password><font color=blue>返回GM管理平台</font></a>"."<br>";




} else{	
}



//解锁当前使用的ini
include("./ini/jszsini.php");
//解锁当前使用的ini


//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini




?>
