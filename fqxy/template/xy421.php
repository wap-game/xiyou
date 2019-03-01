<?php


echo "<font color=red>温馨提示:〖银符碎片〗〖金符碎片〗〖钻符碎片〗可在这祝融为完整的升星符哦（同时也有失败的可能材料全爆）</font>"."<br>"; 
  


echo "<font color=black>〖银星升星符〗（〖银符碎片〗x5+2亿银两）[成功率90%]</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=13;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【祝融】</font></a>"."<br>";
echo "<br>";

echo "<font color=black>〖金星升星符〗（〖金符碎片〗x10+10亿银两）[成功率60%]</font>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=14;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【祝融】</font></a>"."<br>";




echo "<br>";
echo "<font color=black>〖钻星升星符〗（〖钻符碎片〗x20+25亿银两）[成功率40%]</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=15;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【祝融】</font></a>"."<br>";
echo "<br>";

/*
〖陨符碎片〗
echo "<font color=black>〖陨星升星符〗（〖陨符碎片〗x40+〖金豆〗x100）[成功率20%]</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=16;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【祝融】</font></a>"."<br>";

*/

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");



















?>