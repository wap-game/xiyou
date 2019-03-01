<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

$cwidd=$npcc;

if($cwidd!=""){
//调用cw.ini是否存在

include("./ini/cw_ini.php");
$cwmz1=($iniFile->getItem('宠物原始名字',$cwidd));
$cwmz2=($iniFile->getItem('宠物名字',$cwidd));

echo "<font color=red>温馨提示：放生宠物后宠物星级品质以及本只宠物身上所穿戴的装备一切回归大自然</font><br>";
if($cwmz2!=""){
echo "<font color=red>你确定要将".$cwmz1."（".$cwmz2."）放生吗？</font>"."<br>";
} else{	
echo "<font color=red>你确定要将".$cwmz1."进行放生么？</font>"."<br>";
}

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=371;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>我心意已决</font></a>"."<br>";


echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=365;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>哦！我点错了</font></a>"."<br>";





echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=365;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=362;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回宠物</font></a>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";




echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");


} else{	
echo "<font color=red>宠物有误！！请联系GM解决此问题</font>"."<br>";

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini



?>