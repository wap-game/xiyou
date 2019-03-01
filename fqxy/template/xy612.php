<?php









include("./ini/zt_ini.php");
$sxe=($iniFile->getItem('玩家信息','性别'));
$mp=($iniFile->getItem('玩家信息','门派'));
if($npcc ==2){
if($sxe!=2){
if($mp!=5){	
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
include("./sql/mysql.php");//调用数据库连接 
$q2="all_zt";
$strsql = "update $q2 set sex=2 where wjid=$wjijd";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zt_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['性别' => 2]);
echo "<font color=red>恭喜你！！顺利的成为了女性！！</font>"."<br>";

} else{
echo "<font color=red>做变性手续需要〖金豆〗x10哦</font>"."<br>";
}
} else{
echo "<font color=red>普陀山弟子不能转为女性</font>"."<br>";
}
} else{
echo "<font color=red>你本来就是女性！！别以为我看不出来哦</font>"."<br>";
}

} elseif($npcc ==1){

if($sxe!=1){
if($mp!=3){	
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
include("./sql/mysql.php");//调用数据库连接 
$q2="all_zt";
$strsql = "update $q2 set sex=1 where wjid=$wjijd";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zt_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['性别' => 1]);
echo "<font color=red>恭喜你！！顺利的成为了男性！！</font>"."<br>";
} else{
echo "<font color=red>做变性手续需要〖金豆〗x10哦</font>"."<br>";
}
} else{
echo "<font color=red>月宫弟子不能转为男性</font>"."<br>";
}
} else{
echo "<font color=red>你本来就是男性！！别以为我看不出来哦</font>"."<br>";
}
} else{
}






//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";




?>