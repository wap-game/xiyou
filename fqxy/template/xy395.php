<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){



//死亡后清空所有pk状态但是保留被谁打死的




include("./ini/pksw_ini.php");
$pk8=($iniFile->getItem('玩家名字','初始'));




$iniFile->updItem('被打死', ['初始' => '999']);








echo "<font color=black>玩家PK信息（战败）：</font><br>";
echo "<font color=black>------------------------------</font><br>";
echo "<font color=red>".$pk8."将你打死了，狠狠被鞭尸一万次"."</font><br>"."<br>";

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=396;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>马上复活</font></a>"."<font color=black></font>"."<br>";
echo "<font color=black>------------------------------</font><br>";
echo "<font color=black>提示：现在出于死亡状态，复活后有再次受到攻击的危险！！</font><br>";
echo "<br>";

//cmd及超链接值
include("fhgame.php");

} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>