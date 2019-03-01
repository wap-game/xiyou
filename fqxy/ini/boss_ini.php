<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="boss_".$bossid.".ini";
$path='acher/all_boss';
$file = $path."/".$inina;	
if(file_exists($file)){


} else{
   //连接数据库提取数据写入ini 
$inina="boss_".$bossid.".ini";
$path='acher/all_boss';
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[boss信息]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('世界BOSS属性',['初始' => 1]); 
$iniFile->addItem('世界BOSS属性',['击杀' => 1]); 
$iniFile->addItem('世界BOSS属性',['击杀人' => 1]); 
$npcc=$bossid;
include("./npc/bossxx.php");//调用世界boss信息
$iniFile->addCategory('世界BOSS属性', ["血"=> $nhp]);










}
$iniFile = new iniFile($file);




?>