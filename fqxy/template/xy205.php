<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){




include("./ini/xtsz_ini.php");
if($npcc==1){
$iniFile->updItem('显示设置', ['图片显示' => '1']);
} elseif ($npcc==2) {
$iniFile->updItem('显示设置', ['图片显示' => '2']);
} elseif ($npcc==3) {
$iniFile->updItem('显示设置', ['公共信息' => '1']);
} elseif ($npcc==4) {
$iniFile->updItem('显示设置', ['公共信息' => '2']);
} elseif ($npcc==5) {
$iniFile->updItem('显示设置', ['国家信息' => '1']);
} elseif ($npcc==6) {
$iniFile->updItem('显示设置', ['国家信息' => '2']);
} elseif ($npcc==7) {
$iniFile->updItem('显示设置', ['私聊信息' => '1']);
} elseif ($npcc==8) {
$iniFile->updItem('显示设置', ['私聊信息' => '2']);
} elseif ($npcc==9) {
$iniFile->updItem('显示设置', ['场景公告' => '1']);
} elseif ($npcc==10) {
$iniFile->updItem('显示设置', ['场景公告' => '2']);



} else{


}

include("template/xy204.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

?>














