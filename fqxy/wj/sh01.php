<?php

//获取自己属性
//调用zt.ini是否存在
include("./ini/zt_ini.php");
include("./wj/ztt.php");

include("./ini/zt_ini.php");
$wjxx=($iniFile->getCategory('玩家信息'));
//动态祝福加成数据
include("./wj/zfzt.php");

//获取返回战斗页面
include("./ini/npc_ini.php");
$yymid=($iniFile->getItem('怪物2号属性','初始'));
$cljpost=$yymid;
//获取返回战斗页面






if($cljpost ==389){


if($ncww02 >0){//优先获得宠物数据
//获取玩家属性
include("./ini/pkxx_ini.php");
# 获取一个分类下所有数据$
$guaiwu=($iniFile->getCategory('怪物2号属性'));

} else{
//获取玩家属性
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


$gw1=$guaiwu[冰攻]-$wjxx1[冰防];
$gw2=$guaiwu[火攻]-$wjxx1[火防];
$gw3=$guaiwu[雷攻]-$wjxx1[雷防];
$gw4=$wjxx1[冰攻]-$guaiwu[冰防];
$gw5=$wjxx1[火攻]-$guaiwu[火防];
$gw6=$wjxx1[雷攻]-$guaiwu[雷防];
$gg1=$gw1+$gw2+$gw3;
$gg2=$gw4+$gw5+$gw6;
//伤害公式


include("./ini/jn_ini.php");
$jnlvl=($iniFile->getItem('技能等级',$npcc));
if($jnlvl ==1){
$jnsh=1;
$kcmp=10;
} elseif($jnlvl ==2){
$jnsh=1.1;
$kcmp=15;
} elseif($jnlvl ==3){
$jnsh=1.2;
$kcmp=20;
} elseif($jnlvl ==4){
$jnsh=1.4;
$kcmp=25;
} elseif($jnlvl ==5){
$jnsh=1.5;
$kcmp=30;
} elseif($jnlvl ==6){	
$jnsh=1.6;
$kcmp=35;
} elseif($jnlvl ==7){
$jnsh=1.7;
$kcmp=40;
} elseif($jnlvl ==8){	
$jnsh=1.8;
$kcmp=45;
} elseif($jnlvl ==9){	
$jnsh=1.9;
$kcmp=50;
} elseif($jnlvl ==10){
$jnsh=2;
$kcmp=60;
} elseif($jnlvl ==11){
$jnsh=2.1;
$kcmp=70;
} else{
$jnsh=1;
}




?>


