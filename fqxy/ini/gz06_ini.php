<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="gz06.ini";
$path='acher/guoz';
$file = $path."/".$inina;	
if(file_exists($file))
{


}
else
{
   //连接数据库提取数据写入ini 

$inina="gz06.ini";
$path='acher/guoz';
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[国战信息]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('防守时间',['初始' => 0]); 
$iniFile->addItem('防守国家',['初始' => 0]); 
$iniFile->addItem('防守国家id',['初始' => 0]); 




}

$iniFile = new iniFile($file);


?>