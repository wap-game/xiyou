<?php








//获取返回战斗页面
include("./ini/npc_ini.php");
$yymid=($iniFile->getItem('怪物2号属性','初始'));
//获取返回战斗页面

if($yymid==130){
	
	
if ($cwdxsh>0) {
include("./ini/npc_ini.php");
$npcc=($iniFile->getItem('怪物编号','1号'));
$bossid=$npcc;
include("./ini/boss_ini.php");
$guaiwuhp=($iniFile->getItem('世界BOSS属性','血'));
$dxssh=$guaiwuhp-$cwdxsh;
$iniFile->updItem('世界BOSS属性', ['血' => $dxssh]);
}else {
}

}else{
if ($cwdxsh>0) {

$dxssh=$guaiwu[hp]-$cwdxsh;
include("./ini/npc_ini.php");
$iniFile->updItem('怪物1号属性', ['hp' => $dxssh]);

}else {
}
}











?>


