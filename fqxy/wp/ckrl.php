<?php

	
//ini文件名字
$inina="ckrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);



# 获取一个分类下某个子项的值
$bbrla1=($iniFile->getItem('仓库已用容量','容量'));

//////仓库已用容量/////////
if($bbrla1<0){//背包书卷
unlink($ininame); //删除文件  
//调用bbrl.ini是否存在
   
include("./ini/ckrl_ini.php");




} else{

}
//////仓库已用容量/////////















?>




