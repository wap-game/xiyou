<?php

	
//ini文件名字
$inina="bbrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);



# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('背包已用容量','容量'));


//////强制更新掉背包容量/////////
if($bbrla<0){//背包书卷
unlink($ininame); //删除文件  
//调用bbrl.ini是否存在
   
include("./ini/bbrl_ini.php");




} else{

}
//////强制更新掉背包容量/////////


?>




