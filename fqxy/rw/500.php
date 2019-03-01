<?php


$npcname="瑶池圣母";
if ($rid==58) {
echo "<font color=black>".$nname."：大胆妖孽竟敢拔我蟠桃树，拿命来！（瑶池圣母一掌将你击倒在地上。幸好你有仙气护体，免于一死）</font>"."<br>";
//任务进程改变
$rwjc1=59;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="仙20转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//快速任务
$ydx=23;//移动坐标x
$ydy=0;//移动坐标y
$ydfy=5000000;//传送费用	
include("./rw/ksrw.php");
//快速任务

} elseif ($rid==59) {

echo "<font color=black>".$nname."：大胆妖孽竟敢拔我蟠桃树，拿命来！（瑶池圣母一掌将你击倒在地上。幸好你有仙气护体，免于一死）</font>"."<br>";
//快速任务
$ydx=23;//移动坐标x
$ydy=0;//移动坐标y
$ydfy=5000000;//传送费用	
include("./rw/ksrw.php");
//快速任务








} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}




?>