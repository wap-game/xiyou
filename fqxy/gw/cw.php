<?php

$bossxs="";
if ($dtx==$bossx&&$dty==$bossy) {
//调用小boss
include("./ini/qycw_ini.php");
$bossdate1=($iniFile->getItem('boss',$bosid));
if ($bossdate1!="") {
$startdate=$bossdate1;
$enddate=date('Y-m-d H:i:s');
$date=floor((strtotime($enddate)-strtotime($startdate)));
//获取秒数
$second1=$date;
if($second1 >= $msgtime){
$bossxs=2;	
} elseif($second1 <= $msgtime){
$second2=$msgtime-$second1;

$time1=floor($second2/60);
$time2=floor($second2%60);
$time3=floor($time1/60);

if($time3 > 0){	
$second=$time1%60;
$bossts=$bossts."<font color=red>提示：".$bossmz."还剩".$time3."时".$second."分</font>"."<br>";	
} else{
if($time1 >0){
$bossts=$bossts."<font color=red>提示：".$bossmz."还剩".$time1."分钟后出现</font>"."<br>";	
} else{
$bossts=$bossts."<font color=red>提示：".$bossmz."还剩".$time2."秒后出现</font>"."<br>";		
} 	
	
	
}
} else{
$bossxs=1;		
}
} else{
$bossxs=1;	
//写入boss时间
$enddate=date('Y-m-d H:i:s');
$iniFile->updItem('boss', [$bosid => $enddate]);	
}
}


if($bossxs == 2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$bosid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$bossmz."</font></a>";
} else{
} 



?>







