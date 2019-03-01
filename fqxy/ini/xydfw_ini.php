<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="xydfw.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


}else{
 
$inina="xydfw.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家]");
$iniFile = new iniFile($file);
$iniFile->addItem('所处楼层',['初始' => '1']); 
$iniFile->addItem('10',['初始' => '1']); 
$iniFile->addItem('20',['初始' => '1']); 
$iniFile->addItem('50',['初始' => '1']); 
$iniFile->addItem('60',['初始' => '1']); 
$iniFile->addItem('80',['初始' => '1']); 
$iniFile->addItem('100',['初始' => '1']); 
$iniFile->addItem('150',['初始' => '1']); 
$iniFile->addItem('200',['初始' => '1']); 
$iniFile->addItem('300',['初始' => '1']); 
$iniFile->addItem('400',['初始' => '1']); 
$iniFile->addItem('500',['初始' => '1']); 
$iniFile->addItem('600',['初始' => '1']); 
$iniFile->addItem('700',['初始' => '1']); 
$iniFile->addItem('800',['初始' => '1']); 
$iniFile->addItem('900',['初始' => '1']); 
$iniFile->addItem('1000',['初始' => '1']); 





}
$iniFile = new iniFile($file);



?>