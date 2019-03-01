<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="pkblxx.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


}else{
 
$inina="pkblxx.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家]");
$iniFile = new iniFile($file);
$iniFile->addItem('玩家名字',['初始' => 123]); 
$iniFile->addItem('玩家伤害',['初始' => 123]); 
$iniFile->addItem('玩家攻击语',['初始' => 123]); 









//初始
}
$iniFile = new iniFile($file);


?>