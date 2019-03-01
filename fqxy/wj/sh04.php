<?php




//获取返回战斗页面
include("./ini/npc_ini.php");
$yymid=($iniFile->getItem('怪物2号属性','初始'));
//获取返回战斗页面

if($yymid==130){


if ($dxsh>0) {
include("./ini/npc_ini.php");
$npcc=($iniFile->getItem('怪物编号','1号'));
$bossid=$npcc;

/*
if ($wjid==10000009) {
$dxsh=800000000;
}else {
}

*/

include("./ini/boss_ini.php");
$guaiwuhp=($iniFile->getItem('世界BOSS属性','血'));
$dxssh=$guaiwuhp-$dxsh;
$iniFile->updItem('世界BOSS属性', ['血' => $dxssh]);
}else {
}


} elseif($yymid ==389){
	


if($ncww02 >0){//优先伤害宠物
$ncwwjsh=$dxsh;
$wjid=$ckid;
$dxssh=$ncww02-$dxsh;
$zbid=$ncwidd;
include("./ini/cw_ini.php");
$ncww02=($iniFile->getItem('宠物hp',$zbid));
$iniFile->updItem('宠物hp', [$zbid => $dxssh]);
include("./ini/pk_ini.php");
$iniFile->updItem('玩家伤害', [$wjid1 => $ncwwjsh]);
$jnmz1="对你使用了对你使用了一招".$jnmz;
$iniFile->updItem('玩家攻击语', [$wjid1 => $jnmz1]);
$wjid=$wjid1;

} else{
$ncwwjsh=$dxsh;	
$wjid=$ckid;
include("./ini/zt_ini.php");
$guaiwuhp=($iniFile->getItem('玩家信息','红'));
$dxssh=$guaiwuhp-$dxsh;
$iniFile->updItem('玩家信息', ['红' => $dxssh]);
include("./ini/pk_ini.php");
$iniFile->updItem('玩家伤害', [$wjid1 => $ncwwjsh]);
$jnmz1="对你使用了对你使用了一招".$jnmz;
$iniFile->updItem('玩家攻击语', [$wjid1 => $jnmz1]);
$ncwwjsh1=$dxssh;

$wjid=$wjid1;

} 






}else{
if ($dxsh>0) {
$dxssh=$guaiwu[hp]-$dxsh;
include("./ini/npc_ini.php");
$iniFile->updItem('怪物1号属性', ['hp' => $dxssh]);
}else {
}



}









?>


