<?php
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

$pd=2;
echo $manzu1;
} else{
$pd=1;
}



























?>
