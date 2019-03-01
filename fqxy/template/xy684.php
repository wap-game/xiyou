<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
	
include("./ini/jcyx_ini.php");
$jcgm=($iniFile->getItem('竞猜购买','初始'));

if($jcgm<=10){
if($jcgm==1){
$zxb=10;
} elseif($jcgm==2){   
$zxb=20;
} elseif($jcgm==3){   
$zxb=30;
} elseif($jcgm==4){   
$zxb=40;
} elseif($jcgm==5){   
$zxb=50;
} elseif($jcgm==6){   
$zxb=60;
} elseif($jcgm==7){   
$zxb=70;
} elseif($jcgm==8){   
$zxb=80;
} elseif($jcgm==9){   
$zxb=90;
} elseif($jcgm==10){   
$zxb=100;
} else {
$zxb=9999999999;	
} 



$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据

$wpdz1[]="〖紫星币〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=944;//物品id
$wpdz4[]=$zxb;//	需要扣除的量
$wpdz5[]=1;//	重量

//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
include("./ini/jcyx_ini.php");
$jccs=($iniFile->getItem('竞猜次数','初始'));
$jccs=$jccs+10;
$iniFile->updItem('竞猜次数', ['初始' => $jccs]);	

include("./ini/jcyx_ini.php");
$jcgm=$jcgm+1;
$iniFile->updItem('竞猜购买', ['初始' => $jcgm]);
echo "<font color=red>恭喜你！！获得了10次竞猜次数</font>"."<br>";

} else {
echo "<font color=red>对不起！！〖紫星币〗不足".$zxb."个</font>"."<br>";
} 

} else{	

echo "<font color=red>对不起！！〖紫星币〗购买竞猜达到10次上限，请明日再来</font>"."<br>";

}
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=682;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回竞猜</font></a>"."<br>";



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini



?>
