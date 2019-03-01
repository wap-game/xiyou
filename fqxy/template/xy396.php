<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){







$inina="pkbl.ini";
//更新缓存数据
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
include("./ini/pkbl_ini.php");





echo "<font color=black>玩家复活信息：</font><br>";
echo "<font color=black>------------------------------</font><br>";
echo "<font color=red>恭喜你！！复活成功了</font><br>"."<br>";

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<font color=black></font>"."<br>";
echo "<font color=black>------------------------------</font><br>";
echo "<font color=black>提示：已是复活状态，并且恢复满血</font><br>";
echo "<br>";

//cmd及超链接值
include("fhgame.php");

} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>