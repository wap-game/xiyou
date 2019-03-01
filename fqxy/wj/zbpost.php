<?php


include("./ini/user_ini.php");

# 获取一个分类下某个子项的值
$ymid=($iniFile->getItem('最后页面id','页面id'));

if ($ymid==615) {
$zbynid=615;	
}else{
if ($ymzb>=621&&$ymzb<=670) {	
$zbynid=615;	
}else{	
$zbynid=81;
}
}	

echo "<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=$zbynid;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回装备</font></a>"."<br>";


echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";





?>


