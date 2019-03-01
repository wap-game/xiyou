<?php



$gg1=0;

$shxs=1.5;	
if ($gg1>0) {

//参数3指定运算方法:add加,sub减,mul乖,div除,pow幂,mod取模,sqrt求算术平方根
$ggp=$gg1/300;	
$aa1=calc($nmaxgj+100,$ggp,'mul');	
$aa2=calc($nmaxgj+100,$aa1,'add');		
$aa3=calc($aa2,$omaxfy,'sub');		
$aa4=calc($aa3,$shxs,'mul');
if($aa4>=1){

//随机暴击
$bz= rand(1, 10);
if($bz==10){
$bz= rand(1, 20);
$aa0=1+$bz/10;
$aa4=calc($aa4,$aa0,'mul');
} else{	
} 
$s=$aa4*1.3;	
}else {
$s=0;
}

} elseif($gg1<0){
//参数3指定运算方法:add加,sub减,mul乖,div除,pow幂,mod取模,sqrt求算术平方根
$ggp=$gg1/300*-1;
$aa1=calc($omaxfy+100,$ggp,'mul');	
$aa2=calc($omaxfy+100,$aa1,'add');		
$aa3=calc($nmaxgj,$aa2,'sub');		
$aa4=calc($aa3,$shxs,'mul');
if($aa4>=1){

//随机暴击
$bz= rand(1, 10);
if($bz==10){
$bz= rand(1, 20);
$aa0=1+$bz/10;
$aa4=calc($aa4,$aa0,'mul');
} else{	
} 
$s=$aa4*1.1;
}else {
$s=0;
}
} elseif($gg1==0){
//参数3指定运算方法:add加,sub减,mul乖,div除,pow幂,mod取模,sqrt求算术平方根	


if($nwjmp==3||$nwjmp==4||$nwjmp==5){
$nmaxgj=$nmaxmg;
}else {

}

$aa1=calc($nmaxgj+100,$omaxfy,'sub');	
$aa4=calc($aa1,$shxs,'mul');	
if($aa4>=1){

//随机暴击
$bz= rand(1, 10);
if($bz==10){
$bz= rand(1, 20) ;
$aa0=1+$bz/10;
$aa4=calc($aa4,$aa0,'mul');
} else{	
} 
$s=$aa4*1.2;	
}else {
$s=0;
}

}else {
$s=0;
}

include("./wj/shxxx01.php");//判断是否伤害爆表
if ($s>0) {
$c = ceil($s/ 2);
$d=(mt_rand($c,$s));
include("./wj/shxxx02.php");//调用是否溢出返还真是伤害
$wjsh=$d;
}else {
$wjsh=0;

}



/*
if ($wjsh>=0) {
$wjssh=$wjxx[红]-$wjsh;
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['红' => $wjssh]);
}else {
}

*/


if ($wjsh>=1) {
//修改自己血量
include("./ini/zt_ini.php");
$opkhp=($iniFile->getItem('玩家信息','红'));
$opkhp=$opkhp-$wjsh;
$iniFile->updItem('玩家信息', ['红' => $opkhp]);

//修改自己血量
}else {
}





?>


