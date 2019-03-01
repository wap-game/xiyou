<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
	
	
	//调用fzpp.ini是否存在
include("./ini/fzpp_ini.php");
	# 获取一个分类下所有数据
$fz01=($iniFile->getCategory('房间人id'));
$fz02=($iniFile->getCategory('房间人名字'));
$fz03=($iniFile->getCategory('房间人vip'));
	$m=0;

$m=count($fz01,0)-1; 

$ym=$fz01[初始];

$km=0;
if($m >=1){
	
	echo "<font color=black>请选择你要踢出的玩家</font>"."<br>";
	
	echo "<br>";
	
	
	
	
	
foreach(array_keys($fz01) as $key){
$keyfz01[]=$fz01[$key];
}
foreach(array_keys($fz02) as $key){
$keyfz02[]=$fz02[$key];
}	
foreach(array_keys($fz03) as $key){
$keyfz03[]=$fz03[$key];
}
	
	
	
$i=0;
$xxh=0;




for($d=0;$d<$m;$d++){
$i=$i+1;
$xxh=$xxh+1;
$fary01=$keyfz01[$i];
$fary02=$keyfz02[$i];
$fary03=$keyfz03[$i];
	echo "<font color=black>".$xxh.".</font>";	
	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$fary01;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$fary02."</font></a>";
echo "<font color=black>|</font>";
		//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=170;
$npc[]=$fary01;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>请TA离开</font></a>"."<br>";
	
	
	}
	
	
	
	
	
	
	
	
	
	
		} else{	

echo "<font color=black>你的住所鬼都没有一个</font>"."<br>";


	} 


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