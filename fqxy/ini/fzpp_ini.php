<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="fzpp.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


}else{
 
$inina="fzpp.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家]");
$iniFile = new iniFile($file);
$iniFile->addItem('房间人id',['初始' => 123]); 
$iniFile->addItem('房间人名字',['初始' => 123]); 
$iniFile->addItem('房间人vip',['初始' => 123]); 


}
$iniFile = new iniFile($file);



?>