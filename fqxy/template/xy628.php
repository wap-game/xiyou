<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
	
	
	
include("./ini/xydfw_ini.php");
$iniFile->updItem('所处楼层', ['初始' => $npcc]);
$mqlc=($iniFile->getItem('所处楼层','初始'));








if($mqlc==10||$mqlc==20||$mqlc==50||$mqlc==60||$mqlc==80||$mqlc==100||$mqlc==150||$mqlc==200||$mqlc==300||$mqlc==400||$mqlc==500||$mqlc==600||$mqlc==700
||$mqlc==800||$mqlc==900||$mqlc==1000){
echo "<font color=red>恭喜你！！爬上了第".$mqlc."楼（有楼层奖励）</font>"."<br>";
	
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在【幸运大富翁】爬上了第".$mqlc."楼！！";
include("./msg/msgg02.php");
} else{
echo "<font color=red>恭喜你！！领取了第".$mqlc."楼奖励</font>"."<br>";

$bz= rand(1,100000000);
$yl1=$bz;
$wwpsl=$yl1;
include("./pz/ini_pz03.php");


}








//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=626;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【继续】</font></a>"."<br>";

echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【放弃爬楼】</font></a>"."<br>";






echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

	
?>