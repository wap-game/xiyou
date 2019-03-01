<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="ltmb.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file))
{


}else{
 
 

$inina="ltmb.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家膜拜人员]");


# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
//数据库数据导入ini文件
# 添加一个分类并直接添加子项
$iniFile->addItem('擂台更新',['初始' => '3']);
$iniFile->addItem('擂台比武',['初始' => '3']);
$iniFile->addItem('膜拜人员',['1' => '123']);
$iniFile->addItem('膜拜人员',['2' => '123']);
$iniFile->addItem('膜拜人员',['3' => '123']);
$iniFile->addItem('膜拜人员',['4' => '123']);
$iniFile->addItem('膜拜人员',['5' => '123']);
$iniFile->addItem('膜拜人员',['6' => '123']);
$iniFile->addItem('膜拜人员',['7' => '123']);
$iniFile->addItem('膜拜人员',['8' => '123']);
$iniFile->addItem('膜拜人员',['9' => '123']);
$iniFile->addItem('膜拜人员',['10' => '123']);

}


$iniFile = new iniFile($file);



?>