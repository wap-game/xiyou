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




include("./sql/mysql.php");//调用数据库连接 
$sl=1;
include("./wj/dyxx.php");
include("./pz/ini_pz07.php");//调用ini缓存位置
if($wpsy==2){
include("./wp/wpxx.php");
$wwpfl=$wpfl;//物品分类
$wpid=$npcc;//物品id
$wpkc=$sl;//	需要扣除的量
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除

if($jnypsc==2){//使用完清理快捷键防止空白

} else{	
}






$kcrl=$sl;
//背包容量变更
include("./pz/ini_pzz05.php");

} else{	
}






if($yymid==130){

include("template/xy130.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($yymid ==389){
	//获取返回战斗页面
include("./ini/pkxx_ini.php");
$pkwjid=($iniFile->getItem('怪物编号','1号'));
	$npcc=$pkwjid;
	
include("template/xy389.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
	
	
	
} else{	
include("template/xy010.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
}
















} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>