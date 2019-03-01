<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="jcyx.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){

} else{
	

   //连接数据库提取数据写入ini 
   
$inina="jcyx.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[系统]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('竞猜答案',['初始' => 123]); 
$iniFile->addItem('竞猜答案1',['初始' => 123]); 
$iniFile->addItem('竞猜答案2',['初始' => 123]); 
$iniFile->addItem('竞猜次数',['初始' => 30]); 
$iniFile->addItem('竞猜关卡',['初始' => 1]); 
$iniFile->addItem('竞猜购买',['初始' => 1]); 
}






$iniFile = new iniFile($file);











?>