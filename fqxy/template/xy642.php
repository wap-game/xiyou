<?php

echo "<font color=red>【诛仙台】第一层</font>"."<br>";



//调用zt.ini是否存在
$wjxx="";
$wjxx1="";
include("./ini/zt_ini.php");
$wjxx=($iniFile->getCategory('玩家信息'));
include("wj/ztt.php");
include("wj/zfzt.php");
$ohp=$wjxx[红];
$omaxhp=$wjxx1[血];	

echo "<font color=red>【诛仙台属性】:</font>"."<br>";
//显示自己
echo "<font color=black>HP:(".$ohp."/".$omaxhp.")</font>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=641;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<font color=black></font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<font color=black></font>"."<br>";
echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");

 






?>