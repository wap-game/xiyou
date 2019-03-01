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

if ($bossid==7){
//随机
$sl= rand(1, 20);	
} elseif($bossid ==8){ 
//随机
$sl= rand(1, 20);	
} elseif($bossid ==9){ 
//随机
$sl= rand(1, 50);	
} elseif($bossid ==10){ 
//随机
$sl= rand(1, 100);	
} else {
//随机
$sl= rand(1, 30);	
}

//物品加
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加

$dlwpts="〖金豆〗x".$sl.$dlwpts;

//随机
$bz= rand(1, 110);

if($bz >=1&&$bz <=10){
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖金魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=311;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$sl=10;
$dlwpts="〖金魂〗x".$sl.$dlwpts;
} elseif($bz >=11&&$bz <=20){ 
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖钻魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=312;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$sl=10;
$dlwpts="〖金魂〗x".$sl.$dlwpts;
} elseif($bz >=21&&$bz <=30){ 
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖陨魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=313;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
$sl=10;
$dlwpts="〖陨魂〗x".$sl.$dlwpts;
} elseif($bz >=31&&$bz <=35){ 
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖银星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=316;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$sl=1;
$dlwpts="〖银星升星符〗x".$sl.$dlwpts;

} elseif($bz >=36&&$bz <=40){ 
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖铜星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=315;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$sl=1;
$dlwpts="〖铜星升星符〗x".$sl.$dlwpts;
} elseif($bz >=41&&$bz <=45){ 
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
} elseif($bz >=46&&$bz <=50){ 
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



} elseif($bz >=51&&$bz <=55){ 
//随机
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


} elseif($bz >=56&&$bz <=60){ 
$uuu=$uuu+1;
	//随机
$sl= rand(1, 10);	
//物品加
$wpdz1[]="〖大号财宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=487;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加

$dlwpts="〖大号财宝箱〗x".$sl.$dlwpts;
} elseif($bz >=61&&$bz <=70){ 


$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖齐天大圣〗（宠物蛋）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=570;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$sl=1;
$dlwpts="〖齐天大圣〗（宠物蛋）x".$sl.$dlwpts;

} elseif($bz >=71&&$bz <=110){ 

$uuu=$uuu+1;
//物品加
$wpdz1[]="〖圣灵锻造图纸〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=577;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$sl=1;
$dlwpts="〖圣灵锻造图纸〗x".$sl.$dlwpts;
} else {

}




//随机
$bz= rand(1, 100);

if($bz <=5){
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

if($bz <=20){
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

if($bz <=10){
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

if($bz <=5){
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

if($bz <=5){
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

if($bz <=5){
//随机
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

if($bz <=5){
//随机
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
$bz= rand(1, 20);

if($bz <=5){
	//随机
$sl= rand(1, 10);		
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖1亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=625;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
$dlwpts="〖1亿修炼经验丹〗x".$sl.$dlwpts;
} else {

}


//随机
$bz= rand(1, 20);

if($bz <=5){
	//随机
$sl= rand(1, 10);		
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖5亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=626;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
$dlwpts="〖5亿修炼经验丹〗x".$sl.$dlwpts;
} else {

}


//随机
$bz= rand(1, 40);

if($bz <=5){
	//随机
$sl= rand(1, 10);		
$uuu=$uuu+1;	
//物品加
$wpdz1[]="〖10亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=627;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
$dlwpts="〖10亿修炼经验丹〗x".$sl.$dlwpts;
} else {

}


//随机
$bz= rand(1, 100);

if($bz <=30){
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


