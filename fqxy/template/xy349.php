<?php
echo "<font color=black>你被".$nname."打得遍体鳞伤，奄奄一息的死掉了！！！</font>"."<br>";





//被干死恢复满血满蓝
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['红' => $wjxx1[血],'蓝' => $wjxx1[蓝]]);
	


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
echo "<br>";
echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");
?>