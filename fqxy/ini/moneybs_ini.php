<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="moneybs.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


} else{


	
   //连接数据库提取数据写入ini 
   
$inina="moneybs.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家信息]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('财神倍数',['初始' => 1]); 

$iniFile->addCategory('财神倍数', ['初始'=>'1']);

 
 
 
 
 
 
 
 
 

}
$iniFile = new iniFile($file);











?>