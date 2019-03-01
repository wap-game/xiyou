<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="zzck.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


} else{
   //连接数据库提取数据写入ini 
   
$inina="zzck.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家背包]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('序列',['初始' => 123]); 
$iniFile->addItem('id',['初始' => 1]); 
$iniFile->addItem('数量',['初始' => 123]);
$iniFile->addItem('名字',['初始' => 123]); 
   
include("./sql/mysql.php");//调用数据库连接 
   
   
   
         //连接数据库提取数据写入ini 
   
$inina="zzck.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家背包]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('序列',['初始' => 123]); 
$iniFile->addItem('id',['初始' => 1]); 
$iniFile->addItem('数量',['初始' => 123]);
$iniFile->addItem('名字',['初始' => 123]); 
   
include("./sql/mysql.php");//调用数据库连接 
   /*
   
   ////////////////////////////////////////////////////////////////////////////////////充值代码////////////////////////////////////////////////////////////
	
	
		

//价格判断


//特别重要目前价格为真实价格的100分之一倍正常上限后需要改动


$czid=127;
$wpfl=4;

   
   
   
   
include("./sql/mysql.php");//调用数据库连接 



	
$q2="all_pay";
$sql1=mysql_query("select payid from $q2 where paywjid='$wjid'",$conn);
$info1=@mysql_fetch_array($sql1);
$payid1=$info1[payid];

$str="select payid from $q2";
$result=mysql_query($str) or die('SQL语句有误');
//把有值的数据存入一个数组

$payid=0;
 while(!!$row=mysql_fetch_array($result)){
	 
	if($row[payid]==$payid1){   
$payid=$payid+1;
 }
 }






if($payid!=""&&$payid>=1){
$sql1=mysql_query("select payzf,price from $q2 where payid='$payid1'",$conn);
$info1=@mysql_fetch_array($sql1);
$payzf=$info1[payzf];
$price=$info1[price];

echo "充值已到账请重新进下增值仓库"."</br>";
} else{
} 

if($payzf==1){



if($price>=10&&$price<=10.09){//10元
$ppczzs=10;       //充值赠送的
$ppwpsl=50+$ppczzs;//最终充值所得
$vipjf=10;

$ppwpsl1=1;//赠送背包卷
$ppwpsl2=1;//赠送仓库卷
} elseif($price>=20&&$price<=20.09){//20元  
$ppczzs=20;       //充值赠送的
$ppwpsl=100+$ppczzs;//最终充值所得
$vipjf=20;
$ppwpsl1=1;//赠送背包卷
$ppwpsl2=1;//赠送仓库卷
} elseif($price>=50&&$price<=50.09){  //50元
$ppczzs=50;       //充值赠送的
$ppwpsl=250+$ppczzs;//最终充值所得
$vipjf=50;
$ppwpsl1=2;//赠送背包卷
$ppwpsl2=2;//赠送仓库卷
} elseif($price>=100&&$price<=100.09){  //100元
$ppczzs=100;       //充值赠送的
$ppwpsl=500+$ppczzs;//最终充值所得
$vipjf=100;
$ppwpsl1=5;//赠送背包卷
$ppwpsl2=5;//赠送仓库卷
} elseif($price>=200&&$price<=200.09){  //200元
$ppczzs=200;       //充值赠送的
$ppwpsl=1000+$ppczzs;//最终充值所得
$vipjf=200;
$ppwpsl1=10;//赠送背包卷
$ppwpsl2=10;//赠送仓库卷
} elseif($price>=500&&$price<=500.09){  //500元
$ppczzs=500;       //充值赠送的
$ppwpsl=2500+$ppczzs;//最终充值所得
$vipjf=500;
$ppwpsl1=30;//赠送背包卷
$ppwpsl2=30;//赠送仓库卷
} elseif($price>=1000&&$price<=1000.09){  //1000元
$ppczzs=5000;       //充值赠送的
$ppwpsl=5000+$ppczzs;//最终充值所得
$vipjf=1000;
$ppwpsl1=70;//赠送背包卷
$ppwpsl2=70;//赠送仓库卷
} elseif($price>=2000&&$price<=2000.09){  //2000元
$ppczzs=0;       //充值赠送的
$ppwpsl=25000+$ppczzs;//最终充值所得
$vipjf=2000;
$ppwpsl1=200;//赠送背包卷
$ppwpsl2=200;//赠送仓库卷
} else{
$vipjf=0;
	
} 








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
} elseif($vipjy>=5000&&$vipjy<=999999){//vip12
$vip=12;

} else{
$vip=0;
	
} 




$q2="all_zt";
$strsql = "update $q2 set vipjy=$vipjy,vip=$vip where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('玩家信息', ['vip经验' => $vipjy,'vip等级' => $vip]);







//更新vip



$q2="all_pay";
$strsql = "delete from $q2 where payid='$payid1'";//物品id号必改值
$result = mysql_query($strsql);




//调用msg.ini是否存在
 $wjtake="恭喜你！！充值已经到账请在首页的增值仓库领取，如有任何疑问请向小轩咨询QQ：137154720，感谢您对小轩西游的大力支持，小轩必将竭尽全力将小轩西游做好！";
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







		
		} else{
		

		
		
		} 
		

   
   
   
   
   
   */
   
   
   
   

		

$q2="zzck".$wjid;


mysql_query("set names utf8");
$str="select wpid,wpsl,wpfl from $q2";
$result=mysql_query($str) or die('SQL语句有误');
//把有值的数据存入一个数组
$m=0;




 while(!!$row=mysql_fetch_array($result)){


if($row[wpsl]>0){  
$m=$m+1;
$npcc=$row[wpid];
$iniFile->addCategory('序列', [$row[wpid]=>$m ]);
$iniFile->addCategory('id', [$m=> $row[wpid]]);
$iniFile->addCategory('数量', [$row[wpid]=> $row[wpsl]]);
//调用物品信息
include("./wp/wpxx.php");
$iniFile->addCategory('名字', [$row[wpid]=> $wpmz]);  

   

   
   
   
   
   
}
   







}



}




$iniFile = new iniFile($file);






?>