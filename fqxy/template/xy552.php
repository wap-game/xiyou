<?php



if($npcc ==1||$npcc ==7||$npcc ==12||$npcc ==16||$npcc ==20||$npcc ==21
||$npcc ==26||$npcc ==32||$npcc ==33||$npcc ==39||$npcc ==44||$npcc ==46||$npcc ==49
||$npcc ==54||$npcc ==60||$npcc ==64||$npcc ==65||$npcc ==72||$npcc ==73
||$npcc ==78||$npcc ==83||$npcc ==87||$npcc ==92||$npcc ==94||$npcc ==100){//正确答案
$zqda=2;
} else{
$zqda=1;
}

if($zqda ==2){//答对

echo "<font color=red>我：So-esay太简单了，来真正有技术含量的~~~</font>"."<br>";

//经验加
$jy= rand(1000000, 10000000);
include("./pz/ini_pzz023.php");
//经验加

//物品加
$wpdz1[]="【奖状】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=681;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	











} else{	//答错
echo "<font color=red>〖活动〗脑筋急转弯老师：你这木鱼脑袋瓜子这么简单的题都答不对（很遗憾答错了）</font>"."<br>";

//经验加
$jy= rand(50000, 1000000);
include("./pz/ini_pzz023.php");
//经验加
$zqda=1;
}





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










?>