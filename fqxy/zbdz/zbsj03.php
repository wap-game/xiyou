<?php

if($npcc==1){
	
	

} elseif($npcc==204){//【玄武手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=41;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=43;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=45;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=48;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【玄铁手镯】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=98;//物品id
$wpdz4[]=2;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【黑晶】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=99;//物品id
$wpdz4[]=2;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}


	
		
} elseif($npcc==209){//【玄武撼手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=41;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=43;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=45;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=48;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【烈焰火羽】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=102;//物品id
$wpdz4[]=3;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【冰凌石】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=103;//物品id
$wpdz4[]=3;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=10;//物品id
$wpdz4[]=15000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}


		
} elseif($npcc==214){//【朱雀手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=50;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=52;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=54;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=57;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【紫金】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=105;//物品id105
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【冰凌石】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=103;//物品id103
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【逆鳞】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=104;//物品id104
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=9;//物品id
$wpdz4[]=60000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=10;//物品id
$wpdz4[]=60000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=11;//物品id
$wpdz4[]=60000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=15000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}

	

	



	
	
} elseif($npcc==205){//【无极手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=41;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=43;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=45;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=48;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【玄铁手镯】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=98;//物品id
$wpdz4[]=2;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【黑晶】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=99;//物品id
$wpdz4[]=2;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}


	
		
} elseif($npcc==210){//【无极无道手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=41;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=43;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=45;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=48;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【烈焰火羽】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=102;//物品id
$wpdz4[]=3;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【冰凌石】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=103;//物品id
$wpdz4[]=3;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=10;//物品id
$wpdz4[]=15000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}


		
} elseif($npcc==215){//【太乙手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=50;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=52;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=54;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=57;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【紫金】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=105;//物品id105
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【冰凌石】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=103;//物品id103
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【逆鳞】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=104;//物品id104
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=9;//物品id
$wpdz4[]=60000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=10;//物品id
$wpdz4[]=60000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=11;//物品id
$wpdz4[]=60000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=15000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}




} elseif($npcc==201){//【龙鳞破天手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=41;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=43;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=45;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=48;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=9;//物品id
$wpdz4[]=15000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=3000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}


	
	
} elseif($npcc==206){//【青龙手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=41;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=43;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=45;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=48;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【玄铁手镯】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=98;//物品id
$wpdz4[]=2;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【黑晶】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=99;//物品id
$wpdz4[]=2;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}


	
		
} elseif($npcc==211){//【青龙在天手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=41;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=43;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=45;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=48;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【烈焰火羽】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=102;//物品id
$wpdz4[]=3;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【冰凌石】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=103;//物品id
$wpdz4[]=3;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=10;//物品id
$wpdz4[]=15000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}


		
} elseif($npcc==216){//【天龙手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=50;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=52;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=54;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=57;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【紫金】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=105;//物品id105
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【冰凌石】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=103;//物品id103
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【逆鳞】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=104;//物品id104
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=9;//物品id
$wpdz4[]=60000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=10;//物品id
$wpdz4[]=60000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=11;//物品id
$wpdz4[]=60000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=15000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}








		
} elseif($npcc==232){//【诛仙手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始



//提供需要扣除的物品作为判读依据

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=200;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="红宝石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=58;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=60;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=62;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="佛印石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=65;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=9;//物品id
$wpdz4[]=100000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=10;//物品id
$wpdz4[]=100000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=11;//物品id
$wpdz4[]=100000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=2000000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据


//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}
	
	


















} elseif($npcc==202){//【伏虎降龙手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=41;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=43;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=45;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=48;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=9;//物品id
$wpdz4[]=15000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=3000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";


}


	
	
} elseif($npcc==207){//【金刚手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=41;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=43;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=45;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=48;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【玄铁手镯】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=98;//物品id
$wpdz4[]=2;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【黑晶】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=99;//物品id
$wpdz4[]=2;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	

$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";


}


	
		
} elseif($npcc==212){//【怒目金刚手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=41;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=43;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=45;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=48;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【烈焰火羽】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=102;//物品id
$wpdz4[]=3;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【冰凌石】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=103;//物品id
$wpdz4[]=3;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=10;//物品id
$wpdz4[]=15000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";



}


		
} elseif($npcc==217){//【罗汉手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=50;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=52;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=54;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=57;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【紫金】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=105;//物品id105
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【冰凌石】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=103;//物品id103
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【逆鳞】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=104;//物品id104
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=9;//物品id
$wpdz4[]=60000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=10;//物品id
$wpdz4[]=60000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=11;//物品id
$wpdz4[]=60000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=15000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
echo $kcyl01;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}




} elseif($npcc==203){//【碧海青天手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=41;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=43;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=45;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=48;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=9;//物品id
$wpdz4[]=15000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=3000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}


	
	
} elseif($npcc==208){//【银沙手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=41;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=43;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=45;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=48;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【玄铁手镯】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=98;//物品id
$wpdz4[]=2;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【黑晶】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=99;//物品id
$wpdz4[]=2;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}


	
		
} elseif($npcc==213){//【银沙瀚海手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=41;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=43;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=45;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=48;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【烈焰火羽】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=102;//物品id
$wpdz4[]=3;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【冰凌石】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=103;//物品id
$wpdz4[]=3;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=10;//物品id
$wpdz4[]=15000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}


		
} elseif($npcc==218){//【奔月手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=50;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=52;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=54;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=57;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【紫金】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=105;//物品id105
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【冰凌石】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=103;//物品id103
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【逆鳞】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=104;//物品id104
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=9;//物品id
$wpdz4[]=60000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=10;//物品id
$wpdz4[]=60000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=11;//物品id
$wpdz4[]=60000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=15000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据

//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}






} elseif($npcc==235){//【共工护符】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红宝石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=58;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=60;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=62;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="金刚石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=64;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=9;//物品id
$wpdz4[]=20000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=10;//物品id
$wpdz4[]=20000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=11;//物品id
$wpdz4[]=20000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=20000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据
//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}




} elseif($npcc==224){//【祝融戒指】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红宝石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=58;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=60;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=62;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="佛印石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=65;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=9;//物品id
$wpdz4[]=20000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=10;//物品id
$wpdz4[]=20000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=11;//物品id
$wpdz4[]=20000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=20000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据
//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}



} elseif($npcc ==219||$npcc ==220||$npcc ==221||$npcc ==222||$npcc ==223){//【祝融戒指】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=150000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=350000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据
//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}		
	
	
	
	
} elseif($npcc==236){//【巨灵宝甲】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红水晶五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=59;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=61;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=63;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="金刚石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=64;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=9;//物品id
$wpdz4[]=50000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=10;//物品id
$wpdz4[]=50000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=11;//物品id
$wpdz4[]=50000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据
//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}
	



} elseif($npcc==237){//【巨灵手镯】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据

$wpdz1[]="红宝石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=58;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=60;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=62;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="佛印石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=65;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=9;//物品id
$wpdz4[]=50000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=10;//物品id
$wpdz4[]=50000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=11;//物品id
$wpdz4[]=50000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=50000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据
//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}


} elseif($npcc==238){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=20000;//法宝经验
$fbb2=200000;//修炼经验
$fbb3=5000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码
} elseif($npcc==239){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=50000;//法宝经验
$fbb2=500000;//修炼经验
$fbb3=7000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码
} elseif($npcc==240){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=80000;//法宝经验
$fbb2=900000;//修炼经验
$fbb3=9000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码
} elseif($npcc==241){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=100000;//法宝经验
$fbb2=1500000;//修炼经验
$fbb3=13000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码
} elseif($npcc==242){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=150000;//法宝经验
$fbb2=2100000;//修炼经验
$fbb3=15000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码
} elseif($npcc==243){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=200000;//法宝经验
$fbb2=3000000;//修炼经验
$fbb3=25000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==244){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=250000;//法宝经验
$fbb2=4000000;//修炼经验
$fbb3=36000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==245){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=300000;//法宝经验
$fbb2=5000000;//修炼经验
$fbb3=50000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==246){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=350000;//法宝经验
$fbb2=6000000;//修炼经验
$fbb3=60000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==247){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=500000;//法宝经验
$fbb2=10000000;//修炼经验
$fbb3=80000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==248){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=550000;//法宝经验
$fbb2=20000000;//修炼经验
$fbb3=100000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==249){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=600000;//法宝经验
$fbb2=50000000;//修炼经验
$fbb3=200000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码
} elseif($npcc==250){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=650000;//法宝经验
$fbb2=80000000;//修炼经验
$fbb3=300000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==251){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=700000;//法宝经验
$fbb2=100000000;//修炼经验
$fbb3=500000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==252){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=750000;//法宝经验
$fbb2=200000000;//修炼经验
$fbb3=800000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==253){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=800000;//法宝经验
$fbb2=300000000;//修炼经验
$fbb3=1100000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==254){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=850000;//法宝经验
$fbb2=400000000;//修炼经验
$fbb3=1500000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==255){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=900000;//法宝经验
$fbb2=500000000;//修炼经验
$fbb3=1900000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==256){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=1000000;//法宝经验
$fbb2=600000000;//修炼经验
$fbb3=2500000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==257){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=2000000;//法宝经验
$fbb2=1000000000;//修炼经验
$fbb3=4000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==258){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=2100000;//法宝经验
$fbb2=1100000000;//修炼经验
$fbb3=4200000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==259){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=2200000;//法宝经验
$fbb2=1200000000;//修炼经验
$fbb3=4400000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==260){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=2400000;//法宝经验
$fbb2=1300000000;//修炼经验
$fbb3=4600000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码




} elseif($npcc==261){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=2500000;//法宝经验
$fbb2=1400000000;//修炼经验
$fbb3=4800000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==262){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=2600000;//法宝经验
$fbb2=1500000000;//修炼经验
$fbb3=5000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==263){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=2800000;//法宝经验
$fbb2=1600000000;//修炼经验
$fbb3=5200000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==264){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=2900000;//法宝经验
$fbb2=1700000000;//修炼经验
$fbb3=5300000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==265){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=3000000;//法宝经验
$fbb2=1800000000;//修炼经验
$fbb3=5600000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==266){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=3500000;//法宝经验
$fbb2=2000000000;//修炼经验
$fbb3=6000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==267){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=3700000;//法宝经验
$fbb2=2200000000;//修炼经验
$fbb3=6300000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==268){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=3900000;//法宝经验
$fbb2=2400000000;//修炼经验
$fbb3=6600000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==269){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=4100000;//法宝经验
$fbb2=2600000000;//修炼经验
$fbb3=6900000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==270){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=4300000;//法宝经验
$fbb2=2800000000;//修炼经验
$fbb3=7200000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==271){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=4400000;//法宝经验
$fbb2=3000000000;//修炼经验
$fbb3=7500000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==272){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=4600000;//法宝经验
$fbb2=3200000000;//修炼经验
$fbb3=7800000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==273){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=4800000;//法宝经验
$fbb2=3400000000;//修炼经验
$fbb3=8100000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==274){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=5000000;//法宝经验
$fbb2=3600000000;//修炼经验
$fbb3=8400000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==275){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=5200000;//法宝经验
$fbb2=3800000000;//修炼经验
$fbb3=8700000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==276){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=5400000;//法宝经验
$fbb2=4000000000;//修炼经验
$fbb3=9000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==277){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=6000000;//法宝经验
$fbb2=5000000000;//修炼经验
$fbb3=10000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码



} elseif($npcc==278){//法宝
$zbidx=$npcc;//当前装备id赋值

//提供需要扣除的物品作为判读依据
$fbb1=7000000;//法宝经验
$fbb2=7000000000;//修炼经验
$fbb3=7000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==279){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=8000000;//法宝经验
$fbb2=8000000000;//修炼经验
$fbb3=8000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==280){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=9000000;//法宝经验
$fbb2=9000000000;//修炼经验
$fbb3=9000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==281){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=10000000;//法宝经验
$fbb2=10000000000;//修炼经验
$fbb3=10000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==282){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=11000000;//法宝经验
$fbb2=11000000000;//修炼经验
$fbb3=11000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==283){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=12000000;//法宝经验
$fbb2=12000000000;//修炼经验
$fbb3=12000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==284){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=13000000;//法宝经验
$fbb2=13000000000;//修炼经验
$fbb3=13000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==285){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=14000000;//法宝经验
$fbb2=14000000000;//修炼经验
$fbb3=14000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==286){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=15000000;//法宝经验
$fbb2=15000000000;//修炼经验
$fbb3=15000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==287){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=16000000;//法宝经验
$fbb2=16000000000;//修炼经验
$fbb3=16000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==288){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=17000000;//法宝经验
$fbb2=17000000000;//修炼经验
$fbb3=17000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==289){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=18000000;//法宝经验
$fbb2=18000000000;//修炼经验
$fbb3=18000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==290){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=19000000;//法宝经验
$fbb2=19000000000;//修炼经验
$fbb3=19000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==291){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=20000000;//法宝经验
$fbb2=20000000000;//修炼经验
$fbb3=20000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==292){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=21000000;//法宝经验
$fbb2=21000000000;//修炼经验
$fbb3=21000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==293){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=22000000;//法宝经验
$fbb2=22000000000;//修炼经验
$fbb3=22000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==294){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=23000000;//法宝经验
$fbb2=23000000000;//修炼经验
$fbb3=23000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码

} elseif($npcc==295){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=2400000;//法宝经验
$fbb2=24000000000;//修炼经验
$fbb3=24000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码


} elseif($npcc==296){//法宝
$zbidx=$npcc;//当前装备id赋值
//提供需要扣除的物品作为判读依据
$fbb1=30000000;//法宝经验
$fbb2=30000000000;//修炼经验
$fbb3=30000000000;//银两
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz029.php");//代用代码






} elseif($npcc==234){//【幻想手镯Ⅰ】
$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=60;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=200000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=550000000;//	需要扣除的量
$wpdz5[]=0;//	重量




//提供需要扣除的物品作为判读依据
//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	
	
$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";
	
include("./pz/ini_pzz016.php");//升级

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！升级".$ms1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}





	
	


} else{


}
?>




