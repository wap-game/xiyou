<?php
//获取我的银两和金豆
include("./ini/ylck_ini.php");
$yl01=($iniFile->getItem('玩家信息','银两'));
$yl02=($iniFile->getItem('玩家信息','金豆'));
$yl03=($iniFile->getItem('玩家信息','金带'));
if($npcc==1){
if($yl01>=1){






//扣除手续费用
$bfb=floor($yl01*0.05);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl01=$yl01-$ylsxf;

//数字转汉字
$yl=$ylsxf;
include("./pz/ylts.php");
echo "<font color=red>恭喜你！！提现成功(附带".$ylxx."两手续费)</font>"."<br>";	

include("./sql/mysql.php");//调用数据库连接 
//银两加
$yl1=$yl01;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");


$q2="all_ylck";
$strsql = "update $q2 set yl01='0' where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
//更新缓存数据
$inina="ylck.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据




	
} else{
echo "<font color=red>对不起！！你的小仓银两不足~~</font>"."<br>";	
} 	
} elseif($npcc ==2){

if($yl02>=1){

//扣除手续费用
//扣除手续费用
$bfb=floor($yl02*0.02);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl02=$yl02-$ylsxf;
echo "<font color=red>恭喜你！！提现成功(附带〖金豆〗x".$ylsxf."手续费)</font>"."<br>";	

include("./sql/mysql.php");//调用数据库连接 
$wpmz="〖金豆〗";
$wwpfl=4;//物品分类
$wpid=127;//物品id
$wpkc=$yl02;//	需要量
$wpzl=1;//物品重量
echo "<font color=black>获得：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz024.php");//增加





//背包容量变更加
$kcrl=$wpkc*$wpzl;
include("./pz/ini_pzz09.php");
$q2="all_ylck";
$strsql = "update $q2 set yl02='0' where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
//更新缓存数据
$inina="ylck.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
	
	
} else{
echo "<font color=red>对不起！！你的小仓〖金豆〗不足~~</font><br>";	
} 	
	
} elseif($npcc ==3){
if($yl03>=1){
echo "<font color=red>恭喜你！！提现成功</font>"."<br>";		
	
} else{
echo "<font color=red>对不起！！你的小仓〖金带〗不足~~</font><br>";	
} 		
	
	
	
} else{	
}






 		
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=463;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回小仓</font></a>"."<font color=black></font>"."<br>";
?>