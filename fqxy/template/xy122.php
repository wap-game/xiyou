<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

include("./wp/wpxx.php");
$wpid=$npcc;
echo "<font color=red>$wpmz</font>"."<br>";
echo "<font color=black>描述：$wpms</font>"."<br>"; 	
//数字转汉字
$yl=$gmjg;
include("./pz/ylts.php");
echo "<font color=black>价格：".$ylxx."两</font>"."<br>";
echo "<font color=black>需要等级：$wpdj</font>"."<br>"; 
echo "<font color=black>重量：$wpzl</font>"."<br>";
include("./ini/zt_ini.php");
# 获取一个分类下多个子项的值
$bbrlb=($iniFile->getItem('玩家信息','背包容量'));
include("./wp/bbrl.php");
echo "<font color=black>物品负重：".$bbrla."/".$bbrlb."</font></a>"."<br>";
echo"<font color=black>银两：</font></a>";
include("wp/warehouse.php");
include("npcc/mdx01.php");

include("./ini/wp_ini.php");
$npcc=($iniFile->getItem('序列','初始'));

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=246;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回列表</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>





