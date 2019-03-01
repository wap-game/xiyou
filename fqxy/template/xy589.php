<?php



   
include("./ini/xp_ini.php");
# 获取一个分类下所有数据
$xpkq=($iniFile->getCategory('星盘开启'));
$xpid=($iniFile->getCategory('星盘id'));
foreach(array_keys($xpkq) as $key){
$keyxpkq[]=$xpkq[$key];
}
foreach(array_keys($xpid) as $key){
$keyxpid[]=$xpid[$key];
}


$xpidd=0;


	
echo "<font color=red>我的星盘如下</font>"."<br>";
$xpjh=1;
$m=27;
for($d=0;$d<$m;$d++){
include("./wj/xpms.php");
}



echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=11;
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



?>