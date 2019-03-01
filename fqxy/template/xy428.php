<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
$xlfl=$npcc;

include("./ini/xl_ini.php");
$xldj1=($iniFile->getItem('修炼等级','1'));
$xldj=$xldj1+1;
include("./zbdz/xlms.php");




echo "<font color=black>修炼：".$ms1.$ms3."</font></a>"."<br>";



//echo "<font color=red>不能修炼了（封印状态）</font></a>"."<br>";




if($xlpd!=2){
	
echo "<font color=black>修炼所需：".$ms2."</font></a>"."<br>";	
	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=433;
$npc[]=$xldj;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【开始修炼】</font></a>"."<br>";

} else{	

echo "<font color=red>已达到至高无上的境界了</font></a>"."<br>";







}


echo "<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=427;
$npc[]=0;
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