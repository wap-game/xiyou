<?php






//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){




$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【黑沃土】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=942;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【仙玉露】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=943;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量


//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {

$time1=30;//施肥时间（分）

include("./ini/zz_ini.php");
include("./sql/mysql.php");//调用数据库连接 
$q2="zz".$wjid;

$sftime1=($iniFile->getItem('施肥时间','1'));
$tiemxx=date("Y-m-d H:i:s",strtotime("$sftime1   $time1   minute"));


$strsql = "update $q2 set sftime='$tiemxx' where id=1";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('施肥时间', ['1' => $tiemxx]);



echo "<font color=black>恭喜您！！施肥成功！！（请于".$tiemxx."前来施肥否则会枯萎）</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=658;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

} else{
echo "<font color=black>对不起！！施肥需要".$wpdz1[0]."x".$wpdz4[0].",".$wpdz1[1]."x".$wpdz4[1]."</font>"."<br>";
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