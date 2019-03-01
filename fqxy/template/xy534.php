<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

$npcc1=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$ckid=$arr[1];





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






include("./ini/user_ini.php");
$yymid=($iniFile->getItem('最后页面id','页面id'));
if($yymid==93||$yymid==522){



$npcc=$npcc1;
include("template/xy522.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} else{	


$npcc=$npcc1;
include("template/xy389.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");





}







} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>