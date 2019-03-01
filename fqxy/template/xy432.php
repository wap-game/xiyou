<?php





echo "<font color=black>各项修炼介绍</font>"."<br>";
echo "<font color=black>1.修炼一共分为四种血攻魔防</font>"."<br>";
echo "<font color=black>2.修炼阶级分炼气、筑基、开光、金丹、元婴、出窍、合体、渡劫、寂灭和大乘（等级每升20级可获得新的阶级修炼）</font>"."<br>";
echo "<font color=black>3.每个阶级可修炼20层，越往上属性越多当然需要的东西也更多</font>"."<br>";
echo "<font color=black>4.当度过大乘期后将开启飞仙隐藏模式</font>"."<br>";









//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=427;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回修炼</font></a>"."<br>";

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