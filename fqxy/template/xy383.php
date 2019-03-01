<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


$zbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];
$zbid=$npcc."_".$npccid;
$zbid1=$zbid;
$wpidd=$npcc;
$cwid1=$arr[2];
$cwid2=$arr[3];
$cwid3=$cwid1."_".$cwid2;





//下一个装备阶段描述
include("./zbdz/zbms.php");//装备描述
$zbsjid=$ms3;


if($npcc>=1&&$npcc<=100){
include("./zbdz/zbsj01.php");//装备描述
} elseif($npcc>=101&&$npcc<=200){
include("./zbdz/zbsj02.php");//装备描述
} elseif($npcc>=201&&$npcc<=300){
include("./zbdz/zbsj03.php");//装备描述
} elseif($npcc>=301&&$npcc<=400){
include("./zbdz/zbsj04.php");//装备描述
} elseif($npcc>=401&&$npcc<=500){
include("./zbdz/zbsj05.php");//装备描述

} else{


}


echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=366;
$npc[]=$cwid3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回装备</font></a>"."<br>";	
	
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