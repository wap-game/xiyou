<?php

echo "<font color=red>小轩西游攻略一览</font>"."<br>";
	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=405;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【升级篇】</font></a>"."<font color=black></font>"."<br>";

	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=406;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【装备篇】</font></a>"."<font color=black></font>"."<br>";

	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=407;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【副本篇】</font></a>"."<font color=black></font>"."<br>";


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