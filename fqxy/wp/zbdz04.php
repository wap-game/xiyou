<?php

if($npcc ==31){
		
///////////////////////////////////////////////////////////////////
//负重检测
$jjmz="【伏虎盔甲】";      //要打造的名字
$zbid1=76;                 //装备id
$zbzl1=10;                //装备重量
$fzzl1=$zbzl1;            //得到多个需更改负重变量
//得到一个物品
$ddfz=$fzzl1+$ddfz;
include("./pz/ini_pzz010.php");//判断
if($pdfz==2){




$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始


//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="【妖将合金】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=88;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【野熊铠甲】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=89;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="红水晶二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=32;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=34;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=36;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="佛印石二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=38;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量
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
//这里是得到装备代码


echo "<font color=red>恭喜你！打造".$jjmz."成功</font>"."<br>";
include("./pz/ini_pzz011.php");
//背包容量变更加
$kcrl=$zbzl1;
include("./pz/ini_pzz09.php");

//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打造".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}
	
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！打造".$jjmz."失败，负重不足！！</font>"."<br>";
}

	

} elseif($npcc ==32){
		
///////////////////////////////////////////////////////////////////
//负重检测
$jjmz="【伏虎头盔】";      //要打造的名字
$zbid1=107;                 //装备id
$zbzl1=10;                //装备重量
$fzzl1=$zbzl1;            //得到多个需更改负重变量
//得到一个物品
$ddfz=$fzzl1+$ddfz;
include("./pz/ini_pzz010.php");//判断
if($pdfz==2){




$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始


//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="【祭祀之帽】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=80;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【剥皮鬼之皮】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=81;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="红水晶二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=32;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=34;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=36;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="佛印石二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=38;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量
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
//这里是得到装备代码


echo "<font color=red>恭喜你！打造".$jjmz."成功</font>"."<br>";
include("./pz/ini_pzz011.php");
//背包容量变更加
$kcrl=$zbzl1;
include("./pz/ini_pzz09.php");

//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打造".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}
	
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！打造".$jjmz."失败，负重不足！！</font>"."<br>";
}

	

} elseif($npcc ==33){
		
///////////////////////////////////////////////////////////////////
//负重检测
$jjmz="【伏虎战靴】";      //要打造的名字
$zbid1=139;                 //装备id
$zbzl1=10;                //装备重量
$fzzl1=$zbzl1;            //得到多个需更改负重变量
//得到一个物品
$ddfz=$fzzl1+$ddfz;
include("./pz/ini_pzz010.php");//判断
if($pdfz==2){




$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始


//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="【白骨靴】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=78;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【食尸鬼之皮】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=79;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="红水晶二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=32;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=34;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=36;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=39;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量
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
//这里是得到装备代码


echo "<font color=red>恭喜你！打造".$jjmz."成功</font>"."<br>";
include("./pz/ini_pzz011.php");
//背包容量变更加
$kcrl=$zbzl1;
include("./pz/ini_pzz09.php");

//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打造".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}
	
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！打造".$jjmz."失败，负重不足！！</font>"."<br>";
}


} elseif($npcc ==34){
		
///////////////////////////////////////////////////////////////////
//负重检测
$jjmz="【伏虎项链】";      //要打造的名字
$zbid1=171;                 //装备id
$zbzl1=10;                //装备重量
$fzzl1=$zbzl1;            //得到多个需更改负重变量
//得到一个物品
$ddfz=$fzzl1+$ddfz;
include("./pz/ini_pzz010.php");//判断
if($pdfz==2){




$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始


//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="【白骨项链】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=82;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【炼尸宝石】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=83;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="红水晶二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=32;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=34;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=36;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=39;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量
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
//这里是得到装备代码


echo "<font color=red>恭喜你！打造".$jjmz."成功</font>"."<br>";
include("./pz/ini_pzz011.php");
//背包容量变更加
$kcrl=$zbzl1;
include("./pz/ini_pzz09.php");

//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打造".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}
	
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！打造".$jjmz."失败，负重不足！！</font>"."<br>";
}
	
} elseif($npcc ==35){
		
///////////////////////////////////////////////////////////////////
//负重检测
$jjmz="【伏虎手镯】";      //要打造的名字
$zbid1=202;                 //装备id
$zbzl1=10;                //装备重量
$fzzl1=$zbzl1;            //得到多个需更改负重变量
//得到一个物品
$ddfz=$fzzl1+$ddfz;
include("./pz/ini_pzz010.php");//判断
if($pdfz==2){




$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始


//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="【黑熊宝石】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=86;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【鹿角手镯】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=87;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="红水晶二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=32;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝水晶二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=34;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄水晶二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=36;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="玄武石二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=39;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量
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
//这里是得到装备代码


echo "<font color=red>恭喜你！打造".$jjmz."成功</font>"."<br>";
include("./pz/ini_pzz011.php");
//背包容量变更加
$kcrl=$zbzl1;
include("./pz/ini_pzz09.php");

//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打造".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}
	
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！打造".$jjmz."失败，负重不足！！</font>"."<br>";
}	



} elseif($npcc ==36){
		
///////////////////////////////////////////////////////////////////
//负重检测
$jjmz="【阐气瓶】";      //要打造的名字
$zbid1=238;                 //装备id
$zbzl1=10;                //装备重量
$fzzl1=$zbzl1;            //得到多个需更改负重变量
//得到一个物品
$ddfz=$fzzl1+$ddfz;
include("./pz/ini_pzz010.php");//判断
if($pdfz==2){




$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始


//提供需要扣除的物品作为判读依据

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
//这里是得到装备代码


echo "<font color=red>恭喜你！打造".$jjmz."成功</font>"."<br>";
include("./pz/ini_pzz011.php");
//背包容量变更加
$kcrl=$zbzl1;
include("./pz/ini_pzz09.php");

//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打造".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}
	
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！打造".$jjmz."失败，负重不足！！</font>"."<br>";
}


} elseif($npcc ==37){
		
///////////////////////////////////////////////////////////////////
//负重检测
$jjmz="【风火双轮】";      //要打造的名字
$zbid1=297;                 //装备id
$zbzl1=10;                //装备重量
$fzzl1=$zbzl1;            //得到多个需更改负重变量
//得到一个物品
$ddfz=$fzzl1+$ddfz;
include("./pz/ini_pzz010.php");//判断
if($pdfz==2){




$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始


//提供需要扣除的物品作为判读依据

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
//这里是得到装备代码


echo "<font color=red>恭喜你！打造".$jjmz."成功</font>"."<br>";
include("./pz/ini_pzz011.php");
//背包容量变更加
$kcrl=$zbzl1;
include("./pz/ini_pzz09.php");

//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打造".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}
	
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！打造".$jjmz."失败，负重不足！！</font>"."<br>";
}

	

} elseif($npcc ==38){
		
///////////////////////////////////////////////////////////////////
//负重检测
$jjmz="【玉角麒麟】";      //要打造的名字
$zbid1=298;                 //装备id
$zbzl1=10;                //装备重量
$fzzl1=$zbzl1;            //得到多个需更改负重变量
//得到一个物品
$ddfz=$fzzl1+$ddfz;
include("./pz/ini_pzz010.php");//判断
if($pdfz==2){




$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始


//提供需要扣除的物品作为判读依据

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
//这里是得到装备代码


echo "<font color=red>恭喜你！打造".$jjmz."成功</font>"."<br>";
include("./pz/ini_pzz011.php");
//背包容量变更加
$kcrl=$zbzl1;
include("./pz/ini_pzz09.php");

//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打造".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}
	
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！打造".$jjmz."失败，负重不足！！</font>"."<br>";
}

	

} elseif($npcc ==39){
		
///////////////////////////////////////////////////////////////////
//负重检测
$jjmz="【五彩神牛】";      //要打造的名字
$zbid1=299;                 //装备id
$zbzl1=10;                //装备重量
$fzzl1=$zbzl1;            //得到多个需更改负重变量
//得到一个物品
$ddfz=$fzzl1+$ddfz;
include("./pz/ini_pzz010.php");//判断
if($pdfz==2){




$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始


//提供需要扣除的物品作为判读依据

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
//这里是得到装备代码


echo "<font color=red>恭喜你！打造".$jjmz."成功</font>"."<br>";
include("./pz/ini_pzz011.php");
//背包容量变更加
$kcrl=$zbzl1;
include("./pz/ini_pzz09.php");

//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打造".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}
	
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！打造".$jjmz."失败，负重不足！！</font>"."<br>";
}

		

} elseif($npcc ==40){
		
///////////////////////////////////////////////////////////////////
//负重检测
$jjmz="【章鱼哥】";      //要打造的名字
$zbid1=300;                 //装备id
$zbzl1=10;                //装备重量
$fzzl1=$zbzl1;            //得到多个需更改负重变量
//得到一个物品
$ddfz=$fzzl1+$ddfz;
include("./pz/ini_pzz010.php");//判断
if($pdfz==2){




$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始


//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="声望";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=50000;//	需要扣除的量
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
//这里是得到装备代码


echo "<font color=red>恭喜你！打造".$jjmz."成功</font>"."<br>";
include("./pz/ini_pzz011.php");
//背包容量变更加
$kcrl=$zbzl1;
include("./pz/ini_pzz09.php");

//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打造".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}
	
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！打造".$jjmz."失败，负重不足！！</font>"."<br>";
}







} else{

echo "<font color=black>没有这个装备id编号".$npcc."请尝试联系gm解决此问题！！</font><br>";

}



?>