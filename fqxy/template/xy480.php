<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


	
$hdid=223;
$npcc=$hdid;
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数',$hdid));
$csts=$hdcs+1;

if($hdcs <10){


$hdcs=$hdcs+1;
$nowtime=date('Y-m-d H:i:s');
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=$hdcs where hdid=$hdid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$hdid => $nowtime]);
$iniFile->updItem('活动次数', [$hdid => $hdcs]);	








echo "<font color=black>〖活动〗紫霞仙子：我的意中人是一位盖世英雄,有一天他会身披金甲圣衣、驾着七彩祥云来娶我，你会娶我吗？</font>"."<br>";
echo "<br>";


//随机出题

//随机
$bz= rand(1, 100);
if($bz <=100){









//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=481;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>曾经有一份真挚的爱情摆在我的面前</font></a>"."<br>";



} else{
		
echo "<font color=red>〖活动〗紫霞仙子：(ˇˍˇ) 什么狗屁爱情故事，都是骗人的（紫霞仙子识破了你）</font>"."<br>";	
	

}
	
//随机出题


} else{	


echo "<font color=red>〖活动〗紫霞仙子：你今日已假扮至尊宝骗我很多次了！！</font>"."<br>";	
	
	








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