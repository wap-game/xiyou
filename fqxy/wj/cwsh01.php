<?php

//获取自己属性
//调用zt.ini是否存在


//获取返回战斗页面
include("./ini/npc_ini.php");
$yymid=($iniFile->getItem('怪物2号属性','初始'));
$cljpost=$yymid;
//获取返回战斗页面

$zbid=$cwidd;
$ztcwid=$cwidd;
include("./wj/cwztt.php");
$cwsx=($iniFile->getCategory('宠物信息'));

include("./ini/npc_ini.php");
$ncwcz2=($iniFile->getItem('怪物编号','初始'));//宠物出战状态






if($cljpost ==389){
if($ncww02 >0){//优先获得宠物数据
//获取玩家属性
include("./ini/pkxx_ini.php");
# 获取一个分类下所有数据$
$guaiwu=($iniFile->getCategory('怪物2号属性'));

} else{
include("./ini/pkxx_ini.php");	
# 获取一个分类下所有数据$
$guaiwu=($iniFile->getCategory('怪物1号属性'));

} 


} else{

//获取怪物属性
include("./ini/npc_ini.php");
# 获取一个分类下所有数据$
$guaiwu=($iniFile->getCategory('怪物1号属性'));


} 




$gw1=$guaiwu[冰攻]-$cwsx[冰防];
$gw2=$guaiwu[火攻]-$cwsx[火防];
$gw3=$guaiwu[雷攻]-$cwsx[雷防];
$gw4=$cwsx[冰攻]-$guaiwu[冰防];
$gw5=$cwsx[火攻]-$guaiwu[火防];
$gw6=$cwsx[雷攻]-$guaiwu[火防];
$gg1=$gw1+$gw2+$gw3;
$gg2=$gw4+$gw5+$gw6;
//伤害公式





?>


