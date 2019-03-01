<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="sjyz.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file))
{
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);





}
else
{
 

$inina="sjyz.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[刷新时间]");


# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 添加一个分类并直接添加子项
$iniFile->addItem('时间验证',['初始' => 123]);
$iniFile->addItem('毫秒时间',['时间' => $time]);




}


$iniFile = new iniFile($file);



?>