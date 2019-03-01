<?php

//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
$wjid1=$wjid;
$ckid=$npcck;
$wjid=$ckid;
$ininalock2=$wjid."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");
if($zsspd==1&&$zsspd2==1){
	

	$wjid=$wjid1;
	include("./ini/pk_ini.php");
	$username=($iniFile->getItem('玩家死亡','初始'));
	$wjid=$ckid;
	include("./ini/zt_ini.php");
$username=($iniFile->getItem('玩家信息','玩家名字'));
	
	echo "<font color=black>你被".$username."打死了</font>"."<br>";
	
	$wjid=$wjid1;
		include("./ini/zt_ini.php");


$iniFile->updItem('玩家信息', ['红' => $wjxx1[血]]);	



	
	
	
	
	
	
	
	
	
	
	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
echo "<br>";
echo "<font color=black>----------------------</font>"."<br>";


//cmd及超链接值
include("fhgame.php");
	
	
	
	
	
	
	
	
	
	
	
	$wjid1=$wjid;

} else{	
}

//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini





?>