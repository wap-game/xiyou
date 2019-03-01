<?php




//将pk信息写入对方
$wjid=$wjid1;
include("./ini/zt_ini.php");
$username=($iniFile->getItem('玩家信息','玩家名字'));
//将pk信息写入对方
if ($jnid==1) {	
$pkmsg="对你使用了一招普攻";	
} elseif ($jnidd==2) {
	
} else{

}	
$wjid=$ckid;
include("./ini/pkblxx_ini.php");
$iniFile->updItem('玩家名字', [$wjid1 => $username]);
$iniFile->updItem('玩家攻击语', [$wjid1 => $pkmsg]);
$iniFile->updItem('玩家伤害', [$wjid1 => $dxsh]);
//将pk信息写入对方
if ($dxsh>=1) {
//修改对方血量
include("./ini/zt_ini.php");
$pkhp=($iniFile->getItem('玩家信息','红'));
$pkhp=$pkhp-$dxsh;
$iniFile->updItem('玩家信息', ['红' => $pkhp]);
//修改对方血量
} else{

}	






$wjid=$wjid1;












?>


