<?php
//初始化
$rw1="";
$rw2="";
$rw3="";
$rw4="";
$rw5="";
$rw6="";
$npcc=695;//npcid
//初始化
include("./ini/zxrw_ini.php");

////////////////////任务属性//////////////
$rwidd=1;//任务的id
$rwfl=1;//任务的分类1主线2支线5日常4活动


//第一个必须加变量转换
$xrwidd=$rwidd;
$xrwfl=$rwfl;
//第一个必须加变量转换

////////////////////任务属性//////////////


$rw1=($iniFile->getCategory('任务id'));
$rw2=($iniFile->getCategory('任务变量'));
$rw3=($iniFile->getCategory('已杀怪'));
$rw4=($iniFile->getCategory('要杀怪'));
$rw5=($iniFile->getCategory('任务分类'));
$rw6=($iniFile->getCategory('任务名字'));


include("./rwmap/rwpdd.php");//调用任务判断


include("./rwmap/xsc26_ts.php");//任务提示	

if ($m==1) {
	if ($rrw2==10||$rrw2==11) {
$strr1=$xrwidd."_".$xrwfl."_".$npcc;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>调查洞穴～</font></a>"."<br>";

 } elseif ($rrw2==15) {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=445;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【大螃蟹】</font></a>"."<br>";
} else {
} 
} else {

	if ($rrw2==10) {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>调查洞穴～</font></a>"."<br>";

 } elseif ($rrw2==15) {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=445;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【大螃蟹】</font></a>"."<br>";
} else {
} 



}









//查询npc是否有任务

?>







