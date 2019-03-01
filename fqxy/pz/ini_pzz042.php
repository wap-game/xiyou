<?php


////////////////////////////////金豆//////////////////////

include("./sql/mysql.php");//调用数据库连接 







$czid=127;
$wpfl=4;
//查询如果没有则添加
$q2="zzck".$wjid;
$sql1=mysql_query("select * from $q2 where wpid=$czid",$conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1[wpid];
$ckwpsl=$info1[wpsl];

if($ckwpid==""){

//获取最大值
$q2="zzck".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$ckwpsl=$ppwpsl;
//$npcc=$czid;
//调用物品信息
//include("./wp/wpxx.php");

$q2="zzck".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','$czid','$ckwpsl','$wpfl')";


 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

} else{
$q2="zzck".$wjid;	
$ckwpsl=$ckwpsl+$ppwpsl;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysql_query($strsql);
} 

////////////////////////////////金豆//////////////////////





$czid=400;
$wpfl=4;
//查询如果没有则添加
$q2="zzck".$wjid;
$sql1=mysql_query("select * from $q2 where wpid=$czid",$conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1[wpid];
$ckwpsl=$info1[wpsl];

if($ckwpid==""){

//获取最大值
$q2="zzck".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$ckwpsl=$ppwpsl1;
//$npcc=$czid;
//调用物品信息
//include("./wp/wpxx.php");

$q2="zzck".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','$czid','$ckwpsl','$wpfl')";


 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

} else{
$q2="zzck".$wjid;	
$ckwpsl=$ckwpsl+$ppwpsl1;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysql_query($strsql);
} 







$czid=175;
$wpfl=4;
//查询如果没有则添加
$q2="zzck".$wjid;
$sql1=mysql_query("select * from $q2 where wpid=$czid",$conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1[wpid];
$ckwpsl=$info1[wpsl];

if($ckwpid==""){

//获取最大值
$q2="zzck".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$ckwpsl=$ppwpsl2;
//$npcc=$czid;
//调用物品信息
//include("./wp/wpxx.php");

$q2="zzck".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','$czid','$ckwpsl','$wpfl')";


 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

} else{
$q2="zzck".$wjid;	
$ckwpsl=$ckwpsl+$ppwpsl2;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysql_query($strsql);
} 













//更新vip
include("./ini/zt_ini.php");
$vipjy=($iniFile->getItem('玩家信息','vip经验'));
$usermzxx=($iniFile->getItem('玩家信息','玩家名字'));

$vipjy=$vipjf+$vipjy;

if($vipjy>=10&&$vipjy<=49){//vip1
$vip=1;
} elseif($vipjy>=50&&$vipjy<=99){//vip2 
$vip=2;
} elseif($vipjy>=100&&$vipjy<=199){//vip3
$vip=3;
} elseif($vipjy>=200&&$vipjy<=399){//vip4
$vip=4;
} elseif($vipjy>=400&&$vipjy<=499){//vip5
$vip=5;
} elseif($vipjy>=500&&$vipjy<=599){//vip6
$vip=6;
} elseif($vipjy>=600&&$vipjy<=999){//vip7
$vip=7;
} elseif($vipjy>=1000&&$vipjy<=1499){//vip8
$vip=8;
} elseif($vipjy>=1500&&$vipjy<=1999){//vip9
$vip=9;
} elseif($vipjy>=2000&&$vipjy<=2999){//vip10
$vip=10;
} elseif($vipjy>=3000&&$vipjy<=4999){//vip11
$vip=11;
} elseif($vipjy>=5000&&$vipjy<=6999){//vip12
$vip=12;
} elseif($vipjy>=7000&&$vipjy<=8999){//vip13
$vip=13;
} elseif($vipjy>=9000&&$vipjy<=10999){//vip14
$vip=14;
} elseif($vipjy>=11000&&$vipjy<=12999){//vip15
$vip=15;
} elseif($vipjy>=13000&&$vipjy<=14999){//vip16
$vip=16;
} elseif($vipjy>=15000&&$vipjy<=16999){//vip17
$vip=17;
} elseif($vipjy>=17000&&$vipjy<=18999){//vip18
$vip=18;
} elseif($vipjy>=19000&&$vipjy<=24999){//vip19
$vip=19;
} elseif($vipjy>=25000&&$vipjy<=9999999){//vip20
$vip=20;



} else{
$vip=0;
	
} 



$q2="all_zt";
$strsql = "update $q2 set vipjy=$vipjy,vip=$vip where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('玩家信息', ['vip经验' => $vipjy,'vip等级' => $vip]);

















//更新vip


//调用msg.ini是否存在
 $wjtake="恭喜你！！使用的【充值卡】已到账请在首页的增值仓库领取，如有任何疑问请向小轩咨询QQ：137154720，感谢您对小轩西游的大力支持，小轩必将竭尽全力将小轩西游做好！";
include("msg_ini.php");

$inina="msg.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
$hkeyltpx1[]="";
$hltpx1="";
$arr3="";
# 获取一个分类下所有数据
$hltpx1=($iniFile->getCategory('玩家排序'));
	foreach(array_keys($hltpx1) as $key){
$hkeyltpx1[]=$hltpx1[$key];
}
	
	
$tmp1="排序";
$arr3=$hkeyltpx1;
foreach( $arr3 as $k=>$v) {
    if($tmp1 == $v) unset($arr3[$k]);
}

$ltmax1=max($arr3);
if($ltmax1=="排序"){
$ltmax1=0;
	} else{
	} 
	$ltbl2=-1;
$ltmax1=$ltmax1+1;
$zbidd2=$wjid1."_".$ltmax1;
$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 












?>
