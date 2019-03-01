<?php
echo $rid;
if ($npcc==54) {
	
$npcname="杨中顺";	
	
if($rid==52){	
echo "<font color=black>".$nname."：大仙你来的正好，这几位病人的症状分明是中了瘟疫，但是任凭怎么给他们喂服治疗瘟疫的药也是不能痊愈，真是奇怪。</font>"."<br>";

echo "<font color=black>".$name."：你走近一看，发现这些病人手臂上都有一个淡淡的仙桃状黑印。你心想，袁天罡见多识广，于是前往天监台</font>"."<br>";
//任务进程改变
$rwjc1=53;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="仙20转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//快速任务
$ydx=1;//移动坐标x
$ydy=23;//移动坐标y
$ydfy=5000000;//传送费用	
include("./rw/ksrw.php");
//快速任务

} elseif($rid==53){
echo "<font color=black>".$nname."：大仙你来的正好，这几位病人的症状分明是中了瘟疫，但是任凭怎么给他们喂服治疗瘟疫的药也是不能痊愈，真是奇怪。</font>"."<br>";
echo "<font color=black>".$name."：你走近一看，发现这些病人手臂上都有一个淡淡的仙桃状黑印。你心想，袁天罡见多识广，于是前往天监台</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=23;//移动坐标y
$ydfy=5000000;//传送费用	
include("./rw/ksrw.php");
//快速任务




} else {
echo "<font color=black>没有这个任务id编号".$rw2."请尝试联系gm解决此问题！！</font><br>";

}





















} else {


}
?>