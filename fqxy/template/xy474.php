<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){




include("./ini/qt_ini.php");
$wpsl=($iniFile->getItem('其他数量',$npcc));









///////////////////////////丢弃数量大于1的物品/////////////////////////////
if($wpsl>1){


$bsid=$npcc;
include("./wp/zbbs.php");
$wpmz=$bsmz;

include("npcc/dqbs01.php");



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=35;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回其他</font></a>"."<br>";






//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";




echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");






///////////////////////////丢弃数量大于1的物品/////////////////////////////








///////////////////////////丢弃数量等于1的物品/////////////////////////////

} elseif($wpsl==1){  
$sl=1;
$wpsl=1;
$sll=1;

$bsid=$npcc;
include("./wp/zbbs.php");
$wpmz=$bsmz;

include("npcc/dqbs02.php");


///////////////////////////丢弃数量等于1的物品/////////////////////////////







} else{

} 



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>





