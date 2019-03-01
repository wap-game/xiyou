<?php


//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="ltymid.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file))
{


}
else
{
 
$inina="ltymid.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家]");
$iniFile = new iniFile($file);
$iniFile->addItem('页面id',['公共页面' => 1]); 
$iniFile->addItem('页面id',['组队页面' => 123]); 
$iniFile->addItem('页面id',['国家页面' => 123]); 
$iniFile->addItem('页面id',['私聊页面' => 123]); 
$iniFile->addItem('页面id',['国家成员页面' => 123]); 
$iniFile->addItem('页面id',['任命国家成员页面' => 123]); 
$iniFile->addItem('页面id',['附近玩家页面' => 123]); 



/*
$inina="ltymid.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家]");
$iniFile = new iniFile($file);
$iniFile->addItem('公共页面',['初始' => 1]); 
$iniFile->addItem('组队页面',['初始' => 1]); 
$iniFile->addItem('国家页面',['初始' => 1]); 
$iniFile->addItem('私聊页面',['初始' => 1]); 


*/





}
$iniFile = new iniFile($file);





?>