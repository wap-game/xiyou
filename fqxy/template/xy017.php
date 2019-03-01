<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

//获取返回战斗页面
include("./ini/npc_ini.php");
$yymid=($iniFile->getItem('怪物2号属性','初始'));
$cljpost=$yymid;




//获取返回战斗页面
include("./ini/zd_ini.php");
$szid=($iniFile->getItem('快捷设置','初始'));
if($szid==1){
$szmz="快捷1";
} elseif($szid ==2){
$szmz="快捷2";
} elseif($szid ==3){
$szmz="快捷3";
} elseif($szid ==4){
$szmz="快捷4";
} elseif($szid ==5){
$szmz="快捷5";
} elseif($szid ==6){
$szmz="快捷6";
} elseif($szid ==7){
$szmz="快捷7";
} elseif($szid ==8){
$szmz="快捷8";
} elseif($szid ==9){
$szmz="快捷9";
}else{
}

if($npcc==3){//宠物捕捉
$iniFile->updItem('快捷技能id', [$szmz => $npcc]);
$iniFile->updItem('快捷分类', [$szmz => '3']);	
} elseif($npcc ==15){//查看
$iniFile->updItem('快捷技能id', [$szmz => $npcc]);
$iniFile->updItem('快捷分类', [$szmz => '4']);		
}else{
$iniFile->updItem('快捷技能id', [$szmz => $npcc]);
$iniFile->updItem('快捷分类', [$szmz => '1']);	
}



$jnidd=$npcc;
//调用技能信息
include("./wp/jnxx.php");
$iniFile->updItem('快捷名字', [$szmz => $jnmz]);

echo "<font color=black>成功将".$szmz."设置为了".$jnmz."</font>"."<br>";

include("template/xy014.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");








} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>