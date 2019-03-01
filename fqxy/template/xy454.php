<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=455;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金银山〗奖励一览</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=456;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖探险符〗兑换</font></a>"."<br>";
echo "<font color=black>充满浓郁灵气的金银山！在山下都能感觉到满满的灵气</font>"."<br>";
echo "<font color=black>请选择你的冒险区域</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=36;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金山〗（每次金豆x10）</font></a>"."<br>";
echo "<font color=black>-----------------</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=35;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖银山〗（每次金豆x5）</font></a>"."<br>";
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


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>