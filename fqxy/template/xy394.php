<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

echo "<font color=black>玩家PK信息：</font><br>";
echo "<font color=black>------------------------------</font><br>";
echo "<font color=black>".$pk8."向你发起了攻击"."</font><br>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=389;
$npc[]=$pk5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>开始反击</font></a>"."<font color=black></font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=393;
$npc[]=$pk5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>脱离战斗</font></a>"."<font color=black></font>"."<br>";
echo "<font color=black>提示：脱离了战斗对方仍然可以攻击你</font><br>";

echo "<font color=black>------------------------------</font><br>";

echo "<br>";

//cmd及超链接值
include("fhgame.php");

} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>