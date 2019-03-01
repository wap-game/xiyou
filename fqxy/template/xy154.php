<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


$fanpcc=$npcc;


//调用zt.ini是否存在
include("./ini/zt_ini.php");
$fz=($iniFile->getItem('玩家信息','住宅id'));
$fz02=($iniFile->getItem('玩家信息','住宅分类'));
$fz01=($iniFile->getItem('玩家信息','住宅名字'));

if($fz==0){






//操作合法调用购买房子代码
include("wj/gmgz.php");//购买房子




} else{	


$fz03=$fz02;
if($fz02==1){

$fz02="民宅";
} elseif($fz02==2){  
$fz02="豪宅";
} elseif($fz02==3){ 
$fz02="官宅";
} else{

}
if($fz03==3){
echo "<font color=black>你已经拥有了【".$fz01."】(".$fz02."),每人限购一套房子</font>"."<br>";
} else{
echo "<font color=black>你已经拥有了".$fz01."(".$fz02."),每人限购一套房子</font>"."<br>";
}






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