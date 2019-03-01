<?php




//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
echo "<font color=red>小轩温馨提示：男性玩家无法拜入月宫，女性玩家无法拜入普陀山（性别一旦选择无法更换）</font><br>";

echo "<br>";

echo "<font color=black>请你先选择个性别吧</font><br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=298;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>男性</font></a>";
echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=298;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>女性</font></a>"."<br>";
echo "<br>";

echo "----------------------"."<br>";
//cmd及超链接值
include("fhgame.php");












} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini




?>





