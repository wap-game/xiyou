<?php

if ($wjid==10000001) {//gm号可看


echo "<font color=red>==========任务调试信息=========</font>"."<br>";
echo "任务编号：".$rw1."号<br>";
echo "任务进程值：".$rw2."号<br>";
echo "NPC编号：".$npcc."号<br>";
echo "任务名称：【".$rw6."】<br>";
echo "<font color=red>==========任务调试信息=========</font>"."<br>";


} else{


	
} 





$rid=$rw2;
$xysg=$rw4;
$ysg=$rw3;

if($rw1 ==1){//按照npc进行分支每10个一个php文件

if($npcc==20||$npcc==800||$npcc==249||$npcc==225||$npcc==205||$npcc==1012||$npcc==276||$npcc==58||$npcc==1014||$npcc==238){

include("zxxrw01_1.php");
} elseif($npcc==54){
include("zxxrw01_2.php");
} elseif($npcc==500){
include("500.php");
} else{

echo "<font color=black>没有这个任务变量编号".$rw2."请尝试联系gm解决此问题！！</font><br>";
}
} else{
		
echo "<font color=black>没有这个任务id编号".$rw1."请尝试联系gm解决此问题！！</font><br>";
}








?>