<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="czjf.ini";
$path='acher/all_boss';
$file = $path."/".$inina;	
if(file_exists($file)){


}else{
 
$inina="czjf.ini";
$path='acher/all_boss';
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家]");
$iniFile = new iniFile($file);
$iniFile->addItem('充值积分',['初始' => '0']); 
$iniFile->addItem('召唤',['初始' => '0']); 
$iniFile->addItem('召唤1',['初始' => '0']); 
//初始
}
$iniFile = new iniFile($file);



?>