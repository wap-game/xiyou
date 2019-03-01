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
if($npcc==1||$npcc==4||$npcc==7||$npcc==17||$npcc==695||$npcc==146||$npcc==696||$npcc==5196||$npcc==5197||$npcc==149){
include("zxrw01_1.php");
} elseif($npcc==54||$npcc==32||$npcc==91||$npcc==451||$npcc==142||$npcc==220||$npcc==221||$npcc==222||$npcc==456||$npcc==210){
include("zxrw01_2.php");
} elseif($npcc==163||$npcc==202||$npcc==204||$npcc==143||$npcc==20||$npcc==84||$npcc==463||$npcc==120||$npcc==466||$npcc==697){
include("zxrw01_3.php");
} else{
echo "<font color=black>没有这个任务变量编号".$rw2."请尝试联系gm解决此问题！！</font><br>";
}
} else{
echo "<font color=black>没有这个任务id编号".$rw1."请尝试联系gm解决此问题！！</font><br>";
}















?>