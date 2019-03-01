<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

$arr = explode("_",$npcc);
$str1=$arr[0];
$str2=$arr[1];
$str3=$arr[2];
$npcc=$str3;
$str4=$str1."_".$str2;

include("./npc/npcxx.php");//取得npc名字






$ckmb=43;
include("./ini/zt_ini.php");
$name=($iniFile->getItem('玩家信息','玩家名字'));

	
include("./ini/zxrw_ini.php");
$rw1=($iniFile->getItem('任务id',$str4));
$rw2=($iniFile->getItem('任务变量',$str4));
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw5=($iniFile->getItem('任务分类',$str4));
$rw6=($iniFile->getItem('任务名字',$str4));

$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
if($rw5==1){
include("./rw/zxrw.php");//主线
} elseif($rw5==2){
include("./rw/zxxrw.php");//支线
} elseif($rw5==5){
include("./rw/rcrw.php");//日常
} elseif($rw5==4){
include("./rw/hdrw.php");//活动
} else{	
echo "<font color=black>没有这个任务分类编号".$rw5."请尝试联系gm解决此问题！！</font><br>";
}


if($str3==5196||$str3==5197||$str3==500){

} else{	
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=$str3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回".$nname."</font></a>"."<br>";
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


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>