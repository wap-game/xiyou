<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){



if($npcc==1){   //〖金锭〗


//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖金锭〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=663;//物品id
$wpdz4[]=9;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=black>恭喜你！！【如来佛祖】帮助实现了你的愿望，获得".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."【如来佛祖】帮助他实现了他的愿望，获得".$wpdz1[0]."x".$wpdz4[0];
include("./msg/msgg02.php");
} else{
echo "<font color=black>很遗憾！！你的愿望落空了【如来佛祖】都在嫌弃你</font>"."<br>";
}

} elseif ($npcc==2) {
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=999;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=black>恭喜你！！【如来佛祖】帮助实现了你的愿望，获得".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."【如来佛祖】帮助他实现了他的愿望，获得".$wpdz1[0]."x".$wpdz4[0];
include("./msg/msgg02.php");
} else{
echo "<font color=black>很遗憾！！你的愿望落空了【如来佛祖】都在嫌弃你</font>"."<br>";
}

} elseif ($npcc==3) {
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖八倍掉宝符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=456;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=black>恭喜你！！【如来佛祖】帮助实现了你的愿望，获得".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."【如来佛祖】帮助他实现了他的愿望，获得".$wpdz1[0]."x".$wpdz4[0];
include("./msg/msgg02.php");
} else{
echo "<font color=black>很遗憾！！你的愿望落空了【如来佛祖】都在嫌弃你</font>"."<br>";
}


} elseif ($npcc==4) {
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="【金秋的思念】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=744;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=black>恭喜你！！【如来佛祖】帮助实现了你的愿望，获得".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."【如来佛祖】帮助他实现了他的愿望，获得".$wpdz1[0]."x".$wpdz4[0];
include("./msg/msgg02.php");
} else{
echo "<font color=black>很遗憾！！你的愿望落空了【如来佛祖】都在嫌弃你</font>"."<br>";
}

} elseif ($npcc==5) {
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖帝王石〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=939;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=black>恭喜你！！【如来佛祖】帮助实现了你的愿望，获得".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."【如来佛祖】帮助他实现了他的愿望，获得".$wpdz1[0]."x".$wpdz4[0];
include("./msg/msgg02.php");
} else{
echo "<font color=black>很遗憾！！你的愿望落空了【如来佛祖】都在嫌弃你</font>"."<br>";
}









} else{
}












include("./ini/user_ini.php");
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);









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