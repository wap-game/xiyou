<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
$npcciid=$npcc;

include("./wj/fbwc.php");//npc页面



include("./sql/mysql.php");//调用数据库连接 
$q2="fb".$wjid;
$strsql = "update $q2 set wc=2 where id=$npcciid";//物品id号必改值
$result = mysql_query($strsql);
$path='ache/'.$wjid;
$file = $path."/".$inina1;	
$iniFile = new iniFile($file);

$iniFile->updItem($npcciid, ['完成情况' => 2]);


$q2="yxrw".$wjid;
$strsql = "delete from $q2 where rwfl=3 and rwid=$npcciid";//物品id号必改值
$result = mysql_query($strsql);
$inina='yxrw.ini';
$path='./ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
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