<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

$wpid=$npcc;
//调用物品信息
include("./wp/txxx.php");


$txid=$wpid;
$img='pic/txpic/'.$txid.'.png';
if(!file_exists($img)){
echo "<font color=black>".$txmzsp."称号图片还未制作</font>"; 
$imgg=$txid.".png";
echo "<font color=black>图片名称:</font>";
echo "<font color=red>".$imgg."</font>"."<br>"; 

	} else{
$img='pic/txpic/'.$txid.'.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	
echo "<br>";	
	}



echo "<font color=black>描述：".$wpms."</font>"."<br>"; 





//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=251;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回称号</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=11;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回状态</font></a>"."<br>";
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