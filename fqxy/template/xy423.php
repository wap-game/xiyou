<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


include("./wp/wpxx.php");//信息页面
$wpid=$npcc;


echo "<font color=black>$wpmz</font>"."<br>";
echo "<font color=black>描述：$wpms</font>"."<br>"; 	
echo "<font color=black>价格：【万能果】x".$wpwng."</font>"."<br>";
echo "<font color=black>需要等级：$wpdj</font>"."<br>"; 
echo "<font color=black>重量：$wpzl</font>"."<br>";

if($wpbd==1){
$wpbdd="否";	
} else{	
$wpbdd="是";	
}
echo "<font color=black>是否绑定：$wpbdd</font>"."<br>"; 
include("npcc/mdx05.php");
include("./ini/wp_ini.php");
$npcc=($iniFile->getItem('序列','初始'));

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=422;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回商城</font></a>"."<br>";







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
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>