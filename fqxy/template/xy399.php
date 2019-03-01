<?php
echo "<font color=black>对方已离开，或者已死亡</font>"."<br>";	
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<font color=black></font>"."<br>";

echo "<br>";

//cmd及超链接值
include("fhgame.php");



?>