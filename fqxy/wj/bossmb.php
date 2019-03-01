<?php


$bossts="";
include("./ini/bosstime_ini.php");
$hdtime=($iniFile->getItem('死亡时间','初始'));
if ($hdtime!="") {
$startdate=$hdtime;
$enddate=date('Y-m-d H:i:s');
$minute=floor((strtotime($enddate)-strtotime($startdate)));
if($minute <= $vipqytime){
$minute1=$vipqytime-$minute;
$minute=floor($minute1/60);
$second=$minute1%60;
$time1=floor($minute1/60);
$time2=floor($minute1%60);
$time3=floor($time1/60);
$time4=floor($time3/24);
if($time4 > 0){	
$time5=$time3%24;
$bossts=$bossts."<font color=red>提示：".$bossmz."还剩".$time4."天".$time5."小时</font>"."<br>";	
} else{
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


}
echo $bossts;
	



$vipqy=2;	
} else{
$vipqy=1;	
}
} else{
$vipqy=1;	
}


if($vipqy == 1){
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=130;
$npc[]=$bossid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>".$bossmz."</font></a>"."<br>";
 include("./ini/boss_ini.php");
$bossjs=($iniFile->getItem('世界BOSS属性','击杀'));
 if($time2 <1&&$bossjs==2){
	 
//更新缓存数据
$inina="boss_".$bossid.".ini";
$path='acher/all_boss';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
$xtxx=$bossmz."已经复活~~请大佬们前往击杀~~击杀！！";
include("./msg/msgg02.php");
}
} else{


}


?>


