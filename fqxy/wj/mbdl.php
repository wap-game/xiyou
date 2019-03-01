<?php






/*

$jry= date('m')*1;
$jrr= date('d')*1;

if ($jry==9&&$jrr==24) {
echo"<font color=red>小轩：中秋节日快乐！游戏的同时别忘了多陪陪家人和孩子哦~~~~活动物品双倍掉落中~~~美滋滋~~~</font></a>"."<br>";

/////////////////////////随机得物品///////////////////////


$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$dlwpts="";
$xtgg=1;
//随机
$bz= rand(1, 3);
$wpdz1[]="【秘宝碎片】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=738;//物品id
$wpdz4[]=$bz;//	量
$wpdz5[]=1;//	重量
$dlwpts="【秘宝碎片】x".$bz.$dlwpts;
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
$wpdz1[]="【秘宝钥匙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=737;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="【秘宝钥匙】x1".$dlwpts;
$xtgg=2;
}else{
}

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=5){
$wpdz1[]="〖时装碎片〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=818;//物品id
$wpdz4[]=1*2;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖时装碎片〗x2".$dlwpts;
$xtgg=2;
}else{
}

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=5){
$wpdz1[]="〖时装契约〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=819;//物品id
$wpdz4[]=1*2;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖时装契约〗x2".$dlwpts;
$xtgg=2;
}else{
}
//随机
$bz= rand(1, 666);
if($bz >=1&&$bz <=5){
$wpdz1[]="〖时装凭证〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=819;//物品id
$wpdz4[]=1*2;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖时装凭证〗x2".$dlwpts;
$xtgg=2;
}else{
}



//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$wpdz1[]="【糯米粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=741;//物品id
$wpdz4[]=1*2;//	量
$wpdz5[]=1;//	重量
$dlwpts="【糯米粉】x2".$dlwpts;
$xtgg=2;
}else{
}











//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$wpdz1[]="〖香甜桂花〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=742;//物品id
$wpdz4[]=1*2;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖香甜桂花〗x2".$dlwpts;
$xtgg=2;
}else{
}

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$wpdz1[]="〖玉兔蜜糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=743;//物品id
$wpdz4[]=1*2;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖玉兔蜜糖〗x2".$dlwpts;
$xtgg=2;
}else{
}


//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=5){
$wpdz1[]="【金秋的思念】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=744;//物品id
$wpdz4[]=1*2;//	量
$wpdz5[]=1;//	重量
$dlwpts="【金秋的思念】x2".$dlwpts;
$xtgg=2;
}else{
}


//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
$wpdz1[]="〖风花月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=772;//物品id
$wpdz4[]=1*2;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖风花月饼礼盒〗x2".$dlwpts;
$xtgg=2;
}else{
}

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
$wpdz1[]="〖雪月月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=773;//物品id
$wpdz4[]=1*2;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖雪月月饼礼盒〗x2".$dlwpts;
$xtgg=2;
}else{
}

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
$wpdz1[]="〖金秋月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=774;//物品id
$wpdz4[]=1*2;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖金秋月饼礼盒〗x2".$dlwpts;
$xtgg=2;
}else{
}

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
$wpdz1[]="〖鸿福月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=775;//物品id
$wpdz4[]=1*2;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖鸿福月饼礼盒〗x2".$dlwpts;
$xtgg=2;
}else{
}

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=5){
$wpdz1[]="〖嫦娥月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=776;//物品id
$wpdz4[]=1*2;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖嫦娥月饼礼盒〗x2".$dlwpts;
$xtgg=2;
}else{
}




//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
$wpdz1[]="【秘宝宝箱】";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=739;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="【秘宝宝箱】x1".$dlwpts;
$xtgg=2;
}else{
}
//物品加
include("./rwmap/rwget.php");

/////////////////////////随机得物品///////////////////////
//随机
$bz= rand(500000, 3000000);
$jy=$bz*3;
include("./pz/ini_pzz023.php");












} else {

/////////////////////////随机得物品///////////////////////


$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$dlwpts="";
$xtgg=1;
//随机
$bz= rand(1, 3);
$wpdz1[]="【秘宝碎片】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=738;//物品id
$wpdz4[]=$bz;//	量
$wpdz5[]=1;//	重量
$dlwpts="【秘宝碎片】x".$bz.$dlwpts;
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
$wpdz1[]="【秘宝钥匙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=737;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="【秘宝钥匙】x1".$dlwpts;
$xtgg=2;
}else{
}

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=5){
$wpdz1[]="〖时装碎片〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=818;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖时装碎片〗".$dlwpts;
$xtgg=2;
}else{
}

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=5){
$wpdz1[]="〖时装契约〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=819;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖时装契约〗".$dlwpts;
$xtgg=2;
}else{
}
//随机
$bz= rand(1, 666);
if($bz >=1&&$bz <=5){
$wpdz1[]="〖时装凭证〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=819;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖时装凭证〗".$dlwpts;
$xtgg=2;
}else{
}



//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$wpdz1[]="【糯米粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=741;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="【糯米粉】x1".$dlwpts;
$xtgg=2;
}else{
}











//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$wpdz1[]="〖香甜桂花〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=742;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖香甜桂花〗x1".$dlwpts;
$xtgg=2;
}else{
}

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$wpdz1[]="〖玉兔蜜糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=743;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖玉兔蜜糖〗x1".$dlwpts;
$xtgg=2;
}else{
}


//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=5){
$wpdz1[]="【金秋的思念】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=744;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="【金秋的思念】x1".$dlwpts;
$xtgg=2;
}else{
}


//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
$wpdz1[]="〖风花月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=772;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖风花月饼礼盒〗x1".$dlwpts;
$xtgg=2;
}else{
}

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
$wpdz1[]="〖雪月月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=773;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖雪月月饼礼盒〗x1".$dlwpts;
$xtgg=2;
}else{
}

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
$wpdz1[]="〖金秋月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=774;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖金秋月饼礼盒〗x1".$dlwpts;
$xtgg=2;
}else{
}

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
$wpdz1[]="〖鸿福月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=775;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖鸿福月饼礼盒〗x1".$dlwpts;
$xtgg=2;
}else{
}

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=5){
$wpdz1[]="〖嫦娥月饼礼盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=776;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="〖嫦娥月饼礼盒〗x1".$dlwpts;
$xtgg=2;
}else{
}




//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
$wpdz1[]="【秘宝宝箱】";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=739;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="【秘宝宝箱】x1".$dlwpts;
$xtgg=2;
}else{
}
//物品加
include("./rwmap/rwget.php");

/////////////////////////随机得物品///////////////////////
//随机
$bz= rand(500000, 3000000);
$jy=$bz;
include("./pz/ini_pzz023.php");




}

*/


$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$dlwpts="";
$xtgg=1;
//随机
$bz= rand(1, 3);
$wpdz1[]="【秘宝碎片】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=738;//物品id
$wpdz4[]=$bz;//	量
$wpdz5[]=1;//	重量
$dlwpts="【秘宝碎片】x".$bz.$dlwpts;
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
$wpdz1[]="【秘宝钥匙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=737;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="【秘宝钥匙】x1".$dlwpts;
$xtgg=2;
}else{
}




//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
$wpdz1[]="【秘宝宝箱】";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=739;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="【秘宝宝箱】x1".$dlwpts;
$xtgg=2;
}else{
}


//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=5){
$wpdz1[]="【金秋的思念】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=744;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$dlwpts="【金秋的思念】x1".$dlwpts;
$xtgg=2;
}else{
}
/*
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=3){
$wpdz1[]="〖万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=563;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$wpdz1[]="【清】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=558;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}


$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
$wpdz1[]="【凉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=559;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}



$bz= rand(1, 100);
if($bz >=1&&$bz <=40){

$wpdz1[]="【一】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=560;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}


$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$wpdz1[]="【夏】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=561;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=3){
$wpdz1[]="〖至尊宝密令〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=613;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}


$bz= rand(1, 100);
if($bz >=1&&$bz <=50){
$wpdz1[]="〖金甲圣衣〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=609;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}


$bz= rand(1, 100);
if($bz >=1&&$bz <=50){
$wpdz1[]="〖七彩祥云〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=610;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}


$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}


$bz= rand(1, 100);
if($bz >=1&&$bz <=50){
$wpdz1[]="〖紧箍咒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=612;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}




$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
//随机
$bz= rand(1, 3);
$wpdz1[]="【粉笔】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=684;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
//随机
$bz= rand(1, 3);
$wpdz1[]="【橡皮擦】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=685;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}


$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
//随机
$bz= rand(1, 3);
$wpdz1[]="【铅笔】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=686;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
//随机
$bz= rand(1, 3);
$wpdz1[]="【墨水】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=687;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$bz= rand(1, 3);
$wpdz1[]="〖女神同桌〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=688;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}



$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
$wpdz1[]="〖鸳鸯帕〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=634;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=3){
$wpdz1[]="〖姻缘草〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=635;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}



$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
$wpdz1[]="〖银心铃〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=636;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=3){
$wpdz1[]="〖七夕万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=657;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}


$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$wpdz1[]="【甜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=630;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}
$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
$wpdz1[]="【蜜】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=631;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}
$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$wpdz1[]="【七】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=632;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=40){

$wpdz1[]="【夕】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=633;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}
$bz= rand(1, 100);
if($bz >=1&&$bz <=70){
$wpdz1[]="【喜鹊蛋】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=591;//物品id
$wpdz4[]=2;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}
$bz= rand(1, 100);
if($bz >=1&&$bz <=5){

$wpdz1[]="【小喜鹊】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=592;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}


//物品加
include("./rwmap/rwget.php");
*/




/*
$bz= rand(1, 100);
if($bz >=1&&$bz <=15){
$wpdz1[]="〖国庆藏宝图〗（金图）";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=841;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
$wpdz1[]="〖国庆万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=836;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}


$bz= rand(1, 100);
if($bz >=1&&$bz <=50){
$wpdz1[]="〖国庆愉快卡〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=835;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}






$bz= rand(1, 100);
if($bz >=1&&$bz <=3){
$wpdz1[]="【国庆金铲】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=837;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}
$bz= rand(1, 100);
if($bz >=1&&$bz <=50){
$wpdz1[]="【欢】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=832;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
$wpdz1[]="【度】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=833;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}
$bz= rand(1, 100);
if($bz >=1&&$bz <=50){
$wpdz1[]="【国】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=834;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}


$bz= rand(1, 100);
if($bz >=1&&$bz <=50){
$wpdz1[]="【庆】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=835;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

include("./rwmap/rwget.php");
*/

/*

$bz= rand(1, 100);
if($bz >=1&&$bz <=5){
//随机
$bz= rand(1, 3);
$wpdz1[]="〖鸟蛋〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=894;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$bz= rand(1, 3);
$wpdz1[]="〖奶油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=895;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$bz= rand(1, 3);
$wpdz1[]="〖白糖〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=896;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}
$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$bz= rand(1, 3);
$wpdz1[]="〖牛奶〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=897;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}
$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$bz= rand(1, 3);
$wpdz1[]="〖面粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=898;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}


$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$bz= rand(1, 3);
$wpdz1[]="〖黄油〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=899;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$bz= rand(1, 3);
$wpdz1[]="〖小麦粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=900;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$bz= rand(1, 3);
$wpdz1[]="〖巧克力酱〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=901;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}
$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$bz= rand(1, 3);
$wpdz1[]="〖可可粉〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=902;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}
$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$bz= rand(1, 3);
$wpdz1[]="〖力娇酒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=903;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=5){
//随机
$bz= rand(1, 3);
$wpdz1[]="〖半〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=922;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}
$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$bz= rand(1, 3);
$wpdz1[]="〖周〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=923;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$bz= rand(1, 3);
$wpdz1[]="〖年〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=924;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$bz= rand(1, 3);
$wpdz1[]="〖庆〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=925;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$bz= rand(1, 3);
$wpdz1[]="〖典〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=926;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}









$bz= rand(1, 600);
if($bz >=1&&$bz <=20){
//随机
$bz= rand(1, 3);
$wpdz1[]="〖原料购物票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=904;//物品id
$wpdz4[]=$bz;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

*/


$bz= rand(1, 100);
if($bz >=1&&$bz <=50){
//随机
$wpdz1[]="【面粉】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=946;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
//随机
$wpdz1[]="【红枣】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=947;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
//随机
$wpdz1[]="【栗子】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=948;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$wpdz1[]="【杏仁】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=949;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
//随机
$wpdz1[]="〖小公主の材料票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=950;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=70){
//随机
$wpdz1[]="〖小公主の仙竹〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=951;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=70){
//随机
$wpdz1[]="【黑沃土】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=942;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=70){
//随机
$wpdz1[]="【仙玉露】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=943;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}


/*

$bz= rand(1, 100);
if($bz >=1&&$bz <=70){
//随机
$wpdz1[]="【万】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1004;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=50){
//随机
$wpdz1[]="【圣】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1005;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=70){
//随机
$wpdz1[]="【节】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1006;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=70){
//随机
$wpdz1[]="【快】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1007;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=70){
//随机
$wpdz1[]="【乐】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1008;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}
$bz= rand(1, 100);
if($bz >=1&&$bz <=70){
//随机
$wpdz1[]="〖万圣节万能字〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1009;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=70){
//随机
$wpdz1[]="【万圣节捣蛋劵】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1046;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

*/

/*
$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$wpdz1[]="【烤火鸡】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1059;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}
$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$wpdz1[]="【南瓜饼】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1060;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$wpdz1[]="【红莓酱】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1061;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
//随机
$wpdz1[]="【甜山芋】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1062;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=50){
//随机
$wpdz1[]="【玉蜀黎】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1063;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=50){
//随机
$wpdz1[]="〖感恩票〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=1064;//物品id
$wpdz4[]=1;//	掉落的量
$wpdz5[]=1;//	重量
}else{
}
*/
include("./rwmap/rwget.php");
/////////////////////////随机得物品///////////////////////

//随机
$bz= rand(500000, 3000000);
$jy=$bz;
include("./pz/ini_pzz023.php");



if($xtgg==2){
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx="皇天不负有心人~~~恭喜玩家".$wjmz."寻得了【天降秘宝】~~~获得大量奖励";
include("./msg/msgg02.php");
}else{
}





?>


