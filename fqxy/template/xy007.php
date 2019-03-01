<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
	


if ($wjid==10000001) {//gm号可看

echo "<font color=red>==========调试信息=========</font>"."<br>";
echo "NPC编号：".$npcc."号<br>";
echo "<font color=red>==========调试信息=========</font>"."<br>";

} else{


	
} 





include("npc/npc.php");//npc页面


//写入npcid

include("./ini/npc_ini.php");

$gwid=($iniFile->getItem('怪物编号','1号'));
if($gwid!=$npcc){
$iniFile->updItem('怪物编号', ['1号' => $npcc]);
} else{	
}



echo "<br>";
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