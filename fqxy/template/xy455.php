<?php





echo "<font color=black>〖银山〗</font>"."<br>";
echo "<font color=black>铁铜银魂，铁铜银金符，荣誉宝石，〖财宝箱〗〖诛仙令〗〖双倍掉宝符〗〖四倍掉宝符〗〖八倍掉宝符〗〖冠军宝石〗〖王者宝石〗</font>"."<br>";





/*
额外随机产出〖诛仙令〗(0.5%)〖双倍掉宝符〗(10%)〖四倍掉宝符〗(5%)〖八倍掉宝符〗(2%)
*/
echo "<font color=black>〖金山〗</font>"."<br>";
echo "<font color=black>金钻陨魂，金钻符，冠军宝石，圣灵图纸，〖大号财宝箱〗〖陨星升星符〗〖诛仙令〗〖双倍掉宝符〗〖四倍掉宝符〗〖八倍掉宝符〗〖冠军宝石〗〖王者宝石〗</font>"."<br>";
/*
额外随机产出〖诛仙令〗(1%)〖双倍掉宝符〗(20%)〖四倍掉宝符〗(10%)〖八倍掉宝符〗(5%)
*/
echo "<font color=black>银山每次必得〖探险符〗x1，金山〖探险符〗x3（〖探险符〗可用于兑换）</font>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";


echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");





?>