<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){




include("./ini/pksw_ini.php");
$hdtime=($iniFile->getItem('死亡时间','初始'));
$vipqytime=600;//系统消息存活秒数30分钟
if ($hdtime!="") {
$startdate=$hdtime;
$enddate=date('Y-m-d H:i:s');
$minute=floor((strtotime($enddate)-strtotime($startdate)));
if($minute <= $vipqytime){
$minute1=$vipqytime-$minute;
$minute=floor($minute1/60);
$second=$minute1%60;

if($minute > 0){		
echo "<font color=black>剩余：".$minute."分".$second."秒</font>"."<br>";
} else{
echo "<font color=black>剩余：".$second."秒</font>"."<br>";
} 	
$vipqy=2;	
} else{
$vipqy=1;	
}
} else{
$vipqy=1;	
}
if($vipqy == 1){
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

echo "<font color=red>恭喜你！！孟婆的汤已为你熬制好了~~~</font>"."<br>";



} else{
}







if($hdtime==123||$vipqy==1){

echo "<font color=red>你喝下了孟婆汤~~</font><br>";



} else{	

echo "<font color=red>孟婆:找什么急啊？！老娘的汤甜吗？到后面排队去一个个来~~~</font><br>";


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