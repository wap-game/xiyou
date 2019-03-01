<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
$dypx=25;
include("./ini/dyxx_ini.php");



$dyxxid=227;
include("./pz/pz07.php");
$dyxxid=228;
include("./pz/pz07.php");
$dyxxid=229;
include("./pz/pz07.php");
$dyxxid=230;
include("./pz/pz07.php");
$dyxxid=231;
include("./pz/pz07.php");
$dyxxid=232;
include("./pz/pz07.php");
$dyxxid=233;
include("./pz/pz07.php");


$dyxxid=532;
include("./pz/pz07.php");
$dyxxid=533;
include("./pz/pz07.php");
$dyxxid=534;
include("./pz/pz07.php");
$dyxxid=535;
include("./pz/pz07.php");
$dyxxid=536;
include("./pz/pz07.php");
$dyxxid=537;
include("./pz/pz07.php");
$dyxxid=538;
include("./pz/pz07.php");
$dyxxid=539;
include("./pz/pz07.php");
$dyxxid=540;
include("./pz/pz07.php");
$dyxxid=541;
include("./pz/pz07.php");
$dyxxid=542;
include("./pz/pz07.php");
$dyxxid=543;
include("./pz/pz07.php");
$dyxxid=544;
include("./pz/pz07.php");
$dyxxid=545;
include("./pz/pz07.php");
$dyxxid=546;
include("./pz/pz07.php");
$dyxxid=547;
include("./pz/pz07.php");
$dyxxid=548;
include("./pz/pz07.php");
$dyxxid=549;
include("./pz/pz07.php");




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=424;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>上一页</font></a>";
echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=614;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>下一页</font></a>"."<br>";





echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=11;
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





} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>