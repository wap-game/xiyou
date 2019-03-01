<?php

//////////////////造成对象伤害//////////////////
if ($gg2>0) {

//$cs=(($wjxx1[max攻击]+$wjxx1[max攻击]*$gg2/10*0.15)-$guaiwu[防御])*$shxs;
//参数3指定运算方法:add加,sub减,mul乖,div除,pow幂,mod取模,sqrt求算术平方根
$ggp=$gg2/300;	
$aa1=calc($wjxx1[max攻击]+100,$ggp,'mul');	

$aa2=calc($wjxx1[max攻击]+100,$aa1,'add');		
$aa3=calc($aa2,$guaiwu[防御],'sub');		
$aa4=calc($aa3,$shxs,'mul');
if($aa4>=1){

//随机暴击
$bz= rand(1, 10);
if($bz==10){
$bz= rand(1, 10);
$aa0=1+$bz/10;
$aa4=calc($aa4,$aa0,'mul');
} else{	
} 
$s=$aa4*1.3;	
} else{	
$s=0;	

} 
		
} elseif($gg2<0){

//参数3指定运算方法:add加,sub减,mul乖,div除,pow幂,mod取模,sqrt求算术平方根



$ggp=$gg2/300*-1;	
$aa1=calc($guaiwu[防御]+100,$ggp,'mul');	

$aa2=calc($guaiwu[防御]+100,$aa1,'add');	

$aa3=calc($wjxx1[max攻击],$aa2,'sub');	

$aa4=calc($aa3,$shxs,'mul');
if($aa4>=1){


//随机暴击
$bz= rand(1, 10);
if($bz==10){
$bz= rand(1, 10);
$aa0=1+$bz/10;
$aa4=calc($aa4,$aa0,'mul');
} else{	
} 
$s=$aa4*1.1;	

} else{	
$s=0;
} 

} elseif($gg2==0){

//参数3指定运算方法:add加,sub减,mul乖,div除,pow幂,mod取模,sqrt求算术平方根	
$aa1=calc($wjxx1[max攻击]+100,$guaiwu[防御],'sub');	
$aa4=calc($aa1,$shxs,'mul');	

if($aa4>=1){

//随机暴击
$bz= rand(1, 10);
if($bz==10){
$bz= rand(1, 10);
$aa0=1+$bz/10;
$aa4=calc($aa4,$aa0,'mul');
} else{	
} 
$s=$aa4*1.2;	

} else{	
$s=0;	

} 


}else {
$s=0;
}




include("./wj/shxxx01.php");//判断是否伤害爆表





if ($s>10) {
	


$c = ceil($s/ 2);
$d=(mt_rand($c,$s));
include("./wj/shxxx02.php");//调用是否溢出返还真是伤害

$dxsh=ceil($d*$jnsh);






}else {

$dxsh=1;
}


?>


