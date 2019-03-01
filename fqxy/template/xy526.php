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
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=100000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {

echo "<font color=red>我有钱！我任性你来到了长安城~~</font>"."<br>";

include("./ini/user_ini.php");
$iniFile->updItem('地图坐标', ['x' => '1']);
$iniFile->updItem('地图坐标', ['y' => '0']);
//清除附近位置
include("./ini/user_ini.php");
$dtx=($iniFile->getItem('地图坐标','x'));
$dty=($iniFile->getItem('地图坐标','y'));
//路径
$ydtx=$dtx;
$ydty=$dty;
include("./wj/mapid.php");
$path='acher/map';
$ininame = $path."/".$inina;
$iniFile = new iniFile($ininame);
# 删除一个子项
$iniFile->delItem('玩家时间值'.$dtx.'x'.$dty, $wjid);
# 删除一个子项
$iniFile->delItem('玩家vip值'.$dtx.'x'.$dty, $wjid);
# 删除一个子项
$iniFile->delItem('玩家id值'.$dtx.'x'.$dty, $wjid);
# 删除一个子项
$iniFile->delItem('玩家名字值'.$dtx.'x'.$dty, $wjid);
# 删除一个子项
$iniFile->delItem('国家名字值'.$dtx.'x'.$dty, $wjid);
# 删除一个子项
$iniFile->delItem('国家职务名字值'.$dtx.'x'.$dty, $wjid);
//清除附近位置
} else{
echo "<font color=black>对不起！！需要1亿银两才可以诱惑到孟婆~~</font>"."<br>";

}




echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<font color=black></font>"."<br>";





} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>