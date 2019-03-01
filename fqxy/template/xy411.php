<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


include("./ini/qd_ini.php");
$qdxx2=($iniFile->getCategory('签到信息'));


$qdy= date('m')*1;


if($qdxx2[签到月]==$qdy){



if($npcc==1){//2日签到占用

$qdcs=2;//签到领取
if($qdxx2[签到次数]>=$qdcs){	
if($qdxx2[签到1]==1){	
include("./sql/mysql.php");//调用数据库连接 
$q2="qd".$wjid;
$strsql = "update $q2 set qd1=2 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('签到信息', ['签到1' => '2']);

echo "<font color=red>恭喜你！领取到了".$qdcs."次签到奖励</font></br>"; 	


include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取到了".$qdcs."次签到奖励！！获得了大量奖励！！";
include("./msg/msgg02.php");




//得到物品代码
$wpdz1[]="〖打孔器〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=302;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

//得到物品代码
$wpdz1[]="〖铁魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=308;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//得到物品代码
$wpdz1[]="〖铜魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=309;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//得到物品代码
$wpdz1[]="【小蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=236;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//得到物品代码
$wpdz1[]="【蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=237;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

	

include("./rwmap/rwget.php");









} else{		
echo "<font color=red>对不起！你已领取过".$qdcs."次签到奖励了</font></br>"; 	
} 
} else{		
$qdcs=$qdcs-$qdxx2[签到次数];	
echo "<font color=red>对不起！你的签到次数不足（差".$qdcs."天）</font></br>"; 	
} 



} elseif ($npcc==2) {//5日签到
$qdcs=5;//签到领取
if($qdxx2[签到次数]>=$qdcs){	
if($qdxx2[签到2]==1){	
include("./sql/mysql.php");//调用数据库连接 
$q2="qd".$wjid;
$strsql = "update $q2 set qd2=2 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('签到信息', ['签到2' => '2']);

echo "<font color=red>恭喜你！领取到了".$qdcs."次签到奖励</font></br>"; 	


include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取到了".$qdcs."次签到奖励！！获得了大量奖励！！";
include("./msg/msgg02.php");



//得到物品代码
$wpdz1[]="〖普通打孔器〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=303;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

//得到物品代码
$wpdz1[]="〖铁魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=308;//物品id
$wpdz4[]=30;//	量
$wpdz5[]=1;//	重量

//得到物品代码
$wpdz1[]="〖铜魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=309;//物品id
$wpdz4[]=30;//	量
$wpdz5[]=1;//	重量

//得到物品代码
$wpdz1[]="【小蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=236;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量

//得到物品代码
$wpdz1[]="【蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=237;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量

//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量





include("./rwmap/rwget.php");






	
	
	
	
} else{		
echo "<font color=red>对不起！你已领取过".$qdcs."次签到奖励了</font></br>"; 	
} 
} else{		
$qdcs=$qdcs-$qdxx2[签到次数];	
echo "<font color=red>对不起！你的签到次数不足（差".$qdcs."天）</font></br>"; 	
} 
} elseif ($npcc==3) {//10日签到
$qdcs=10;//签到领取
if($qdxx2[签到次数]>=$qdcs){	
if($qdxx2[签到3]==1){	
include("./sql/mysql.php");//调用数据库连接 
$q2="qd".$wjid;
$strsql = "update $q2 set qd3=2 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('签到信息', ['签到3' => '2']);
echo "<font color=red>恭喜你！领取到了".$qdcs."次签到奖励</font></br>"; 	

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取到了".$qdcs."次签到奖励！！获得了大量奖励！！";
include("./msg/msgg02.php");



//得到物品代码
$wpdz1[]="〖普通打孔器〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=303;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

//得到物品代码
$wpdz1[]="〖铜魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=309;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量


//得到物品代码
$wpdz1[]="〖银魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=310;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量
//得到物品代码

//得到物品代码
$wpdz1[]="〖小智慧果〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=398;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码

//得到物品代码
$wpdz1[]="【蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=237;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="【三千年蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=238;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//得到物品代码





	

include("./rwmap/rwget.php");






	
	
	
	
} else{		
echo "<font color=red>对不起！你已领取过".$qdcs."次签到奖励了</font></br>"; 	
} 
} else{		
$qdcs=$qdcs-$qdxx2[签到次数];	
echo "<font color=red>对不起！你的签到次数不足（差".$qdcs."天）</font></br>"; 	
} 
} elseif ($npcc==4) {//15日签到

$qdcs=15;//签到领取
if($qdxx2[签到次数]>=$qdcs){	
if($qdxx2[签到4]==1){	
include("./sql/mysql.php");//调用数据库连接 
$q2="qd".$wjid;
$strsql = "update $q2 set qd4=2 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('签到信息', ['签到4' => '2']);
echo "<font color=red>恭喜你！领取到了".$qdcs."次签到奖励</font></br>"; 	

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取到了".$qdcs."次签到奖励！！获得了大量奖励！！";
include("./msg/msgg02.php");





//得到物品代码
$wpdz1[]="〖普通打孔器〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=303;//物品id
$wpdz4[]=8;//	量
$wpdz5[]=1;//	重量

//得到物品代码
$wpdz1[]="〖金魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=311;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量


//得到物品代码
$wpdz1[]="〖银魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=310;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量

//得到物品代码
$wpdz1[]="〖小智慧果〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=398;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

//得到物品代码
$wpdz1[]="【六千年蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=239;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量

//得到物品代码
$wpdz1[]="【三千年蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=238;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量
//得到物品代码



//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//得到物品代码



	

include("./rwmap/rwget.php");




	
	
	
	
} else{		
echo "<font color=red>对不起！你已领取过".$qdcs."次签到奖励了</font></br>"; 	
} 
} else{		
$qdcs=$qdcs-$qdxx2[签到次数];	
echo "<font color=red>对不起！你的签到次数不足（差".$qdcs."天）</font></br>"; 	
} 

} elseif ($npcc==5) {//25日签到


$qdcs=25;//签到领取
if($qdxx2[签到次数]>=$qdcs){	
if($qdxx2[签到5]==1){	


include("./sql/mysql.php");//调用数据库连接 
$q2="qd".$wjid;
$strsql = "update $q2 set qd5=2 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('签到信息', ['签到5' => '2']);
echo "<font color=red>恭喜你！领取到了".$qdcs."次签到奖励</font></br>"; 	
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取到了".$qdcs."次签到奖励！！获得了大量奖励！！";
include("./msg/msgg02.php");



//得到物品代码
$wpdz1[]="〖高级打孔器〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=304;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//得到物品代码
$wpdz1[]="〖金魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=311;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量


//得到物品代码
$wpdz1[]="〖钻魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=312;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量

//得到物品代码
$wpdz1[]="〖大智慧果〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=399;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

//得到物品代码
$wpdz1[]="【六千年蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=239;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="【九千年蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=240;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量
//得到物品代码



//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量



	

include("./rwmap/rwget.php");






	
	
	
	
} else{		
echo "<font color=red>对不起！你已领取过".$qdcs."次签到奖励了</font></br>"; 	
} 
} else{		
$qdcs=$qdcs-$qdxx2[签到次数];	
echo "<font color=red>对不起！你的签到次数不足（差".$qdcs."天）</font></br>"; 	
} 













} else{	


} 












} else{	
echo "<font color=red>对不起！不能领取上月签到奖励（点击签到后更新）</font></br>"; 
} 





include("template/xy409.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");



















} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini



?>