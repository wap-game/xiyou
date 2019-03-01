<?php

$inina="xxzx.ini";
$path='../acher';
$file = $path."/".$inina;	
if(file_exists($file)){
}else{
file_put_contents($file,"[玩家动态]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('咨询idd',['初始' => '排序']); 
$iniFile->addItem('咨询id',['初始' => 123]); 
$iniFile->addItem('咨询标题',['初始' => 123]); 
$iniFile->addItem('咨询内容',['初始' => 123]); 



}
$iniFile = new iniFile($file);





?>