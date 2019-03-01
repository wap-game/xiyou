<?php


//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");



/////////公共锁
$path='acher/lock';//路径
$lockmz='allhbmoney_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁


if($zsspd==1&&$all_lock2==1){



if($npcc>=1&&$npcc<=5){//买



if($npcc==1){
$csbyq=1;	
} elseif($npcc==2){
$csbyq=10;	
} elseif($npcc==3){
$csbyq=100;	
} elseif($npcc==4){
$csbyq=500;	
} elseif($npcc==5){
$csbyq=1000;	
} else{	
$csbyq=0;
}	
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖碎银块〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=659;//物品id
$wpdz4[]=$csbyq;//	量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");


if ($pd==2) {

include("./ini/hbmoney_ini.php");
$csb=($iniFile->getItem('财神币','初始'));
$csbb=$csb+$csbyq;
$iniFile->updItem('财神币', ['初始' => $csbb]);
include("./sql/mysql.php");//调用数据库连接 
$q2="all_hbmoney";
$strsql = "update $q2 set money=$csbb where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);	


echo "<font color=black>恭喜你！！获得〖红包〗x".$csbyq."</font>"."<br>";

} else{
echo "<font color=black>对不起！！所需要〖碎银块〗不足！！</font>"."<br>";

}



} elseif($npcc>=6&&$npcc<=10){ //卖



if($npcc==6){
$csbyq=1;	
} elseif($npcc==7){
$csbyq=10;	
} elseif($npcc==8){
$csbyq=100;	
} elseif($npcc==9){
$csbyq=500;	
} elseif($npcc==10){
$csbyq=1000;	
} else{	
$csbyq=0;
}	

include("./ini/hbmoney_ini.php");
$csb=($iniFile->getItem('财神币','初始'));
if($csb>=$csbyq){
	
	
if($csbyq>=1){	
include("./ini/hbmoney_ini.php");
$csbb=$csb-$csbyq;
$iniFile->updItem('财神币', ['初始' => $csbb]);
include("./sql/mysql.php");//调用数据库连接 
$q2="all_hbmoney";
$strsql = "update $q2 set money=$csbb where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);	
echo "<font color=black>失去〖红包〗x".$csbyq."</font>"."<br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖碎银块〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=659;//物品id
$wpdz4[]=$csbyq;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");

} else{	
echo "<font color=black>对不起~~你的红包非法</font>"."<br>";
}	


} else{	
echo "<font color=black>对不起~~你的红包不足</font>"."<br>";
}	






} else{	
echo "<font color=black>没有这个选项</font>"."<br>";
}





echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=570;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<font color=black></font>"."<br>";



} else{	
}



//解锁当前使用的ini
include("./ini/jszsini.php");
//解锁当前使用的ini


//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini







?>