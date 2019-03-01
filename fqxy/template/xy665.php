<?php






//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


if ($npcc==1) {
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の激素〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=945;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
include("./ini/zz_ini.php");
# 获取一个分类下某个子项的值
$zzdj=($iniFile->getItem('种植等级','1'));
# 获取一个分类下某个子项的值
$zzwpid=($iniFile->getItem('种植物品','1'));
# 获取一个分类下某个子项的值
$zztime=($iniFile->getItem('种植时间','1'));
# 获取一个分类下某个子项的值
$sftime=($iniFile->getItem('施肥时间','1'));
# 获取一个分类下某个子项的值
$shtime=($iniFile->getItem('收获时间','1'));
# 获取一个分类下某个子项的值
$zzwpmz=($iniFile->getItem('种植名字','1'));
# 获取一个分类下某个子项的值
$zzwpsl=($iniFile->getItem('种植数量','1'));
$time1=60;//加速时间（分）
include("./ini/zz_ini.php");
include("./sql/mysql.php");//调用数据库连接 
$q2="zz".$wjid;
$tiemxx=date("Y-m-d H:i:s",strtotime("$shtime   -$time1   minute"));   //日期天数相加函数
$strsql = "update $q2 set shtime='$tiemxx' where id=1";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('收获时间', ['1' => $tiemxx]);
echo "<font color=black>恭喜您！！使用了〖小公主の激素〗！伤不起~~~伤不起!!（收获时间提升".$time1."分钟）</font>"."<br>";
} else{
echo "<font color=black>对不起！！需要〖小公主の激素〗x1</font>"."<br>";
}


} elseif($npcc==2){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の激素〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=945;//物品id
$wpdz4[]=6;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
include("./ini/zz_ini.php");
# 获取一个分类下某个子项的值
$zzdj=($iniFile->getItem('种植等级','1'));
# 获取一个分类下某个子项的值
$zzwpid=($iniFile->getItem('种植物品','1'));
# 获取一个分类下某个子项的值
$zztime=($iniFile->getItem('种植时间','1'));
# 获取一个分类下某个子项的值
$sftime=($iniFile->getItem('施肥时间','1'));
# 获取一个分类下某个子项的值
$shtime=($iniFile->getItem('收获时间','1'));
# 获取一个分类下某个子项的值
$zzwpmz=($iniFile->getItem('种植名字','1'));
# 获取一个分类下某个子项的值
$zzwpsl=($iniFile->getItem('种植数量','1'));
$time1=360;//加速时间（分）
include("./ini/zz_ini.php");
include("./sql/mysql.php");//调用数据库连接 
$q2="zz".$wjid;
$tiemxx=date("Y-m-d H:i:s",strtotime("$shtime   -$time1   minute"));   //日期天数相加函数
$strsql = "update $q2 set shtime='$tiemxx' where id=1";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('收获时间', ['1' => $tiemxx]);
echo "<font color=black>恭喜您！！使用了〖小公主の激素〗！伤不起~~~伤不起!!（收获时间提升".$time1."分钟）</font>"."<br>";
} else{
echo "<font color=black>对不起！！需要〖小公主の激素〗x1</font>"."<br>";
}


} elseif($npcc==3){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の激素〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=945;//物品id
$wpdz4[]=12;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
include("./ini/zz_ini.php");
# 获取一个分类下某个子项的值
$zzdj=($iniFile->getItem('种植等级','1'));
# 获取一个分类下某个子项的值
$zzwpid=($iniFile->getItem('种植物品','1'));
# 获取一个分类下某个子项的值
$zztime=($iniFile->getItem('种植时间','1'));
# 获取一个分类下某个子项的值
$sftime=($iniFile->getItem('施肥时间','1'));
# 获取一个分类下某个子项的值
$shtime=($iniFile->getItem('收获时间','1'));
# 获取一个分类下某个子项的值
$zzwpmz=($iniFile->getItem('种植名字','1'));
# 获取一个分类下某个子项的值
$zzwpsl=($iniFile->getItem('种植数量','1'));
$time1=720;//加速时间（分）
include("./ini/zz_ini.php");
include("./sql/mysql.php");//调用数据库连接 
$q2="zz".$wjid;
$tiemxx=date("Y-m-d H:i:s",strtotime("$shtime   -$time1   minute"));   //日期天数相加函数
$strsql = "update $q2 set shtime='$tiemxx' where id=1";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('收获时间', ['1' => $tiemxx]);
echo "<font color=black>恭喜您！！使用了〖小公主の激素〗！伤不起~~~伤不起!!（收获时间提升".$time1."分钟）</font>"."<br>";
} else{
echo "<font color=black>对不起！！需要〖小公主の激素〗x1</font>"."<br>";
}

} elseif($npcc==4){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の激素〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=945;//物品id
$wpdz4[]=24;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
include("./ini/zz_ini.php");
# 获取一个分类下某个子项的值
$zzdj=($iniFile->getItem('种植等级','1'));
# 获取一个分类下某个子项的值
$zzwpid=($iniFile->getItem('种植物品','1'));
# 获取一个分类下某个子项的值
$zztime=($iniFile->getItem('种植时间','1'));
# 获取一个分类下某个子项的值
$sftime=($iniFile->getItem('施肥时间','1'));
# 获取一个分类下某个子项的值
$shtime=($iniFile->getItem('收获时间','1'));
# 获取一个分类下某个子项的值
$zzwpmz=($iniFile->getItem('种植名字','1'));
# 获取一个分类下某个子项的值
$zzwpsl=($iniFile->getItem('种植数量','1'));
$time1=1440;//加速时间（分）
include("./ini/zz_ini.php");
include("./sql/mysql.php");//调用数据库连接 
$q2="zz".$wjid;
$tiemxx=date("Y-m-d H:i:s",strtotime("$shtime   -$time1   minute"));   //日期天数相加函数
$strsql = "update $q2 set shtime='$tiemxx' where id=1";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('收获时间', ['1' => $tiemxx]);
echo "<font color=black>恭喜您！！使用了〖小公主の激素〗！伤不起~~~伤不起!!（收获时间提升".$time1."分钟）</font>"."<br>";
} else{
echo "<font color=black>对不起！！需要〖小公主の激素〗x1</font>"."<br>";
}


} else{
echo "<font color=black>为添加</font>"."<br>";
}













//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=658;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";










//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=658;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回农场</font></a>"."<br>";




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