<?php


echo "<font color=red>温馨提示:各种五张图纸升级高级图纸可升级到一级别（需要花费豆子）</font>"."<br>"; 
  

echo "<font color=red>〖噬魂锻造图纸〗=〖圣灵锻造图纸〗x5,银两1亿,金豆x2</font>"; 
  
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=531;
$npc[]=1;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【升级】</font></a>"."<br>";

echo "<font color=red>〖噬魂锻造图纸〗x10=〖圣灵锻造图纸〗x50,银两10亿,金豆x20</font>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=531;
$npc[]=2;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【升级】</font></a>"."<br>";


echo "<font color=red>〖噬魂锻造图纸〗x100=〖圣灵锻造图纸〗x500,银两100亿,金豆x200</font>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=531;
$npc[]=3;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【升级】</font></a>"."<br>";




echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";







?>