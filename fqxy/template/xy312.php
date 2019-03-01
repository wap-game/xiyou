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
$wpdz1[]="【英雄牌】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=394;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖万能钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=401;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要【英雄牌】x10</font>"."<br>";

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
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="【英雄牌】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=394;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要〖金豆〗x1</font>"."<br>";

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
$wpdz1[]="【才子印记】（碎片）";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=501;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="【才子印记】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=500;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要【才子印记】（碎片）x20</font>"."<br>";

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
$wpdz1[]="【才子印记】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=500;//物品id
$wpdz4[]=5;//	需要扣除的量
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
//物品加
$wpdz1[]="【比翼图纸】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=506;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要【才子印记】x5</font>"."<br>";

}







} elseif($npcc==5){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【才子印记】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=500;//物品id
$wpdz4[]=5;//	需要扣除的量
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
//物品加
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要【才子印记】x5</font>"."<br>";

}






} elseif($npcc==6){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【才子印记】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=500;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖铁宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=276;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要【才子印记】x10</font>"."<br>";

}




} elseif($npcc==7){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【才子印记】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=500;//物品id
$wpdz4[]=30;//	需要扣除的量
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
//物品加
$wpdz1[]="〖银宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=278;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要【才子印记】x30</font>"."<br>";

}



} elseif($npcc==8){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【才子印记】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=500;//物品id
$wpdz4[]=30;//	需要扣除的量
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
//物品加
$wpdz1[]="〖万能钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=401;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要【才子印记】x30</font>"."<br>";

}







} elseif($npcc==9){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【才子印记】（碎片）";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=501;//物品id
$wpdz4[]=200;//	需要扣除的量
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
//物品加
$wpdz1[]="【才子印记】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=500;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要【才子印记】（碎片）x200</font>"."<br>";

}






} elseif($npcc==10){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【才子印记】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=500;//物品id
$wpdz4[]=30;//	需要扣除的量
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
//物品加
$wpdz1[]="〖大智慧果〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=399;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要【才子印记】x30</font>"."<br>";

}



} elseif($npcc==11){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【才子印记】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=500;//物品id
$wpdz4[]=50;//	需要扣除的量
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
//物品加
$wpdz1[]="【比翼图纸】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=506;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要【才子印记】x50</font>"."<br>";

}



} elseif($npcc==12){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【才子印记】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=500;//物品id
$wpdz4[]=500;//	需要扣除的量
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
//物品加
$wpdz1[]="【比翼图纸】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=506;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要【才子印记】x500</font>"."<br>";

}



} elseif($npcc==13){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖银符碎片〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=513;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据

//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=200000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据

include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {



//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=90){


$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖银星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=316;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");


echo "<font color=black>恭喜你！祝融".$wpdz1[0]."成功了！！</font><br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."祝融".$wpdz1[0]."成功了！！";
include("./msg/msgg02.php");


} else{
echo "<font color=black>很遗憾！祝融".$wpdz1[0]."失败了！！</font>"."<br>";

}







} else{
echo "<font color=black>对不起！祝融〖银星升星符〗需要〖银符碎片〗x5〖金豆〗x5</font>"."<br>";

}











} elseif($npcc==14){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金符碎片〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=510;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据

//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=1000000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据

include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {



//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=60){


$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖金星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=317;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");


echo "<font color=black>恭喜你！祝融".$wpdz1[0]."成功了！！</font><br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."祝融".$wpdz1[0]."成功了！！";
include("./msg/msgg02.php");


} else{
echo "<font color=black>很遗憾！祝融".$wpdz1[0]."失败了！！</font>"."<br>";

}







} else{
echo "<font color=black>对不起！祝融〖金星升星符〗需要〖金符碎片〗x10〖金豆〗x20</font>"."<br>";

}






} elseif($npcc==15){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖钻符碎片〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=511;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据

//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=2500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据

include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {



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
$wpdz1[]="〖钻星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=318;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");


echo "<font color=black>恭喜你！祝融".$wpdz1[0]."成功了！！</font><br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."祝融".$wpdz1[0]."成功了！！";
include("./msg/msgg02.php");


} else{
echo "<font color=black>很遗憾！祝融".$wpdz1[0]."失败了！！</font>"."<br>";

}







} else{
echo "<font color=black>对不起！祝融〖钻星升星符〗需要〖钻符碎片〗x20〖金豆〗x50</font>"."<br>";

}



} elseif($npcc==16){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖陨符碎片〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=512;//物品id
$wpdz4[]=40;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据

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



//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){


$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖陨星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=319;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");


echo "<font color=black>恭喜你！祝融".$wpdz1[0]."成功了！！</font><br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."祝融".$wpdz1[0]."成功了！！";
include("./msg/msgg02.php");


} else{
echo "<font color=black>很遗憾！祝融".$wpdz1[0]."失败了！！</font>"."<br>";

}







} else{
echo "<font color=black>对不起！祝融〖陨星升星符〗需要〖陨符碎片〗x40〖金豆〗x100</font>"."<br>";

}




} elseif($npcc==17){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=563;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="【清】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=558;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>兑换失败需要〖万能字〗x1</font>"."<br>";

}


} elseif($npcc==18){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=563;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【清】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=558;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>兑换失败需要〖万能字〗x10</font>"."<br>";

}


} elseif($npcc==19){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=563;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="【凉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=559;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>兑换失败需要〖万能字〗x1</font>"."<br>";

}

} elseif($npcc==20){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=563;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【凉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=559;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>兑换失败需要〖万能字〗x10</font>"."<br>";

}





} elseif($npcc==21){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=563;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="【一】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=560;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>兑换失败需要〖万能字〗x1</font>"."<br>";

}

} elseif($npcc==22){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=563;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【一】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=560;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>兑换失败需要〖万能字〗x10</font>"."<br>";

}




} elseif($npcc==23){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=563;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="【夏】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=561;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>兑换失败需要〖万能字〗x1</font>"."<br>";

}

} elseif($npcc==24){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=563;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【夏】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=561;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>兑换失败需要〖万能字〗x10</font>"."<br>";

}






} elseif($npcc==25){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【清】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=558;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
$wpdz1[]="【凉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=559;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
$wpdz1[]="【一】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=560;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
$wpdz1[]="【夏】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=561;//物品id
$wpdz4[]=10;//	量
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
//物品加
$wpdz1[]="【清凉宝箱】";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=562;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>兑换失败需要【清】【凉】【一】【夏】每个字需要大于10个</font>"."<br>";

}

} elseif($npcc==26){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【清】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=558;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
$wpdz1[]="【凉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=559;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
$wpdz1[]="【一】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=560;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
$wpdz1[]="【夏】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=561;//物品id
$wpdz4[]=100;//	量
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
//物品加
$wpdz1[]="【清凉宝箱】";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=562;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>兑换失败需要【清】【凉】【一】【夏】每个字需要大于100个</font>"."<br>";

}





} elseif($npcc==27){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖大圣精魄〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=571;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖齐天大圣〗（宠物蛋）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=570;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>下蛋失败需要〖大圣精魄〗x10</font>"."<br>";

}



} elseif($npcc==28){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始



$wpdz1[]="〖百年魔珠〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=331;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖百年魔珠〗（小袋）";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=572;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>打包失败需要〖百年魔珠〗x1000，〖钻魂〗x50</font>"."<br>";

}



} elseif($npcc==29){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据



$wpdz1[]="〖百年魔珠〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=331;//物品id
$wpdz4[]=5000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖百年魔珠〗（中袋）";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=573;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>打包失败需要〖百年魔珠〗x5000，〖钻魂〗x200</font>"."<br>";

}




} elseif($npcc==30){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据



$wpdz1[]="〖百年魔珠〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=331;//物品id
$wpdz4[]=10000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖百年魔珠〗（大袋）";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=574;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>打包失败需要〖百年魔珠〗x10000，〖钻魂〗x350</font>"."<br>";

}


} elseif($npcc==31){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【恶魔符文】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=575;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="【1万西游声望卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=564;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");

} else{
echo "<font color=black>兑换失败需要【恶魔符文】x1000</font>"."<br>";
}

} elseif($npcc==32){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【恶魔符文】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=575;//物品id
$wpdz4[]=200;//	需要扣除的量
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
//物品加
$wpdz1[]="【1万法宝经验卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=565;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");

} else{
echo "<font color=black>兑换失败需要【恶魔符文】x200</font>"."<br>";
}



} elseif($npcc==33){   
include("./ini/zt_ini.php");
$vip=($iniFile->getItem('玩家信息','vip等级'));
if($vip>=3){ 

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【恶魔符文】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=575;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖1万西游声望卷轴〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=427;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");

} else{
echo "<font color=black>兑换失败需要【恶魔符文】x1000</font>"."<br>";
}


} else{
echo "<font color=black>对不起！！仅仅只为vip3以上玩家提供兑换</font>"."<br>";
}







} elseif($npcc==34){   
include("./ini/zt_ini.php");
$vip=($iniFile->getItem('玩家信息','vip等级'));
if($vip>=3){ 
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【恶魔符文】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=575;//物品id
$wpdz4[]=200;//	需要扣除的量
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
//物品加
$wpdz1[]="〖1万法宝经验卷轴〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=423;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");

} else{
echo "<font color=black>兑换失败需要【恶魔符文】x200</font>"."<br>";
}



} else{
echo "<font color=black>对不起！！仅仅只为vip3以上玩家提供兑换</font>"."<br>";
}







} elseif($npcc==35){   //银山

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
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {

include("./box/ys.php");


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖金豆〗不足</font>"."<br>";
}




} elseif($npcc==36){   //金山

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

include("./box/js.php");


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖金豆〗不足</font>"."<br>";
}





} elseif($npcc==37){   //〖探险符〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=2;//	需要扣除的量
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
//物品加
$wpdz1[]="〖1万西游声望卷轴〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=427;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖探险符〗不足</font>"."<br>";
}



} elseif($npcc==38){   //〖探险符〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=2;//	需要扣除的量
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
//物品加
$wpdz1[]="〖银星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=316;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖探险符〗不足</font>"."<br>";
}





} elseif($npcc==39){   //〖探险符〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="〖金星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=317;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖探险符〗不足</font>"."<br>";
}





} elseif($npcc==40){   //〖钻星升星符〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖钻星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=318;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖探险符〗不足</font>"."<br>";
}




} elseif($npcc==41){   //〖齐天大圣〗（宠物蛋）

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=2;//	需要扣除的量
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
//物品加
$wpdz1[]="〖齐天大圣〗（宠物蛋）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=570;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖探险符〗不足</font>"."<br>";
}




} elseif($npcc==42){   //〖荣誉宝石包〗（2个）

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="〖荣誉宝石包〗（2个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=494;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖探险符〗不足</font>"."<br>";
}





} elseif($npcc==43){   //〖圣灵锻造图纸〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=2;//	需要扣除的量
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
//物品加
$wpdz1[]="〖圣灵锻造图纸〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=577;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖探险符〗不足</font>"."<br>";
}



} elseif($npcc==44){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【喜鹊蛋】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=591;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据

include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {



//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=20){


$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="【小喜鹊】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=592;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");






} else{	

echo "<font color=black>很遗憾！孵化".$wpdz1[0]."失败了！！</font>"."<br>";

}

} else{
echo "<font color=black>对不起！【喜鹊蛋】不足</font>"."<br>";

}




} elseif($npcc==45){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【喜鹊蛋】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=591;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据

include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {



//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=30){


$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="【小喜鹊】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=592;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");





} else{	

echo "<font color=black>很遗憾！孵化".$wpdz1[0]."失败了！！</font>"."<br>";

}

} else{
echo "<font color=black>对不起！【喜鹊蛋】不足</font>"."<br>";

}







} elseif($npcc==46){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【喜鹊蛋】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=591;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据

include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {



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
$wpdz1[]="【小喜鹊】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=592;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");





} else{	

echo "<font color=black>很遗憾！孵化".$wpdz1[0]."失败了！！</font>"."<br>";

}

} else{
echo "<font color=black>对不起！【喜鹊蛋】不足</font>"."<br>";

}





} elseif($npcc==47){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【喜鹊蛋】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=591;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据

include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {



//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=50){


$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="【小喜鹊】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=592;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");






} else{	

echo "<font color=black>很遗憾！孵化".$wpdz1[0]."失败了！！</font>"."<br>";

}

} else{
echo "<font color=black>对不起！【喜鹊蛋】不足</font>"."<br>";

}





} elseif($npcc==48){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【喜鹊蛋】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=591;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据

include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {



//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=60){


$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="【小喜鹊】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=592;//物品id
$wpdz4[]=200;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");


echo "<font color=black>恭喜你！孵化出了".$wpdz1[0]."x".$wpdz4[0]."只！！见证了牛郎与织女的爱情故事</font><br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."孵化出了".$wpdz1[0]."x".$wpdz4[0]."只！！见证了牛郎与织女的爱情故事！！";
include("./msg/msgg02.php");


} else{	

echo "<font color=black>很遗憾！孵化".$wpdz1[0]."失败了！！</font>"."<br>";

}

} else{
echo "<font color=black>对不起！【喜鹊蛋】不足</font>"."<br>";

}







} elseif($npcc==49){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【喜鹊蛋】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=591;//物品id
$wpdz4[]=3000;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据

include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {



//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=70){


$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="【小喜鹊】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=592;//物品id
$wpdz4[]=500;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");


echo "<font color=black>恭喜你！孵化出了".$wpdz1[0]."x".$wpdz4[0]."只！！见证了牛郎与织女的爱情故事</font><br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."孵化出了".$wpdz1[0]."x".$wpdz4[0]."只！！见证了牛郎与织女的爱情故事！！";
include("./msg/msgg02.php");


} else{	

echo "<font color=black>很遗憾！孵化".$wpdz1[0]."失败了！！</font>"."<br>";

}

} else{
echo "<font color=black>对不起！【喜鹊蛋】不足</font>"."<br>";

}





} elseif($npcc==50){   //〖攻之龙丹〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小喜鹊】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=592;//物品id
$wpdz4[]=5;//	需要扣除的量
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
//物品加
$wpdz1[]="〖攻之龙丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=546;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起！！你的【小喜鹊】不足</font>"."<br>";
}




} elseif($npcc==51){   //〖魔之龙丹〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小喜鹊】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=592;//物品id
$wpdz4[]=5;//	需要扣除的量
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
//物品加
$wpdz1[]="〖魔之龙丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=547;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起！！你的【小喜鹊】不足</font>"."<br>";
}




} elseif($npcc==52){   //〖防之龙丹〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小喜鹊】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=592;//物品id
$wpdz4[]=5;//	需要扣除的量
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
//物品加
$wpdz1[]="〖防之龙丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=548;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起！！你的【小喜鹊】不足</font>"."<br>";
}



} elseif($npcc==53){   //〖血之龙丹〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小喜鹊】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=592;//物品id
$wpdz4[]=5;//	需要扣除的量
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
//物品加
$wpdz1[]="〖血之龙丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=549;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起！！你的【小喜鹊】不足</font>"."<br>";
}



} elseif($npcc==54){   //〖荣誉宝石包〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小喜鹊】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=592;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖荣誉宝石包〗（2个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=494;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起！！你的【小喜鹊】不足</font>"."<br>";
}



} elseif($npcc==55){   //〖齐天大圣〗（宠物蛋）

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小喜鹊】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=592;//物品id
$wpdz4[]=50;//	需要扣除的量
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
//物品加
$wpdz1[]="〖齐天大圣〗（宠物蛋）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=570;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起！！你的【小喜鹊】不足</font>"."<br>";
}





} elseif($npcc==56){   //〖至尊天圣〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小喜鹊】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=592;//物品id
$wpdz4[]=666;//	需要扣除的量
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
//物品加
$wpdz1[]="〖至尊天圣〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=553;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起！！你的【小喜鹊】不足</font>"."<br>";
}



} elseif($npcc==57){   //〖圣灵锻造图纸〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小喜鹊】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=592;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖圣灵锻造图纸〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=577;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起！！你的【小喜鹊】不足</font>"."<br>";
}




} elseif($npcc==58){   //〖诛仙令〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=600;//	需要扣除的量
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
//物品加
$wpdz1[]="〖诛仙令〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=593;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起！！你的〖探险符〗不足</font>"."<br>";
}


} elseif($npcc==59){   //〖双倍掉宝符〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=75;//	需要扣除的量
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
//物品加
$wpdz1[]="〖双倍掉宝符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=454;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起！！你的〖探险符〗不足</font>"."<br>";
}





} elseif($npcc==60){   //〖四倍掉宝符〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=150;//	需要扣除的量
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
//物品加
$wpdz1[]="〖四倍掉宝符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=455;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起！！你的〖探险符〗不足</font>"."<br>";
}





} elseif($npcc==61){   //〖八倍掉宝符〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=300;//	需要扣除的量
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
//物品加
$wpdz1[]="〖八倍掉宝符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=456;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起！！你的〖探险符〗不足</font>"."<br>";
}






} elseif($npcc==62){   //【喜鹊令】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小喜鹊】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=592;//物品id
$wpdz4[]=666;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=200;//	需要扣除的量
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
//物品加
$wpdz1[]="【喜鹊令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=600;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起！！你的【小喜鹊】或者〖金豆〗不足</font>"."<br>";
}





} elseif($npcc==63){   //〖万能钥匙〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【英雄牌】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=394;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖万能钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=401;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要【英雄牌】x100</font>"."<br>";

}




} elseif($npcc==64){   

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

$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="【英雄牌】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=394;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要〖金豆〗x10</font>"."<br>";

}




} elseif($npcc==65){   

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
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="〖宝盒钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=608;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要〖金豆〗x1</font>"."<br>";

}





} elseif($npcc==66){   

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

$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖宝盒钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=608;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要〖金豆〗x10</font>"."<br>";

}






} elseif($npcc==67){   

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
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖宝盒钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=608;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要5000万银两</font>"."<br>";

}





} elseif($npcc==68){   

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
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖宝盒钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=608;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要5亿银两</font>"."<br>";

}







} elseif($npcc==69){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金甲圣衣〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=609;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="〖七彩祥云〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=610;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紧箍咒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=612;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="〖月光宝盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=607;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要〖金甲圣衣〗x20，〖七彩祥云〗x20，〖紫霞眼泪〗x20，〖紧箍咒〗x20</font>"."<br>";

}






} elseif($npcc==70){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金甲圣衣〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=609;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="〖七彩祥云〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=610;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紧箍咒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=612;//物品id
$wpdz4[]=200;//	需要扣除的量
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
//物品加
$wpdz1[]="〖月光宝盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=607;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要〖金甲圣衣〗x200，〖七彩祥云〗x200，〖紫霞眼泪〗x200，〖紧箍咒〗x200</font>"."<br>";

}








} elseif($npcc==71){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金甲圣衣〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=609;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="〖七彩祥云〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=610;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紧箍咒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=612;//物品id
$wpdz4[]=5;//	需要扣除的量
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
//物品加
$wpdz1[]="〖灵匣宝盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=605;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要〖金甲圣衣〗x5，〖七彩祥云〗x5，〖紫霞眼泪〗x5，〖紧箍咒〗x5</font>"."<br>";

}



} elseif($npcc==72){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金甲圣衣〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=609;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="〖七彩祥云〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=610;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紧箍咒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=612;//物品id
$wpdz4[]=50;//	需要扣除的量
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
//物品加
$wpdz1[]="〖灵匣宝盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=605;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要〖金甲圣衣〗x50，〖七彩祥云〗x50，〖紫霞眼泪〗x5，〖紧箍咒〗x50</font>"."<br>";

}









} elseif($npcc==73){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金甲圣衣〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=609;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="〖七彩祥云〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=610;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紧箍咒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=612;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖神匣宝盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=606;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要〖金甲圣衣〗x10，〖七彩祥云〗x10，〖紫霞眼泪〗x10，〖紧箍咒〗x10</font>"."<br>";

}




} elseif($npcc==74){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金甲圣衣〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=609;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="〖七彩祥云〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=610;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紧箍咒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=612;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖神匣宝盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=606;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要〖金甲圣衣〗x100，〖七彩祥云〗x100，〖紫霞眼泪〗x100，〖紧箍咒〗x100</font>"."<br>";

}








} elseif($npcc==75){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金甲圣衣〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=609;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="〖七彩祥云〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=610;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紧箍咒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=612;//物品id
$wpdz4[]=5;//	需要扣除的量
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
//物品加
$wpdz1[]="〖小智慧果〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=398;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要〖金甲圣衣〗x5，〖七彩祥云〗x5，〖紫霞眼泪〗x5，〖紧箍咒〗x5</font>"."<br>";

}





} elseif($npcc==76){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金甲圣衣〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=609;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="〖七彩祥云〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=610;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紧箍咒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=612;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖大智慧果〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=399;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要〖金甲圣衣〗x10，〖七彩祥云〗x10，〖紫霞眼泪〗x10，〖紧箍咒〗x10</font>"."<br>";

}








} elseif($npcc==77){   

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
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖至尊宝密令〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=613;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要5000万银两</font>"."<br>";

}







} elseif($npcc==78){   

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
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖至尊宝密令〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=613;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要5亿银两</font>"."<br>";

}






} elseif($npcc==79){   

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
$wpdz4[]=5000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要500万银两</font>"."<br>";

}



} elseif($npcc==80){   

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
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要5000万银两</font>"."<br>";

}



} elseif($npcc==81){   

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
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>兑换失败需要5亿银两</font>"."<br>";

}












} elseif($npcc==82){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖练星符〗（白）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=617;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=10000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=1000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=80){
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖练星符〗（绿）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=618;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！练星-".$wpdz1[0]."成功了！！</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=82;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";

} else{
echo "<font color=red>很遗憾！练星-".$wpdz1[0]."失败了！！</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=82;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";
}
} else{
echo "<font color=black>对不起！练星需要".$wpdz1[0]."x".$wpdz4[0]."西游声望".$wpdz4[1]."银两".$wpdz4[2]."</font><br>";
}







} elseif($npcc==83){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖练星符〗（绿）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=618;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=50000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=10000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=70){
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖练星符〗（蓝）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=619;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！练星-".$wpdz1[0]."成功了！！</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=83;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";

} else{
echo "<font color=red>很遗憾！练星-".$wpdz1[0]."失败了！！</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=83;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";
}
} else{
echo "<font color=black>对不起！练星需要".$wpdz1[0]."x".$wpdz4[0]."西游声望".$wpdz4[1]."银两".$wpdz4[2]."</font><br>";
}






} elseif($npcc==84){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖练星符〗（蓝）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=619;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=100000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=100000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=60){
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖练星符〗（紫）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=620;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！练星-".$wpdz1[0]."成功了！！</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=84;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";

} else{
echo "<font color=red>很遗憾！练星-".$wpdz1[0]."失败了！！</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=84;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";
}
} else{
echo "<font color=black>对不起！练星需要".$wpdz1[0]."x".$wpdz4[0]."西游声望".$wpdz4[1]."银两".$wpdz4[2]."</font><br>";
}




} elseif($npcc==85){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖练星符〗（紫）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=620;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=150000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=50){
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖练星符〗（完美の紫）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=621;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！练星-".$wpdz1[0]."成功了！！</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=85;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";
} else{
echo "<font color=red>很遗憾！练星-".$wpdz1[0]."失败了！！</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=85;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";
}
} else{
echo "<font color=black>对不起！练星需要".$wpdz1[0]."x".$wpdz4[0]."西游声望".$wpdz4[1]."银两".$wpdz4[2]."</font><br>";
}



} elseif($npcc==86){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖练星符〗（完美の紫）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=621;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=200000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=1000000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
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
$wpdz1[]="〖练星符〗（橙）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=622;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！练星-".$wpdz1[0]."成功了！！</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=86;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";

} else{
echo "<font color=red>很遗憾！练星-".$wpdz1[0]."失败了！！</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=86;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";
}
} else{
echo "<font color=black>对不起！练星需要".$wpdz1[0]."x".$wpdz4[0]."西游声望".$wpdz4[1]."银两".$wpdz4[2]."</font><br>";
}





} elseif($npcc==87){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖练星符〗（橙）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=622;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=300000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=2000000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖练星符〗（完美の橙）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=623;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！练星-".$wpdz1[0]."成功了！！</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=87;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";

} else{
echo "<font color=red>很遗憾！练星-".$wpdz1[0]."失败了！！</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=87;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";
}
} else{
echo "<font color=black>对不起！练星需要".$wpdz1[0]."x".$wpdz4[0]."西游声望".$wpdz4[1]."银两".$wpdz4[2]."</font><br>";
}








} elseif($npcc==88){   
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
$wpdz4[]=1000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖练星符〗（白）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=617;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起！需要银两100万</font><br>";
}






} elseif($npcc==89){   
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
$wpdz4[]=10000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖练星符〗（白）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=617;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起！需要银两1000万</font><br>";
}






} elseif($npcc==90){   
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


$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖练星符〗（白）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=617;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起！需要银两1亿</font><br>";
}






} elseif($npcc==91){   
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
$wpdz4[]=1000000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖练星符〗（白）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=617;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起！需要银两10亿</font><br>";
}









} elseif($npcc==92){   
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
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖许愿符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=624;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
echo "<font color=red>恭喜你！许愿成功！大罗金仙来相助~~~</font><br>";
$manzu1="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖大号财宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=487;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>很遗憾！许愿失败了~~~</font><br>";
}
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=92;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再许愿一次</font></a>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！每次许愿需要银两5000万</font><br>";
}







} elseif($npcc==93){   
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
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖许愿符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=624;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

//随机
$bz= rand(1, 90);
if($bz >=1&&$bz <=100){
echo "<font color=red>恭喜你！许愿成功！大罗金仙来相助~~~</font><br>";
$manzu1="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始



$bz= rand(1, 100);
if($bz >=1&&$bz <=40){

//经验加
$jy=3000000;	
include("./pz/ini_pzz023.php");
//银两加
} elseif($bz >=41&&$bz <=70){
//经验加
$jy=8888888;	
include("./pz/ini_pzz023.php");
//银两加
} elseif($bz >=71&&$bz <=90){
//经验加
$jy=15000000;	
include("./pz/ini_pzz023.php");
//银两加

} elseif($bz >=91&&$bz <=100){
//经验加
$jy=30000000;	
include("./pz/ini_pzz023.php");
//银两加




} else{
}


} else{
echo "<font color=red>很遗憾！许愿失败了~~~</font><br>";
}
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=93;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再许愿一次</font></a>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！每次许愿需要银两5000万</font><br>";
}











} elseif($npcc==94){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖练星符〗（白）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=617;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=100000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=10000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=90){
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖练星符〗（绿）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=618;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！练星-".$wpdz1[0]."成功了！！</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=94;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";

} else{
echo "<font color=red>很遗憾！练星-".$wpdz1[0]."失败了！！</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=94;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";
}
} else{
echo "<font color=black>对不起！练星需要".$wpdz1[0]."x".$wpdz4[0]."西游声望".$wpdz4[1]."银两".$wpdz4[2]."</font><br>";
}







} elseif($npcc==95){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖练星符〗（绿）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=618;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=500000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=100000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=80){
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖练星符〗（蓝）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=619;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！练星-".$wpdz1[0]."成功了！！</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=95;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";

} else{
echo "<font color=red>很遗憾！练星-".$wpdz1[0]."失败了！！</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=95;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";
}
} else{
echo "<font color=black>对不起！练星需要".$wpdz1[0]."x".$wpdz4[0]."西游声望".$wpdz4[1]."银两".$wpdz4[2]."</font><br>";
}






} elseif($npcc==96){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖练星符〗（蓝）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=619;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=1000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=1000000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=70){
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖练星符〗（紫）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=620;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！练星-".$wpdz1[0]."成功了！！</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=96;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";

} else{
echo "<font color=red>很遗憾！练星-".$wpdz1[0]."失败了！！</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=96;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";
}
} else{
echo "<font color=black>对不起！练星需要".$wpdz1[0]."x".$wpdz4[0]."西游声望".$wpdz4[1]."银两".$wpdz4[2]."</font><br>";
}




} elseif($npcc==97){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖练星符〗（紫）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=620;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=1500000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=60){
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖练星符〗（完美の紫）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=621;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！练星-".$wpdz1[0]."成功了！！</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=97;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";
} else{
echo "<font color=red>很遗憾！练星-".$wpdz1[0]."失败了！！</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=97;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";
}
} else{
echo "<font color=black>对不起！练星需要".$wpdz1[0]."x".$wpdz4[0]."西游声望".$wpdz4[1]."银两".$wpdz4[2]."</font><br>";
}



} elseif($npcc==98){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖练星符〗（完美の紫）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=621;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=2000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=10000000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=50){
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖练星符〗（橙）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=622;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！练星-".$wpdz1[0]."成功了！！</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=98;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";

} else{
echo "<font color=red>很遗憾！练星-".$wpdz1[0]."失败了！！</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=98;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";
}
} else{
echo "<font color=black>对不起！练星需要".$wpdz1[0]."x".$wpdz4[0]."西游声望".$wpdz4[1]."银两".$wpdz4[2]."</font><br>";
}





} elseif($npcc==99){   
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖练星符〗（橙）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=622;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=3000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=20000000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
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
$wpdz1[]="〖练星符〗（完美の橙）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=623;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！练星-".$wpdz1[0]."成功了！！</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=99;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";

} else{
echo "<font color=red>很遗憾！练星-".$wpdz1[0]."失败了！！</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=99;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一次</font></a>"."<br>";
echo "<br>";
}
} else{
echo "<font color=black>对不起！练星需要".$wpdz1[0]."x".$wpdz4[0]."西游声望".$wpdz4[1]."银两".$wpdz4[2]."</font><br>";
}










} elseif($npcc==100){   //〖探险符〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="〖1万西游声望卷轴〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=427;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖探险符〗不足</font>"."<br>";
}



} elseif($npcc==101){   //〖探险符〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=200;//	需要扣除的量
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
//物品加
$wpdz1[]="〖1万西游声望卷轴〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=427;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖探险符〗不足</font>"."<br>";
}






} elseif($npcc==102){   //〖许愿符〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖许愿符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=624;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖1万西游声望卷轴〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=427;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的〖许愿符〗不足</font>"."<br>";
}




} elseif($npcc==103){   //〖许愿符〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖许愿符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=624;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖1万西游声望卷轴〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=427;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");



} else{
echo "<font color=black>对不起你的〖许愿符〗不足</font>"."<br>";
}





} elseif($npcc==104){   //〖许愿符〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖许愿符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=624;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖1万西游声望卷轴〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=427;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的〖许愿符〗不足</font>"."<br>";
}






} elseif($npcc==105){   //〖情圣〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【鹊翎】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=656;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖情圣〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=639;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的【鹊翎】不足</font>"."<br>";
}



} elseif($npcc==106){   //〖万人迷〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【鹊翎】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=656;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖万人迷〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=640;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的【鹊翎】不足</font>"."<br>";
}




} elseif($npcc==107){   //〖天作之合〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【鹊翎】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=656;//物品id
$wpdz4[]=15;//	需要扣除的量
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
//物品加
$wpdz1[]="〖天作之合〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=641;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的【鹊翎】不足</font>"."<br>";
}



} elseif($npcc==108){   //〖爱你一万年〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【鹊翎】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=656;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="〖爱你一万年〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=642;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的【鹊翎】不足</font>"."<br>";
}



} elseif($npcc==109){   //〖真爱无敌〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【鹊翎】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=656;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="〖真爱无敌〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=643;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的【鹊翎】不足</font>"."<br>";
}



} elseif($npcc==110){   //〖绝世情圣〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【鹊翎】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=656;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="〖绝世情圣〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=644;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的【鹊翎】不足</font>"."<br>";
}



} elseif($npcc==111){   //〖天下最倾城〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【鹊翎】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=656;//物品id
$wpdz4[]=25;//	需要扣除的量
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
//物品加
$wpdz1[]="〖天下最倾城〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=645;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的【鹊翎】不足</font>"."<br>";
}




} elseif($npcc==112){   //〖天下最风流〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【鹊翎】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=656;//物品id
$wpdz4[]=25;//	需要扣除的量
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
//物品加
$wpdz1[]="〖天下最风流〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=646;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的【鹊翎】不足</font>"."<br>";
}





} elseif($npcc==113){   //【甜】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖七夕万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=657;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="【甜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=630;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的〖七夕万能字〗不足</font>"."<br>";
}



} elseif($npcc==114){   //【蜜】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖七夕万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=657;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="【蜜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=631;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的〖七夕万能字〗不足</font>"."<br>";
}







} elseif($npcc==115){   //【七】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖七夕万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=657;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="【七】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=632;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的〖七夕万能字〗不足</font>"."<br>";
}






} elseif($npcc==116){   //【夕】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖七夕万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=657;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="【夕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=633;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的〖七夕万能字〗不足</font>"."<br>";
}





} elseif($npcc==117){   //〖七夕宝箱〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【甜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=630;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【蜜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=631;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【七】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=632;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【夕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=633;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖七夕宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=629;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的【甜】【蜜】【七】【夕】四字不足</font>"."<br>";
}




} elseif($npcc==118){   //【夕】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【甜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=630;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【蜜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=631;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【七】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=632;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【夕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=633;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖超级七夕宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=658;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的【甜】【蜜】【七】【夕】四字不足</font>"."<br>";
}















} elseif($npcc==119){   //【甜】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖七夕万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=657;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【甜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=630;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的〖七夕万能字〗不足</font>"."<br>";
}



} elseif($npcc==120){   //【蜜】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖七夕万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=657;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【蜜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=631;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的〖七夕万能字〗不足</font>"."<br>";
}







} elseif($npcc==121){   //【七】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖七夕万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=657;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【七】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=632;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的〖七夕万能字〗不足</font>"."<br>";
}






} elseif($npcc==122){   //【夕】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖七夕万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=657;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【夕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=633;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的〖七夕万能字〗不足</font>"."<br>";
}





} elseif($npcc==123){   //〖七夕宝箱〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【甜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=630;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【蜜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=631;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【七】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=632;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【夕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=633;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖七夕宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=629;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的【甜】【蜜】【七】【夕】四字不足</font>"."<br>";
}




} elseif($npcc==124){   //【夕】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【甜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=630;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【蜜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=631;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【七】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=632;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【夕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=633;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖超级七夕宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=658;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的【甜】【蜜】【七】【夕】四字不足</font>"."<br>";
}



} elseif($npcc==125){   //【夕】


$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【甜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=630;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【蜜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=631;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【七】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=632;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【夕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=633;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

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
//物品加
$wpdz1[]="【比翼图纸】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=506;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>对不起你的【甜】【蜜】【七】【夕】四字不足</font>"."<br>";

}




} elseif($npcc==126){   //【夕】


$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【甜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=630;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【蜜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=631;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【七】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=632;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【夕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=633;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

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
//物品加
$wpdz1[]="【比翼图纸】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=506;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>对不起你的【甜】【蜜】【七】【夕】四字不足</font>"."<br>";

}





} elseif($npcc==127){   //【夕】


$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【甜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=630;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【蜜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=631;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【七】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=632;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【夕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=633;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量

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
//物品加
$wpdz1[]="【比翼图纸】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=506;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} else{
echo "<font color=black>对不起你的【甜】【蜜】【七】【夕】四字不足</font>"."<br>";

}





} elseif($npcc==128){   //【夕】


$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【甜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=630;//物品id
$wpdz4[]=3000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【蜜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=631;//物品id
$wpdz4[]=3000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【七】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=632;//物品id
$wpdz4[]=3000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【夕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=633;//物品id
$wpdz4[]=3000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量
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

//物品加
$wpdz1[]="【喜鹊令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=600;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");





} else{
echo "<font color=black>对不起你的【甜】【蜜】【七】【夕】四字，或者金豆不足</font>"."<br>";

}




} elseif($npcc==129){   //【夕】


$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【甜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=630;//物品id
$wpdz4[]=3000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【蜜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=631;//物品id
$wpdz4[]=3000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【七】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=632;//物品id
$wpdz4[]=3000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【夕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=633;//物品id
$wpdz4[]=3000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量
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

//物品加
$wpdz1[]="〖七夕令〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=638;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");





} else{
echo "<font color=black>对不起你的【甜】【蜜】【七】【夕】四字，或者金豆不足</font>"."<br>";

}




} elseif($npcc==130){   //【夕】


$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸳鸯帕〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=634;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖姻缘草〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=635;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖银心铃〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=636;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量



$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量
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

//物品加
$wpdz1[]="〖鹊桥仙子〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=647;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");





} else{
echo "<font color=black>对不起你的〖鸳鸯帕〗〖姻缘草〗〖银心铃〗，或者金豆不足</font>"."<br>";

}






} elseif($npcc==131){   //【夕】


$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸳鸯帕〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=634;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖姻缘草〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=635;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖银心铃〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=636;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量



$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量
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

//物品加
$wpdz1[]="〖谦谦公子〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=648;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");





} else{
echo "<font color=black>对不起你的〖鸳鸯帕〗〖姻缘草〗〖银心铃〗，或者金豆不足</font>"."<br>";

}



} elseif($npcc==132){   //【夕】


$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸳鸯帕〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=634;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖姻缘草〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=635;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖银心铃〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=636;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量



$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量
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

//物品加
$wpdz1[]="〖娇美宠儿〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=649;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");





} else{
echo "<font color=black>对不起你的〖鸳鸯帕〗〖姻缘草〗〖银心铃〗，或者金豆不足</font>"."<br>";

}





} elseif($npcc==133){   //【夕】


$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸳鸯帕〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=634;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖姻缘草〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=635;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖银心铃〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=636;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量



$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量
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

//物品加
$wpdz1[]="〖柔情郎君〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=650;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");





} else{
echo "<font color=black>对不起你的〖鸳鸯帕〗〖姻缘草〗〖银心铃〗，或者金豆不足</font>"."<br>";

}



} elseif($npcc==134){   //〖练星符〗（绿）

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=3;//	需要扣除的量
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
//物品加
$wpdz1[]="〖练星符〗（绿）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=618;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖探险符〗不足</font>"."<br>";
}


} elseif($npcc==135){   //〖练星符〗（绿）

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=30;//	需要扣除的量
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
//物品加
$wpdz1[]="〖练星符〗（绿）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=618;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖探险符〗不足</font>"."<br>";
}


} elseif($npcc==136){   //〖练星符〗（绿）

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=300;//	需要扣除的量
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
//物品加
$wpdz1[]="〖练星符〗（绿）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=618;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖探险符〗不足</font>"."<br>";
}








} elseif($npcc==137){   //〖碎银〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始

$yl1=100000000;
//扣除手续费用
$bfb=floor($yl1*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl1=$yl1+$ylsxf;



//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=$yl1;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖碎银〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=659;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=137;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再买一个</font></a>"."<br>";

} else{
//数字转汉字
$yl=$yl1;
include("./pz/ylts.php");
echo "<font color=red>对不起！！你的银两不足".$ylxx."两</font>";	
echo "<br>";	

}








} elseif($npcc==138){   //〖银块〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始

$yl1=500000000;
//扣除手续费用
$bfb=floor($yl1*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl1=$yl1+$ylsxf;
//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=$yl1;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖银块〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=660;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=138;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再买一个</font></a>"."<br>";

} else{
//数字转汉字
$yl=$yl1;
include("./pz/ylts.php");
echo "<font color=red>对不起！！你的银两不足".$ylxx."两</font>";	
echo "<br>";	
}




} elseif($npcc==139){   //〖银锭〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
$yl1=1000000000;
//扣除手续费用
$bfb=floor($yl1*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl1=$yl1+$ylsxf;

//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=$yl1;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖银锭〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=661;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=139;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再买一个</font></a>"."<br>";

} else{
//数字转汉字
$yl=$yl1;
include("./pz/ylts.php");
echo "<font color=red>对不起！！你的银两不足".$ylxx."两</font>";	
echo "<br>";	
}



} elseif($npcc==140){   //〖金块〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
$yl1=5000000000;
//扣除手续费用
$bfb=floor($yl1*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl1=$yl1+$ylsxf;
//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=$yl1;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖金块〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=662;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=140;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再买一个</font></a>"."<br>";

} else{
//数字转汉字
$yl=$yl1;
include("./pz/ylts.php");
echo "<font color=red>对不起！！你的银两不足".$ylxx."两</font>";	
echo "<br>";	
}


} elseif($npcc==141){   //〖金锭〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始

$yl1=10000000000;
//扣除手续费用
$bfb=floor($yl1*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl1=$yl1+$ylsxf;
//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=$yl1;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖金锭〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=663;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=141;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再买一个</font></a>"."<br>";

} else{
//数字转汉字
$yl=$yl1;
include("./pz/ylts.php");
echo "<font color=red>对不起！！你的银两不足".$ylxx."两</font>";	
echo "<br>";	
}










} elseif($npcc==142){   //〖碎银〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
//物品加
$wpdz1[]="〖碎银〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=659;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
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


$yl1=100000000;
//扣除手续费用
$bfb=floor($yl1*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl1=$yl1-$ylsxf;

$wwpsl=$yl1;
include("./pz/ini_pz03.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=142;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再卖一个</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖碎银〗不足</font>"."<br>";
}








} elseif($npcc==143){   //〖银块〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
//物品加
$wpdz1[]="〖银块〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=660;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
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

$yl1=500000000;
//扣除手续费用
$bfb=floor($yl1*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl1=$yl1-$ylsxf;

$wwpsl=$yl1;
include("./pz/ini_pz03.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=143;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再卖一个</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖银块〗不足</font>"."<br>";
}




} elseif($npcc==144){   //〖银锭〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
//物品加
$wpdz1[]="〖银锭〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=661;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
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

$yl1=1000000000;
//扣除手续费用
$bfb=floor($yl1*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl1=$yl1-$ylsxf;

$wwpsl=$yl1;
include("./pz/ini_pz03.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=144;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再卖一个</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖银锭〗不足</font>"."<br>";
}



} elseif($npcc==145){   //〖金块〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
//物品加
$wpdz1[]="〖金块〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=662;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
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

$yl1=5000000000;
//扣除手续费用
$bfb=floor($yl1*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl1=$yl1-$ylsxf;

$wwpsl=$yl1;
include("./pz/ini_pz03.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=145;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再卖一个</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖金块〗不足</font>"."<br>";
}


} elseif($npcc==146){   //〖金锭〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
//物品加
$wpdz1[]="〖金锭〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=663;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加

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

$yl1=10000000000;
//扣除手续费用
$bfb=floor($yl1*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl1=$yl1-$ylsxf;

$wwpsl=$yl1;
include("./pz/ini_pz03.php");

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=146;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再卖一个</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖金锭〗不足</font>"."<br>";
}








} elseif($npcc==147){   //



//加pk值
include("./ini/zt_ini.php");
$pkzzz=($iniFile->getItem('玩家信息','恶名值'));
if($pkzzz>=1){

$pkzzz=$pkzzz-1;
$iniFile->updItem('玩家信息', ['恶名值' => $pkzzz]);
echo "<font color=red>忏悔成功！恶名值-1（当前恶名:".$pkzzz."）</font>"."<br>";
//加pk值

 include("./ini/tltime_ini.php");
$nowtime=date('Y-m-d H:i:s');
$iniFile->updItem('天牢时间', ['初始' => $nowtime]);

} else{
echo "<font color=red>你是个好人（当前恶名:".$pkzzz."）</font>"."<br>";	
	
	
}





} elseif($npcc==148){   //〖免罪金牌〗

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
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖免罪金牌〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=665;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的〖金豆〗不足</font>"."<br>";
}




} elseif($npcc==149){   //【善果】

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
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="【善果】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=664;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的〖金豆〗不足</font>"."<br>";
}



} elseif($npcc==150){   //【善果】

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
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="【善果】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=664;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");


} else{
echo "<font color=black>对不起你的〖金豆〗不足</font>"."<br>";
}





} elseif($npcc==151){   //


//加pk值
include("./ini/zt_ini.php");
$pkzzz=($iniFile->getItem('玩家信息','恶名值'));
if($pkzzz>=1){
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【善果】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=664;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {

include("./ini/zt_ini.php");
$pkzzz=($iniFile->getItem('玩家信息','恶名值'));
$pkzzz=$pkzzz-1;
$iniFile->updItem('玩家信息', ['恶名值' => $pkzzz]);
echo "<font color=red>赎罪成功！恶名值-1（当前恶名:".$pkzzz."）</font>"."<br>";
//加pk值

} else{
echo "<font color=black>对不起你的【善果】不足</font>"."<br>";
}
} else{
echo "<font color=red>你是个好人（当前恶名:".$pkzzz."）</font>"."<br>";	
}



} elseif($npcc==152){   //


//加pk值
include("./ini/zt_ini.php");
$pkzzz=($iniFile->getItem('玩家信息','恶名值'));
if($pkzzz>=1){
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【善果】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=664;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {

include("./ini/zt_ini.php");
$pkzzz=($iniFile->getItem('玩家信息','恶名值'));
$pkzzz=$pkzzz-10;
if ($pkzzz<=0) {
$pkzzz=0;	
} else{
} 
$iniFile->updItem('玩家信息', ['恶名值' => $pkzzz]);
echo "<font color=red>赎罪成功！恶名值-10（当前恶名:".$pkzzz."）</font>"."<br>";
//加pk值

} else{
echo "<font color=black>对不起你的【善果】不足</font>"."<br>";
}
} else{
echo "<font color=red>你是个好人（当前恶名:".$pkzzz."）</font>"."<br>";	
}



} elseif($npcc==153){   //


//加pk值
include("./ini/zt_ini.php");
$pkzzz=($iniFile->getItem('玩家信息','恶名值'));
if($pkzzz>=1){
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖免罪金牌〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=665;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {



$pkzzz=0;	
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['恶名值' => $pkzzz]);
echo "<font color=red>赎罪成功！（当前恶名:".$pkzzz."）</font>"."<br>";
//加pk值

} else{
echo "<font color=black>对不起你的〖免罪金牌〗不足</font>"."<br>";
}
} else{
echo "<font color=red>你是个好人（当前恶名:".$pkzzz."）</font>"."<br>";	
}









} elseif($npcc==154){   //〖西游新秀〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【铅球】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=680;//物品id
$wpdz4[]=7;//	需要扣除的量
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
//物品加
$wpdz1[]="〖西游新秀〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=666;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

} else{
echo "<font color=black>对不起~~你的【铅球】不足</font>"."<br>";
}




} elseif($npcc==155){   //〖科举答题〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【奖状】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=681;//物品id
$wpdz4[]=25;//	需要扣除的量
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
//物品加
$wpdz1[]="〖科举答题〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=669;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

} else{
echo "<font color=black>对不起~~你的【奖状】不足</font>"."<br>";
}



} elseif($npcc==156){   //〖举人〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【奖状】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=681;//物品id
$wpdz4[]=25;//	需要扣除的量
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
//物品加
$wpdz1[]="〖举人〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=670;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

} else{
echo "<font color=black>对不起~~你的【奖状】不足</font>"."<br>";
}



} elseif($npcc==157){   //〖榜眼〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【奖状】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=681;//物品id
$wpdz4[]=25;//	需要扣除的量
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
//物品加
$wpdz1[]="〖榜眼〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=671;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

} else{
echo "<font color=black>对不起~~你的【奖状】不足</font>"."<br>";
}



} elseif($npcc==158){   //【1万西游声望卷轴】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【奖状】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=681;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【1万西游声望卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=564;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

} else{
echo "<font color=black>对不起~~你的【奖状】不足</font>"."<br>";
}




} elseif($npcc==159){   //【1万西游声望卷轴】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【奖状】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=681;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【1万西游声望卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=564;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

} else{
echo "<font color=black>对不起~~你的【奖状】不足</font>"."<br>";
}




} elseif($npcc==160){   //【1万法宝经验卷轴】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【奖状】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=681;//物品id
$wpdz4[]=2;//	需要扣除的量
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
//物品加
$wpdz1[]="【1万法宝经验卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=565;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

} else{
echo "<font color=black>对不起~~你的【奖状】不足</font>"."<br>";
}




} elseif($npcc==161){   //【1万法宝经验卷轴】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【奖状】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=681;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="【1万法宝经验卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=565;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

} else{
echo "<font color=black>对不起~~你的【奖状】不足</font>"."<br>";
}







} elseif($npcc==162){   //〖开学礼包〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【粉笔】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=684;//物品id
$wpdz4[]=30;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【橡皮擦】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=685;//物品id
$wpdz4[]=30;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【铅笔】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=686;//物品id
$wpdz4[]=30;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【墨水】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=687;//物品id
$wpdz4[]=30;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖女神同桌〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=688;//物品id
$wpdz4[]=30;//	需要扣除的量
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
//物品加
$wpdz1[]="〖开学礼包〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=682;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

} else{
echo "<font color=black>对不起~~你的【粉笔】【橡皮擦】【铅笔】【墨水】〖女神同桌〗不足</font>"."<br>";
}




} elseif($npcc==163){   //〖开学大礼包〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【粉笔】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=684;//物品id
$wpdz4[]=60;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【橡皮擦】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=685;//物品id
$wpdz4[]=60;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【铅笔】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=686;//物品id
$wpdz4[]=60;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【墨水】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=687;//物品id
$wpdz4[]=60;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖女神同桌〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=688;//物品id
$wpdz4[]=60;//	需要扣除的量
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
//物品加
$wpdz1[]="〖开学大礼包〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=683;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

} else{
echo "<font color=black>对不起~~你的【粉笔】【橡皮擦】【铅笔】【墨水】〖女神同桌〗不足</font>"."<br>";
}






} elseif($npcc==164){   //〖女神同桌〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="〖女神同桌〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=688;//物品id
$wpdz4[]=1;//	
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

} else{
echo "<font color=black>对不起~~你的〖金豆〗不足</font>"."<br>";
}

} elseif($npcc==165){   //〖女神同桌〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖女神同桌〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=688;//物品id
$wpdz4[]=10;//	
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

} else{
echo "<font color=black>对不起~~你的〖金豆〗不足</font>"."<br>";
}

} elseif($npcc==166){   //〖女神同桌〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖女神同桌〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=688;//物品id
$wpdz4[]=100;//	
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

} else{
echo "<font color=black>对不起~~你的〖金豆〗不足</font>"."<br>";
}

} elseif($npcc==167){   //〖女神同桌〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖女神同桌〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=688;//物品id
$wpdz4[]=1000;//	
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

} else{
echo "<font color=black>对不起~~你的〖金豆〗不足</font>"."<br>";
}




} elseif($npcc==168){   //〖金豆〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始

$wpdz1[]="〖神仙果〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=694;//物品id
$wpdz4[]=50;//	需要扣除的量
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
//物品加
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=1;//	
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

} else{
echo "<font color=black>对不起~~你的〖神仙果〗不足</font>"."<br>";
}





} elseif($npcc==169){   //〖金豆〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始

$wpdz1[]="〖神仙果〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=694;//物品id
$wpdz4[]=500;//	需要扣除的量
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
//物品加
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=10;//	
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

} else{
echo "<font color=black>对不起~~你的〖神仙果〗不足</font>"."<br>";
}






} elseif($npcc==170){   //〖BOSS杀手〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始

$wpdz1[]="〖BOSS如意令〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=695;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖BOSS杀手〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=696;//物品id
$wpdz4[]=1;//	得到量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起~~需要".$wpdz1[0]."x".$wpdz4[0].",".$wpdz1[1]."x".$wpdz4[1]."</font>"."<br>";
}



} elseif($npcc==171){   //〖猎魔之王〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始

$wpdz1[]="〖BOSS如意令〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=695;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=25;//	需要扣除的量
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
//物品加
$wpdz1[]="〖猎魔之王〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=697;//物品id
$wpdz4[]=1;//	得到量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起~~需要".$wpdz1[0]."x".$wpdz4[0].",".$wpdz1[1]."x".$wpdz4[1]."</font>"."<br>";
}



} elseif($npcc==172){   //〖BOSS终结者〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始

$wpdz1[]="〖BOSS如意令〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=695;//物品id
$wpdz4[]=35;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=35;//	需要扣除的量
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
//物品加
$wpdz1[]="〖BOSS终结者〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=706;//物品id
$wpdz4[]=1;//	得到量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起~~需要".$wpdz1[0]."x".$wpdz4[0].",".$wpdz1[1]."x".$wpdz4[1]."</font>"."<br>";
}



} elseif($npcc==173){   //〖一骑当先〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始

$wpdz1[]="〖BOSS如意令〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=695;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=50;//	需要扣除的量
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
//物品加
$wpdz1[]="〖一骑当先〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=707;//物品id
$wpdz4[]=1;//	得到量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起~~需要".$wpdz1[0]."x".$wpdz4[0].",".$wpdz1[1]."x".$wpdz4[1]."</font>"."<br>";
}




} elseif($npcc==174){   //〖新妖之王〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始

$wpdz1[]="〖BOSS如意令〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=695;//物品id
$wpdz4[]=70;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖新妖之王〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=708;//物品id
$wpdz4[]=1;//	得到量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起~~需要".$wpdz1[0]."x".$wpdz4[0].",".$wpdz1[1]."x".$wpdz4[1]."</font>"."<br>";
}




} elseif($npcc==175){   //〖七夕令〗


$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小喜鹊】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=592;//物品id
$wpdz4[]=888;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量
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

//物品加
$wpdz1[]="【七夕令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=638;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");




} else{
echo "<font color=black>对不起~~需要".$wpdz1[0]."x".$wpdz4[0].",".$wpdz1[1]."x".$wpdz4[1]."</font>"."<br>";
}






} elseif($npcc==176){   //〖碎银〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
$yl1=1000000000;
//扣除手续费用
$bfb=floor($yl1*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl1=$yl1+$ylsxf;

//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=$yl1;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖碎银〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=659;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=176;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再买一个</font></a>"."<br>";

} else{
//数字转汉字
$yl=$yl1;
include("./pz/ylts.php");
echo "<font color=red>对不起！！你的银两不足".$ylxx."两</font>";	
echo "<br>";	
}



} elseif($npcc==177){   //〖碎银〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始

$yl1=10000000000;
//扣除手续费用
$bfb=floor($yl1*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl1=$yl1+$ylsxf;
//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=$yl1;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖碎银〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=659;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=177;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再买一个</font></a>"."<br>";

} else{
//数字转汉字
$yl=$yl1;
include("./pz/ylts.php");
echo "<font color=red>对不起！！你的银两不足".$ylxx."两</font>";	
echo "<br>";	
}



} elseif($npcc==178){   //〖碎银〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始

$yl1=50000000000;
//扣除手续费用
$bfb=floor($yl1*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl1=$yl1+$ylsxf;
//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=$yl1;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖碎银〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=659;//物品id
$wpdz4[]=500;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再买一个</font></a>"."<br>";

} else{
//数字转汉字
$yl=$yl1;
include("./pz/ylts.php");
echo "<font color=red>对不起！！你的银两不足".$ylxx."两</font>";	
echo "<br>";	
}





} elseif($npcc==179){   //〖碎银〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
//物品加
$wpdz1[]="〖碎银〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=659;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加

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

$yl1=1000000000;
//扣除手续费用
$bfb=floor($yl1*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl1=$yl1-$ylsxf;

$wwpsl=$yl1;
include("./pz/ini_pz03.php");

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=179;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再卖一个</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖碎银〗不足</font>"."<br>";
}




} elseif($npcc==180){   //〖碎银〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
//物品加
$wpdz1[]="〖碎银〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=659;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加

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

$yl1=10000000000;
//扣除手续费用
$bfb=floor($yl1*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl1=$yl1-$ylsxf;

$wwpsl=$yl1;
include("./pz/ini_pz03.php");

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=180;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再卖一个</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖碎银〗不足</font>"."<br>";
}




} elseif($npcc==181){   //〖碎银〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
//物品加
$wpdz1[]="〖碎银〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=659;//物品id
$wpdz4[]=500;//	量
$wpdz5[]=1;//	重量
//物品加

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

$yl1=50000000000;


//扣除手续费用
$bfb=floor($yl1*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$yl1=$yl1-$ylsxf;



$wwpsl=$yl1;
include("./pz/ini_pz03.php");

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=181;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再卖一个</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖碎银〗不足</font>"."<br>";
}




} elseif($npcc==182){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【占星秘典】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=730;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=100000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//随机
$sl= rand(1, 20);
//物品加
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！占星获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=182;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再占星一次</font></a>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！占星需要".$wpdz1[0]."x".$wpdz4[0]."银两".$wpdz4[1]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

}



} elseif($npcc==183){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【占星秘典】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=730;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=200000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//随机
$sl= rand(20, 50);
//物品加
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！占星获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."进行了【极品占星】获得了".$wpdz1[0]."x".$wpdz4[0];
include("./msg/msgg02.php");


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=183;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再占星一次</font></a>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！占星需要".$wpdz1[0]."x".$wpdz4[0]."银两".$wpdz4[1]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

}





} elseif($npcc==184){//占星
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
$wpdz4[]=18;//	需要扣除的量
$wpdz5[]=1;//	重量
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=200000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//随机
$sl= rand(1, 20);
//物品加
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！占星获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=184;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再占星一次</font></a>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！占星需要".$wpdz1[0]."x".$wpdz4[0]."银两".$wpdz4[1]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

}




} elseif($npcc==185){//占星
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
$wpdz4[]=38;//	需要扣除的量
$wpdz5[]=1;//	重量
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//随机
$sl= rand(20, 50);
//物品加
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！占星获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."进行了【极品占星】获得了".$wpdz1[0]."x".$wpdz4[0];
include("./msg/msgg02.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=185;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再占星一次</font></a>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！占星需要".$wpdz1[0]."x".$wpdz4[0]."银两".$wpdz4[1]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

}





} elseif($npcc==186){//占星
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
$wpdz4[]=128;//	需要扣除的量
$wpdz5[]=1;//	重量
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=2000000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//随机
$sl= rand(50, 200);
//物品加
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！占星获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."进行了【完美占星】获得了".$wpdz1[0]."x".$wpdz4[0];
include("./msg/msgg02.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=186;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再占星一次</font></a>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！占星需要".$wpdz1[0]."x".$wpdz4[0]."银两".$wpdz4[1]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

}













} elseif($npcc==187){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【占星秘典】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=730;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=1000000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//随机
$sl= rand(10, 200);
//物品加
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！占星获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=187;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再占星一次</font></a>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！占星需要".$wpdz1[0]."x".$wpdz4[0]."银两".$wpdz4[1]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

}



} elseif($npcc==188){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【占星秘典】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=730;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=2000000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//随机
$sl= rand(200, 500);
//物品加
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！占星获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."进行了【极品占星】获得了".$wpdz1[0]."x".$wpdz4[0];
include("./msg/msgg02.php");

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=188;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再占星一次</font></a>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！占星需要".$wpdz1[0]."x".$wpdz4[0]."银两".$wpdz4[1]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

}





} elseif($npcc==189){//占星
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
$wpdz4[]=180;//	需要扣除的量
$wpdz5[]=1;//	重量
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=2000000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//随机
$sl= rand(10, 200);
//物品加
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！占星获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=189;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再占星一次</font></a>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！占星需要".$wpdz1[0]."x".$wpdz4[0]."银两".$wpdz4[1]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

}




} elseif($npcc==190){//占星
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
$wpdz4[]=380;//	需要扣除的量
$wpdz5[]=1;//	重量
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//随机
$sl= rand(200, 500);
//物品加
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！占星获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."进行了【极品占星】获得了".$wpdz1[0]."x".$wpdz4[0];
include("./msg/msgg02.php");

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=190;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再占星一次</font></a>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！占星需要".$wpdz1[0]."x".$wpdz4[0]."银两".$wpdz4[1]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

}





} elseif($npcc==191){//占星
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
$wpdz4[]=1280;//	需要扣除的量
$wpdz5[]=1;//	重量
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=20000000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//随机
$sl= rand(500, 2000);
//物品加
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！占星获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."进行了【完美占星】获得了".$wpdz1[0]."x".$wpdz4[0];
include("./msg/msgg02.php");

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=191;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再占星一次</font></a>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！占星需要".$wpdz1[0]."x".$wpdz4[0]."银两".$wpdz4[1]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

}










} elseif($npcc==192){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="【坚毅之星】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=717;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}



} elseif($npcc==193){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="【守护之星】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=718;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}




} elseif($npcc==194){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="【盛怒之星】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=719;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}




} elseif($npcc==195){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="【镇静之星】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=720;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}




} elseif($npcc==196){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【复苏之星】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=721;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}



} elseif($npcc==197){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【潮汐之星】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=722;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}



} elseif($npcc==198){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【寂灭之星】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=723;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}


} elseif($npcc==199){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【风暴之星】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=724;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}



} elseif($npcc==200){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=800;//	需要扣除的量
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
//物品加
$wpdz1[]="【神星の永生】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=725;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}


} elseif($npcc==201){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=800;//	需要扣除的量
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
//物品加
$wpdz1[]="【神星の混沌】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=726;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}





} elseif($npcc==202){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=800;//	需要扣除的量
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
//物品加
$wpdz1[]="【神星の秩序】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=727;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}





} elseif($npcc==203){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=800;//	需要扣除的量
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
//物品加
$wpdz1[]="【神星の圣恩】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=728;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}






} elseif($npcc==204){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【恶魔符文】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=575;//物品id
$wpdz4[]=10000;//	需要扣除的量
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
//物品加
$wpdz1[]="【1万西游声望卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=564;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");

} else{
echo "<font color=black>兑换失败需要【恶魔符文】x1万</font>"."<br>";
}


} elseif($npcc==205){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【恶魔符文】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=575;//物品id
$wpdz4[]=2000;//	需要扣除的量
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
//物品加
$wpdz1[]="【1万法宝经验卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=565;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");

} else{
echo "<font color=black>兑换失败需要【恶魔符文】x2000</font>"."<br>";
}




} elseif($npcc==206){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【恶魔符文】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=575;//物品id
$wpdz4[]=100000;//	需要扣除的量
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
//物品加
$wpdz1[]="【1万西游声望卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=564;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");

} else{
echo "<font color=black>兑换失败需要【恶魔符文】x10万</font>"."<br>";
}


} elseif($npcc==207){   

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【恶魔符文】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=575;//物品id
$wpdz4[]=20000;//	需要扣除的量
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
//物品加
$wpdz1[]="【1万法宝经验卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=565;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");

} else{
echo "<font color=black>兑换失败需要【恶魔符文】x2万</font>"."<br>";
}




} elseif($npcc==208){   
include("./ini/zt_ini.php");
$vip=($iniFile->getItem('玩家信息','vip等级'));
if($vip>=3){ 

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【恶魔符文】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=575;//物品id
$wpdz4[]=10000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖1万西游声望卷轴〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=427;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");

} else{
echo "<font color=black>兑换失败需要【恶魔符文】x1万</font>"."<br>";
}


} else{
echo "<font color=black>对不起！！仅仅只为vip3以上玩家提供兑换</font>"."<br>";
}







} elseif($npcc==209){   
include("./ini/zt_ini.php");
$vip=($iniFile->getItem('玩家信息','vip等级'));
if($vip>=3){ 
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【恶魔符文】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=575;//物品id
$wpdz4[]=2000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖1万法宝经验卷轴〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=423;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");

} else{
echo "<font color=black>兑换失败需要【恶魔符文】x2000</font>"."<br>";
}



} else{
echo "<font color=black>对不起！！仅仅只为vip3以上玩家提供兑换</font>"."<br>";
}




} elseif($npcc==210){   
include("./ini/zt_ini.php");
$vip=($iniFile->getItem('玩家信息','vip等级'));
if($vip>=3){ 

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【恶魔符文】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=575;//物品id
$wpdz4[]=100000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖1万西游声望卷轴〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=427;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");

} else{
echo "<font color=black>兑换失败需要【恶魔符文】x10万</font>"."<br>";
}


} else{
echo "<font color=black>对不起！！仅仅只为vip3以上玩家提供兑换</font>"."<br>";
}







} elseif($npcc==211){   
include("./ini/zt_ini.php");
$vip=($iniFile->getItem('玩家信息','vip等级'));
if($vip>=3){ 
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【恶魔符文】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=575;//物品id
$wpdz4[]=20000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖1万法宝经验卷轴〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=423;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");

} else{
echo "<font color=black>兑换失败需要【恶魔符文】x2万</font>"."<br>";
}



} else{
echo "<font color=black>对不起！！仅仅只为vip3以上玩家提供兑换</font>"."<br>";
}









} elseif($npcc==212){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=50;//	需要扣除的量
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
//物品加
$wpdz1[]="【智慧之星】（攻）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=731;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}



} elseif($npcc==213){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=50;//	需要扣除的量
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
//物品加
$wpdz1[]="【智慧之星】（防）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=732;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}







} elseif($npcc==214){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=250;//	需要扣除的量
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
//物品加
$wpdz1[]="【元素之星】（攻）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=733;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}




} elseif($npcc==215){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=250;//	需要扣除的量
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
//物品加
$wpdz1[]="【元素之星】（防）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=734;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}




} elseif($npcc==216){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=2000;//	需要扣除的量
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
//物品加
$wpdz1[]="【神星の元素之王】（攻）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=735;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}




} elseif($npcc==217){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=2000;//	需要扣除的量
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
//物品加
$wpdz1[]="【神星の元素之王】（防）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=736;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}





} elseif($npcc==218){//秘宝合成
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【秘宝碎片】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=738;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【秘宝宝箱】";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=739;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=608;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=608;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}


} elseif($npcc==219){//秘宝合成
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【秘宝碎片】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=738;//物品id
$wpdz4[]=150;//	需要扣除的量
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
//物品加
$wpdz1[]="【秘宝钥匙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=737;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=608;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=608;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}






} elseif($npcc==220){//秘宝合成
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【秘宝碎片】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=738;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="【秘宝宝箱】";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=739;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=608;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=608;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}


} elseif($npcc==221){//秘宝合成
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【秘宝碎片】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=738;//物品id
$wpdz4[]=1500;//	需要扣除的量
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
//物品加
$wpdz1[]="【秘宝钥匙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=737;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=608;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=608;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}



} elseif($npcc==222){//中秋称号兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【桂花糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=740;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖至尊天圣〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=553;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}


} elseif($npcc==223){//中秋称号兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【桂花糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=740;//物品id
$wpdz4[]=11;//	需要扣除的量
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
//物品加
$wpdz1[]="〖望门贵族〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=556;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}



} elseif($npcc==224){//中秋称号兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【桂花糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=740;//物品id
$wpdz4[]=12;//	需要扣除的量
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
//物品加
$wpdz1[]="〖至尊红颜〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=555;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}





} elseif($npcc==225){//中秋称号兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【桂花糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=740;//物品id
$wpdz4[]=15;//	需要扣除的量
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
//物品加
$wpdz1[]="〖昆仑至尊〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=582;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}




} elseif($npcc==226){//中秋称号兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【桂花糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=740;//物品id
$wpdz4[]=15;//	需要扣除的量
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
//物品加
$wpdz1[]="〖万法不侵〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=584;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}




} elseif($npcc==227){//中秋称号兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【桂花糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=740;//物品id
$wpdz4[]=15;//	需要扣除的量
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
//物品加
$wpdz1[]="〖乾坤唯仙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=585;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}



} elseif($npcc==228){//中秋称号兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【桂花糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=740;//物品id
$wpdz4[]=15;//	需要扣除的量
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
//物品加
$wpdz1[]="〖名动天下〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=583;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}



} elseif($npcc==229){//中秋称号兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【桂花糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=740;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="〖蓬莱至尊〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=581;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}


} elseif($npcc==230){//中秋称号兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【桂花糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=740;//物品id
$wpdz4[]=25;//	需要扣除的量
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
//物品加
$wpdz1[]="〖天下至尊〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=580;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}




} elseif($npcc==231){//中秋称号兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【桂花糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=740;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="〖王者宝石包〗（3个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=588;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}






} elseif($npcc==232){//【糯米粉】
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
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="【糯米粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=741;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换了".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}

} elseif($npcc==233){//【糯米粉】
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
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="【糯米粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=741;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换了".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}



} elseif($npcc==234){//【糯米粉】
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
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="【糯米粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=741;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换了".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}




} elseif($npcc==235){//〖风花月饼礼盒〗
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【糯米粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=741;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖香甜桂花〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=742;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖玉兔蜜糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=743;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="〖风花月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=772;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！制作了".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！制作需要".$wpdz1[0]."x".$wpdz4[0].$wpdz1[1]."x".$wpdz4[1].$wpdz1[2]."x".$wpdz4[2]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}


} elseif($npcc==236){//〖雪月月饼礼盒〗
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【糯米粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=741;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖香甜桂花〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=742;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖玉兔蜜糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=743;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="〖雪月月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=773;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！制作了".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！制作需要".$wpdz1[0]."x".$wpdz4[0].$wpdz1[1]."x".$wpdz4[1].$wpdz1[2]."x".$wpdz4[2]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}





} elseif($npcc==237){//〖金秋月饼礼盒〗
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【糯米粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=741;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖香甜桂花〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=742;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖玉兔蜜糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=743;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="〖金秋月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=774;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！制作了".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！制作需要".$wpdz1[0]."x".$wpdz4[0].$wpdz1[1]."x".$wpdz4[1].$wpdz1[2]."x".$wpdz4[2]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}


} elseif($npcc==238){//〖鸿福月饼礼盒〗
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【糯米粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=741;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖香甜桂花〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=742;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖玉兔蜜糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=743;//物品id
$wpdz4[]=20;//	需要扣除的量
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
//物品加
$wpdz1[]="〖鸿福月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=775;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！制作了".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！制作需要".$wpdz1[0]."x".$wpdz4[0].$wpdz1[1]."x".$wpdz4[1].$wpdz1[2]."x".$wpdz4[2]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}



} elseif($npcc==239){//〖风花月饼礼盒〗
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【糯米粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=741;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖香甜桂花〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=742;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖玉兔蜜糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=743;//物品id
$wpdz4[]=200;//	需要扣除的量
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
//物品加
$wpdz1[]="〖风花月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=772;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！制作了".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！制作需要".$wpdz1[0]."x".$wpdz4[0].$wpdz1[1]."x".$wpdz4[1].$wpdz1[2]."x".$wpdz4[2]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}


} elseif($npcc==240){//〖雪月月饼礼盒〗
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【糯米粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=741;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖香甜桂花〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=742;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖玉兔蜜糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=743;//物品id
$wpdz4[]=200;//	需要扣除的量
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
//物品加
$wpdz1[]="〖雪月月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=773;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！制作了".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！制作需要".$wpdz1[0]."x".$wpdz4[0].$wpdz1[1]."x".$wpdz4[1].$wpdz1[2]."x".$wpdz4[2]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}





} elseif($npcc==241){//〖金秋月饼礼盒〗
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【糯米粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=741;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖香甜桂花〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=742;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖玉兔蜜糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=743;//物品id
$wpdz4[]=200;//	需要扣除的量
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
//物品加
$wpdz1[]="〖金秋月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=774;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！制作了".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！制作需要".$wpdz1[0]."x".$wpdz4[0].$wpdz1[1]."x".$wpdz4[1].$wpdz1[2]."x".$wpdz4[2]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}


} elseif($npcc==242){//〖鸿福月饼礼盒〗
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【糯米粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=741;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖香甜桂花〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=742;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖玉兔蜜糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=743;//物品id
$wpdz4[]=200;//	需要扣除的量
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
//物品加
$wpdz1[]="〖鸿福月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=775;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！制作了".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！制作需要".$wpdz1[0]."x".$wpdz4[0].$wpdz1[1]."x".$wpdz4[1].$wpdz1[2]."x".$wpdz4[2]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}




} elseif($npcc==243){//〖时装凭证〗
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
$wpdz4[]=200;//	需要扣除的量
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
//物品加
$wpdz1[]="〖时装凭证〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=820;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换了".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";


}



} elseif($npcc==244){   //〖圣灵锻造图纸〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=200;//	需要扣除的量
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
//物品加
$wpdz1[]="〖圣灵锻造图纸〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=577;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖探险符〗不足</font>"."<br>";
}





} elseif($npcc==245){   //〖云梯石〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【英雄牌】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=394;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起你的【英雄牌】不足</font>"."<br>";
}

} elseif($npcc==246){   //〖云梯石〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【英雄牌】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=394;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起你的【英雄牌】不足</font>"."<br>";
}




} elseif($npcc==247){//熔炼占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【坚毅之星】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=717;//物品id
$wpdz4[]=1;//	量
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
//物品加

$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}



} elseif($npcc==248){//熔炼占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【守护之星】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=718;//物品id
$wpdz4[]=1;//	量
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
//物品加


$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}




} elseif($npcc==249){//熔炼占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【盛怒之星】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=719;//物品id
$wpdz4[]=1;//	量
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
//物品加

$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}




} elseif($npcc==250){//熔炼占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【镇静之星】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=720;//物品id
$wpdz4[]=1;//	量
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
//物品加


$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}








} elseif($npcc==251){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【智慧之星】（攻）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=731;//物品id
$wpdz4[]=1;//	量
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
//物品加
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=25;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}



} elseif($npcc==252){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据

$wpdz1[]="【智慧之星】（防）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=732;//物品id
$wpdz4[]=1;//	量
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
//物品加
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=25;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}










} elseif($npcc==253){//熔炼占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【复苏之星】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=721;//物品id
$wpdz4[]=1;//	量
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
//物品加


$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}



} elseif($npcc==254){//熔炼占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【潮汐之星】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=722;//物品id
$wpdz4[]=1;//	量
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
//物品加

$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}



} elseif($npcc==255){//熔炼占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【寂灭之星】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=723;//物品id
$wpdz4[]=1;//	量
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
//物品加


$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}


} elseif($npcc==256){//熔炼占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【风暴之星】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=724;//物品id
$wpdz4[]=1;//	量
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
//物品加


$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}









} elseif($npcc==257){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【元素之星】（攻）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=733;//物品id
$wpdz4[]=1;//	量
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
//物品加


$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=125;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}




} elseif($npcc==258){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【元素之星】（防）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=734;//物品id
$wpdz4[]=1;//	量
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
//物品加


$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=125;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}














} elseif($npcc==259){//熔炼占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【神星の永生】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=725;//物品id
$wpdz4[]=1;//	量
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
//物品加



$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=400;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}


} elseif($npcc==260){//熔炼占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【神星の混沌】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=726;//物品id
$wpdz4[]=1;//	量
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
//物品加


$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=400;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}





} elseif($npcc==261){//熔炼占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【神星の秩序】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=727;//物品id
$wpdz4[]=1;//	量
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
//物品加

$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=400;//	需要扣除的量
$wpdz5[]=1;//	重量

//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}





} elseif($npcc==262){//熔炼占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【神星の圣恩】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=728;//物品id
$wpdz4[]=1;//	量
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
//物品加


$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=400;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}











} elseif($npcc==263){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【神星の元素之王】（攻）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=735;//物品id
$wpdz4[]=1;//	量
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
//物品加


$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}




} elseif($npcc==264){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【神星の元素之王】（防）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=736;//物品id
$wpdz4[]=1;//	量
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
//物品加


$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}



} elseif($npcc==265){//兑换占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=1800;//	需要扣除的量
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
//物品加

$wpdz1[]="【圣星の永生】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=825;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量


//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}


} elseif($npcc==266){//兑换占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据


$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=1800;//	需要扣除的量
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
//物品加

$wpdz1[]="【圣星の混沌】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=826;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}





} elseif($npcc==267){//兑换占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=1800;//	需要扣除的量
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
//物品加


$wpdz1[]="【圣星の秩序】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=827;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}





} elseif($npcc==268){//兑换占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=1800;//	需要扣除的量
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
//物品加

$wpdz1[]="【圣星の圣恩】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=828;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}











} elseif($npcc==269){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据

$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=3000;//	需要扣除的量
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
//物品加



$wpdz1[]="【圣星の元素之王】（攻）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=829;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}




} elseif($npcc==270){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据


$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=3000;//	需要扣除的量
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
//物品加


$wpdz1[]="【圣星の元素之王】（防）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=830;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！兑换获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=587;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}



} elseif($npcc==271){//熔炼占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【圣星の永生】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=825;//物品id
$wpdz4[]=1;//	量
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
//物品加



$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}


} elseif($npcc==272){//熔炼占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【圣星の混沌】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=826;//物品id
$wpdz4[]=1;//	量
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
//物品加


$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}





} elseif($npcc==273){//熔炼占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【圣星の秩序】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=827;//物品id
$wpdz4[]=1;//	量
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
//物品加

$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量

//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}





} elseif($npcc==274){//熔炼占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【圣星の圣恩】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=828;//物品id
$wpdz4[]=1;//	量
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
//物品加


$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}











} elseif($npcc==275){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【圣星の元素之王】（攻）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=829;//物品id
$wpdz4[]=1;//	量
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
//物品加


$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}




} elseif($npcc==276){//占星
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【圣星の元素之王】（防）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=830;//物品id
$wpdz4[]=1;//	量
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
//物品加


$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！熔炼获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
} else{
echo "<font color=black>对不起！熔炼需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=631;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
}






} elseif($npcc==277){//国庆字体兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖国庆万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=836;//物品id
$wpdz4[]=1;//	量
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
//物品加
$wpdz1[]="【欢】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=832;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}



} elseif($npcc==278){//国庆字体兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖国庆万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=836;//物品id
$wpdz4[]=10;//	量
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
//物品加
$wpdz1[]="【欢】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=832;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}






} elseif($npcc==279){//国庆字体兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖国庆万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=836;//物品id
$wpdz4[]=1;//	量
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
//物品加
$wpdz1[]="【度】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=833;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}



} elseif($npcc==280){//国庆字体兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖国庆万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=836;//物品id
$wpdz4[]=10;//	量
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
//物品加
$wpdz1[]="【度】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=833;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}





} elseif($npcc==281){//国庆字体兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖国庆万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=836;//物品id
$wpdz4[]=1;//	量
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
//物品加
$wpdz1[]="【国】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=834;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}



} elseif($npcc==282){//国庆字体兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖国庆万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=836;//物品id
$wpdz4[]=10;//	量
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
//物品加
$wpdz1[]="【国】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=834;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}



} elseif($npcc==283){//国庆字体兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖国庆万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=836;//物品id
$wpdz4[]=1;//	量
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
//物品加
$wpdz1[]="【庆】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=835;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}



} elseif($npcc==284){//国庆字体兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖国庆万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=836;//物品id
$wpdz4[]=10;//	量
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
//物品加
$wpdz1[]="【庆】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=835;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}




} elseif($npcc==285){//国庆宝箱兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【欢】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=832;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【度】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=833;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【国】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=834;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【庆】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=835;//物品id
$wpdz4[]=50;//	量
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
//物品加
$wpdz1[]="〖国庆宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=844;//物品id
$wpdz4[]=1;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0].$wpdz1[1]."x".$wpdz4[1].$wpdz1[2]."x".$wpdz4[2].$wpdz1[3]."x".$wpdz4[3]."</font><br>";
echo "<br>"; 
}



} elseif($npcc==286){//国庆宝箱兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【欢】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=832;//物品id
$wpdz4[]=500;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【度】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=833;//物品id
$wpdz4[]=500;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【国】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=834;//物品id
$wpdz4[]=500;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【庆】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=835;//物品id
$wpdz4[]=500;//	量
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
//物品加
$wpdz1[]="〖国庆宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=844;//物品id
$wpdz4[]=10;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0].$wpdz1[1]."x".$wpdz4[1].$wpdz1[2]."x".$wpdz4[2].$wpdz1[3]."x".$wpdz4[3]."</font><br>";
echo "<br>"; 
}






} elseif($npcc==287){//国庆字体兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖国庆万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=836;//物品id
$wpdz4[]=100;//	量
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
//物品加
$wpdz1[]="【欢】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=832;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}






} elseif($npcc==288){//国庆字体兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖国庆万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=836;//物品id
$wpdz4[]=100;//	量
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
//物品加
$wpdz1[]="【度】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=833;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}






} elseif($npcc==289){//国庆字体兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖国庆万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=836;//物品id
$wpdz4[]=100;//	量
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
//物品加
$wpdz1[]="【国】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=834;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}




} elseif($npcc==290){//国庆字体兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖国庆万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=836;//物品id
$wpdz4[]=100;//	量
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
//物品加
$wpdz1[]="【庆】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=835;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}





} elseif($npcc==291){//国庆字体兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖国庆万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=836;//物品id
$wpdz4[]=1000;//	量
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
//物品加
$wpdz1[]="【欢】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=832;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}






} elseif($npcc==292){//国庆字体兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖国庆万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=836;//物品id
$wpdz4[]=1000;//	量
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
//物品加
$wpdz1[]="【度】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=833;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}






} elseif($npcc==293){//国庆字体兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖国庆万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=836;//物品id
$wpdz4[]=1000;//	量
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
//物品加
$wpdz1[]="【国】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=834;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}




} elseif($npcc==294){//国庆字体兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖国庆万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=836;//物品id
$wpdz4[]=1000;//	量
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
//物品加
$wpdz1[]="【庆】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=835;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}



} elseif($npcc==295){   //〖时装碎片〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=50;//	需要扣除的量
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
//物品加
$wpdz1[]="〖时装碎片〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=818;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖探险符〗不足</font>"."<br>";
}


} elseif($npcc==296){   //〖时装契约〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=50;//	需要扣除的量
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
//物品加
$wpdz1[]="〖时装契约〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=819;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖探险符〗不足</font>"."<br>";
}



} elseif($npcc==297){   //〖时装碎片〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=500;//	需要扣除的量
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
//物品加
$wpdz1[]="〖时装碎片〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=818;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖探险符〗不足</font>"."<br>";
}


} elseif($npcc==298){   //〖时装契约〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖探险符〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=579;//物品id
$wpdz4[]=500;//	需要扣除的量
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
//物品加
$wpdz1[]="〖时装契约〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=819;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回金银山</font></a>"."<br>";

} else{
echo "<font color=black>对不起你的〖探险符〗不足</font>"."<br>";
}





} elseif($npcc==299){   //【尊享VIP】（月卡）

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖采花花魁〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=863;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【尊享VIP】（月卡）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=862;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

} else{
echo "<font color=black>对不起你的〖采花花魁〗不足</font>"."<br>";
}




} elseif($npcc==300){   //蛋糕制作

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖白糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=896;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖鲜果蛋糕〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=868;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在【小果】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}


} elseif($npcc==301){   //蛋糕制作

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=70;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=70;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖白糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=896;//物品id
$wpdz4[]=70;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=70;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖奶油蛋糕〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=869;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在【小果】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==302){   //蛋糕制作

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=90;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=90;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖白糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=896;//物品id
$wpdz4[]=90;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=90;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖草莓蛋糕〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=870;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在【小果】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==303){   //蛋糕制作

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖白糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=896;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖焦糖蛋糕〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=871;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在【小果】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}


} elseif($npcc==304){   //蛋糕制作

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=150;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=150;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖白糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=896;//物品id
$wpdz4[]=150;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=150;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖香椰子蛋糕〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=872;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在【小果】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}






} elseif($npcc==305){   //蛋糕制作

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖白糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=896;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖鲜果蛋糕〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=868;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在【小果】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}


} elseif($npcc==306){   //蛋糕制作

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=700;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=700;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖白糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=896;//物品id
$wpdz4[]=700;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=700;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖奶油蛋糕〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=869;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在【小果】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==307){   //蛋糕制作

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖白糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=896;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖草莓蛋糕〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=870;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在【小果】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==308){   //蛋糕制作

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=1200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=1200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖白糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=896;//物品id
$wpdz4[]=1200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=1200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖焦糖蛋糕〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=871;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在【小果】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}


} elseif($npcc==309){   //蛋糕制作

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖白糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=896;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖香椰子蛋糕〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=872;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在【小果】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}





} elseif($npcc==310){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖面粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=898;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖曲奇饼干〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=873;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在公主的小朋友那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}


} elseif($npcc==311){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=70;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖面粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=898;//物品id
$wpdz4[]=70;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=70;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=70;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖蛋卷饼干〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=874;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在公主的小朋友那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==312){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=90;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖面粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=898;//物品id
$wpdz4[]=90;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=90;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=90;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖夹心饼干〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=875;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在公主的小朋友那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==313){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖面粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=898;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖芝麻饼干〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=876;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在公主的小朋友那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}


} elseif($npcc==314){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=150;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖面粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=898;//物品id
$wpdz4[]=150;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=150;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=150;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖杏仁饼干〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=877;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在公主的小朋友那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}






} elseif($npcc==315){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖面粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=898;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖曲奇饼干〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=873;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在公主的小朋友那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}


} elseif($npcc==316){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=700;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖面粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=898;//物品id
$wpdz4[]=700;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=700;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=700;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖蛋卷饼干〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=874;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在公主的小朋友那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==317){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖面粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=898;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖夹心饼干〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=875;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在公主的小朋友那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==318){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=1200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖面粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=898;//物品id
$wpdz4[]=1200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=1200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=1200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖芝麻饼干〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=876;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在公主的小朋友那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}


} elseif($npcc==319){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖面粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=898;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖杏仁饼干〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=877;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在公主的小朋友那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==320){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖小麦粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=900;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖奶油面包〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=878;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在及时雨【宋江】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}


} elseif($npcc==321){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=70;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=70;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=70;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖小麦粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=900;//物品id
$wpdz4[]=70;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖奶香面包〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=879;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在及时雨【宋江】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==322){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=90;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=90;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=90;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖小麦粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=900;//物品id
$wpdz4[]=90;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖抹茶面包〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=880;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在及时雨【宋江】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==323){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖小麦粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=900;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖椰蓉面包〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=881;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在及时雨【宋江】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}


} elseif($npcc==324){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=150;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=150;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=150;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖小麦粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=900;//物品id
$wpdz4[]=150;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖毛毛虫面包〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=882;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在及时雨【宋江】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}






} elseif($npcc==325){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖小麦粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=900;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖奶油面包〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=878;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在及时雨【宋江】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}


} elseif($npcc==326){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=700;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=700;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=700;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖小麦粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=900;//物品id
$wpdz4[]=700;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖奶香面包〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=879;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在及时雨【宋江】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==327){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖小麦粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=900;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖抹茶面包〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=880;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在及时雨【宋江】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==328){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=1200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=1200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=1200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖小麦粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=900;//物品id
$wpdz4[]=1200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖椰蓉面包〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=881;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在及时雨【宋江】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}


} elseif($npcc==329){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖小麦粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=900;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖毛毛虫面包〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=882;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在及时雨【宋江】那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}







} elseif($npcc==330){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖巧克力酱〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=901;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖可可粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=902;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖力娇酒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=903;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖酥圈巧克力〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=883;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在南风那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}


} elseif($npcc==331){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖巧克力酱〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=901;//物品id
$wpdz4[]=70;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖可可粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=902;//物品id
$wpdz4[]=70;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=70;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖力娇酒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=903;//物品id
$wpdz4[]=70;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖浓夫巧克力〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=884;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在南风那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==332){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖巧克力酱〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=901;//物品id
$wpdz4[]=90;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖可可粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=902;//物品id
$wpdz4[]=90;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=90;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖力娇酒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=903;//物品id
$wpdz4[]=90;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖米雪巧克力〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=885;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在南风那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==333){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖巧克力酱〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=901;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖可可粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=902;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖力娇酒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=903;//物品id
$wpdz4[]=120;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖乐荷巧克力〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=886;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在南风那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}


} elseif($npcc==334){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖巧克力酱〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=901;//物品id
$wpdz4[]=150;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖可可粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=902;//物品id
$wpdz4[]=150;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=150;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖力娇酒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=903;//物品id
$wpdz4[]=150;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖香雪巧克力〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=887;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 3000);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在南风那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}






} elseif($npcc==335){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖巧克力酱〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=901;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖可可粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=902;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖力娇酒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=903;//物品id
$wpdz4[]=500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖酥圈巧克力〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=883;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在南风那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}


} elseif($npcc==336){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖巧克力酱〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=901;//物品id
$wpdz4[]=700;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖可可粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=902;//物品id
$wpdz4[]=700;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=700;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖力娇酒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=903;//物品id
$wpdz4[]=700;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖浓夫巧克力〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=884;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在南风那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==337){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖巧克力酱〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=901;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖可可粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=902;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖力娇酒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=903;//物品id
$wpdz4[]=900;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖米雪巧克力〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=885;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在南风那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==338){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖巧克力酱〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=901;//物品id
$wpdz4[]=1200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖可可粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=902;//物品id
$wpdz4[]=1200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=1200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖力娇酒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=903;//物品id
$wpdz4[]=1200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖乐荷巧克力〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=886;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在南风那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}


} elseif($npcc==339){   //饼干

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖巧克力酱〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=901;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖可可粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=902;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖力娇酒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=903;//物品id
$wpdz4[]=1500;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖香雪巧克力〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=887;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$bz= rand(1, 300);
if($bz<=10){
$bz= rand(1, 3);
if($bz==1){
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} elseif($bz ==2){	
$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量		
} elseif($bz ==3){
$wpdz1[]="【尊享VIP】（7天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=867;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
} else{
}
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="恭喜玩家".$wjmz."在南风那里制作".$wpdz1[0]."过程中发现了小轩GM的假BUG,幸运的获得".$wpdz1[1]."一张";
include("./msg/msgg02.php");
} else{
}
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==340){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖半〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=922;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖周〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=923;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖年〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=924;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖庆〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=925;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖典〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=926;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=200000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖生日甜品礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=905;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3].$wpdz1[4]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}





} elseif($npcc==341){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖半〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=922;//物品id
$wpdz4[]=2000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖周〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=923;//物品id
$wpdz4[]=2000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖年〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=924;//物品id
$wpdz4[]=2000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖庆〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=925;//物品id
$wpdz4[]=2000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖典〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=926;//物品id
$wpdz4[]=2000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=2000000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖生日甜品礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=905;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3].$wpdz1[4]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}



} elseif($npcc==342){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖半〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=922;//物品id
$wpdz4[]=20000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖周〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=923;//物品id
$wpdz4[]=20000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖年〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=924;//物品id
$wpdz4[]=20000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖庆〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=925;//物品id
$wpdz4[]=20000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖典〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=926;//物品id
$wpdz4[]=20000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=20000000000;//	需要扣除的量
$wpdz5[]=0;//	重量
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
//物品加
$wpdz1[]="〖生日甜品礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=905;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0].$wpdz1[1].$wpdz1[2].$wpdz1[3].$wpdz1[4]."每样不足".$wpdz4[0]."或者银两不足".$wpdz4[4]."</font>"."<br>";
}




} elseif($npcc==343){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==344){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==345){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="〖白糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=896;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==346){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==347){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="〖面粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=898;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}
} elseif($npcc==348){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==349){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="〖小麦粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=900;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}
} elseif($npcc==350){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="〖巧克力酱〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=901;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==351){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="〖可可粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=902;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==352){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="〖力娇酒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=903;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}




} elseif($npcc==353){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==354){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==355){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖白糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=896;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==356){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==357){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖面粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=898;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}
} elseif($npcc==358){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==359){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖小麦粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=900;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}
} elseif($npcc==360){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖巧克力酱〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=901;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==361){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖可可粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=902;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==362){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖力娇酒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=903;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}





} elseif($npcc==363){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==364){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==365){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖白糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=896;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==366){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==367){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖面粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=898;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}
} elseif($npcc==368){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==369){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖小麦粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=900;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}
} elseif($npcc==370){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖巧克力酱〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=901;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==371){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖可可粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=902;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==372){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖力娇酒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=903;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}



} elseif($npcc==373){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==374){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==375){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖白糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=896;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==376){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==377){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖面粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=898;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}
} elseif($npcc==378){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==379){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖小麦粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=900;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}
} elseif($npcc==380){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖巧克力酱〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=901;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==381){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖可可粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=902;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==382){   //礼盒

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖力娇酒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=903;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==383){   //【伏羲阵图】

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
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="【伏羲阵图】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=938;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}
} elseif($npcc==384){   //【伏羲阵图】

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
$wpdz4[]=900;//	需要扣除的量
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
//物品加
$wpdz1[]="【伏羲阵图】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=938;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==385){   //【伏羲阵图】

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
$wpdz4[]=8000;//	需要扣除的量
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
//物品加
$wpdz1[]="【伏羲阵图】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=938;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==386){   //〖护身符〗

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
$wpdz4[]=30;//	需要扣除的量
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
//物品加
$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==387){   //〖护身符〗

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
$wpdz4[]=280;//	需要扣除的量
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
//物品加
$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}



} elseif($npcc==388){   //〖护身符〗

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
$wpdz4[]=2500;//	需要扣除的量
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
//物品加
$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！你的".$wpdz1[0]."不足".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==389){   //【重阳糕】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【面粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=946;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【红枣】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=947;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【栗子】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=948;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【杏仁】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=949;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【重阳糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=952;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！制作【重阳糕】需要".$wpdz1[0]."x".$wpdz4[0].",".$wpdz1[1]."x".$wpdz4[1].",".$wpdz1[2]."x".$wpdz4[2].",".$wpdz1[3]."x".$wpdz4[3]."</font>"."<br>";
}



} elseif($npcc==390){   //【重阳糕】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【面粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=946;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【红枣】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=947;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【栗子】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=948;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【杏仁】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=949;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="【重阳糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=952;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！制作【重阳糕】需要".$wpdz1[0]."x".$wpdz4[0].",".$wpdz1[1]."x".$wpdz4[1].",".$wpdz1[2]."x".$wpdz4[2].",".$wpdz1[3]."x".$wpdz4[3]."</font>"."<br>";
}



} elseif($npcc==391){   //【重阳糕】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【重阳糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=952;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖神乎其技〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=962;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}



} elseif($npcc==392){   //【重阳糕】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【重阳糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=952;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紫星币〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=944;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖灵机百变〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=963;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要".$wpdz1[0]."x".$wpdz4[0].$wpdz1[1]."x".$wpdz4[1]."</font>"."<br>";
}

} elseif($npcc==393){   //【重阳糕】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【重阳糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=952;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紫星币〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=944;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖姐是白富美〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=964;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要".$wpdz1[0]."x".$wpdz4[0].$wpdz1[1]."x".$wpdz4[1]."</font>"."<br>";
}





} elseif($npcc==394){   //【面粉】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="【面粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=946;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！购买需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==395){   //【红枣】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="【红枣】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=947;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！购买需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==396){   //【栗子】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="【栗子】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=948;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！购买需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==397){   //【杏仁】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=1;//	需要扣除的量
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
//物品加
$wpdz1[]="【杏仁】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=949;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！购买需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}




} elseif($npcc==398){   //【面粉】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【面粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=946;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！购买需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==399){   //【红枣】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【红枣】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=947;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！购买需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==400){   //【栗子】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【栗子】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=948;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！购买需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==401){   //【杏仁】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【杏仁】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=949;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！购买需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}




} elseif($npcc==402){   //【面粉】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【面粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=946;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！购买需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==403){   //【红枣】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【红枣】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=947;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！购买需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==404){   //【栗子】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【栗子】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=948;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！购买需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==405){   //【杏仁】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【杏仁】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=949;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！购买需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}



} elseif($npcc==406){   //【面粉】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="【面粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=946;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！购买需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==407){   //【红枣】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="【红枣】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=947;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！购买需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==408){   //【栗子】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="【栗子】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=948;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！购买需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==409){   //【杏仁】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="【杏仁】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=949;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！购买需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}



} elseif($npcc==410){   //〖小公主の激素〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【重阳糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=952;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖小公主の激素〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=945;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==411){   //〖小公主の激素〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【重阳糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=952;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖小公主の激素〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=945;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}



} elseif($npcc==412){   //〖小公主の激素〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【重阳糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=952;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紫星币〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=944;//物品id
$wpdz4[]=5;//	需要扣除的量
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
//物品加
$wpdz1[]="〖小公主の激素〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=945;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要".$wpdz1[0]."x".$wpdz4[0].$wpdz1[1]."x".$wpdz4[1]."</font>"."<br>";
}

} elseif($npcc==413){   //〖小公主の激素〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【重阳糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=952;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紫星币〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=944;//物品id
$wpdz4[]=50;//	需要扣除的量
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
//物品加
$wpdz1[]="〖小公主の激素〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=945;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要".$wpdz1[0]."x".$wpdz4[0].$wpdz1[1]."x".$wpdz4[1]."</font>"."<br>";
}







} elseif($npcc==414){   //【黑沃土】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【黑沃土】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=942;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==415){   //【仙玉露】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【仙玉露】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=943;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==416){   //〖小公主の仙竹〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="〖小公主の仙竹〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=951;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}


} elseif($npcc==417){   //【黑沃土】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【黑沃土】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=942;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==418){   //【仙玉露】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【仙玉露】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=943;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==419){   //〖小公主の仙竹〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖小公主の仙竹〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=951;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}




} elseif($npcc==420){   //【黑沃土】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="【黑沃土】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=942;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==421){   //【仙玉露】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="【仙玉露】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=943;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}

} elseif($npcc==422){   //〖小公主の仙竹〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖小公主の仙竹〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=951;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}



} elseif($npcc==423){   //〖小公主の仙竹〗

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
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【伏羲阵图】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=938;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
}






} elseif($npcc==424){   //〖南瓜宝箱〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【万】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1004;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【圣】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1005;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【节】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1006;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【快】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1007;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【乐】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1008;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖南瓜宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=1047;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要万圣节快乐每样x5</font>"."<br>";
}


} elseif($npcc==425){   //〖南瓜宝箱〗

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【万】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1004;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【圣】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1005;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【节】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1006;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【快】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1007;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【乐】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1008;//物品id
$wpdz4[]=1000;//	需要扣除的量
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
//物品加
$wpdz1[]="〖南瓜宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=1047;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换需要万圣节快乐每样x5</font>"."<br>";
}



} elseif($npcc==426){   //【万】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万圣节万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1009;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【万】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1004;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换〖万圣节万能字〗不足</font>"."<br>";
}

} elseif($npcc==427){   //【圣】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万圣节万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1009;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【圣】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1005;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换〖万圣节万能字〗不足</font>"."<br>";
}

} elseif($npcc==428){   //【节】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万圣节万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1009;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【节】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1006;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换〖万圣节万能字〗不足</font>"."<br>";
}

} elseif($npcc==429){   //【快】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万圣节万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1009;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【节】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1007;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换〖万圣节万能字〗不足</font>"."<br>";
}

} elseif($npcc==430){   //【乐】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万圣节万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1009;//物品id
$wpdz4[]=10;//	需要扣除的量
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
//物品加
$wpdz1[]="【乐】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1008;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换〖万圣节万能字〗不足</font>"."<br>";
}





} elseif($npcc==431){   //【万】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万圣节万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1009;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【万】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1004;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换〖万圣节万能字〗不足</font>"."<br>";
}

} elseif($npcc==432){   //【圣】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万圣节万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1009;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【圣】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1005;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换〖万圣节万能字〗不足</font>"."<br>";
}

} elseif($npcc==433){   //【节】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万圣节万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1009;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【节】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1006;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换〖万圣节万能字〗不足</font>"."<br>";
}

} elseif($npcc==434){   //【快】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万圣节万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1009;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【节】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1007;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换〖万圣节万能字〗不足</font>"."<br>";
}

} elseif($npcc==435){   //【乐】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖万圣节万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1009;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="【乐】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1008;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换〖万圣节万能字〗不足</font>"."<br>";
}


} elseif($npcc==436){   //【乐】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【万圣节捣蛋劵】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1046;//物品id
$wpdz4[]=150;//	需要扣除的量
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
//物品加
$wpdz1[]="〖制胜斗者〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1043;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换〖万圣节万能字〗不足</font>"."<br>";
}



} elseif($npcc==437){   //【乐】

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【万圣节捣蛋劵】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1046;//物品id
$wpdz4[]=100;//	需要扣除的量
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
//物品加
$wpdz1[]="〖诛魔大神〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1044;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=black>对不起！！兑换〖万圣节万能字〗不足</font>"."<br>";
}


} elseif($npcc==438){//感恩节兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【烤火鸡】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1059;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【南瓜饼】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1060;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【红莓酱】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1061;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【甜山芋】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1062;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【玉蜀黎】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1063;//物品id
$wpdz4[]=100;//	量
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
//物品加
$wpdz1[]="〖感恩火鸡礼包〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=1086;//物品id
$wpdz4[]=1;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0].$wpdz1[1]."x".$wpdz4[1].$wpdz1[2]."x".$wpdz4[2].$wpdz1[3]."x".$wpdz4[3].$wpdz1[4]."x".$wpdz4[4]."</font><br>";
echo "<br>"; 
}

} elseif($npcc==439){//感恩节兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【烤火鸡】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1059;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【南瓜饼】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1060;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【红莓酱】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1061;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【甜山芋】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1062;//物品id
$wpdz4[]=1000;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【玉蜀黎】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1063;//物品id
$wpdz4[]=1000;//	量
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
//物品加
$wpdz1[]="〖感恩火鸡礼包〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=1086;//物品id
$wpdz4[]=10;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0].$wpdz1[1]."x".$wpdz4[1].$wpdz1[2]."x".$wpdz4[2].$wpdz1[3]."x".$wpdz4[3].$wpdz1[4]."x".$wpdz4[4]."</font><br>";
echo "<br>"; 
}

} elseif($npcc==440){//感恩节兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【烤火鸡】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1059;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【南瓜饼】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1060;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【红莓酱】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1061;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【甜山芋】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1062;//物品id
$wpdz4[]=10000;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【玉蜀黎】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1063;//物品id
$wpdz4[]=10000;//	量
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
//物品加
$wpdz1[]="〖感恩火鸡礼包〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=1086;//物品id
$wpdz4[]=100;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0].$wpdz1[1]."x".$wpdz4[1].$wpdz1[2]."x".$wpdz4[2].$wpdz1[3]."x".$wpdz4[3].$wpdz1[4]."x".$wpdz4[4]."</font><br>";
echo "<br>"; 
}




} elseif($npcc==441){//感恩节兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖感恩票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1064;//物品id
$wpdz4[]=100;//	量
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
//物品加
$wpdz1[]="【烤火鸡】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1059;//物品id
$wpdz4[]=100;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}
} elseif($npcc==442){//感恩节兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖感恩票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1064;//物品id
$wpdz4[]=1000;//	量
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
//物品加
$wpdz1[]="【烤火鸡】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1059;//物品id
$wpdz4[]=1000;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}
} elseif($npcc==443){//感恩节兑换
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖感恩票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1064;//物品id
$wpdz4[]=10000;//	量
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
//物品加
$wpdz1[]="【烤火鸡】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1059;//物品id
$wpdz4[]=10000;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}






} elseif($npcc==444){//〖1元奖券〗
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金矿石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1099;//物品id
$wpdz4[]=1200;//	量
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
//物品加
$wpdz1[]="〖1金矿券〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1101;//物品id
$wpdz4[]=1;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."获得了".$wpdz1[0]."美滋滋~~~伤不起~~伤不起~~~";
include("./msg/msgg02.php");


} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}





} elseif($npcc==445){//〖5元奖券〗
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金矿石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1099;//物品id
$wpdz4[]=6000;//	量
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
//物品加
$wpdz1[]="〖5金矿券〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1102;//物品id
$wpdz4[]=1;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."获得了".$wpdz1[0]."美滋滋~~~伤不起~~伤不起~~~";
include("./msg/msgg02.php");


} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}

} elseif($npcc==446){//〖10矿金券〗
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金矿石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1099;//物品id
$wpdz4[]=12000;//	量
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
//物品加
$wpdz1[]="〖10金矿券〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1103;//物品id
$wpdz4[]=1;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."获得了".$wpdz1[0]."美滋滋~~~伤不起~~伤不起~~~";
include("./msg/msgg02.php");


} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}


} elseif($npcc==447){//〖20元奖券〗
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金矿石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1099;//物品id
$wpdz4[]=24000;//	量
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
//物品加
$wpdz1[]="〖20金矿券〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1104;//物品id
$wpdz4[]=1;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."获得了".$wpdz1[0]."美滋滋~~~伤不起~~伤不起~~~";
include("./msg/msgg02.php");


} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}

} elseif($npcc==448){//〖50元奖券〗
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金矿石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1099;//物品id
$wpdz4[]=60000;//	量
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
//物品加
$wpdz1[]="〖50金矿券〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1105;//物品id
$wpdz4[]=1;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."获得了".$wpdz1[0]."美滋滋~~~伤不起~~伤不起~~~";
include("./msg/msgg02.php");


} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}

} elseif($npcc==449){//〖100元奖券〗
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金矿石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1099;//物品id
$wpdz4[]=120000;//	量
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
//物品加
$wpdz1[]="〖100金矿券〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1106;//物品id
$wpdz4[]=1;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."获得了".$wpdz1[0]."美滋滋~~~伤不起~~伤不起~~~";
include("./msg/msgg02.php");


} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}



} elseif($npcc==450){//
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖1金矿券〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1101;//物品id
$wpdz4[]=1;//	量
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
//物品加
$wpdz1[]="〖点石成金劵〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1098;//物品id
$wpdz4[]=1;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."获得:".$wpdz1[0]."x".$wpdz4[0]."美滋滋~~~";
include("./msg/msgg02.php");


} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}




} elseif($npcc==451){//
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖5金矿券〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1102;//物品id
$wpdz4[]=1;//	量
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
//物品加
$wpdz1[]="〖点石成金劵〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1098;//物品id
$wpdz4[]=5;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."获得:".$wpdz1[0]."x".$wpdz4[0]."美滋滋~~~";
include("./msg/msgg02.php");


} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}


} elseif($npcc==452){//
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖10金矿券〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1103;//物品id
$wpdz4[]=1;//	量
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
//物品加
$wpdz1[]="〖点石成金劵〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1098;//物品id
$wpdz4[]=10;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."获得:".$wpdz1[0]."x".$wpdz4[0]."美滋滋~~~";
include("./msg/msgg02.php");


} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}


} elseif($npcc==453){//
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖20金矿券〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1104;//物品id
$wpdz4[]=1;//	量
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
//物品加
$wpdz1[]="〖点石成金劵〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1098;//物品id
$wpdz4[]=20;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."获得:".$wpdz1[0]."x".$wpdz4[0]."美滋滋~~~";
include("./msg/msgg02.php");


} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}


} elseif($npcc==454){//
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖50金矿券〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1105;//物品id
$wpdz4[]=1;//	量
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
//物品加
$wpdz1[]="〖点石成金劵〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1098;//物品id
$wpdz4[]=50;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."获得:".$wpdz1[0]."x".$wpdz4[0]."美滋滋~~~";
include("./msg/msgg02.php");


} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}

} elseif($npcc==455){//
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖100金矿券〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1106;//物品id
$wpdz4[]=1;//	量
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
//物品加
$wpdz1[]="〖点石成金劵〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1098;//物品id
$wpdz4[]=100;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."获得:".$wpdz1[0]."x".$wpdz4[0]."美滋滋~~~";
include("./msg/msgg02.php");


} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}







} elseif($npcc==456){//
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖10金矿券〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1103;//物品id
$wpdz4[]=1;//	量
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
//物品加
$wpdz1[]="【10元充值卡】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=777;//物品id
$wpdz4[]=1;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."获得:".$wpdz1[0]."x".$wpdz4[0]."美滋滋~~~";
include("./msg/msgg02.php");


} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}


} elseif($npcc==457){//
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖20金矿券〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1104;//物品id
$wpdz4[]=1;//	量
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
//物品加
$wpdz1[]="【20元充值卡】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=778;//物品id
$wpdz4[]=1;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."获得:".$wpdz1[0]."x".$wpdz4[0]."美滋滋~~~";
include("./msg/msgg02.php");


} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}



} elseif($npcc==458){//
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖50金矿券〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1105;//物品id
$wpdz4[]=1;//	量
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
//物品加
$wpdz1[]="【50元充值卡】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=779;//物品id
$wpdz4[]=1;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."获得:".$wpdz1[0]."x".$wpdz4[0]."美滋滋~~~";
include("./msg/msgg02.php");


} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}


} elseif($npcc==459){//
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖100金矿券〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=1105;//物品id
$wpdz4[]=1;//	量
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
//物品加
$wpdz1[]="【100元充值卡】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=780;//物品id
$wpdz4[]=1;//
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
echo "<font color=red>恭喜你！获得:".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
echo "<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."获得:".$wpdz1[0]."x".$wpdz4[0]."美滋滋~~~";
include("./msg/msgg02.php");


} else{
echo "<font color=black>对不起！需要".$wpdz1[0]."x".$wpdz4[0]."</font><br>";
echo "<br>"; 
}






} else{
}


















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