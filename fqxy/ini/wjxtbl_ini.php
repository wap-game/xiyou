<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="wjxtbl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


} else{
   //连接数据库提取数据写入ini 
   
$inina="wjxtbl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家系统变量]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('国战变量',['夺仗' => 123]); 
$iniFile->addCategory('国战变量', ['夺仗'=> '1']);  
   




}
$iniFile = new iniFile($file);




?>