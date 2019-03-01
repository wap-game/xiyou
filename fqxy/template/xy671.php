<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
	
include("./ini/color1_ini.php");



$colortm=($iniFile->getItem('题目','初始'));
if($colortm==1){
$colorid=($iniFile->getItem('正确颜色','初始'));
$coco="颜色";
} elseif($colortm==2){
$colorid=($iniFile->getItem('正确文字','初始'));
$coco="文字";
} else {
echo "<font color=red>错误</font>"."<br>";		
}



if ($npcc==$colorid) {
if ($colorid==1) {
$colormz="红色";	
} elseif ($colorid==2) {	
$colormz="黑色";
} elseif ($colorid==3) {	
$colormz="蓝色";
} elseif ($colorid==4) {	
$colormz="橙色";
} elseif ($colorid==5) {	
$colormz="绿色";
} elseif ($colorid==6) {	
$colormz="紫色";
} elseif ($colorid==7) {	
$colormz="黄色";
} elseif ($colorid==8) {	
$colormz="粉色";
} else {
}		
echo "<font color=red>恭喜你！！找出了【".$colormz.$coco."】糖果获得了糖果奖励</font>"."<br>";

$bz= rand(1, 550);
if ($bz>=1&&$bz<=60) {
$wpdz1[]="〖帝王石〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=939;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif ($bz>=61&&$bz<=100) {	
$wpdz1[]="〖碎银块〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=659;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif ($bz>=101&&$bz<=110) {	
$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif ($bz>=111&&$bz<=200) {	
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif ($bz>=201&&$bz<=300) {	

$wpdz1[]="〖荣誉宝石包〗（2个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=494;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif ($bz>=301&&$bz<=350) {	

$wpdz1[]="〖冠军宝石包〗（1个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=494;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif ($bz>=351&&$bz<=390) {	
$wpdz1[]="〖王者宝石包〗（1个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=587;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif ($bz>=391&&$bz<=420) {	
$wpdz1[]="〖皇者宝石包〗（1个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=808;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif ($bz>=421&&$bz<=440) {	
$wpdz1[]="〖圣贤宝石包〗（1个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=791;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif ($bz>=441&&$bz<=450) {	

$wpdz1[]="〖至尊宝石包〗（1个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=856;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

} elseif ($bz>=451&&$bz<=460) {	

$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

} elseif ($bz>=461&&$bz<=470) {	

$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif ($bz>=471&&$bz<=480) {	


$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif ($bz>=481&&$bz<=520) {	


$wpdz1[]="〖双倍掉宝符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=455;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif ($bz>=521&&$bz<=540) {	
$wpdz1[]="〖四倍掉宝符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=455;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif ($bz>=541&&$bz<=550) {	
$wpdz1[]="〖八倍掉宝符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=456;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

} else {
}	
include("./rwmap/rwget.php");




} else {
if ($colorid==1) {
$colormz="红色";	
} elseif ($colorid==2) {	
$colormz="黑色";
} elseif ($colorid==3) {	
$colormz="蓝色";
} elseif ($colorid==4) {	
$colormz="橙色";
} elseif ($colorid==5) {	
$colormz="绿色";
} elseif ($colorid==6) {	
$colormz="紫色";
} elseif ($colorid==7) {	
$colormz="黄色";
} elseif ($colorid==8) {	
$colormz="粉色";
} else {
}	
echo "<font color=red>很遗憾！！我需要您找【".$colormz.$coco."】糖果（找错了万圣节活动时间-10秒）</font>"."<br>";	
include("./ini/color1_ini.php");


include("./ini/color1_ini.php");
$time1=-10;//时间（分）
$sftime1=($iniFile->getItem('答题时间','初始'));
$tiemxx=date("Y-m-d H:i:s",strtotime("$sftime1   $time1   second"));
$iniFile->updItem('答题时间', ['初始' => $tiemxx]);
	
}



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=1319;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";





		
	
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