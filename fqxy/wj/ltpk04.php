<?php






//将pk信息写入对方
if ($dxsh>=1) {
//修改对方血量
include("./ini/ltbwsx_ini.php");	
$pkhp=($iniFile->getItem('擂台玩家属性','玩家hp'));
$pkhp=$pkhp-$dxsh;
$iniFile->updItem('擂台玩家属性', ['玩家hp' => $pkhp]);
//修改对方血量
} else{

}	














?>


