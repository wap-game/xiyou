<?php


echo "<font color=black>[攻城-说明]</font>"."<br>";

echo "<font color=black>【攻城攻略】</font>"."<br>";
echo "<font color=black>攻城需要提前5分钟报名,报名需要玄铁令与1两银子,攻城开始后陆续进场。攻城入口在6.5,需要攻打3.3大门2.2中门,密道守卫才能攻打密室神兽获取权杖</font>"."<br>";
echo "<font color=black>【死亡次数】</font>"."<br>";
echo "<font color=black>国家君主30次，国家官员20次，国家成员10次</font>"."<br>";

echo "<font color=black>【国家积分规则】</font>"."<br>";
echo "<font color=black>击杀神兽积分:10分,击杀官员1分，击杀帮众1分，击杀携带权杖玩家积分1分</font>"."<br>";

echo "<font color=black>【奖励发放】</font>"."<br>";
echo "<font color=black>国家积分排行攻城结束即可领取,其他三大个人排行榜需要在周六领取！</font>"."<br>";








echo "<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=187;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
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