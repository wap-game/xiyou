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
$cwxj=($iniFile->getItem('宠物星级',$cwidd));
if($cwmz2!=""){
$cwmz3="<font color=red>".$cwmz1."（".$cwmz2."）</font>"."<br>";
} else{	
$cwmz3="<font color=red>".$cwxj."</font>"."<br>";
}
$zbid=$cwidd;

echo $cwmz3;


echo "<font color=black>星级：极品".$cwxj."星</font>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=485;
$npc[]=$cwidd;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【开始升星】</font></a>"."<br>";







echo "<font color=red>温馨提示：需要宠物星源进行升星100%成功（宠物星级越高所要求的星源颜色品质越高）</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=365;
$npc[]=$cwidd;

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

echo "<font color=black>----------------------</font>"."<br>";
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