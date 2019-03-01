<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


if ($npcc==1) {//vip练级卷每日领取

include("./ini/zt_ini.php");

$vip=($iniFile->getItem('玩家信息','vip等级'));
if ($vip>=1) {//限制vip1领取
include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=2;
} else{	
}
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime' where hdid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$npcc => $nowtime]);

//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//得到物品代码



} else{	
echo "<font color=red>对不起！你今日已经领取过一张【vip练级卷了】</font></br>"; 
} 
} else{	
echo "<font color=red>对不起!你不是vip用户</font>"; 
echo "<font color=red>需要!vip等级达到1级后即可每天领取练级卷一张</font></br>"; 
}
} elseif ($npcc==2) {//vip区域时间占用
} elseif ($npcc==3) {//福利领取占用

} elseif ($npcc==4) {//vip福利领取



include("./ini/zt_ini.php");

$vip=($iniFile->getItem('玩家信息','vip等级'));
if ($vip>=1) {//限制vip1领取
include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=2;
} else{	
}
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime' where hdid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$npcc => $nowtime]);






echo "<font color=red>恭喜你！！领取了vip".$vip."每日专属福利</font></br>"; 



if ($vip==1) {//限制vip1领取



//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//得到物品代码

include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");



} elseif ($vip==2) {//vip福利领取

//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码

//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

//得到物品代码

include("./rwmap/rwget.php");
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");
} elseif ($vip==3) {//vip福利领取

//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码

//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量

//得到物品代码

include("./rwmap/rwget.php");
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");
} elseif ($vip==4) {//vip福利领取

//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
//得到物品代码



//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量

//得到物品代码

include("./rwmap/rwget.php");
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");
} elseif ($vip==5) {//vip福利领取

//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量
//得到物品代码

//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

//得到物品代码

include("./rwmap/rwget.php");
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");
} elseif ($vip==6) {//vip福利领取

//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

//得到物品代码

include("./rwmap/rwget.php");
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");
} elseif ($vip==7) {//vip福利领取


//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量
//得到物品代码

//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="〖万能钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=401;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码


include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");
} elseif ($vip==8) {//vip福利领取


//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//得到物品代码



//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=6;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="〖万能钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=401;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
//得到物品代码


include("./rwmap/rwget.php");


include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");
} elseif ($vip==9) {//vip福利领取


//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//得到物品代码



//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=6;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=6;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="〖万能钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=401;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
//得到物品代码


include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");

} elseif ($vip==10) {//vip福利领取


//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=6;//	量
$wpdz5[]=1;//	重量
//得到物品代码

//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=7;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=7;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="〖万能钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=401;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量
//得到物品代码


include("./rwmap/rwget.php");
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");
} elseif ($vip==11) {//vip福利领取


//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=7;//	量
$wpdz5[]=1;//	重量
//得到物品代码



//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=8;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=8;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="〖万能钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=401;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量
//得到物品代码


include("./rwmap/rwget.php");


include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");

} elseif ($vip==12) {//vip福利领取


//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//得到物品代码



//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="〖万能钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=401;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//得到物品代码

//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//得到物品代码


include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");





} elseif ($vip==13) {//vip福利领取


//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=12;//	量
$wpdz5[]=1;//	重量
//得到物品代码



//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=12;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=12;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="〖万能钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=401;//物品id
$wpdz4[]=12;//	量
$wpdz5[]=1;//	重量
//得到物品代码

//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=8;//	量
$wpdz5[]=1;//	重量
//得到物品代码


include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");




} elseif ($vip==14) {//vip福利领取

//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=14;//	量
$wpdz5[]=1;//	重量
//得到物品代码



//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=14;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=14;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="〖万能钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=401;//物品id
$wpdz4[]=14;//	量
$wpdz5[]=1;//	重量
//得到物品代码

//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//得到物品代码


include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");



} elseif ($vip==15) {//vip福利领取


//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=16;//	量
$wpdz5[]=1;//	重量
//得到物品代码



//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=16;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=16;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="〖万能钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=401;//物品id
$wpdz4[]=16;//	量
$wpdz5[]=1;//	重量
//得到物品代码

//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=15;//	量
$wpdz5[]=1;//	重量
//得到物品代码

include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");





} elseif ($vip==16) {//vip福利领取

//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=18;//	量
$wpdz5[]=1;//	重量
//得到物品代码



//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=18;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=18;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="〖万能钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=401;//物品id
$wpdz4[]=18;//	量
$wpdz5[]=1;//	重量
//得到物品代码

//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量
//得到物品代码


include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");



} elseif ($vip==17) {//vip福利领取

//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量
//得到物品代码



//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="〖万能钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=401;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量
//得到物品代码

//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=25;//	量
$wpdz5[]=1;//	重量
//得到物品代码


include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");




} elseif ($vip==18) {//vip福利领取

//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=25;//	量
$wpdz5[]=1;//	重量
//得到物品代码



//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=25;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=25;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="〖万能钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=401;//物品id
$wpdz4[]=25;//	量
$wpdz5[]=1;//	重量
//得到物品代码

//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=30;//	量
$wpdz5[]=1;//	重量
//得到物品代码



include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");


} elseif ($vip==19) {//vip福利领取

//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=30;//	量
$wpdz5[]=1;//	重量
//得到物品代码



//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=30;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=30;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="〖万能钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=401;//物品id
$wpdz4[]=30;//	量
$wpdz5[]=1;//	重量
//得到物品代码

//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=35;//	量
$wpdz5[]=1;//	重量
//得到物品代码


include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");




} elseif ($vip==20) {//vip福利领取

//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=30;//	量
$wpdz5[]=1;//	重量
//得到物品代码



//得到物品代码
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量
//得到物品代码


//得到物品代码
$wpdz1[]="〖万能钥匙〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=401;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量
//得到物品代码

//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量
//得到物品代码


include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了VIP".$vip."级福利！！获得了大量的奖励，具体请参将特权功能~~~~";
include("./msg/msgg02.php");





} else{	

} 



} else{	
echo "<font color=red>对不起！你今日已经领取过vip的专属福利了</font></br>"; 
} 
} else{	
echo "<font color=red>对不起!你不是vip用户</font></br>"; 

}





} elseif ($npcc==5) {//更新排行榜占用




} elseif ($npcc==6) {//【宠物岛门票】


include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=2;
} else{	
}
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime' where hdid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$npcc => $nowtime]);

//得到物品代码
$wpdz1[]="【宠物岛门票】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=488;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//得到物品代码




} else{	
echo "<font color=red>对不起！你今日已经领取过一张【宠物岛门票】</font></br>"; 
} 




} elseif ($npcc==7) {//宠物岛区域时间占用


} elseif ($npcc==8) {//国战个人时间占用


} elseif ($npcc==9) {//大唐国师（经验奖励）1-10占用

include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw01.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务已完成十次了请明日再来</font>"."<br>";

} 

} elseif ($npcc==10) {//大唐国师（经验奖励）20-40占用
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw02.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务已完成十次了请明日再来</font>"."<br>";
} 
} elseif ($npcc==11) {//大唐国师（经验奖励）40-60占用
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw03.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务已完成十次了请明日再来</font>"."<br>";
} 

} elseif ($npcc==12) {//大唐国师（经验奖励）60-80占用
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw04.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务已完成十次了请明日再来</font>"."<br>";
} 

} elseif ($npcc==13) {//大唐国师（经验奖励）80-100占用
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw05.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务已完成十次了请明日再来</font>"."<br>";
} 

} elseif ($npcc==14) {//大唐国师（经验奖励）100-120占用
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw06.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务已完成十次了请明日再来</font>"."<br>";
} 


} elseif ($npcc==15) {//大唐国师（经验奖励）120-140占用
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw07.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务已完成十次了请明日再来</font>"."<br>";
} 


} elseif ($npcc==16) {//女儿国国师（银两奖励）1-20占用



include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=10;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw08.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务赏金已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项赏金任务（".$rwdjyq."级以上）</font>"."<br>";
} 



} elseif ($npcc==17) {//女儿国国师（银两奖励）20-40占用
include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=20;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw09.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务赏金已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项赏金任务（".$rwdjyq."级以上）</font>"."<br>";
} 


} elseif ($npcc==18) {//女儿国国师（银两奖励）40-60占用

include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=40;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw10.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务赏金已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项赏金任务（".$rwdjyq."级以上）</font>"."<br>";
} 


} elseif ($npcc==19) {//女儿国国师（银两奖励）60-80占用

include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=60;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw11.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务赏金已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项赏金任务（".$rwdjyq."级以上）</font>"."<br>";
} 


} elseif ($npcc==20) {//女儿国国师（银两奖励）80-100占用

include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=80;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw12.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务赏金已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项赏金任务（".$rwdjyq."级以上）</font>"."<br>";
} 


} elseif ($npcc==21) {//女儿国国师（银两奖励）100-120占用

include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=100;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw13.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务赏金已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项赏金任务（".$rwdjyq."级以上）</font>"."<br>";
} 


} elseif ($npcc==22) {//女儿国国师（银两奖励）120-140占用

include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=120;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw14.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务赏金已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项赏金任务（".$rwdjyq."级以上）</font>"."<br>";
} 





} elseif ($npcc==23) {//宝象国国师（材料奖励）10-20占用

include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=10;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw15.php");//每日任务
} else{	
echo "<font color=red>对不起！此项材料任务已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项材料任务（".$rwdjyq."级以上）</font>"."<br>";
} 



} elseif ($npcc==24) {//宝象国国师（材料奖励）20-40占用

include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=20;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw16.php");//每日任务
} else{	
echo "<font color=red>对不起！此项材料任务已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项材料任务（".$rwdjyq."级以上）</font>"."<br>";
} 

} elseif ($npcc==25) {//宝象国国师（材料奖励）40-60占用

include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=40;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw17.php");//每日任务
} else{	
echo "<font color=red>对不起！此项材料任务已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项材料任务（".$rwdjyq."级以上）</font>"."<br>";
} 



} elseif ($npcc==26) {//宝象国国师（材料奖励）60-80占用

include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=60;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw18.php");//每日任务
} else{	
echo "<font color=red>对不起！此项材料任务已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项材料任务（".$rwdjyq."级以上）</font>"."<br>";
} 



} elseif ($npcc==27) {//宝象国国师（材料奖励）80-100占用

include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=80;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw19.php");//每日任务
} else{	
echo "<font color=red>对不起！此项材料任务已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项材料任务（".$rwdjyq."级以上）</font>"."<br>";
} 

} elseif ($npcc==28) {//宝象国国师（材料奖励）100-120占用

include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=100;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw20.php");//每日任务
} else{	
echo "<font color=red>对不起！此项材料任务已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项材料任务（".$rwdjyq."级以上）</font>"."<br>";
} 


} elseif ($npcc==29) {//宝象国国师（材料奖励）120-140占用

include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=120;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw21.php");//每日任务
} else{	
echo "<font color=red>对不起！此项材料任务已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项材料任务（".$rwdjyq."级以上）</font>"."<br>";
} 



} elseif ($npcc==30) {//每日签到占用

include("./ini/qd_ini.php");
include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=2;
} else{	
}




$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime' where hdid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$npcc => $nowtime]);
echo "<font color=red>恭喜你！签到成功！！</font>"."<br>";	

include("./yxpz/qd_pz.php");//执行签到代码




} else{	
echo "<font color=red>对不起！你今日已经签到过了</font></br>"; 
} 




} elseif ($npcc==31) {//班主任活动答题占用










include("template/xy409.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");





//32-61//通天塔占用


} elseif ($npcc==62) {//黄金贵族占用

include("./ini/qd_ini.php");
include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdcs=($iniFile->getItem('活动次数',$npcc));


if ($hdcs>=1) {
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=2;
} else{	
}
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$hdcs=$hdcs-1;
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=$hdcs where hdid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$npcc => $nowtime]);
$iniFile->updItem('活动次数', [$npcc => $hdcs]);
echo "<font color=red>恭喜你！领取到了黄金贵族（月卡奖励）！！</font>"."<br>";	
//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="〖黄金贵族宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=514;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//得到物品代码

include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了黄金贵族（月卡奖励）从此西游路上横着走，具体请参照福利功能~~~~";
include("./msg/msgg02.php");




} else{	
echo "<font color=red>对不起！你今日已经领取过了黄金贵族福利</font></br>"; 
} 
} else{	
echo "<font color=red>对不起！你还不是黄金贵族或者黄金贵族已到期（开通请联系小轩GM）</font></br>"; 
} 

} elseif ($npcc==63) {//铂金贵族占用

include("./ini/qd_ini.php");
include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdcs=($iniFile->getItem('活动次数',$npcc));
if ($hdcs>=1) {
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=2;
} else{	
}
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$hdcs=$hdcs-1;
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=$hdcs where hdid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$npcc => $nowtime]);
$iniFile->updItem('活动次数', [$npcc => $hdcs]);
echo "<font color=red>恭喜你！领取到了铂金贵族（月卡奖励）！！</font>"."<br>";	
//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=6;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="〖铂金贵族宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=515;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//得到物品代码

include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了铂金贵族（月卡奖励）从此西游路上横着走，具体请参照福利功能~~~~";
include("./msg/msgg02.php");
} else{	
echo "<font color=red>对不起！你今日已经领取过了铂金贵族福利</font></br>"; 
} 
} else{	
echo "<font color=red>对不起！你还不是铂金贵族或者铂金贵族已到期（开通请联系小轩GM）</font></br>"; 
} 

} elseif ($npcc==64) {//钻石皇族占用

include("./ini/qd_ini.php");
include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdcs=($iniFile->getItem('活动次数',$npcc));
if ($hdcs>=1) {
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=2;
} else{	
}
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$hdcs=$hdcs-1;
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=$hdcs where hdid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$npcc => $nowtime]);
$iniFile->updItem('活动次数', [$npcc => $hdcs]);

echo "<font color=red>恭喜你！领取到了钻石皇族（月卡奖励）！！</font>"."<br>";	

//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=15;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="〖钻石皇族宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=516;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//得到物品代码

include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了钻石皇族（月卡奖励）从此西游路上横着走，具体请参照福利功能~~~~";
include("./msg/msgg02.php");
} else{	
echo "<font color=red>对不起！你今日已经领取过了钻石皇族福利</font></br>"; 
} 
} else{	
echo "<font color=red>对不起！你还不是钻石皇族或者钻石皇族已到期（开通请联系小轩GM）</font></br>"; 
} 


} elseif ($npcc==65) {//至尊皇族占用

include("./ini/qd_ini.php");
include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdcs=($iniFile->getItem('活动次数',$npcc));


if ($hdcs>=1) {
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=2;
} else{	
}
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 

$hdcs=$hdcs-1;
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=$hdcs where hdid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$npcc => $nowtime]);
$iniFile->updItem('活动次数', [$npcc => $hdcs]);


echo "<font color=red>恭喜你！领取到了至尊皇族（月卡奖励）！！</font>"."<br>";	

//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=30;//	量
$wpdz5[]=1;//	重量

//得到物品代码

//得到物品代码
$wpdz1[]="〖至尊皇族宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=517;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//得到物品代码

include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了至尊皇族（月卡奖励）从此西游路上横着走，具体请参照福利功能~~~~";
include("./msg/msgg02.php");

} else{	
echo "<font color=red>对不起！你今日已经领取过了至尊皇族福利</font></br>"; 
} 
} else{	
echo "<font color=red>对不起！你还不是至尊皇族或者至尊皇族已到期（开通请联系小轩GM）</font></br>"; 
} 





//66-100//通天塔占用



} elseif ($npcc==101) {//【恶魔入场卷】


include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=2;
} else{	
}
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime' where hdid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$npcc => $nowtime]);

//得到物品代码
$wpdz1[]="【恶魔入场卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=576;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//得到物品代码


} else{	
echo "<font color=red>对不起！你今日已经领取过一张【恶魔入场卷】</font></br>"; 
} 

} elseif ($npcc==102) {//恶魔时间占用




//103-162//阴曹地府占用

//163-222//阴曹地府通天塔20-30占用
} elseif ($npcc==223) {//〖活动〗紫霞仙子占用

} elseif ($npcc==224) {//金豆兑换





} elseif ($npcc==225) {//七夕签到

include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=2;
} else{	
}
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime' where hdid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$npcc => $nowtime]);

//得到物品代码
$wpdz1[]="【鹊翎】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=656;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//得到物品代码



} else{	
echo "<font color=red>对不起！你今日已经签到获取过【鹊翎】</font></br>"; 
} 





} elseif ($npcc==226) {//〖活动〗潇道长占用






} elseif ($npcc==227) {//开学签到

include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=2;
} else{	
}
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime' where hdid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$npcc => $nowtime]);

//得到物品代码
$wpdz1[]="【铅球】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=680;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//得到物品代码



} else{	
echo "<font color=red>对不起！你今日已经获取过【铅球】</font></br>"; 
} 


} elseif ($npcc==228) {//〖活动〗脑筋急转弯老师




//229-288//通天塔地府占用



} elseif ($npcc==289) {//大唐国师（收集任务）1-20占用
include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=10;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw22.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务国家任务已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项国家任务（".$rwdjyq."级以上）</font>"."<br>";
} 


} elseif ($npcc==290) {//大唐国师（收集任务）20-40占用
include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=10;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw23.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务国家任务已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项国家任务（".$rwdjyq."级以上）</font>"."<br>";
} 



} elseif ($npcc==291) {//大唐国师（收集任务）40-60占用
include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=10;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw24.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务国家任务已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项国家任务（".$rwdjyq."级以上）</font>"."<br>";
} 

} elseif ($npcc==292) {//大唐国师（收集任务）60-80占用
include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=10;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw25.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务国家任务已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项国家任务（".$rwdjyq."级以上）</font>"."<br>";
} 


} elseif ($npcc==293) {//大唐国师（收集任务）80-100占用
include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=10;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw26.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务国家任务已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项国家任务（".$rwdjyq."级以上）</font>"."<br>";
} 


} elseif ($npcc==294) {//大唐国师（收集任务）100-120占用
include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=10;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw27.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务国家任务已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项国家任务（".$rwdjyq."级以上）</font>"."<br>";
} 

} elseif ($npcc==295) {//大唐国师（收集任务）120-140占用
include("./ini/zt_ini.php");
$rwpostdj=($iniFile->getItem('玩家信息','等级'));
$rwdjyq=10;//赏金任务等级要求
if ($rwpostdj>=$rwdjyq) {
include("./rcrw/rwcs.php");//每日任务
if($hdcs <=9){
include("./rcrw/rcrw28.php");//每日任务
} else{	
echo "<font color=red>对不起！此项任务国家任务已完成十次了请明日再来</font>"."<br>";
} 
} else{	
echo "<font color=red>对不起！你的等级不足以来接取此项国家任务（".$rwdjyq."级以上）</font>"."<br>";
} 


} elseif ($npcc==296) {//开学签到

include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=2;
} else{	
}
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime' where hdid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$npcc => $nowtime]);

//得到物品代码
$wpdz1[]="【桂花糕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=740;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//得到物品代码



} else{	
echo "<font color=red>对不起！你今日已经获取过【桂花糕】了</font></br>"; 
} 



} elseif ($npcc==298) {//擂台膜拜

} elseif ($npcc==299) {//擂台领奖励

} elseif ($npcc==300) {//擂台领膜拜奖励



} elseif ($npcc==301) {//重置1000层大楼


} elseif ($npcc==302) {//自动重置1000层大楼



} elseif ($npcc==303) {//金豆兑换





} elseif ($npcc==304) {//领五星红旗

include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=2;
} else{	
}
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	


if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime' where hdid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$npcc => $nowtime]);

//得到物品代码
$wpdz1[]="【五星红旗】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=831;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量



$wpdz1[]="【国庆金锤】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=843;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="【国庆金铲】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=837;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖国庆藏宝图〗（金图）";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=841;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量



include("./rwmap/rwget.php");
//得到物品代码



} else{	
echo "<font color=red>对不起！你今日已经获取过【五星红旗】了</font></br>"; 
} 


//305-364//通天塔地府占用

//365-467//伏羲大阵占用



} elseif ($npcc==468) {//领【伏羲阵图】

include("./ini/zt_ini.php");

$vip=($iniFile->getItem('玩家信息','vip等级'));
if ($vip>=3) {//限制vip3领取
include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=2;
} else{	
}
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime' where hdid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$npcc => $nowtime]);

//得到物品代码
$wpdz1[]="【伏羲阵图】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=938;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//得到物品代码

} else{	
echo "<font color=red>对不起！你今日已经领取过一张【伏羲阵图】了</font></br>"; 
} 
} else{	
echo "<font color=red>需要!vip等级达到3级后即可每天领取【伏羲阵图】一张</font></br>"; 
}

} elseif ($npcc==469) {//【伏羲阵图】时间




} elseif ($npcc==470) {//领取〖小公主の激素〗

include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=2;
} else{	
}
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime' where hdid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$npcc => $nowtime]);

//得到物品代码
$wpdz1[]="〖小公主の激素〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=945;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$bz= rand(1, 10);
if($bz<=5){
$wpdz1[]="〖紫星币〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=944;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
echo "<font color=red>意外的触发获得了〖紫星币〗x1</font></br>"; 
} else{	
}


include("./rwmap/rwget.php");
//得到物品代码



} else{	
echo "<font color=red>对不起！你今日已经获取过〖小公主の激素〗</font></br>"; 
} 






} elseif ($npcc==471) {//活动竞猜时间限制


} elseif ($npcc==472) {//铁矿山时间限制


} elseif ($npcc==473) {//铜矿山时间限制


} elseif ($npcc==474) {//银矿山时间限制


} elseif ($npcc==475) {//金矿山时间限制









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