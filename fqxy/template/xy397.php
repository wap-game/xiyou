<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){



include("./ini/user_ini.php");
$dtx=($iniFile->getItem('地图坐标','x'));
$dty=($iniFile->getItem('地图坐标','y'));
$iniFile->updItem('地图坐标', ['x' => 1]);
$iniFile->updItem('地图坐标', ['y' => 0]);
//清除掉附近玩家信息
//路径
$path='acher/map';
$inina="gczc".$dtx."x".$dty.".ini";
$ininame = $path."/".$inina;
$filename = $ininame;
if(!file_exists($filename)){
$counter_file=$ininame;//文件名及路径,在当前目录下新建aa.txt文件 
$fopen=fopen($counter_file,   'wb ');//新建文件命令 
fputs($fopen,   '[地图信息]');//向文件中写入内容; 
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
fclose($fopen); 
} else {
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
}
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
//清除掉附近玩家信息















//执行谁获胜





echo "<font color=black>国战已结束，请迅速离开战场</font><br>";

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<font color=black></font>"."<br>";

echo "<br>";

//cmd及超链接值
include("fhgame.php");

} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>