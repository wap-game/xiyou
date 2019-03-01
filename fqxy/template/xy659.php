<?php






//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){




include("./ini/zz_ini.php");

# 获取一个分类下某个子项的值
$zzwpid=($iniFile->getItem('种植物品','1'));

if($zzwpid>=1){//
echo "<font color=red>对不起！！您已经有种植产物了，请收获后再来种植哦~~~</font>"."<br>";

} else{	


if($npcc==1){//〖金豆〗

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
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {

$time1=60;//施肥时间（分）
$time2=$time1*16;//收获时间（分）


include("./ini/zz_ini.php");
include("./sql/mysql.php");//调用数据库连接 
$q2="zz".$wjid;
$nowtime=date('Y-m-d H:i:s');
$tiemxx=date('Y-m-d H:i:s',strtotime('+'.$time1.' minute'));
$tiemxx1=date('Y-m-d H:i:s',strtotime('+'.$time2.' minute'));



$strsql = "update $q2 set zzwpmz=='$wpdz1[0]',zzwpid='$wpdz3[0]',zzwpsl='$wpdz4[0]',zztime='$nowtime',sftime='$tiemxx',shtime='$tiemxx1' where id=1";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('种植名字', ['1' => $wpdz1[0]]);
$iniFile->updItem('种植物品', ['1' => $wpdz3[0]]);
$iniFile->updItem('种植数量', ['1' => $wpdz4[0]]);
$iniFile->updItem('种植时间', ['1' => $nowtime]);
$iniFile->updItem('施肥时间', ['1' => $tiemxx]);
$iniFile->updItem('收获时间', ['1' => $tiemxx1]);
echo "<font color=black>恭喜您！！种植了".$wpdz1[0]."x".$wpdz4[0]."（请于".$tiemxx."前来施肥否则会枯萎）</font>"."<br>";
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==2){  //〖云梯石〗 
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
$time1=60;//施肥时间（分）
$time2=$time1*16;//收获时间（分）
include("./ini/zz_ini.php");
include("./sql/mysql.php");//调用数据库连接 
$q2="zz".$wjid;
$nowtime=date('Y-m-d H:i:s');
$tiemxx=date('Y-m-d H:i:s',strtotime('+'.$time1.' minute'));
$tiemxx1=date('Y-m-d H:i:s',strtotime('+'.$time2.' minute'));
$strsql = "update $q2 set zzwpmz=='$wpdz1[0]',zzwpid='$wpdz3[0]',zzwpsl='$wpdz4[0]',zztime='$nowtime',sftime='$tiemxx',shtime='$tiemxx1' where id=1";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('种植名字', ['1' => $wpdz1[0]]);
$iniFile->updItem('种植物品', ['1' => $wpdz3[0]]);
$iniFile->updItem('种植数量', ['1' => $wpdz4[0]]);
$iniFile->updItem('种植时间', ['1' => $nowtime]);
$iniFile->updItem('施肥时间', ['1' => $tiemxx]);
$iniFile->updItem('收获时间', ['1' => $tiemxx1]);
echo "<font color=black>恭喜您！！种植了".$wpdz1[0]."x".$wpdz4[0]."（请于".$tiemxx."前来施肥否则会枯萎）</font>"."<br>";
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==3){  //〖八倍掉宝符〗 
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖八倍掉宝符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=456;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
$time1=60;//施肥时间（分）
$time2=$time1*24;//收获时间（分）
include("./ini/zz_ini.php");
include("./sql/mysql.php");//调用数据库连接 
$q2="zz".$wjid;
$nowtime=date('Y-m-d H:i:s');
$tiemxx=date('Y-m-d H:i:s',strtotime('+'.$time1.' minute'));
$tiemxx1=date('Y-m-d H:i:s',strtotime('+'.$time2.' minute'));
$strsql = "update $q2 set zzwpmz=='$wpdz1[0]',zzwpid='$wpdz3[0]',zzwpsl='$wpdz4[0]',zztime='$nowtime',sftime='$tiemxx',shtime='$tiemxx1' where id=1";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('种植名字', ['1' => $wpdz1[0]]);
$iniFile->updItem('种植物品', ['1' => $wpdz3[0]]);
$iniFile->updItem('种植数量', ['1' => $wpdz4[0]]);
$iniFile->updItem('种植时间', ['1' => $nowtime]);
$iniFile->updItem('施肥时间', ['1' => $tiemxx]);
$iniFile->updItem('收获时间', ['1' => $tiemxx1]);
echo "<font color=black>恭喜您！！种植了".$wpdz1[0]."x".$wpdz4[0]."（请于".$tiemxx."前来施肥否则会枯萎）</font>"."<br>";
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==4){  //〖护身符〗 
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
$time1=60;//施肥时间（分）
$time2=$time1*42;//收获时间（分）
include("./ini/zz_ini.php");
include("./sql/mysql.php");//调用数据库连接 
$q2="zz".$wjid;
$nowtime=date('Y-m-d H:i:s');
$tiemxx=date('Y-m-d H:i:s',strtotime('+'.$time1.' minute'));
$tiemxx1=date('Y-m-d H:i:s',strtotime('+'.$time2.' minute'));
$strsql = "update $q2 set zzwpmz=='$wpdz1[0]',zzwpid='$wpdz3[0]',zzwpsl='$wpdz4[0]',zztime='$nowtime',sftime='$tiemxx',shtime='$tiemxx1' where id=1";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('种植名字', ['1' => $wpdz1[0]]);
$iniFile->updItem('种植物品', ['1' => $wpdz3[0]]);
$iniFile->updItem('种植数量', ['1' => $wpdz4[0]]);
$iniFile->updItem('种植时间', ['1' => $nowtime]);
$iniFile->updItem('施肥时间', ['1' => $tiemxx]);
$iniFile->updItem('收获时间', ['1' => $tiemxx1]);
echo "<font color=black>恭喜您！！种植了".$wpdz1[0]."x".$wpdz4[0]."（请于".$tiemxx."前来施肥否则会枯萎）</font>"."<br>";
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==5){  //〖尊享VIP〗（月卡）
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖尊享VIP〗（月卡）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=858;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
$time1=60;//施肥时间（分）
$time2=$time1*96;//收获时间（分）
include("./ini/zz_ini.php");
include("./sql/mysql.php");//调用数据库连接 
$q2="zz".$wjid;
$nowtime=date('Y-m-d H:i:s');
$tiemxx=date('Y-m-d H:i:s',strtotime('+'.$time1.' minute'));
$tiemxx1=date('Y-m-d H:i:s',strtotime('+'.$time2.' minute'));
$strsql = "update $q2 set zzwpmz=='$wpdz1[0]',zzwpid='$wpdz3[0]',zzwpsl='$wpdz4[0]',zztime='$nowtime',sftime='$tiemxx',shtime='$tiemxx1' where id=1";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('种植名字', ['1' => $wpdz1[0]]);
$iniFile->updItem('种植物品', ['1' => $wpdz3[0]]);
$iniFile->updItem('种植数量', ['1' => $wpdz4[0]]);
$iniFile->updItem('种植时间', ['1' => $nowtime]);
$iniFile->updItem('施肥时间', ['1' => $tiemxx]);
$iniFile->updItem('收获时间', ['1' => $tiemxx1]);
echo "<font color=black>恭喜您！！种植了".$wpdz1[0]."x".$wpdz4[0]."（请于".$tiemxx."前来施肥否则会枯萎）</font>"."<br>";
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==6){  //〖至尊宝石包〗（1个）
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖至尊宝石包〗（1个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=856;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
$time1=60;//施肥时间（分）
$time2=$time1*24;//收获时间（分）
include("./ini/zz_ini.php");
include("./sql/mysql.php");//调用数据库连接 
$q2="zz".$wjid;
$nowtime=date('Y-m-d H:i:s');
$tiemxx=date('Y-m-d H:i:s',strtotime('+'.$time1.' minute'));
$tiemxx1=date('Y-m-d H:i:s',strtotime('+'.$time2.' minute'));
$strsql = "update $q2 set zzwpmz=='$wpdz1[0]',zzwpid='$wpdz3[0]',zzwpsl='$wpdz4[0]',zztime='$nowtime',sftime='$tiemxx',shtime='$tiemxx1' where id=1";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('种植名字', ['1' => $wpdz1[0]]);
$iniFile->updItem('种植物品', ['1' => $wpdz3[0]]);
$iniFile->updItem('种植数量', ['1' => $wpdz4[0]]);
$iniFile->updItem('种植时间', ['1' => $nowtime]);
$iniFile->updItem('施肥时间', ['1' => $tiemxx]);
$iniFile->updItem('收获时间', ['1' => $tiemxx1]);
echo "<font color=black>恭喜您！！种植了".$wpdz1[0]."x".$wpdz4[0]."（请于".$tiemxx."前来施肥否则会枯萎）</font>"."<br>";
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==7){  //〖帝王石〗
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖帝王石〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=939;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
$time1=60;//施肥时间（分）
$time2=$time1*24;//收获时间（分）
include("./ini/zz_ini.php");
include("./sql/mysql.php");//调用数据库连接 
$q2="zz".$wjid;
$nowtime=date('Y-m-d H:i:s');
$tiemxx=date('Y-m-d H:i:s',strtotime('+'.$time1.' minute'));
$tiemxx1=date('Y-m-d H:i:s',strtotime('+'.$time2.' minute'));
$strsql = "update $q2 set zzwpmz=='$wpdz1[0]',zzwpid='$wpdz3[0]',zzwpsl='$wpdz4[0]',zztime='$nowtime',sftime='$tiemxx',shtime='$tiemxx1' where id=1";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('种植名字', ['1' => $wpdz1[0]]);
$iniFile->updItem('种植物品', ['1' => $wpdz3[0]]);
$iniFile->updItem('种植数量', ['1' => $wpdz4[0]]);
$iniFile->updItem('种植时间', ['1' => $nowtime]);
$iniFile->updItem('施肥时间', ['1' => $tiemxx]);
$iniFile->updItem('收获时间', ['1' => $tiemxx1]);
echo "<font color=black>恭喜您！！种植了".$wpdz1[0]."x".$wpdz4[0]."（请于".$tiemxx."前来施肥否则会枯萎）</font>"."<br>";
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}






} else{	
}

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