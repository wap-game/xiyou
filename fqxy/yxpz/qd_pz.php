<?php
//添加新数据




include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));


include("./ini/qd_ini.php");
$qdxx=($iniFile->getCategory('签到信息'));




$qdy= date('m')*1;


if($qdxx[签到月]==$qdy){
include("./sql/mysql.php");//调用数据库连接 
$qdcs=$qdxx[签到次数]+1;
$q2="all_qd";
$strsql = "update $q2 set qdcs=$qdcs where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('签到信息', ['签到次数' => $qdcs]);














} else{	
//更新下月
include("./sql/mysql.php");//调用数据库连接 
$q2="all_qd";
$strsql = "update $q2 set qdcs=1,qdy=$qdy,qd1=1,qd2=1,qd3=1,qd4=1,qd5=1 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('签到信息', ['签到次数' => '1']);
$iniFile->updItem('签到信息', ['签到月' => $qdy]);
$iniFile->updItem('签到信息', ['签到1' => '1']);
$iniFile->updItem('签到信息', ['签到2' => '1']);
$iniFile->updItem('签到信息', ['签到3' => '1']);
$iniFile->updItem('签到信息', ['签到4' => '1']);
$iniFile->updItem('签到信息', ['签到5' => '1']);


}






$xtxx= "恭喜玩家".$wjmz."完成了每日签到任务，累计签到有豪礼相送哦！！";
include("./msg/msgg02.php");

//得到物品代码
$wpdz1[]="【占星秘典】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=730;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码
//随机
$bz= rand(1, 60);
if($bz >=1&&$bz <=10){

//得到物品代码
$wpdz1[]="〖铁魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=308;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} elseif($bz >=11&&$bz <=20){ 
//得到物品代码
$wpdz1[]="〖铜魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=309;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} elseif($bz >=21&&$bz <=30){ 
//得到物品代码
$wpdz1[]="〖银魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=310;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} elseif($bz >=31&&$bz <=40){ 
//得到物品代码
$wpdz1[]="〖金魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=311;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} elseif($bz >=41&&$bz <=50){ 
//得到物品代码
$wpdz1[]="〖钻魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=312;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量
//得到物品代码

} elseif($bz >=51&&$bz <=60){ 
//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} else{

}
	

include("./rwmap/rwget.php");







?>