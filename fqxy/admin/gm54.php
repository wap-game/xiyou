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
include("./ini/hbmoneyjc_ini.php");	
$csbzh=($iniFile->getItem('财神币总和','初始'));
$csbzh1=($iniFile->getItem('财神币总和','初始1'));
echo "<font color=red>【天降红包】（统计）</font>"."<br>";





echo "<font color=red>---------------------</font>"."<br>";
echo "<font color=black>【当前奖金】：".$csbzh."个〖红包〗</font>"."<br>";
echo "<font color=black>【总共盈利】：".$csbzh1."个〖红包〗</font>";
if($csbzh1>=1){
echo "<font color=red>（盈利中）</font>"."<br>";
} elseif($csbzh1==0){ 
echo "<font color=red>（持平）</font>"."<br>";
} else{	
echo "<font color=red>（亏损中）</font>"."<br>";
}
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=56'><font color=blue>【清空所有】</font></a>"."<br>";

echo "<font color=red>---------------------</font>"."<br>";





echo "<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=52'><font color=blue>【返回上级】</font></a>"."<br>";


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
