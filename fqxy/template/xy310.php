<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
	
	
//〖攻击强化石〗
if($npcc ==1){
$ddfz="";//初始
//得到第一个物品
$bsid1=$npcc;//宝石id
$bssl1=1;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断


//负重判断

if($pdfz==2){


//////////////////////////////////////////////////////

$jjmz="〖攻击强化石〗";      //要打造的名字
$jjid1=$npcc;   //家具id


$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=1000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="红宝石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=22;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=24;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=26;//物品id
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

//这里是得到宝石代码
$kcrl="";
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;


//这里是得到宝石代码


include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."</font>"."<br>";
//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打磨".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}

} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}



} elseif($npcc ==2){
$ddfz="";//初始
//得到第一个物品
$bsid1=$npcc;//宝石id
$bssl1=1;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断


//负重判断

if($pdfz==2){


//////////////////////////////////////////////////////

$jjmz="〖魔攻强化石〗";      //要打造的名字
$jjid1=$npcc;   //家具id


$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=1000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="红宝石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=22;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=24;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=26;//物品id
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

//这里是得到宝石代码
$kcrl="";
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;


//这里是得到宝石代码


include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."</font>"."<br>";
//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打磨".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}

} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}


	
} elseif($npcc ==3){
	
	
	
	
} elseif($npcc ==4){	



} elseif($npcc ==5){
$ddfz="";//初始
//得到第一个物品
$bsid1=$npcc;//宝石id
$bssl1=1;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断


//负重判断

if($pdfz==2){


//////////////////////////////////////////////////////

$jjmz="〖攻击强化玉〗";      //要打造的名字
$jjid1=$npcc;   //家具id


$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=2000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="红宝石二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=31;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=33;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=35;//物品id
$wpdz4[]=10;//	需要扣除的量
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

//这里是得到宝石代码
$kcrl="";
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;


//这里是得到宝石代码


include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."</font>"."<br>";
//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打磨".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}

} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}


} elseif($npcc ==6){
$ddfz="";//初始
//得到第一个物品
$bsid1=$npcc;//宝石id
$bssl1=1;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断


//负重判断

if($pdfz==2){


//////////////////////////////////////////////////////

$jjmz="〖魔攻强化玉〗";      //要打造的名字
$jjid1=$npcc;   //家具id


$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=2000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="红宝石二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=31;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=33;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=35;//物品id
$wpdz4[]=10;//	需要扣除的量
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

//这里是得到宝石代码
$kcrl="";
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;


//这里是得到宝石代码


include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."</font>"."<br>";
//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打磨".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}

} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}



	
} elseif($npcc ==7){
	
} elseif($npcc ==8){
	
		

} elseif($npcc ==9){
$ddfz="";//初始
//得到第一个物品
$bsid1=$npcc;//宝石id
$bssl1=1;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断


//负重判断

if($pdfz==2){


//////////////////////////////////////////////////////

$jjmz="〖攻击之源〗";      //要打造的名字
$jjid1=$npcc;   //家具id


$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=8000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="红宝石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=40;//物品id
$wpdz4[]=40;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=42;//物品id
$wpdz4[]=40;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=44;//物品id
$wpdz4[]=40;//	需要扣除的量
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

//这里是得到宝石代码
$kcrl="";
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;


//这里是得到宝石代码


include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."</font>"."<br>";
//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打磨".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}

} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}

	

} elseif($npcc ==10){
$ddfz="";//初始
//得到第一个物品
$bsid1=$npcc;//宝石id
$bssl1=1;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断


//负重判断

if($pdfz==2){


//////////////////////////////////////////////////////

$jjmz="〖魔攻之源〗";      //要打造的名字
$jjid1=$npcc;   //家具id


$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=8000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="红宝石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=40;//物品id
$wpdz4[]=40;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=42;//物品id
$wpdz4[]=40;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=44;//物品id
$wpdz4[]=40;//	需要扣除的量
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

//这里是得到宝石代码
$kcrl="";
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;


//这里是得到宝石代码


include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."</font>"."<br>";
//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打磨".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}

} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}



} elseif($npcc ==11){
$ddfz="";//初始
//得到第一个物品
$bsid1=$npcc;//宝石id
$bssl1=1;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断


//负重判断

if($pdfz==2){


//////////////////////////////////////////////////////

$jjmz="〖防御强化石〗";      //要打造的名字
$jjid1=$npcc;   //家具id


$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=1000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="红宝石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=22;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=24;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=26;//物品id
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

//这里是得到宝石代码
$kcrl="";
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;


//这里是得到宝石代码


include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."</font>"."<br>";
//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打磨".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}

} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}





} elseif($npcc ==12){
$ddfz="";//初始
//得到第一个物品
$bsid1=$npcc;//宝石id
$bssl1=1;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断


//负重判断

if($pdfz==2){


//////////////////////////////////////////////////////

$jjmz="〖生命强化石〗";      //要打造的名字
$jjid1=$npcc;   //家具id


$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=1000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="红宝石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=22;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=24;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=26;//物品id
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

//这里是得到宝石代码
$kcrl="";
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;


//这里是得到宝石代码


include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."</font>"."<br>";
//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打磨".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}

} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}




	
} elseif($npcc ==13){
	
} elseif($npcc ==14){
	
		

} elseif($npcc ==15){
$ddfz="";//初始
//得到第一个物品
$bsid1=$npcc;//宝石id
$bssl1=1;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断


//负重判断

if($pdfz==2){


//////////////////////////////////////////////////////

$jjmz="〖防御强化玉〗";      //要打造的名字
$jjid1=$npcc;   //家具id


$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=2000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="红宝石二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=31;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=33;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=35;//物品id
$wpdz4[]=10;//	需要扣除的量
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

//这里是得到宝石代码
$kcrl="";
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;


//这里是得到宝石代码


include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."</font>"."<br>";
//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打磨".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}

} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}


	

} elseif($npcc ==16){
$ddfz="";//初始
//得到第一个物品
$bsid1=$npcc;//宝石id
$bssl1=1;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断


//负重判断

if($pdfz==2){


//////////////////////////////////////////////////////

$jjmz="〖生命强化玉〗";      //要打造的名字
$jjid1=$npcc;   //家具id


$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=2000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="红宝石二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=31;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=33;//物品id
$wpdz4[]=10;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石二";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=35;//物品id
$wpdz4[]=10;//	需要扣除的量
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

//这里是得到宝石代码
$kcrl="";
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;


//这里是得到宝石代码


include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."</font>"."<br>";
//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打磨".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}

} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}





} elseif($npcc ==17){
	
} elseif($npcc ==18){
	

} elseif($npcc ==19){
$ddfz="";//初始
//得到第一个物品
$bsid1=$npcc;//宝石id
$bssl1=1;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断


//负重判断

if($pdfz==2){


//////////////////////////////////////////////////////

$jjmz="〖防御之源〗";      //要打造的名字
$jjid1=$npcc;   //家具id


$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=8000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="红宝石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=40;//物品id
$wpdz4[]=40;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=42;//物品id
$wpdz4[]=40;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=44;//物品id
$wpdz4[]=40;//	需要扣除的量
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

//这里是得到宝石代码
$kcrl="";
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;


//这里是得到宝石代码


include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."</font>"."<br>";
//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打磨".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}

} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}



} elseif($npcc ==20){
$ddfz="";//初始
//得到第一个物品
$bsid1=$npcc;//宝石id
$bssl1=1;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断


//负重判断

if($pdfz==2){


//////////////////////////////////////////////////////

$jjmz="〖生命之源〗";      //要打造的名字
$jjid1=$npcc;   //家具id


$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=8000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="红宝石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=40;//物品id
$wpdz4[]=40;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="蓝宝石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=42;//物品id
$wpdz4[]=40;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="黄宝石三";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=44;//物品id
$wpdz4[]=40;//	需要扣除的量
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

//这里是得到宝石代码
$kcrl="";
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;


//这里是得到宝石代码


include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."</font>"."<br>";
//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！打磨".$jjmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}

} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}












	
	
	

} else{
echo "<font color=black>对不起！没有找到需要打磨的宝石/font>"."<br>";

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
include("./ini/jsini.php");
//解锁当前使用的ini

?>