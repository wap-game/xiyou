<?php

if($npcc==1){
	
	

	
	
	
	
		
} elseif($npcc==337){//【心有灵犀】（婚戒）
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
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="红宝石四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=49;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=51;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=53;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="金刚石四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=55;//物品id
$wpdz4[]=20;//	需要扣除的量
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
$wpdz4[]=500000000;//	需要扣除的量
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


	
	
	
	
	
	
} elseif($npcc==333||$npcc==334||$npcc==335||$npcc==336){//【镇东神兽】
	
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
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖玄天残叶〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=601;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="〖神兽仙魄〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=602;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量



$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=200000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=3000000000;//	需要扣除的量
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
} elseif($npcc==338){//【心有灵犀】（婚链）
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
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量


$wpdz1[]="红宝石四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=49;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=51;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=53;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="金刚石四";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=55;//物品id
$wpdz4[]=20;//	需要扣除的量
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
$wpdz4[]=500000000;//	需要扣除的量
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

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
} elseif($npcc==400){//【幻想枪Ⅰ】
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
$wpdz4[]=80;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=250000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=750000000;//	需要扣除的量
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




