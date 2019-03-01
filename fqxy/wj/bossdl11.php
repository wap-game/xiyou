<?php

$dlwpts="";
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始


$uuu=$uuu+1;	



$sl= rand(1, 200);	
//物品加
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
$dlwpts="〖金豆〗x".$sl.$dlwpts;
//随机
$bz= rand(1, 100);

if($bz <=40){
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖金星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=317;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$sl=1;
$dlwpts="〖金星升星符〗x".$sl.$dlwpts;
} else {

}

//随机
$bz= rand(1, 100);

if($bz <=40){
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖钻星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=318;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$sl=1;
$dlwpts="〖钻星升星符〗x".$sl.$dlwpts;
} else {

}


//随机
$bz= rand(1, 100);

if($bz <=40){
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖陨星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=319;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$sl=1;
$dlwpts="〖陨星升星符〗x".$sl.$dlwpts;
} else {

}


//随机
$bz= rand(1, 100);

if($bz <=20){
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖诛仙令〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=593;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$sl=1;
$dlwpts="〖诛仙令〗x".$sl.$dlwpts;
} else {

}
//随机
$bz= rand(1, 100);
if($bz <=50){
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖双倍掉宝符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=454;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$sl=1;
$dlwpts="〖双倍掉宝符〗x".$sl.$dlwpts;
} else {

}
//随机
$bz= rand(1, 100);
if($bz <=30){
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖四倍掉宝符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=455;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$sl=1;
$dlwpts="〖四倍掉宝符〗x".$sl.$dlwpts;
} else {

}
//随机
$bz= rand(1, 100);
if($bz <=20){
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖八倍掉宝符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=456;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$sl=1;
$dlwpts="〖八倍掉宝符〗x".$sl.$dlwpts;
} else {

}



//随机
$bz= rand(1, 100);
if($bz <=50){
$sl= rand(1, 10);		
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖荣誉宝石包〗（2个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=494;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
$dlwpts="〖荣誉宝石包〗（2个）x".$sl.$dlwpts;
} else {

}


//随机
$bz= rand(1, 100);
if($bz <=40){
$sl= rand(1, 10);		
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖冠军宝石包〗（1个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=566;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
$dlwpts="〖冠军宝石包〗（1个）x".$sl.$dlwpts;
} else {

}

//随机
$bz= rand(1, 100);
if($bz <=30){
$sl= rand(1, 10);	
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖王者宝石包〗（1个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=587;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
$dlwpts="〖王者宝石包〗（1个）x".$sl.$dlwpts;
} else {

}



//随机
$bz= rand(1, 100);

if($bz <=100){
	//随机
	
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖BOSS如意令〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=695;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$dlwpts="〖BOSS如意令〗x".$sl.$dlwpts;
} else {

}




if($uuu >=1){

include("./rwmap/rwget.php");
} else {

}

?>


