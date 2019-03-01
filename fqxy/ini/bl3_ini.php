<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="bl3.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


}else{
 
$inina="bl3.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家]");
$iniFile = new iniFile($file);
$iniFile->addItem('玩家排序',['初始' => '排序']); 
$iniFile->addItem('玩家排序1',['初始' => '排序']); 
$iniFile->addItem('玩家id',['初始' => 123]); 
$iniFile->addItem('玩家名字',['初始' => 123]); 
$iniFile->addItem('玩家vip',['初始' => 123]); 
$iniFile->addItem('玩家结婚',['初始' => 123]); 

}
$iniFile = new iniFile($file);



?>