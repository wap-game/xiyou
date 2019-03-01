<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

if($npcc >=1&&$npcc<=10){
include("./wp/zbdz01.php");
} elseif($npcc >=11&&$npcc<=20){
include("./wp/zbdz02.php");
} elseif($npcc >=21&&$npcc<=30){
include("./wp/zbdz03.php");
} elseif($npcc >=31&&$npcc<=40){
include("./wp/zbdz04.php");
} elseif($npcc >=41&&$npcc<=50){
include("./wp/zbdz05.php");
} elseif($npcc >=51&&$npcc<=60){
include("./wp/zbdz06.php");
} elseif($npcc >=61&&$npcc<=70){
include("./wp/zbdz07.php");
} elseif($npcc >=71&&$npcc<=80){
include("./wp/zbdz08.php");








} else{

echo "<font color=black>没有这个装备id编号".$npcc."请尝试联系gm解决此问题！！</font><br>";

}





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