<?php




//获取我的银两和金豆
include("./ini/ylck_ini.php");
$yl01=($iniFile->getItem('玩家信息','银两'));
$yl02=($iniFile->getItem('玩家信息','金豆'));
$yl03=($iniFile->getItem('玩家信息','金带'));

echo "<font color=red>【我的小仓】：</font>"."<br>";



//数字转汉字
$yl=$yl01;
include("./pz/ylts.php");
echo "<font color=black>〖银两〗：".$ylxx."两</font>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=464;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【提现】</font></a><br>";

echo "<font color=black>〖金豆〗：".$yl02."个</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=464;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【提现】</font></a><br>";
echo "<font color=black>〖金带〗：".$yl03."个</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=464;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【提现】</font></a><br>";


echo "<font color=balck>--------------</font>"."<br>";

echo "<font color=red>说明：猜拳，吹泡获胜的财物包括撤回的都在这里（提现收取手续费用银两5%，金豆2%）</font><br>";	



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=403;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回娱乐</font></a>"."<font color=black></font>"."<br>";
?>