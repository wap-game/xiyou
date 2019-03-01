<?php



$shxs=1.5;	

if ($gg1>0) {
//参数3指定运算方法:add加,sub减,mul乖,div除,pow幂,mod取模,sqrt求算术平方根
$ggp=$gg1/300;	
$aa1=calc($guaiwu[攻击]+100,$ggp,'mul');	
$aa2=calc($guaiwu[攻击]+100,$aa1,'add');		
$aa3=calc($aa2,$cwsx[max防御],'sub');		
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
} else{	
$s=0;	

} 
	
} elseif($gg1<0){


//参数3指定运算方法:add加,sub减,mul乖,div除,pow幂,mod取模,sqrt求算术平方根
$ggp=$gg1/300*-1;
$aa1=calc($cwsx[防御]+100,$ggp,'mul');	
$aa2=calc($cwsx[防御]+100,$aa1,'add');		
$aa3=calc($guaiwu[max攻击],$aa2,'sub');		
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
} else{	
$s=0;	

} 

} elseif($gg1==0){
//参数3指定运算方法:add加,sub减,mul乖,div除,pow幂,mod取模,sqrt求算术平方根	
$aa1=calc($guaiwu[攻击]+100,$cwsx[max防御],'sub');	
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

} else{	
$s=0;	

} 
}else {
$s=0;
}


if ($s>0) {
$c = ceil($s/ 2);
$d=(mt_rand($c,$s));
$cwwjsh=$d;
}else {
$cwwjsh=0;

}
//echo $s;


if ($cwwjsh>=0) {
	
//调用cw.ini是否存在
include("./ini/cw_ini.php");
$ztcwhp=($iniFile->getItem('宠物hp',$ztcwid));	
$cwwjssh=$ztcwhp-$cwwjsh;
$iniFile->updItem('宠物hp', [$ztcwid => $cwwjssh]);

if ($cwwjssh<=0) {
include("./ini/npc_ini.php");
$iniFile->updItem('怪物编号', ['初始' => '3']);//宠物阵亡
//恢复至满血
$zbid=$ztcwid;
include("./wj/cwztt.php");
$cwhp=($iniFile->getItem('宠物信息','血'));	
include("./ini/cw_ini.php");
$iniFile->updItem('宠物hp', [$ztcwid => $cwhp]);
}else {
}






}else {
}










?>


