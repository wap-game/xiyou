<?php

	
//ini文件名字
$inina="gsrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);



# 获取一个分类下某个子项的值
$gsbbrla=($iniFile->getItem('挂售已用容量','容量'));
//////强制更新掉背包容量/////////
if($gsbbrla<0){
unlink($ininame); //删除文件  
//调用bbrl.ini是否存在
   
include("./ini/gsrl_ini.php");




} else{

}
//////强制更新掉背包容量/////////


?>




