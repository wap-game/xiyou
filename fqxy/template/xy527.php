<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


	
	









	
	
	
	
	
$hdid=226;
$npcc=$hdid;
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数',$hdid));
$csts=$hdcs+1;

if($hdcs <30){


	
	
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始



//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据

include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {
$hdcs=$hdcs+1;
$nowtime=date('Y-m-d H:i:s');
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=$hdcs where hdid=$hdid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$hdid => $nowtime]);
$iniFile->updItem('活动次数', [$hdid => $hdcs]);	








echo "<font color=black>心如七夕女，生死难再匹。</font>"."<br>";
echo "<br>";


//随机出题

//随机
$bz= rand(1, 100);
if($bz <=100){


$jy=777;
include("./pz/ini_pzz023.php");
//经验加






//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=528;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>我猜【生】</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=528;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>我猜【死】</font></a>"."<br>";


} else{
		
echo "<font color=red>〖活动〗潇道长：(ˇˍˇ) 你未能识破我的生死之谜（失败了）</font>"."<br>";	
	

}
	
//随机出题
} else{
echo "<font color=black>对不起！猜生死需要5亿银两</font>"."<br>";

}


} else{	


echo "<font color=red>〖活动〗潇道长：你今日次数已用完！！</font>"."<br>";	
	
	








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