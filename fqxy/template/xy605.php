<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$bpmz=($iniFile->getItem('玩家信息','帮派名字'));

$ininalock5="bp".$bpid.".ini";
include("./ini/zsgggini.php");
if($zsspd5==1){
	
if($bpid>=1){
	
include("./ini/bp_ini.php");



include("./ini/bpp_ini.php");

$xl=($iniFile->getItem('序列',$wjid));
$gjgx1=($iniFile->getItem('贡献',$xl));
	

if($npcc==1){  
$xygx=100;//所需要花费的贡献
$xyyl=100000000;//所需要银两
$xygxym=186;//所在页面
if($gjgx1>=$xygx){ 

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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
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
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 

} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 
} elseif($npcc==2){   
$xygx=200;//所需要花费的贡献
$xyyl=200000000;//所需要银两
$xygxym=186;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖师门声望礼包〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=162;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 

} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 

} elseif($npcc==3){   
$xygx=200;//所需要花费的贡献
$xyyl=200000000;//所需要银两
$xygxym=186;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖宝象国声望礼包〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=163;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 

} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 



} elseif($npcc==4){   
$xygx=200;//所需要花费的贡献
$xyyl=200000000;//所需要银两
$xygxym=186;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖天宫声望礼包〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=164;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 

} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 

} elseif($npcc==5){   
$xygx=200;//所需要花费的贡献
$xyyl=200000000;//所需要银两
$xygxym=186;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖地府声望礼包〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=168;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 

} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 

} elseif($npcc==6){   
$xygx=200;//所需要花费的贡献
$xyyl=200000000;//所需要银两
$xygxym=186;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖傲来国声望礼包〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=169;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 

} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 

} elseif($npcc==7){   
$xygx=200;//所需要花费的贡献
$xyyl=200000000;//所需要银两
$xygxym=186;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖乌鸡国声望礼包〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=170;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 



} elseif($npcc==8){   
$xygx=50;//所需要花费的贡献
$xyyl=100000000;//所需要银两
$xygxym=596;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖打孔器〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=302;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 



} elseif($npcc==9){   
$xygx=50;//所需要花费的贡献
$xyyl=100000000;//所需要银两
$xygxym=596;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖普通打孔器〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=303;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 



} elseif($npcc==10){   
$xygx=50;//所需要花费的贡献
$xyyl=100000000;//所需要银两
$xygxym=596;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖铁星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=314;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 


} elseif($npcc==11){   
$xygx=50;//所需要花费的贡献
$xyyl=100000000;//所需要银两
$xygxym=596;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
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
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 



} elseif($npcc==12){   
$xygx=100;//所需要花费的贡献
$xyyl=200000000;//所需要银两
$xygxym=597;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖高级打孔器〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=304;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 



} elseif($npcc==13){   
$xygx=100;//所需要花费的贡献
$xyyl=200000000;//所需要银两
$xygxym=597;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖铜星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=315;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 


} elseif($npcc==14){   
$xygx=100;//所需要花费的贡献
$xyyl=200000000;//所需要银两
$xygxym=597;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
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
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 



} elseif($npcc==15){   
$xygx=150;//所需要花费的贡献
$xyyl=200000000;//所需要银两
$xygxym=598;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖强化打孔器〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=305;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 

} elseif($npcc==16){   
$xygx=200;//所需要花费的贡献
$xyyl=400000000;//所需要银两
$xygxym=598;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
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
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 





} elseif($npcc==17){   
$xygx=100;//所需要花费的贡献
$xyyl=200000000;//所需要银两
$xygxym=598;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="小幸运草";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=126;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 



} elseif($npcc==18){   
$xygx=200;//所需要花费的贡献
$xyyl=400000000;//所需要银两
$xygxym=599;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖究极打孔器〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=306;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 



} elseif($npcc==19){   
$xygx=500;//所需要花费的贡献
$xyyl=1000000000;//所需要银两
$xygxym=599;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
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
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 




} elseif($npcc==20){   
$xygx=200;//所需要花费的贡献
$xyyl=500000000;//所需要银两
$xygxym=599;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="大幸运草";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=307;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 


} elseif($npcc==21){   
$xygx=500;//所需要花费的贡献
$xyyl=500000000;//所需要银两
$xygxym=600;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖仓库扩容卷〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=175;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 



} elseif($npcc==22){   
$xygx=1000;//所需要花费的贡献
$xyyl=5000000000;//所需要银两
$xygxym=600;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
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
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 



} elseif($npcc==23){   
$xygx=100;//所需要花费的贡献
$xyyl=100000000;//所需要银两
$xygxym=600;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
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
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 



} elseif($npcc==24){   
$xygx=500;//所需要花费的贡献
$xyyl=500000000;//所需要银两
$xygxym=601;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖背包扩容卷〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=400;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 




} elseif($npcc==25){   
$xygx=3000;//所需要花费的贡献
$xyyl=1000000000;//所需要银两
$xygxym=601;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
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
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 



} elseif($npcc==26){   
$xygx=50;//所需要花费的贡献
$xyyl=100000000;//所需要银两
$xygxym=601;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
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
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 



} elseif($npcc==27){   
$xygx=200;//所需要花费的贡献
$xyyl=500000000;//所需要银两
$xygxym=602;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
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
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 




} elseif($npcc==28){   
$xygx=1000;//所需要花费的贡献
$xyyl=1000000000;//所需要银两
$xygxym=602;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
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
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 





} elseif($npcc==29){   
$xygx=100;//所需要花费的贡献
$xyyl=200000000;//所需要银两
$xygxym=602;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
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
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 




} elseif($npcc==30){   
$xygx=3000;//所需要花费的贡献
$xyyl=5000000000;//所需要银两
$xygxym=603;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
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
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 




} elseif($npcc==31){   
$xygx=1000;//所需要花费的贡献
$xyyl=100000000;//所需要银两
$xygxym=603;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖1亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=625;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 


} elseif($npcc==32){   
$xygx=1000;//所需要花费的贡献
$xyyl=100000000;//所需要银两
$xygxym=603;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 



} elseif($npcc==33){   
$xygx=3000;//所需要花费的贡献
$xyyl=300000000;//所需要银两
$xygxym=604;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖5亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=626;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 


} elseif($npcc==34){   
$xygx=6000;//所需要花费的贡献
$xyyl=600000000;//所需要银两
$xygxym=604;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖10亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=627;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 


} elseif($npcc==35){   
$xygx=1000;//所需要花费的贡献
$xyyl=100000000;//所需要银两
$xygxym=604;//所在页面
if($gjgx1>=$xygx){  
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
$wpdz4[]=$xyyl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd==2) {
include("./ini/bpp_ini.php");
$gjgx2=$gjgx1-$xygx;
$iniFile->updItem('贡献', [$xl => $gjgx2]);
include("./sql/mysql.php");//调用数据库连接 
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gjgx2 where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=red>恭喜你！！兑换成功！！失去".$xygx."点国家贡献~~~</font><br>";
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
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} else{
echo "<font color=red>对不起！！你的银两不足！！</font><br>";
} 
} else{
echo "<font color=red>对不起！！你的国家贡献不足！！</font><br>";
} 




} else{
$xygx=99999999999;//所需要花费的贡献
$xyyl=99999999999;//所需要银两
$xygxym=186;//所在页面
}

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=$xygxym;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";


} else{
echo "<font color=black>你还未加入任何国家！！</font><br>";
}






echo "<br>";



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
include("./ini/jjsini.php");
//解锁当前使用的ini



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>