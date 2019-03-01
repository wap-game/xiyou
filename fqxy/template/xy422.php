<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
echo "<font color=black>亲爱的玩家你想买点什么呢？</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=53;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>金豆商城</font></a>";
echo "<font color=black>&nbsp|&nbsp</font></a>";
echo "<font color=black>果子商城</font></a>"."<br>";

echo "<font color=black>--------------------------</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=423;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>VIP练级卷</font></a>";
echo "<font color=black>(1果)</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=423;
$npc[]=238;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>三千年蟠桃</font></a>";
echo "<font color=black>(1果)</font></a>";
echo "<br>";





//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=423;
$npc[]=239;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>六千年蟠桃</font></a>";
echo "<font color=black>(2果)</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=423;
$npc[]=240;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>九千年蟠桃</font></a>";
echo "<font color=black>(5果)</font></a>";
echo "<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=423;
$npc[]=423;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>1万法宝经验</font></a>";
echo "<font color=black>(5果)</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=423;
$npc[]=424;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>10万法宝经验</font></a>";
echo "<font color=black>(50果)</font></a>";
echo "<br>";












echo "<br>";
/*

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=54;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>下一页</font></a>"."<br>";

*/




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";






echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");





} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>