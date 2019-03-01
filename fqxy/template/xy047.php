<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){






include("./ini/zxrw_ini.php");
$rwid1=($iniFile->getCategory('任务id'));
$rwbl1=($iniFile->getCategory('任务变量'));
$rwmz1=($iniFile->getCategory('任务名字'));
$rwfl1=($iniFile->getCategory('任务分类'));
$m1=count($rwbl1,0)-1; 

$ik=0;

//调用zt.ini是否存在
include("./ini/yxrw_ini.php");
$rwid=($iniFile->getCategory('日常任务'));
$rwmz=($iniFile->getCategory('日常任务名字'));

$m=count($rwid,0)-1; 
$i=0;

if($m1>=1||$m>=1){


echo "<font color=black>我的【日常任务】</font>"."<br>";


if($m1>=1){
$i=0;
foreach(array_keys($rwid1) as $key){
$keyrwid1[]=$rwid1[$key];
}
foreach(array_keys($rwbl1) as $key){
$keyrwbl1[]=$rwbl1[$key];
}
foreach(array_keys($rwmz1) as $key){
$keyrwmz1[]=$rwmz1[$key];
}
foreach(array_keys($rwfl1) as $key){
$keyrwfl1[]=$rwfl1[$key];
}
for($d=0;$d<$m;$d++){
$i=$i+1;
if($keyrwfl1[$i]==5){
$ik=$ik+1;
$rwstr=$keyrwid1[$i]."_".$keyrwfl1[$i];
echo "<font color=black>".$ik.".</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=49;
$npc[]=$rwstr;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$keyrwmz1[$i]."</font></a>"."<br>";

}




}
}











if($m>=1){
$i=0;
foreach(array_keys($rwid) as $key){
$keyrwid[]=$rwid[$key];
}
foreach(array_keys($rwmz) as $key){
$keyrwmz[]=$rwmz[$key];
}

for($d=0;$d<$m;$d++){
$i=$i+1;
$ik=$ik+1;
echo "<font color=black>".$ik.".</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=86;
$npc[]=$keyrwid[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$keyrwmz[$i]."</font></a>"."<br>";

}



}


} else{	
echo "<font color=black>暂时还未接受任何副本日常任务</font>"."<br>";

}

$rwid="";
$rwbl="";
$rwmz="";
$rwfl="";
$keyrwid="";

$keyrwbl="";


$keyrwmz="";

$keyrwfl="";





include("./ini/zxrw_ini.php");
$rwid=($iniFile->getCategory('任务id'));
$rwbl=($iniFile->getCategory('任务变量'));
$rwmz=($iniFile->getCategory('任务名字'));
$rwfl=($iniFile->getCategory('任务分类'));
$m=count($rwbl,0)-1; 
$i=0;


if($m>=1){



foreach(array_keys($rwid) as $key){
$keyrwid[]=$rwid[$key];
}
foreach(array_keys($rwbl) as $key){
$keyrwbl[]=$rwbl[$key];
}
foreach(array_keys($rwmz) as $key){
$keyrwmz[]=$rwmz[$key];
}
foreach(array_keys($rwfl) as $key){
$keyrwfl[]=$rwfl[$key];
}




for($d=0;$d<$m;$d++){
$i=$i+1;

	
if($keyrwfl[$i]==5){
$ik=$ik+1;

$rwstr=$keyrwid[$i]."_".$keyrwfl[$i];

echo "<font color=black>".$ik.".</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=49;
$npc[]=$rwstr;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$keyrwmz[$i]."</font></a>"."<br>";

}




}





} else{	
echo "<font color=black>暂时还未接受任何每日日常任务</font>"."<br>";

}














echo "<font color=black>----------</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=44;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回任务分类</font></a>"."<br>";
echo "<br>";
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