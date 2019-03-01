<?php
//调用大数运算
include("./wp/func1.php");

//////////////////////////////////////////////////宠物普攻击///////////////////////////////////////////////////	

$shxs=1.1;	
//////////////////造成对象伤害//////////////////
if ($gg2>0) {
$ggp=$gg2/300;	
$aa1=calc($cwsx[max攻击]+100,$ggp,'mul');	
$aa2=calc($cwsx[max攻击]+100,$aa1,'add');		
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
$ggp=$gg2/300*-1;

	
$aa1=calc($guaiwu[防御]+100,$ggp,'mul');	
$aa2=calc($guaiwu[防御]+100,$aa1,'add');		
$aa3=calc($cwsx[max攻击],$aa2,'sub');		
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
$aa1=calc($cwsx[max攻击]+100,$guaiwu[防御],'sub');	
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


if($ncwcz2 ==2){

if ($s>10) {
$jnsh=1;	

$c = ceil($s/ 2);
$d=(mt_rand($c,$s));

$cwdxsh=ceil($d*$jnsh);



}else {
$cwdxsh=1;
}
}


if($cljpost ==389){


if($ncwcz2 ==2){//优先伤害宠物

$wjid=$ckid;
$zbid=$ncwidd;
include("./ini/cw_ini.php");
$ncww02=($iniFile->getItem('宠物hp',$zbid));
$dxssh=$ncww02-$cwdxsh;
$iniFile->updItem('宠物hp', [$zbid => $dxssh]);
include("./ini/pk_ini.php");
$iniFile->updItem('宠物伤害', [$wjid1 => $cwdxsh]);
$iniFile->updItem('宠物攻击语', [$wjid1 => '对你使用了普通攻击']);
include("./ini/cw_ini.php");
if($dxssh <0){//宠物阵亡
$iniFile->updItem('宠物出战状态', [$zbid => '1']);
}




$wjid=$wjid1;

} else{
	
	

$wjid=$ckid;
include("./ini/zt_ini.php");
$guaiwuhp=($iniFile->getItem('玩家信息','红'));
$dxssh=$guaiwuhp-$cwdxsh;
$iniFile->updItem('玩家信息', ['红' => $dxssh]);
include("./ini/pk_ini.php");
$iniFile->updItem('宠物伤害', [$wjid1 => $cwdxsh]);
$iniFile->updItem('宠物攻击语', [$wjid1 => '对你使用了普通攻击']);
$ncwwjsh1=$dxssh;
$wjid=$wjid1;

} 




}else {
	

	
	
	
include("./wj/cwsh04.php");//造成对象伤害写入数据
//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/cwsh03.php");
//////////////////造成自己伤害//////////////////
}



//////////////////////////////////////////////////宠物普攻击///////////////////////////////////////////////////


	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	



?>


