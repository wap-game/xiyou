<?php


$fb="ljl";//副本变量
$fbid1=28;//副本变量
$fbid2=29;//副本变量
$fbid3=30;//副本变量
$fbid4=40;//副本变量
include("./ini/fb_ini.php");



$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));

if ($gwbl[怪物1]==2&&$gwbl[怪物2]==2&&$gwbl[怪物3]==2&&$gwbl[怪物4]==2&&$gwbl[怪物5]==2&&$gwbl[怪物6]==2||$gwbl[完成情况]==3) {
	
if ($gwbl[完成情况]==1) {
if ($tpbl==1) {
$img='pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<font color=black>！</font>"; 
}	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=87;
$npc[]=$fbid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>激活老君炉副本【普通】</font></a>"."<br>";
} else{
	
$fbtime=$gwbl[激活时间];
$nowtime=date('Y-m-d H:i:s');
$fbtime1 = substr($fbtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($fbtime1!=$nowtime1&&$fbtime1!=""){
if ($tpbl==1) {
$img='pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<font color=black>！</font>"; 
}	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=85;
$npc[]=$fbid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>激活老君炉副本【普通】</font></a>"."<br>";
}else{ 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=88;
$npc[]=56;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>激活老君炉副本【普通】</font></a>"."<br>";

} 
	
	
	

} 
	
}else{ 


if ($tpbl==1) {
$img='pic/ts/ts2.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<font color=black>？</font>"; 
}
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=88;
$npc[]=55;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>激活老君炉副本【普通】</font></a>"."<br>";









}












$fbid=$fbid2;
$gwbl=($iniFile->getCategory($fbid));
if ($gwbl[怪物1]==2&&$gwbl[怪物2]==2&&$gwbl[怪物3]==2&&$gwbl[怪物4]==2&&$gwbl[怪物5]==2&&$gwbl[怪物6]==2||$gwbl[完成情况]==3) {
	
if ($gwbl[完成情况]==1) {
if ($tpbl==1) {
$img='pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<font color=black>！</font>"; 
}	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=87;
$npc[]=$fbid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>激活老君炉副本【困难】</font></a>"."<br>";
} else{
	
$fbtime=$gwbl[激活时间];
$nowtime=date('Y-m-d H:i:s');
$fbtime1 = substr($fbtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($fbtime1!=$nowtime1&&$fbtime1!=""){
if ($tpbl==1) {
$img='pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<font color=black>！</font>"; 
}	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=85;
$npc[]=$fbid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>激活老君炉副本【困难】</font></a>"."<br>";
}else{ 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=88;
$npc[]=58;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>激活老君炉副本【困难】</font></a>"."<br>";

} 
	
	
	

} 
	
}else{ 

if ($tpbl==1) {
$img='pic/ts/ts2.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<font color=black>？</font>"; 
}
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=88;
$npc[]=57;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>激活老君炉副本【困难】</font></a>"."<br>";









}





$fbid=$fbid3;
$gwbl=($iniFile->getCategory($fbid));

if ($gwbl[怪物1]==2&&$gwbl[怪物2]==2&&$gwbl[怪物3]==2&&$gwbl[怪物4]==2&&$gwbl[怪物5]==2&&$gwbl[怪物6]==2||$gwbl[完成情况]==3) {
	
if ($gwbl[完成情况]==1) {
if ($tpbl==1) {
$img='pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<font color=black>！</font>"; 
}	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=87;
$npc[]=$fbid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>激活老君炉副本【梦魇】</font></a>"."<br>";
} else{
	
$fbtime=$gwbl[激活时间];
$nowtime=date('Y-m-d H:i:s');
$fbtime1 = substr($fbtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($fbtime1!=$nowtime1&&$fbtime1!=""){
if ($tpbl==1) {
$img='pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<font color=black>！</font>"; 
}	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=85;
$npc[]=$fbid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>激活老君炉副本【梦魇】</font></a>"."<br>";
}else{ 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=88;
$npc[]=60;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>激活老君炉副本【梦魇】</font></a>"."<br>";

} 
	
	
	

} 
	
}else{ 

if ($tpbl==1) {
$img='pic/ts/ts2.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<font color=black>？</font>"; 
}
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=88;
$npc[]=59;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>激活老君炉副本【梦魇】</font></a>"."<br>";










}




$fbid=$fbid4;
$gwbl=($iniFile->getCategory($fbid));

if ($gwbl[怪物1]==2&&$gwbl[怪物2]==2&&$gwbl[怪物3]==2&&$gwbl[怪物4]==2&&$gwbl[怪物5]==2&&$gwbl[怪物6]==2||$gwbl[完成情况]==3) {
	
if ($gwbl[完成情况]==1) {
if ($tpbl==1) {
$img='pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<font color=black>！</font>"; 
}	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=87;
$npc[]=$fbid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>激活老君炉副本【地狱】</font></a>"."<br>";
} else{
	
$fbtime=$gwbl[激活时间];
$nowtime=date('Y-m-d H:i:s');
$fbtime1 = substr($fbtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($fbtime1!=$nowtime1&&$fbtime1!=""){
if ($tpbl==1) {
$img='pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<font color=black>！</font>"; 
}	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=85;
$npc[]=$fbid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>激活老君炉副本【地狱】</font></a>"."<br>";
}else{ 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=88;
$npc[]=80;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>激活老君炉副本【地狱】</font></a>"."<br>";

} 
	
	
	

} 
	
}else{ 


if ($tpbl==1) {
$img='pic/ts/ts2.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<font color=black>？</font>"; 
}
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=88;
$npc[]=79;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>激活老君炉副本【地狱】</font></a>"."<br>";










}
















?>







